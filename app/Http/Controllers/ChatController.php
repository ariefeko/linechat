<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Product;
// use App\Models\ProductH2hQueue;
// use App\Models\TransPendingSaldo;
// use App\Models\OutletMerchant;
// use DB;
// use GuzzleHttp;
// use CastleCrypt;

class ChatController extends Controller {
    public function line(Request $req)
    {
        dd(response(json_decode(json_encode($req->all(), true)), 200));
    }
}