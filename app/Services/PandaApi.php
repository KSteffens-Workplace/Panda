<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class PandaApi
{

    private $panda_url;
    private $key;
    private $client;
    private $header;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->panda_url = 'https://api.exchange.bitpanda.com/public/v1/';
        $this->client = new Client(['base_uri' => $this->panda_url]);
        $this->key = env('PANDA_KEY');
        $this->header = ['headers' =>
            [
                'Authorization' => "Bearer {$this->key}"
            ]
        ];
    }

    public function showAmmount($type)
    {
        dd($this->panda_url);
    }

    public function balances()
    {
        $request = $this->client->request(
            'GET',
            'account/balances',
            $this->header
        );
    }

    public function marketTicker($currency) {
        $request = $this->client->request(
            'GET',
            "market-ticker/$currency",
            $this->header
        );
        $body = json_decode($request->getBody()->read($request->getHeader('Content-Length')[0]));
        return $body;

    }

 public function priceTicks($currency) {
        $request = $this->client->request(
            'GET',
            "price-ticks/$currency",
            $this->header
        );
        $body = json_decode($request->getBody()->read($request->getHeader('Content-Length')[0]));
        return $body;

    }


}
