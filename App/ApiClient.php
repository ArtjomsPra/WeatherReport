<?php declare(strict_types=1);

namespace App;
use GuzzleHttp\Client;

class ApiClient {

    private $client;
    private const API_KEY = "3b93430fef65e8eddf6d676047d68e7f";
    public function __construct () {
        $this->client = new Client();
    }

    public function getReport(string $city) : WeatherReport
    {
        $apiKey = self::API_KEY;
        $url = "http://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";
        $response = $this->client->request('GET', $url);
        $weatherReport = json_decode($response->getBody()->getContents());
        return new WeatherReport(
            $weatherReport->main->temp,
            $weatherReport->main->humidity,
            $weatherReport->main->feels_like,
            $weatherReport->weather[0]->description
        );
    }
}
