document.addEventListener('DOMContentLoaded', function() {
    // Gestion des formulaires de vote
    const ratingForms = document.querySelectorAll('.rating-form');

    ratingForms.forEach(form => {
        const buttons = Array.from(form.querySelectorAll('.rating-btn'));

        // Ensure buttons are explicit type=button to avoid accidental form submit
        buttons.forEach(b => {
            if (!b.getAttribute('type')) b.setAttribute('type', 'button');
        });

        buttons.forEach(button => {
            button.addEventListener('click', async function(e) {
                e.preventDefault();

                const ratingValue = parseInt(this.value, 10);
                if (Number.isNaN(ratingValue) || ratingValue < 1 || ratingValue > 5) {
                    showNotification('Valeur de note invalide.', 'error');
                    return;
                }

                const formEl = this.closest('form');
                const action = formEl ? formEl.action || '' : '';

                // Try data-product-id first, fallback to regex on action
                let productId = formEl && formEl.dataset && formEl.dataset.productId ? formEl.dataset.productId : null;
                if (!productId) {
                    const m = action.match(/\/(\d+)\/rate(?:\/?$)/);
                    if (m && m[1]) productId = m[1];
                }

                if (!productId) {
                    showNotification('Impossible d\'identifier le produit.', 'error');
                    return;
                }

                // Prepare body and token
                const tokenInput = formEl.querySelector('input[name="_token"]');
                const token = tokenInput ? tokenInput.value : '';
                const body = `rating=${encodeURIComponent(ratingValue)}&_token=${encodeURIComponent(token)}`;

                // Disable buttons while request is in-flight
                buttons.forEach(b => b.disabled = true);

                try {
                    const response = await fetch(action, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Accept': 'application/json'
                        },
                        body: body
                    });

                    let data = null;
                    try {
                        data = await response.json();
                    } catch (err) {
                        // If response is not JSON
                        console.error('Invalid JSON response', err);
                    }

                    if (!response.ok) {
                        const msg = data && data.message ? data.message : 'Erreur serveur lors de l\'enregistrement.';
                        showNotification(msg, 'error');
                        return;
                    }

                    if (data && data.success) {
                        // Ensure numeric values
                        const newAvg = parseFloat(data.newAverage);
                        const newCount = parseInt(data.newCount, 10) || 0;
                        updateStarsDisplay(productId, isNaN(newAvg) ? 0 : newAvg, newCount);
                        showNotification('Votre note a été enregistrée avec succès!', 'success');
                    } else {
                        const msg = data && data.message ? data.message : 'Une erreur est survenue.';
                        showNotification(msg, 'error');
                    }
                } catch (error) {
                    console.error('Erreur:', error);
                    showNotification('Une erreur est survenue lors de l\'enregistrement de votre note.', 'error');
                } finally {
                    buttons.forEach(b => b.disabled = false);
                }
            });
        });
    });

    // Fonction pour mettre à jour l'affichage des étoiles
    function updateStarsDisplay(productId, newAverage, newCount) {
        const ratingElement = document.querySelector(`[data-product-id="${productId}"] .product-rating`);
        if (!ratingElement) return;

        const stars = ratingElement.querySelectorAll('.star');
        stars.forEach((star, index) => {
            if (newAverage >= index + 1) {
                star.classList.add('star--filled');
                star.classList.remove('star--empty');
            } else {
                star.classList.remove('star--filled');
                star.classList.add('star--empty');
            }
        });

        const countElement = ratingElement.querySelector('.rating-count');
        if (countElement) {
            countElement.textContent = `(${newCount} vote${newCount > 1 ? 's' : ''})`;
        }
    }

    // Fonction pour afficher une notification
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification notification--${type}`;
        notification.textContent = message;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.add('notification--show');
        }, 10);

        setTimeout(() => {
            notification.classList.remove('notification--show');
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
});
