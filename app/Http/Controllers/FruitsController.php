<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\FruitType;
use App\Models\Wine;
use App\Models\WineType;
use Illuminate\Http\Request;
use GuzzleHttp\Client as Client;
use Exception;
use Log;

class FruitsController extends Controller
{
    /**
     * Function takes data from url and saves in database.
     */
    public static function getData()
    {
        try
        {
            $client =  new Client();
            $response = $client->request('GET', 'https://dev.shepherd.appoly.io/fruit.json');
            $dataArray = json_decode($response->getBody()->getContents(), true);


            /**
             * Saveing Fruit details.
             */
            foreach($dataArray['menu_items'] as $fruit)
            {
                if(isset($fruit['label']))
                {
                    $fruitInDatabase = Fruit::where('name', $fruit['label'])
                        ->pluck('id');

                    if(empty($fruitInDatabase->toArray()))
                    {
                        $fruitToSave = new Fruit;
                        $fruitToSave->name = $fruit['label'];
                        $fruitToSave->save();
                    }
                    else
                    {
                        $fruitToSaveId = $fruitInDatabase[0];
                    }
                }

                // Saving fruit type details.

                foreach($fruit as $fruitType)
                {
                    if(is_array($fruitType) && count($fruitType))
                    var_dump($fruitType);
                    {
                        foreach($fruitType as $fruitTypeItem)
                        {
                            if(isset($fruitTypeItem['label']))
                            {

                                $fruitTypeInDatabase = FruitType::where('name', $fruitTypeItem['label'])->pluck('id');

                                if(empty($fruitTypeInDatabase->toArray()))
                                {
                                    $fruitTypeObject = new FruitType;
                                    $fruitTypeObject->name = $fruitTypeItem['label'];
                                    $fruitTypeObject->fruit = $fruitToSave->id ?? $fruitToSaveId;
                                    $fruitTypeObject->save();
                                }
                                else
                                {
                                    $fruitTypeToSaveId = $fruitTypeInDatabase[0];
                                }
                            }
                        }

                        // Saving Wine data

                        foreach($fruitType as $wine)
                        {
                            if(is_array($wine) && count($wine["children"]))
                            {
                                foreach($wine["children"] as $wineItem)
                                {

                                    if(isset($wineItem['label']))
                                    {
                                        $wineInDatabase = Wine::where('name', $wineItem['label'])->pluck('id');

                                        if(empty($wineInDatabase->toArray()))
                                        {
                                            $wineObject = new Wine;
                                            $wineObject->name = $wineItem['label'];
                                            $wineObject->fruitType = $fruitTypeObject->id ?? $fruitTypeToSaveId;
                                            $wineObject->save();
                                        }
                                        else
                                        {
                                            $wineToSaveId = $wineInDatabase[0];
                                        }
                                    }

                                    // Saving Wine types.

                                    if(is_array($wineItem['children']) && count($wineItem['children']))
                                    {
                                        foreach($wineItem['children'] as $wineTypeItem)
                                        {
                                            if(isset($wineTypeItem['label']))
                                            {

                                                $wineTypeInDatabase = WineType::where('type', $wineTypeItem['label'])->pluck('id');

                                                if(empty($wineTypeInDatabase->toArray()))
                                                {
                                                    $wineTypeObject = new WineType;
                                                    $wineTypeObject->type = $wineTypeItem['label'];
                                                    $wineTypeObject->wine = $wineObject->id ?? $wineToSaveId;
                                                    $wineTypeObject->save();
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            dd('Data Inserted');
        }
        catch( Exception $e)
        {
            Log::error($e->getMessage());
        }
    }

    /**
     * Deletes list item.
     */
    public function destroy($fruitName)
    {
        try
        {

            $singleFruit = Fruit::where('name', $fruitName)->with('fruitType.wine.wineType')->get();

            // removing Fruit from database.

            Fruit::where('name', $fruitName)->delete();

            // removing sub level elements.

            foreach($singleFruit as $fruitItem)
            {
                if($fruitItem['fruitType'])
                {
                    foreach($fruitItem['fruitType'] as $fruitType)
                    {
                        if(isset($fruitType['name']))
                        {
                            FruitType::where('name', $fruitType['name'])->delete();

                            if(isset($fruitType['wine']))
                            {
                                foreach($fruitType['wine'] as $wine)
                                {
                                    if(isset($wine['name']))
                                    {
                                        Wine::where('name', $wine['name'])->delete();

                                        if(isset($wine['wineType']))
                                        {
                                            foreach($wine['wineType'] as $wineType)
                                            {
                                                WineType::where('type', $wineType['type'])->delete();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            return redirect('/')->with('success', 'Data Deleted successfully');

        }
        catch(Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
