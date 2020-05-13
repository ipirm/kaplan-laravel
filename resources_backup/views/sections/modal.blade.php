<div class="modal-buy content-hidden" id="a{{$item->id }}" style="display: none;">
    <div class="modal-buy__bg" onclick="toggleModal({{ $item->id }})"></div>
    <div class="modal-buy__card">
        <div class="modal-buy__card__wrapper">
            <div class="modal-buy__close-button" onclick="toggleModal({{ $item->id }})">
                <img src="res/svg/close.svg">
            </div>
            <div class="swiper-container" id="modal-slider">
                <div class="swiper-wrapper">
                    @foreach(json_decode($item->image) as $image)
                    <div class="swiper-slide">
                        <img class="modal-buy__card__bg" src="{{ $image->url }}">
                    </div>
                        @endforeach
                </div>
                <div class="swiper-pagination" id="modal-slider-pagination"></div>
                <button class="modal-buy__button only" onclick="modalButton({{ $item->id }})">
                    <span>{{ $item->price }} azn</span>
                </button>
            </div>
            <div class="modal-buy__card__inner">
                <div class="white-blur"></div>
                <div class="modal-buy__card__content">
                    <h2 class="modal-buy__title">{{ $item->title }}</h2>
                    <div class="modal-buy__subtitle-line"></div>
                    <form class="modal-buy__form">
                        <div class="modal-buy__form__three-in-a-row">
                            <div class="modal-buy__form__input-area">
                                <span>@lang('translate.name')</span>
                                <input type="text" name="first-name" placeholder="Введите имя" required>
                            </div>
                            <div class="modal-buy__form__input-area">
                                <span>@lang('translate.surname')</span>
                                <input type="text" name="last-name" placeholder="Введите фамилию" required>
                            </div>
                            <div class="modal-buy__form__input-area">
                                <span>@lang('translate.phonenumber')</span>
                                <input type="text" name="phone" placeholder="+994 (__) ___ __ __" required>
                            </div>
                        </div>
                        <div class="modal-buy__bottom-input-area">
                            <div class="modal-buy__form__input-area">
                                <span>@lang('translate.delivery')</span>
                                <textarea placeholder="Введите ваш адрес" maxlength="300" required></textarea>
                            </div>
                        </div>
                        <button class="modal-buy__button" onclick="modalButton()">
                            <span>{{ $item->price }} azn</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
