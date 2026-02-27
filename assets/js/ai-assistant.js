class AIAssistant {
    constructor() {
        this.isOpen = false;
        this.messages = [];
        this.init();
    }

    init() {
        // Créer le bouton flottant
        this.createFloatingButton();

        // Créer la fenêtre de chat
        this.createChatWindow();

        // Ajouter les écouteurs d'événements
        this.addEventListeners();
    }

    createFloatingButton() {
        const button = document.createElement('button');
        button.className = 'ai-assistant-button';
        button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
        `;
        document.body.appendChild(button);
    }

    createChatWindow() {
        const chatWindow = document.createElement('div');
        chatWindow.className = 'ai-assistant-window';
        chatWindow.innerHTML = `
            <div class="ai-assistant-header">
                <h3>Assistant PULSE</h3>
                <button class="ai-assistant-close">&times;</button>
            </div>
            <div class="ai-assistant-messages"></div>
            <div class="ai-assistant-input">
                <input type="text" placeholder="Posez votre question..." />
                <button class="ai-assistant-send">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </div>
        `;
        document.body.appendChild(chatWindow);
    }

    addEventListeners() {
        const button = document.querySelector('.ai-assistant-button');
        const chatWindow = document.querySelector('.ai-assistant-window');
        const closeButton = document.querySelector('.ai-assistant-close');
        const sendButton = document.querySelector('.ai-assistant-send');
        const input = document.querySelector('.ai-assistant-input input');

        button.addEventListener('click', () => this.toggleChat());
        closeButton.addEventListener('click', () => this.toggleChat());

        sendButton.addEventListener('click', () => this.sendMessage());
        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                this.sendMessage();
            }
        });
    }

    toggleChat() {
        this.isOpen = !this.isOpen;
        const chatWindow = document.querySelector('.ai-assistant-window');
        chatWindow.classList.toggle('open', this.isOpen);
    }

    async sendMessage() {
        const input = document.querySelector('.ai-assistant-input input');
        const message = input.value.trim();

        if (!message) return;

        // Ajouter le message de l'utilisateur
        this.addMessage('user', message);
        input.value = '';

        // Afficher un indicateur de chargement
        this.showTypingIndicator();

        try {
            const response = await fetch('/api/assistant/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ message }),
            });

            const data = await response.json();

            // Supprimer l'indicateur de chargement
            this.hideTypingIndicator();

            if (data.error) {
                this.addMessage('assistant', 'Désolé, une erreur est survenue. Veuillez réessayer.');
            } else {
                this.addMessage('assistant', data.response);
            }
        } catch (error) {
            this.hideTypingIndicator();
            this.addMessage('assistant', 'Désolé, une erreur est survenue. Veuillez réessayer.');
        }
    }

    addMessage(role, content) {
        const messagesContainer = document.querySelector('.ai-assistant-messages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `ai-assistant-message ${role}`;
        messageDiv.textContent = content;
        messagesContainer.appendChild(messageDiv);

        // Scroll vers le bas
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

        // Stocker le message
        this.messages.push({ role, content });
    }

    showTypingIndicator() {
        const messagesContainer = document.querySelector('.ai-assistant-messages');
        const indicator = document.createElement('div');
        indicator.className = 'ai-assistant-typing';
        indicator.innerHTML = `
            <span></span>
            <span></span>
            <span></span>
        `;
        messagesContainer.appendChild(indicator);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    hideTypingIndicator() {
        const indicator = document.querySelector('.ai-assistant-typing');
        if (indicator) {
            indicator.remove();
        }
    }
}

// Initialiser l'assistant quand le DOM est chargé
document.addEventListener('DOMContentLoaded', () => {
    new AIAssistant();
});
