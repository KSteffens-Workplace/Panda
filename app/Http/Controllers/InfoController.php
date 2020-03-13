<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Services\PandaApi;
use App\Services\MysqlService;
use App\Http\Controllers\PandaController;

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
        dd($pandaAPI->marketTicker('XRP_EUR'));
        return 'amount';
    }

    public function marketTickerXRP()
    {
        $pandaAPI = new PandaApi();
        return $pandaAPI->marketTicker('XRP_EUR');
    }

    public function testsql()
    {
        $panda = new PandaController();
        $test = $panda->getCurrencyPrise('XRP_EUR');
        dd('Hallo Kay');

//        return json_encode($test);

        $mysql = new MysqlService();
//        dd($mysql->select("select * from currency where currency='XRP'"));
        try {
            $results = app('db')->select("SELECT * FROM user");

        } catch (\Exception $e) {
            return $e;
        }
        dd($results);
        return $results;
        dd($results);
//        $mysql = new MysqlService();
//        dd($mysql->select('select * from user'));
//        dd('test');
        return 'amount';
    }

    //
}
