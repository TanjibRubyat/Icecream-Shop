<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {

            return view('frontend.pages.checkouts');
        }
        
    }

    public function cart_id()
    {
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        return view('frontend.pages.checkouts')->with('carts',$cart);
    }

    public function store(Request $req)
    {
        $address = new Address();
        $address->user_id = $req->user_id;
        $address->cart_id = $req->cart_id;
        $address->name = $req->name;
        $address->email = $req->email;
        $address->address = $req->address;
        $address->city = $req->city;
        $address->phone = $req->phone;
        $address->save();

        return redirect('/payment-method');
    }

    
}
