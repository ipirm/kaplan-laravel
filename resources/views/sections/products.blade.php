<section class="index-page__section-pics custom-container" id="catalog">
    <div class="index-page__section-pics__all">
        @foreach($products as $item)
            <div class="index-page__section-pics__item">
                @foreach(json_decode($item->image) as $image)
                    @if ($loop->first)
                        <img src="{{ $image->url }}" class="index-page__section-pics__item__pic">
                    @endif
                @endforeach
                <div class="index-page__section-pics__item__overlay small">
                    <div class="white-blur"></div>
                    <p class="index-page__section-pics__item__overlay__text small">
                        {{ $item->title }}
                    </p>
                    <button class="index-page__section-pics__item__overlay__buy small"
                            onclick="toggleModal({{$item->id + 1000}})">
                        <span> @lang('translate.acquire')</span>
                    </button>
                </div>
            </div>
            @include('sections.modal2')
        @endforeach
    </div>
    @foreach($cats as $cat)
        <div class="index-page__section-pics__inner pics-tab" id="{{ $cat->data_category }}">
            <div class="index-page__section-pics__about pics-tab" id="{{ $cat->data_category }}-about">
                <h2 class="index-page__section-pics__about__title">
                    {{ $cat->title }}
                </h2>
                <p class="index-page__section-pics__about__text">
               {{ $cat->text }}
                </p>
            </div>
            <div class="index-page__section-pics__row">
                @foreach($products as $item)
                    @if( $item->category_id == $cat->id )
                        <div class="index-page__section-pics__item">
                            @foreach(json_decode($item->image) as $image)
                                @if ($loop->first)
                                    <img src="{{ $image->url }}" class="index-page__section-pics__item__pic">
                                @endif
                            @endforeach
                            <div class="index-page__section-pics__item__overlay small">
                                <div class="white-blur"></div>
                                <p class="index-page__section-pics__item__overlay__text small">
                                    {{ $item->title }}
                                </p>
                                <button class="index-page__section-pics__item__overlay__buy small"
                                        onclick="toggleModal({{$item->id}})">
                                    <span> @lang('translate.acquire')</span>
                                </button>
                            </div>
                        </div>
                        @include('sections.modal')
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</section>
