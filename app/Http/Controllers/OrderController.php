<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('frontend.pages.confirm');
        
    }

    public function storeOrders(Request $req)
    {
        if(Auth::check())
        {
            if(Order::where('user_id',Auth()->user()->id)->get())
            {
                $confirm = new Order();
                $confirm->user_id = $req->user_id;
                $confirm->cart_id = $req->cart_id;
                $confirm->product_id = $req->product_id;
                $confirm->customer_name = $req->customer_name;
                $confirm->save();

                return redirect()->back()->with('success','Order confirmed');
            }
        }
    }

    public function orders()
    {
        $orders = Order::all();
        return view('backend.pages.orders')->with('order',$orders);
    }
}