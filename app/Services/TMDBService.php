<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TMDBService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('TMDB_API_KEY');
    }

    // ✅ Ambil trending movies
    public function getTrendingMovies($timeWindow = 'day')
    {
        $url = "https://api.themoviedb.org/3/trending/movie/{$timeWindow}?api_key={$this->apiKey}";
        $response = Http::get($url);

        return $response->successful() ? $response->json()['results'] : [];
    }
}
