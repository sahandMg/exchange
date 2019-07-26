<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HandyController extends Controller
{
// fills database with 425 crypto from github
    public function getCryptoColor(TradeController $controller){

        $currencies = $controller->getCurrencies()[0];
        for($i=0;$i<count($currencies);$i++){
            $contents = file_get_contents('assets/svg/'.$currencies[$i].'.svg');
            $position = strpos($contents,'#');
            $colorCode = substr($contents,$position,7);
            DB::table('crypto_colors')->insert([
                'name'=>$currencies[$i],
                'color'=>$colorCode
            ]);
        }
    }

    public function setCryptoColor(){

        $files = scandir('svg');
        unset($files[1]);
        unset($files[2]);
        $files = array_values($files);
        for($i=0 ; $i < count($files); $i++){
            $contents = file_get_contents('assets/svg/'.$files[$i]);
            $position = strpos($contents,'#');
            $colorCode = substr($contents,$position,7);
            DB::table('crypto_colors')->insert([
                'name'=> explode('.',$files[$i])[0],
                'color'=> $colorCode
            ]);
        }
    }

    public function setCryptoFullName(){

        $records = DB::table('crypto_colors')->get();
        $cryptoFullArray = get_object_vars(json_decode(file_get_contents('plugins/cryptocurrencies.json')));
        $shortName = array_keys($cryptoFullArray);
        $FullName = array_values($cryptoFullArray);
        foreach ($records as $index => $record){
            for($i=0;$i< count($shortName);$i++){
                if($record->name == strtolower($shortName[$i])){
                    DB::table('crypto_colors')->where('name',$record->name)->update(['full_name' => $FullName[$i]]);
                    break;
                }
            }
        }
        return 200;
    }
}
