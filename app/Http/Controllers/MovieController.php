<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $apiKey = env('TMDB_API_KEY'); // Ambil dari .env
        $baseUrl = "https://api.themoviedb.org/3/trending/movie";

        try {
            // Ambil data trending hari ini
            $todayResponse = Http::timeout(60)->withOptions(['verify' => false])->get("$baseUrl/day", [
                'api_key' => $apiKey
            ]);

            // Ambil data trending minggu ini
            $weekResponse = Http::timeout(60)->withOptions(['verify' => false])->get("$baseUrl/week", [
                'api_key' => $apiKey
            ]);

            // Periksa apakah respons valid
            if ($todayResponse->failed() || $weekResponse->failed()) {
                return response()->json([
                    'error' => 'Failed to fetch data from TMDB',
                    'today_response' => $todayResponse->json(),
                    'week_response' => $weekResponse->json(),
                ], 500);
            }

            // Cek apakah 'results' ada sebelum mengakses
            $todayMovies = $todayResponse->json()['results'] ?? [];
            $weekMovies = $weekResponse->json()['results'] ?? [];

            return view('home', compact('todayMovies', 'weekMovies'));

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Exception Occurred',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}

