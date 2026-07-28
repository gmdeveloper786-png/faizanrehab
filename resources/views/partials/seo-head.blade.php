@php
    $routeName = Route::currentRouteName();
    $pageSeo = $routeName ? (config('seo.pages.' . $routeName) ?? []) : [];
    $defaults = config('seo.defaults');
    $siteUrl = rtrim(config('seo.site_url'), '/');
    $org = config('seo.organization');

    $pageTitle = trim($__env->yieldContent('title'));
    $seoTitle = $pageSeo['title']
        ?? ($pageTitle ? $pageTitle . ' | ' . config('seo.site_name') : $defaults['title']);
    $seoDescription = $pageSeo['description'] ?? $defaults['description'];
    $seoKeywords = $pageSeo['keywords'] ?? $defaults['keywords'];
    $seoImage = asset($pageSeo['og_image'] ?? $defaults['og_image']);
    $canonicalUrl = url()->current();
    $is404 = isset($exception) && $exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $exception->getStatusCode() === 404;
    $robots = $is404 ? 'noindex, nofollow' : ($pageSeo['robots'] ?? $defaults['robots']);
    $isHome = $routeName === 'index';

    $serviceRoutes = [
        'remedial-therapy', 'speech-therapy', 'occupational-therapy', 'physiotherapy',
        'behavioral-therapy', 'school-readiness-program', 'quran-teaching',
        'parental-counselling', 'group-therapy',
    ];
    $isServicePage = in_array($routeName, $serviceRoutes, true);

    $breadcrumbMap = [
        'about-us' => [['Home', '/'], ['About Us', null]],
        'services' => [['Home', '/'], ['Services', null]],
        'our-therapists' => [['Home', '/'], ['Our Therapists', null]],
        'gallery' => [['Home', '/'], ['Gallery', null]],
        'contact-us' => [['Home', '/'], ['Contact Us', null]],
        'appointment' => [['Home', '/'], ['Book Appointment', null]],
        'remedial-therapy' => [['Home', '/'], ['Services', '/services'], ['Remedial Therapy', null]],
        'speech-therapy' => [['Home', '/'], ['Services', '/services'], ['Speech Therapy', null]],
        'occupational-therapy' => [['Home', '/'], ['Services', '/services'], ['Occupational Therapy', null]],
        'physiotherapy' => [['Home', '/'], ['Services', '/services'], ['Physiotherapy', null]],
        'behavioral-therapy' => [['Home', '/'], ['Services', '/services'], ['Behavioral Therapy', null]],
        'school-readiness-program' => [['Home', '/'], ['Services', '/services'], ['School Readiness Program', null]],
        'quran-teaching' => [['Home', '/'], ['Services', '/services'], ['Quran Teaching', null]],
        'parental-counselling' => [['Home', '/'], ['Services', '/services'], ['Parental Counselling', null]],
        'group-therapy' => [['Home', '/'], ['Services', '/services'], ['Group Therapy', null]],
    ];
    $breadcrumbs = $breadcrumbMap[$routeName] ?? null;
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="keywords" content="{{ $seoKeywords }}">
<meta name="author" content="{{ config('seo.site_name') }}">
<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('seo.site_name') }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta property="og:locale" content="{{ config('seo.locale') }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">
@if(config('seo.twitter_handle'))
<meta name="twitter:site" content="{{ config('seo.twitter_handle') }}">
@endif

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'MedicalBusiness',
    'name' => $org['name'],
    'alternateName' => $org['alternate_name'],
    'url' => $org['url'],
    'logo' => $siteUrl . $org['logo'],
    'image' => $seoImage,
    'description' => $defaults['description'],
    'email' => $org['email'],
    'telephone' => $org['telephone'],
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $org['address']['street'],
        'addressLocality' => $org['address']['city'],
        'addressRegion' => $org['address']['region'],
        'addressCountry' => $org['address']['country'],
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => $org['geo']['latitude'],
        'longitude' => $org['geo']['longitude'],
    ],
    'openingHours' => $org['opening_hours'],
    'sameAs' => [$org['facebook']],
    'priceRange' => '$$',
    'medicalSpecialty' => [
        'Physiotherapy',
        'Occupational Therapy',
        'Speech Therapy',
        'Behavioral Therapy',
        'School Readiness Program',
        'Quran Teaching',
        'Parental Counselling',
        'Group Therapy',
        'Remedial Therapy',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@if($isHome)
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => config('seo.site_name'),
    'url' => $siteUrl,
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => $siteUrl . '/services?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif

@if($isServicePage)
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'MedicalTherapy',
    'name' => $seoTitle,
    'description' => $seoDescription,
    'url' => $canonicalUrl,
    'image' => $seoImage,
    'provider' => [
        '@type' => 'MedicalBusiness',
        'name' => $org['name'],
        'url' => $org['url'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif

@if($breadcrumbs)
@php
    $breadcrumbItems = [];
    foreach ($breadcrumbs as $index => $crumb) {
        $item = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $crumb[0],
        ];
        if ($crumb[1]) {
            $item['item'] = $siteUrl . $crumb[1];
        }
        $breadcrumbItems[] = $item;
    }
@endphp
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $breadcrumbItems,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif

@stack('structured_data')
