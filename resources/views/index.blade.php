<!DOCTYPE html>
<html>
@include('default.head')
<body class="index-page">
<header class="header">
    @include('default.menu')
</header>
<main>
    @include('sections.products')
    <section class="index-page__section-about" id="about">
        <div class="custom-container">
            <div class="index-page__section-about__info-area">
                <div class="index-page__section-about__left">
                    <img src="/storage/{{$about->image}}" alt="Kaplan Khuraman accessories">
                </div>
                <div class="index-page__section-about__right">
                    <h2 class="section-header index-page__section-about__right__title">@lang('translate.aboutus')</h2>
                    <p class="index-page__section-about__info">
                        {{ $about->text }}
                    </p>
                </div>
            </div>
            <div class="index-page__section-about__materials">
                <h4 class="index-page__section-about__materials__title">@lang('translate.materials')</h4>
                <div class="index-page__section-about__materials__line"></div>
                <div class="index-page__section-about__materials__inner">
                    <div class="index-page__section-about__materials__left">
                        <div class="index-page__section-about__materials__row">
                            @foreach($indicators as $item)
                                <a href="{{ $item->link }}" class="index-page__section-about__materials__item" target="_blank">
                                    <span>{{ $item->text }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="index-page__section-about__materials__right">
                        <img src="res/svg/logo-faded.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="index-page__section-events custom-container" id="events">
        <h2 class="section-header index-page__section-events__title">@lang('translate.activity')</h2>
        <span class="index-page__section-events__subtitle">@lang('translate.events')</span>
        @foreach($events as $item)
            <a class="index-page__section-events__card {{ $loop->index % 2 != 0 ? 'flipped' : '' }}">
                <img src="/storage/{{ $item->image }}">
                <p>
                    {{ $item->title }}
                </p>
            </a>
        @endforeach
    </section>
    @include('sections.contact')
</main>
@include('default.footer')
</body>

</html>
