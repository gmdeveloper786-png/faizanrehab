<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $siteUrl = rtrim(config('seo.site_url'), '/');
        $pages = config('seo.sitemap');
        $pageSeo = config('seo.pages');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($pages as $routeName) {
            $seo = $pageSeo[$routeName] ?? [];
            $path = $routeName === 'index' ? '' : '/' . $routeName;
            $loc = $siteUrl . $path;
            $lastmod = now()->toDateString();
            $changefreq = $seo['changefreq'] ?? 'monthly';
            $priority = $seo['priority'] ?? '0.5';

            $xml .= "  <url>\n";
            $xml .= "    <loc>{$loc}</loc>\n";
            $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "    <changefreq>{$changefreq}</changefreq>\n";
            $xml .= "    <priority>{$priority}</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
