<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    function GetAddProduct(){
        return view('backend.product.addproduct');
    }
    function GetAddUser(){
        return view('backend.user.adduser');
    }
    function GetCategory(){
        return view('backend.category.category');
    }
    function GetDetailOrder(){
        return view('backend.order.detailorder');
    }
    function GetEditCategory(){
        return view('backend.category.editcategory');
    }
    function GetEditProduct(){
        return view('backend.product.editproduct');
    }
    function GetEditUser(){
        return view('backend.user.edituser');
    }
    function GetIndex(){
        return view('backend.index');
    }
    function GetListProduct(){
        return view('backend.product.listproduct');
    }
    function GetListUser(){
        return view('backend.user.listuser');
    }
    function GetLogin(){
        return view('backend.login.login');
    }
    function GetOrder(){
        return view('backend.order.order');
    }
    function GetProcessed(){
        return view('backend.order.processed');
    }
}
