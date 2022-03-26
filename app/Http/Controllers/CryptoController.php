<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptoController extends Controller
{

    // fonction qui va chercher les données
    public function getData(Request $request) {

        // requete qui va chercher les tendances des cryptos
        $response = Http::get("http://api.nomics.com/v1/currencies/ticker?key=9b50c822a8bb9a48a554879fa7d6e533007d844f&per-page=1000&page=1");

        return view('index', ['response'=>$response->json()]);
    }
    // https://api.nomics.com/v1/currencies/ticker?key=9b50c822a8bb9a48a554879fa7d6e533007d844f&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1

    public function about(Request $request) {
        return view('about');
    }

}
