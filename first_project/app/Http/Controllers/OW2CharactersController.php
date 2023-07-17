<?php

namespace App\Http\Controllers;

use App\Models\OW2Character;
use Illuminate\Http\Request;

class OW2CharactersController extends Controller
{
    public function getCharactersList(){
        $Character = OW2Character::find(1);
        dump($Character->id);
        dump($Character->name);
        dump($Character->role);
        dump($Character->isFavorite);
    }
}
