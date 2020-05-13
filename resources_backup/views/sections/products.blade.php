<section class="index-page__section-pics custom-container" id="catalog">
    @foreach($cats as $cat)
        <div class="index-page__section-pics__inner pics-tab " id="{{ $cat->data_category }}">
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
