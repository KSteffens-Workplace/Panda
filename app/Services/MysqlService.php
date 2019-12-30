<?php

namespace App\Services;

use Illuminate\Http\Request;


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
    //
}
