<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        if ($request->isMethod("post")) {
            $city = $request->city;
            $response = $this->getWeather($city);
            $data = $response->json();
        }
        return view('weather', [
            "weatherData" => $data
        ]);
    }
    public function getWeather($city)
    {
        $response = Http::withHeaders([
            "x-rapidapi-host" => "open-weather13.p.rapidapi.com",
            "x-rapidapi-key" => env('RAPID_WEATHER_API'),
        ])->get("https://open-weather13.p.rapidapi.com/city/{$city}/in");
        return $response;
    }
}
