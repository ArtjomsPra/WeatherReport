<?php declare(strict_types=1);

namespace App;

Class WeatherReport {

private float $temperature;
private float $humidity;
private float $feelsLike;
private string $description;

    public function __construct (float $temperature, float $humidity, float $feelsLike, string $description) {
      $this->temperature = $temperature;
      $this->humidity = $humidity;
      $this->feelsLike = $feelsLike;
      $this->description = $description;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    public function getFeelsLike(): float
    {
        return $this->feelsLike;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
}
