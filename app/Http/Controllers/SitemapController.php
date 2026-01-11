<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * @var array<string, float>
     */
    private array $routes = [
        'home' => 1.0,
        'products' => 0.9,
        'services' => 0.9,
        'projects' => 0.8,
        'about' => 0.7,
        'contacts' => 0.6,
    ];

    public function index(): Response
    {
        $urls = [];

        foreach ($this->routes as $routeName => $priority) {
            $urls[] = [
                'loc' => route($routeName),
                'lastmod' => now()->toDateString(),
                'changefreq' => $this->getChangeFrequency($routeName),
                'priority' => $priority,
            ];
        }

        $content = view('sitemap.index', ['urls' => $urls])->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }

    private function getChangeFrequency(string $routeName): string
    {
        return match ($routeName) {
            'home' => 'weekly',
            'products', 'services', 'projects' => 'monthly',
            default => 'yearly',
        };
    }
}
