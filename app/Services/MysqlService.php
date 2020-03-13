<?php

namespace App\Services;

use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Facades\DB



class MysqlService
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

    public function select($query, $arguments = [])
    {
        try {
            $results = app('db')->select($query, $arguments);

        } catch (\Exception $e) {
            return $e;
        }
        return $results;
    }

    public function insertMarketTicker ($ticker) {
        try {
            $result = DB::table('test')->insert('insert into priceticker (instrument_code,
                                                                        sequence,
                                                                        state,
                                                                        is_frozen,
                                                                        quote_volume,
                                                                        base_volume,
                                                                        last_price,
                                                                        best_bid,
                                                                        best_ask,
                                                                        price_change,
                                                                        price_change_percentage,
                                                                        high,
                                                                        low
                                                                        )
                                                           values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                                                               [$ticker[0],
                                                               $ticker[1],
                                                               $ticker[2],
                                                               $ticker[3],
                                                               $ticker[4],
                                                               $ticker[5],
                                                               $ticker[6],
                                                               $ticker[7],
                                                               $ticker[8],
                                                               $ticker[9],
                                                               $ticker[10],
                                                               $ticker[11],
                                                               $ticker[12]
                                                               ] );
        } catch (Exception $e) {

        }
    }
    //
}
