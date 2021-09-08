<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentMethod;
use App\Models\Cart;
use App\Models\Payment;

class PaymentMethodController extends Controller
{
    public function index()
    {
        
        $data = PaymentMethod::all();
        return view('frontend.pages.payment')->with('pays',$data);
    }

    public function cart()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('frontend.pages.payment')->with('carts',$cart);
    }

    public function store(Request $req)
    {
        if(Auth::check())
        {
            if(Payment::where('user_id',Auth::user()->id)->get())
            {
                $pay = new Payment();
                $pay->user_id = $req->user_id;
                $pay->cart_id = $req->cart_id;
                $pay->payment_method = $req->payment_method;
                $pay->save();
        
                return redirect('/confirm');
            }
        }
        
    }

    
}
