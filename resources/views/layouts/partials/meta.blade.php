<title>{{ $page->seo_title }}</title>
<meta property="description" content="{{ $page->seo_description }}">
<meta property="og:description" content="{{ $page->seo_description }}">
<meta property="og:url" content="{{ $seoUrl }}">
<meta property="og:type" content="website">
@if (!empty($page->seo_image) && \Illuminate\Support\Facades\Storage::disk('public')->exists($page->seo_image))
    <meta property="og:image" content="{{ \Illuminate\Support\Facades\Storage::disk('public')->get($page->seo_image) }}">
@endif
