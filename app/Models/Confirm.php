<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Confirm extends Model
{
    use HasFactory;
    //protected $table = 'orders';
    //protected $fillable=['user_id','cart_id','product_id','customer_name'];

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
