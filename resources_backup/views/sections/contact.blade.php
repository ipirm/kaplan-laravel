<section class="index-page__section-contacts" id="contact">
    <div class="intex-page__section-contacts__inner custom-container">
        <h2 class="section-header index-page__section-contacts__title">@lang('translate.contact')</h2>
        <div class="index-page__section-contacts__info-area">
            <div class="index-page__section-contacts__left">
                <div class="index-page__section-contacts__info">
                    <a href="tel:{{ $information->number  }}" class="index-page__section-contacts__info__item">
                        <span class="bold">@lang('translate.number')</span>{{ $information->number  }}
                    </a>
                    <a href="mailto:{{ $information->mail  }}" class="index-page__section-contacts__info__item">
                        <span class="bold">@lang('translate.mail')</span>{{ $information->mail  }}
                    </a>
                </div>
                <div class="index-page__section-contacts__info__card">
                    <div class="index-page__section-contacts__info__card__inner">
                        <span>@lang('translate.order')</span>
                    </div>
                </div>
            </div>
            <div class="index-page__section-contacts__right">
                <div class="index-page__section-contacts__right__links">
                    <div class="index-page__section-contacts__right__link__wrapper">
                        <a href="{{ $information->facebook  }}" class="index-page__section-contacts__right__link">
                            <img src="res/svg/contacts/fb.svg">
                        </a>
                    </div>
                    <div class="index-page__section-contacts__right__link__wrapper">
                        <a href="{{ $information->instagram  }}" class="index-page__section-contacts__right__link">
                            <img src="res/svg/contacts/ig.svg">
                        </a>
                    </div>
                </div>
                <div class="index-page__section-contacts__right__qrs">
                    <img src="res/svg/fb-qr.svg">
                    <img src="res/svg/ig-qr.svg">
                </div>
            </div>
        </div>
        <form method="post" class="index-page__section-contacts__mailing-area">
            <div class="index-page__section-contacts__mailing">
                <span>@lang('translate.mailnews')</span>
            </div>
            <div class="index-page__section-contacts__mailing__input-area">
                <input type="text" name="name" placeholder="@lang('translate.yname')">
                <input type="email" name="name" placeholder="@lang('translate.ymail')">
            </div>
            <button class="index-page__section-contacts__mailing__send">
                <span>@lang('translate.send')</span>
            </button>
        </form>
    </div>
</section>
