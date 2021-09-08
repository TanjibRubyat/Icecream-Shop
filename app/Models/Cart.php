<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public static function totalItems()
    {
        if(Auth::check())
        {
            $carts=Cart::where('user_id',Auth::user()->id)->get();
            if(Cart::where('user_id',Auth::id()))
            {
                $total_item = 0;
                foreach($carts as $cart)
                {
                    $total_item += $cart->product_quantity;                  
                }
                return $total_item;
            }
        }
    }
    }