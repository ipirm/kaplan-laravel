<div class="pre-header-wrapper">
    <div class="pre-header custom-container">
        <div class="pre-header__left">
            <span>@lang('translate.handmade')</span>
        </div>
        <div class="pre-header__right">
            <div class="pre-header__right__menu-button" onclick="togglePreHeaderMenu()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="pre-header__right__content" id="pre-header-menu">
                <nav class="pre-header__nav">
                    <ul>
                        <li>
                            <a href="#catalog">@lang('translate.catalog')</a>
                        </li>
                        <li>
                            <a href="#about">@lang('translate.aboutus')</a>
                        </li>
                        <li>
                            <a href="#events">@lang('translate.activity')</a>
                        </li>
                        <li>
                            <a href="#contact">@lang('translate.contact')</a>
                        </li>
                    </ul>
                </nav>
                <div class="pre-header__lang-area">
                    <button class="pre-header__lang" onclick="toggleLangs()">
                        <span>@lang('translate.language')<span id="lang" style="text-transform: uppercase">{{ app()->getLocale() }}</span></span>
                    </button>
                    <div class="pre-header__lang__content" id="lang-content">
                        <ul>
                            <li onclick="window.location = '/changelanguage/ru'"><a style="text-transform: uppercase" href="/changelanguage/ru">RU</a></li>
                            <li onclick="window.location = '/changelanguage/az'"><a style="text-transform: uppercase" href="/changelanguage/az">AZ</a></li>
                            <li onclick="window.location = '/changelanguage/en'"><a style="text-transform: uppercase" href="/changelanguage/en">EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header__menu custom-container">
    <div class="header__menu__left">
        <a href="#"><img src="res/svg/logo-header.svg"></a>
    </div>
    <div class="header__menu__right">
        @foreach($cats as $item)
        <div class="header__menu__right__item" onclick="showTab('#{{ $item->data_category }}')">
            <div class="header__menu__right__item__icon">
                <img src="/storage/{{ $item->image }}">
            </div>
            <span class="header__menu__right__item__title">{{ $item->title }}</span>
        </div>
            @endforeach
    </div>
</div>
<div class="header__bottom">
    <div class="header__bottom-line"></div>
</div>
