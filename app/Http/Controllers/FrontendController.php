<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    function GetIndex(){
        return view("frontend.index");
    }
    function GetShop(){
        return view("frontend.product.shop");
    }
    function GetDetail(){
        return view("frontend.product.detail");
    }
    function GetContact(){
        return view("frontend.contact");
    }
    function GetComplete(){
        return view("frontend.checkout.complete");
    }
    function GetCheckout(){
        return view("frontend.checkout.checkout");
    }
    function GetCart(){
        return view("frontend.cart.cart");
    }
    function GetAbout(){
        return view("frontend.about");
    }
}
