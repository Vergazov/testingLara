<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KKT;
use Illuminate\Http\Request;

class KKTListController extends Controller
{
    public function getKktList(){
        $kkt = KKT::find(1);
        dump($kkt->id);
        dump($kkt->model);
        dump($kkt->manufacturer);
        dump($kkt->serial_number);
        dump($kkt->price);

    }
}
