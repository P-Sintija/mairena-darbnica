<nav class="nav" data-menu="{{ trans('common.menu') }}" data-more="{{ trans('common.more' )}}">
    <ul>
        @foreach($menu as $item)
            @if(!empty($item['url']) && !empty($item['label']))
                <li>
                    <a href="{{$item['url']}}"><span>{{$item['label']}}</span></a>
                </li>
            @endif
        @endforeach
    </ul>
</nav>

<nav class="mobile-nav" data-nav>
    <ul>
        @foreach($menu as $item)
            @if(!empty($item['url']) && !empty($item['label']))
                <li>
                    <a href="{{$item['url']}}"><span>{{$item['label_mob'] ?? $item['label']}}</span></a>
                </li>
            @endif
        @endforeach
    </ul>
</nav>

