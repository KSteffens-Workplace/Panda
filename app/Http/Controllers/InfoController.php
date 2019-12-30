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
        dd($pandaAPI->marketTicker());
        return 'amount';
    }

    public function testsql()
    {
        $panda = new PandaController();
        $test = $panda->getCurrencyPrise('XRP_EUR');

        return json_encode($test);

//        $mysql = new MysqlService();
//        dd($mysql->select("select * from currency where currency='XRP'"));
//        try {
//            $results = app('db')->select("SELECT * FROM user");
//
//        } catch (\Exception $e) {
//            return $e;
//        }
//        dd($results);
////        $mysql = new MysqlService();
////        dd($mysql->select('select * from user'));
////        dd('test');
        return 'amount';
    }

    //
}
