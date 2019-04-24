<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WeatherForcastController extends Controller
{
    /**
     * Check weather forcast
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $data['cities'] = ['Tokyo', 'Yokohama', 'Kyoto', 'Osaka', 'Sapporo', 'Nagoya'];

        return view('index', $data);

    }

    public function show($city)
    {   

        // $apiKey = "04a293d60945a5626768d90e41deea91";
        // https://openweathermap.org/api
            $url ="api.openweathermap.org/data/2.5/weather?q=Japan,".$city."&appid=04a293d60945a5626768d90e41deea91";

            $requestContent = [
               'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
               ]
            ];

           $client = new \GuzzleHttp\Client();

           $apiRequest = $client->request('GET', $url, $requestContent);

           $rawData = json_decode($apiRequest->getBody());

           // dd($rawData);
           // exit;

            $data = [
                'weather' => $rawData->weather[0],
                'main' => $rawData->main,
                "celsius" => round(($rawData->main->temp - 273.15)),
                "fahrenheit" => round((($rawData->main->temp - 273.15) * 1.8) + 32),
                'wind' => $rawData->wind,
                'rain' => $rawData->rain,
                'sys' => $rawData->sys,
                'name' => $rawData->name,
                'id' => $rawData->id,
                'date_time' => $rawData->dt,
                'city' => $city,
            ];

            return view('show_forecast', $data);
    }

}
