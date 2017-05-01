<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxiController extends Controller
{
  private $api = "http://lab10.dev/api/";



  public function km($km)
  {
      $client = new \GuzzleHttp\Client();
      $call = "calculate/{$km}";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);

      // Todo: request album from /api/singers/$id/albums

      return view('cal', [
        'success' => $res->success,
          'data' => !is_null($res)?$res->data: null,
          'resBody' => $response->getBody()
      ]);
  }

  public function km_minute($km,$m)
  {
    $client = new \GuzzleHttp\Client();
    $call = "calculate/{$km}/{$m}";
    $response = $client->request('GET', "{$this->api}{$call}", [
        'form_params' => []
    ]);
    $resBody = $response->getBody();
    $res = json_decode($resBody);

    // Todo: request album from /api/singers/$id/albums

    return view('cal', [
      'success' => $res->success,
      'data' => !is_null($res)?$res->data: null,
      'resBody' => $response->getBody()
    ]);
  }
}
