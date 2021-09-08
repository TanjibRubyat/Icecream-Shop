<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PaymentMethod extends Model
{
    use HasFactory;

    public static function cart_item()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return $cart;
    }

    public static function getUser()
    {
        if (Auth::check()) {
            $user = Cart::where('user_id', Auth::user()->id)->get();
            return $user;
        }
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public static function cart_show()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return $cart;
        } else {
            session()->flash('status', 'No cart items added');
        }
    }
}
