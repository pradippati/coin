<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Coin;

class FetchCoins extends Command
{
    protected $signature = 'coins:fetch';

    protected $description = 'Fetches data from the Coingecko API and stores it in the database';

    public function handle()
    {
      $url = 'https://api.coingecko.com/api/v3/coins/list?include_platform=true';
      $response = Http::get($url);
      $coins = $response->json();

    foreach ($coins as $coin) {
     Coin::updateOrCreate(
           [
                'id' => $coin['id'],
                'name' => $coin['name'],
                'symbol' => $coin['symbol'],
                'platforms' => isset($coin['platforms']) ? json_encode($coin['platforms']) : null,
            ]
        );
    }

    $this->info('Coin data fetched and stored successfully!');
    }
}
