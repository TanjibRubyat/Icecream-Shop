<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function cart_view()
    {
        if(Auth::check())
        {
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            return $cart; 
        }
        
    }

    public static function getUser()
    {
        if(Auth::check())
        {
            $user = User::where('id',auth()->user()->id)->get();
            return $user;
        }
    }
}
