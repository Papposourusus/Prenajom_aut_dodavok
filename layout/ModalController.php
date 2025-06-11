<script type="module">
class ModalController {
    constructor(modalEl) {
        this.modal   = modalEl;
        this.tabs    = modalEl.querySelectorAll('[data-auth-action="switch"]');
        this.closeBtn= modalEl.querySelector('[data-auth-action="close"]');

        // Bind
        this.open      = this.open.bind(this);
        this.close     = this.close.bind(this);
        this.switchTab = this.switchTab.bind(this);

        // Events
        this.closeBtn.addEventListener('click', this.close);
        this.tabs.forEach(btn => btn.addEventListener('click', this.switchTab));
        document.addEventListener('keydown', e => e.key === 'Escape' && this.close());
    }

    open()  { this.modal.hidden = false; this.focusFirstInput(); }
    close() { this.modal.hidden = true;  }

    switchTab(e) {
        // Deaktivuj aktívny button
        this.tabs.forEach(btn => btn.classList.remove('active'));

        // Aktivuj aktuálny
        const btn     = e.currentTarget;
        const target  = document.querySelector(btn.dataset.target);

        // Skry všetky taby
        this.modal.querySelectorAll('.auth-tab-content').forEach(t => t.hidden = true);

        btn.classList.add('active');
        target.hidden = false;

        this.focusFirstInput();
    }

    focusFirstInput() {
        const input = this.modal.querySelector('div:not([hidden]) input');
        if (input) input.focus();
    }
}

// Inicializácia
const modalCtrl = new ModalController(document.getElementById('authModal'));
document.getElementById('modal_trigger').addEventListener('click', e => {
    e.preventDefault();
    modalCtrl.open();
});
</script>
