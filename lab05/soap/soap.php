<?php

class TemperatureConverter
{
    private $client;

    public function __construct()
    {
        $wsdl = "https://www.w3schools.com/xml/tempconvert.asmx?WSDL";                
        $this->client = new SoapClient($wsdl);
    }

    public function CelsiusToFahrenheit($c)
    {
        $response = $this->client->CelsiusToFahrenheit(array("Celsius" => $c));
        return $response->CelsiusToFahrenheitResult;
    }

    public function FahrenheitToCelsius($f)
    {
        $response = $this->client->FahrenheitToCelsius(array("Fahrenheit" => $f));
        return $response->FahrenheitToCelsiusResult;
    }
}
