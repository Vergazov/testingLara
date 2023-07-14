<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsListController extends Controller
{
    public function getClientsList(){
        $client = Client::find(1);
        dump($client->name);
        dump($client->inn);
        dd($client->place);
    }
}
