@if(!empty($languageMenu) && count($languageMenu) > 1)
    <div class="languages form-field" data-language-toggle>
        <select onchange="window.location = this.value;">
            @foreach($languageMenu as $item)
                <option value="{{ $item['url'] }}" {!! $item['isActive'] ? ' selected' : '' !!}>{{ $item['label'] }}</option>
            @endforeach
        </select>
    </div>
@endif
