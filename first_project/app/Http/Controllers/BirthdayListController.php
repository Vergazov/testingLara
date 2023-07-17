<?php

namespace App\Http\Controllers;

use App\Models\BirthdayList;
use Illuminate\Http\Request;

class BirthdayListController extends Controller
{
    public function getBirthdayList(){
        $birthDayList = BirthdayList::find(1);
        dump($birthDayList->name);
        dump($birthDayList->birthDate);
    }
}
