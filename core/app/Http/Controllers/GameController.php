<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function Index(Request $request){
        
    }
    function convertToThousands($number) {
        if ($number < 1000) {
            return 0;
        }
        return floor($number / 1000);
    }

    public function addPacCoins(Request $request){
        $reference = auth()->user();
        try {
            $user =  User::where('id',$reference->id)->first();
            $PACCOIN = $this->convertToThousands($request->score);
            $user->pac_coin += $PACCOIN;
            $user->save();
            return json_encode(array(
                'status'=> 'ok',
                'userID'=> $reference->id,
                'PACCOIN-USER'=>$user->pac_coin,
                'user'=>$user,
                'newValue'=>$PACCOIN,
                'SCORE'=>$request->score

            ));
        } catch (\Throwable $th) {
            return json_encode(array(
                'status'=> 'ok',
                'Error'=> $th,
            ));
        }
       
    }

    
}
