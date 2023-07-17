<?php

namespace App\Http\Controllers;

use App\Models\Collories;
use Illuminate\Http\Request;

class ColloriesController extends Controller
{
    public function getСalorieConsumption(){
        $callorie = Collories::find(1);
        dump($callorie->dish);
        dump($callorie->weight);
        dump($callorie->calories);
    }
}
