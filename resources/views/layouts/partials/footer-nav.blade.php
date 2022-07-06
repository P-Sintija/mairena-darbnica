{{-- <ul class="footer-nav-items">--}}
{{--    @foreach($footerMenu as $item)--}}
{{--         @if(!empty($item['url']) && !empty($item['label']))--}}
{{--        <li>--}}
{{--            <a href="{{ $item['url'] }}"><span>{{ $item['label'] }}</span></a>--}}
{{--        </li>--}}
{{--         @endif--}}
{{--    @endforeach--}}
{{--</ul>--}}

{{--<div class="last-block">--}}
{{--    <div class="soc-icons">--}}
{{--        <ul>--}}
{{--            {{ $socialMedia['facebook'] }}--}}
{{--            @if($socialMedia['facebook'])--}}
{{--                <a class="social-media-facebook" href="{{ $socialMedia['facebook'] }}" target="_blank"></a>--}}
{{--                <li>--}}
{{--                    <a class="link" target="_blank" href="{{ $socialMedia['facebook'] }}">--}}
{{--                        @svg('facebook')--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--                @if($socialMedia['instagram'])--}}
{{--                    --}}{{--                <a class="social-media-facebook" href="{{ $socialMedia['facebook'] }}" target="_blank"></a>--}}
{{--                    <li>--}}
{{--                        <a class="link" target="_blank" href="{{ $socialMedia['instagram'] }}">--}}
{{--                            @svg('instagram')--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            @foreach(['facebook', 'twitter', 'linkedin', 'youtube'] as $socialSite)--}}
{{--                @if(Settings::has('social.'.$socialSite.'_url'))--}}
{{--                    <li>--}}
{{--                        <a class="link"--}}
{{--                           target="_blank"--}}
{{--                           href="{{Settings::get('social.'.$socialSite.'_url')}}">--}}
{{--                            @svg($socialSite)--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        @if($socialMedia['facebook'])--}}
{{--            <a class="social-media-facebook" href="{{ $socialMedia['facebook'] }}" target="_blank"></a>--}}
{{--        @endif--}}
{{--        @if($socialMedia['instagram'])--}}
{{--            <a class="social-media-instagram" href="{{ $socialMedia['instagram'] }}" target="_blank"></a>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--</div>--}}
