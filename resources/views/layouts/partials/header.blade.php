{{--<header @if($isLanguagePage) class="landing-page" @else  style="background-image:--}}
{{--    url({{$headerImage}})" @endif>--}}
{{--    @if($isLanguagePage)--}}
{{--        @include('controllers.language.partials.slider')--}}
{{--    @endif--}}
{{--    <div class="sticky-header" data-sticky-menu>--}}
{{--        <div class="sticky-background"></div>--}}
{{--        <div class="container outer-wrapper">--}}
{{--            <div class="wrapper">--}}
{{--                <a href="{{ route("language.$languagePage->id") }}">--}}
{{--                    @if($logo)--}}
{{--                        <img class="logo" src="{{ asset($logo) }}" alt="">--}}
{{--                    @endif--}}
{{--                </a>--}}
{{--                <div class="right-side-wrapper">--}}
{{--                    @if($cartPage)--}}
{{--                        <div class="mobile-cart">--}}
{{--                            <a href="{{ route('cart.' . $cartPage->id) }}">@svg('cart')</a>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    <button class="hamburger hamburger--spin" type="button" data-hamburger>--}}
{{--                    <span class="hamburger-box">--}}
{{--                        <span class="hamburger-inner"></span>--}}
{{--                    </span>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            @include('layouts.partials.nav')--}}

{{--            @include('layouts.partials.switcher')--}}
{{--            @if($cartPage)--}}
{{--                <div class="cart">--}}
{{--                    <a href="{{ route('cart.' . $cartPage->id) }}">@svg('cart')</a>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
