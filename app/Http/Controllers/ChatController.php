<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use App\Models\ProductH2hQueue;
// use App\Models\TransPendingSaldo;
// use App\Models\OutletMerchant;
// use DB;
// use GuzzleHttp;
// use CastleCrypt;

class ChatController extends Controller {
    public function line(Request $req)
    {
        return json_decode($req->all(), true);
    }
}