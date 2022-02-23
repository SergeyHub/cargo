<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use GuzzleHttp\Client as Client;
use Exception;
use Log;

class FruitsController extends Controller
{
    public function getData()
    {
        try
        {
            $client = new Client();
            $response = $client->request('GET', 'https://dev.shepherd.appoly.io/fruit.json');
            //dd($response);
            $dataArray = json_decode($response->getBody()->getContents(), true);

            foreach ($dataArray ['menu_items'] as $fruit)
            {
                //echo '<p>'  . $fruit . '</p>';
                //var_dump($fruit['label']);

                if(isset($fruit['label']))
                {
                    $fruitInDatabase = Fruit::where('name', $fruit['label'])
                        ->pluck('id')
                        ->toArray();

                    $fruitToSave = new Fruit;
                    $fruitToSave->name = $fruit['label'];
                    $fruitToSave->save();
                }
                $fruitToSave = new Fruit;
                $fruitToSave->name = $fruit['label'];
                //dd($fruitToSave);
                //var_dump($fruitToSave);
                $fruitToSave->save();
            };
            //dd($response->getBody()->getContents());
        }
        catch( Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
