<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Services\PandaApi;

class InfoController extends Controller
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

    public function amount()
    {
        $pandaAPI = new PandaApi();
        dd($pandaAPI->marketTicker());
        return 'amount';
    }

    //
}
