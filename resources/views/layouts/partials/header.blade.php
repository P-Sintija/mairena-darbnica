<header class="lg:h-0 fixed top-0 left-0 right-0 z-10">
    <div id="header-grid">
        <header-grid :menu="{{ json_encode($menu) }}"
                     :language-menu="{{ json_encode($languageMenu) }}"
                     :is-home-page="{{ json_encode($isHomePage) }}"
        ></header-grid>
    </div>
</header>
