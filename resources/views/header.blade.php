<header class="header">
    <div class="container">
        <div class="header__content">
            <a href="/" class="header__logo">
                <div class="header__name">WD-40</div>
                <div class="header__title">company</div>
            </a>
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>
                <ul class="menu__box">
                    <li><a class="menu__item" href="/">Головна</a></li>
                    <li><a class="menu__item" href="/catalog">Каталог</a></li>
                    <li><a class="menu__item" href="/info">Контакти</a></li>
                </ul>
            </div>
            <div class="header__links">
                <nav class="header__navigation">
                    <a href="/">Головна</a>
                    <a href="/catalog">Каталог</a>
                    <a href="/info">Контакти</a>
                </nav>
                <div class="header__social social">
                    <a href="">
                        <img src="{{ asset('img/facebook.svg') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ asset('img/telegram.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>