<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerPageController extends Controller
{

    public function index(){
        return view('pages.seller.index');
    }


}
