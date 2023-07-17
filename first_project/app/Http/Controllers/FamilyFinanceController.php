<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FamilyFinanceController extends Controller
{
    public function getFinance(){
        $finance = Finance::find(1);
        dump($finance->category);
        dump($finance->price);
    }
}
