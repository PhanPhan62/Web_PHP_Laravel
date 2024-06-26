@foreach($data as $item)
    @continue(! $item->image)

    <div {!! Html::attributes($attributes) !!}>
        @if ($item->url)
            <a href="{{ route('public.ads-click', $item->key) }}" @if($item->open_in_new_tab) target="_blank" @endif title="{{ $item->name }}">
        @endif
                <picture>
                    <source
                        srcset="{{ RvMedia::getImageUrl($item->image) }}"
                        media="(min-width: 1200px)"
                    />
                    <source
                        srcset="{{ RvMedia::getImageUrl($item->tablet_image ?: $item->image) }}"
                        media="(min-width: 768px)"
                    />
                    <source
                        srcset="{{ RvMedia::getImageUrl($item->mobile_image ?: ($item->tablet_image ?: $item->image)) }}"
                        media="(max-width: 767px)"
                    />

                    <!-- QBOrganic001-112650-fixHeightInShopNow -->
                    {{ RvMedia::image($item->image, $item->name, attributes: ['style' => 'width: auto; height: 260px; max-width: 100%; max-height: 260px;']) }}
                
                </picture>
        @if($item->url)
            </a>
        @endif
    </div>
@endforeach
