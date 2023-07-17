<?php

namespace App\Http\Controllers;

use App\Models\WCCharacter;
use Illuminate\Http\Request;

class WCCharactersListController extends Controller
{
    public function getCharacterList(){
        $WCCharacter = WCCharacter::find(1);
        dump($WCCharacter->name);
        dump($WCCharacter->race);
        dump($WCCharacter->age);
    }
}
