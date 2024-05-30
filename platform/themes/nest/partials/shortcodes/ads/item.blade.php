<div class="col-12 banner-img wow animate__animated animate__fadeInUp {{ $class ?? '' }}" @if (!empty($loop)) data-wow-delay="{{ $loop->iteration * 2 / 10 }}" @endif>
    {!! AdsManager::displayAds($ads->key) !!}
    <div class="banner-text">
        <!-- <h4>{!! BaseHelper::clean(nl2br($ads->getMetaData('subtitle', true) ?: '')) !!}</h4>
        @if ($buttonText = $ads->getMetaData('button_text', true))
            <a href="{{ route('public.ads-click', $ads->key) }}" class="btn btn-xs">
                {{ $buttonText }} <i class="fi-rs-arrow-small-right"></i>
            </a>
        @endif -->
<!-- code tự viết -->
        @php
            use Illuminate\Support\Str;
            $subtitle = $ads->getMetaData('subtitle', true) ?: '';
            $cleanedSubtitle = BaseHelper::clean(nl2br($subtitle));
            $limitedSubtitle = Str::limit($cleanedSubtitle,35, '...');
            $buttonText = $ads->getMetaData('button_text', true);
        @endphp

        @if($limitedSubtitle)
            <h4>{!! $limitedSubtitle !!}</h4>
        @endif

        @if ($buttonText)
            <a href="{{ route('public.ads-click', $ads->key) }}" class="btn btn-xs">
                {{ $buttonText }} <i class="fi-rs-arrow-small-right"></i>
            </a>
        @endif

    </div>
</div>
