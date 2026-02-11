// Toggle dropdown profile
const profileBtn = document.getElementById("profileBtn");
const profileMenu = document.getElementById("profileMenu");

function closeProfileMenu() {
  profileMenu.style.display = "none";
  profileMenu.setAttribute("aria-hidden", "true");
  profileBtn.setAttribute("aria-expanded", "false");
}

function openProfileMenu() {
  profileMenu.style.display = "block";
  profileMenu.setAttribute("aria-hidden", "false");
  profileBtn.setAttribute("aria-expanded", "true");
}

profileBtn?.addEventListener("click", (e) => {
  e.stopPropagation();
  const isOpen = profileBtn.getAttribute("aria-expanded") === "true";
  if (isOpen) closeProfileMenu();
  else openProfileMenu();
});

wireTabs();
wireSidebar();

document.addEventListener("click", () => closeProfileMenu());
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") closeProfileMenu();
});

function wireTabs() {
  document.querySelectorAll(".tabs[data-tabs]").forEach((tabs) => {
    const key = tabs.dataset.tabs;
    const panels = document.querySelector(`.tabPanels[data-panels="${key}"]`);
    if (!panels) return;

    const buttons = tabs.querySelectorAll("[data-tab]");
    const panelItems = panels.querySelectorAll("[data-panel]");
    if (!buttons.length || !panelItems.length) return;

    const setActive = (name) => {
      buttons.forEach((btn) => btn.classList.toggle("isActive", btn.dataset.tab === name));
      panelItems.forEach((panel) => panel.classList.toggle("isActive", panel.dataset.panel === name));
    };

    buttons.forEach((btn) => {
      btn.addEventListener("click", () => setActive(btn.dataset.tab));
    });
  });
}

function wireSidebar() {
  const sidebar = document.querySelector(".sidebar");
  const toggle = document.getElementById("sidebarToggle");
  if (!sidebar || !toggle) return;

  let backdrop = document.querySelector(".sidebarBackdrop");
  if (!backdrop) {
    backdrop = document.createElement("div");
    backdrop.className = "sidebarBackdrop";
    document.body.appendChild(backdrop);
  }

  const media = window.matchMedia("(max-width: 820px)");

  const setOpen = (open) => {
    document.body.classList.toggle("sidebar-open", open);
    toggle.setAttribute("aria-expanded", open ? "true" : "false");
  };

  const sync = () => {
    if (!media.matches) setOpen(false);
  };

  sync();
  if (typeof media.addEventListener === "function") {
    media.addEventListener("change", sync);
  } else if (typeof media.addListener === "function") {
    media.addListener(sync);
  }

  toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    setOpen(!document.body.classList.contains("sidebar-open"));
  });

  backdrop.addEventListener("click", () => setOpen(false));
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") setOpen(false);
  });

  sidebar.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      if (media.matches) setOpen(false);
    });
  });
}

function wireReveal() {
  const targets = Array.from(document.querySelectorAll(".card, .panel, .kpiCard, .statCard, .dataTableWrap"));
  if (!targets.length) return;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const pending = [];

  targets.forEach((el) => {
    if (!el.classList.contains("reveal")) el.classList.add("reveal");
    if (reduceMotion) {
      el.classList.add("is-visible");
    } else {
      pending.push(el);
    }
  });

  if (reduceMotion) return;

  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          io.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -5% 0px" }
  );

  pending.forEach((el) => io.observe(el));
}

// Fake search (demo)
const globalSearch = document.getElementById("globalSearch");
globalSearch?.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    const q = globalSearch.value.trim();
    if (!q) return;
    // À remplacer par votre logique backend
    alert(`Search: ${q}`);
  }
});

wireReveal();
