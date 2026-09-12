<div class="nav-item me-2" x-data="{
        theme: localStorage.theme,
        set(mode) { if (mode) localStorage.theme = mode; else localStorage.removeItem('theme'); this.theme = mode; ThemeSwitcher.setDarkClass(); },
    }">
    <a href="#" class="nav-link px-0" @click.prevent="set(theme === 'dark' ? 'light' : 'dark')" title="Light / dark">
        <i x-show="theme !== 'dark'" class="fas fa-moon"></i>
        <i x-show="theme === 'dark'" class="fas fa-sun"></i>
    </a>
</div>
