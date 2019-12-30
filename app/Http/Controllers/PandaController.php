<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Services\PandaApi;
use App\Services\MysqlService;

class PandaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getCurrencyPrise ($currency) {
        $pandaAPI = new PandaApi();
        $market = $pandaAPI->marketTicker($currency);
        return $market;
    }
}
