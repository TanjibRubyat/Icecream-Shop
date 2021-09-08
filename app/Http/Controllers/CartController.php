<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Products;
use App\Models\User;

class CartController extends Controller
{
    public function store(Request $request)
    {
        
        if (Auth::check()) {

            $cart = Cart::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->first();

            if ($cart) {
                $cart->increment('product_quantity');
                $total=0;
                $total += $cart->product_quantity * $cart->product_price;
                //$subtotal = $cart->product_quantity * $cart->product->price;
                $cart->product_price = $total;
                $cart->save();
            } else {
                Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $request->product_id,
                    'product_price' => $request->product_price
                ]);
            }

            session()->flash('success', 'Product has added to cart !!');
            return back();
        }
    }


    public function show()
    {
        
        if (Auth::check()) {
            $cart= Cart::where('user_id', Auth()->user()->id)->get();
            return view('frontend.pages.cart')->with('carts', $cart);
        } else {
            session()->flash('status', 'No cart items added');
        }
    }

    public function product_id($id)
    {
        $products = Products::find($id);
        return view('frontend.inc.addtocart')->with('products', $products);
    }

    public function cart_quantity(Request $req, $id)
    {
        $cart = Cart::find($id);
        $cart->product_quantity = $req->product_quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Quantity updated successfully');
    }

    public function destroy_item($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success', 'Removed successfully');
    }

    public function checkouts_show()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.pages.checkouts')->with('carts', $cart);
        } else {
            session()->flash('status', 'No cart items added');
        }
    }
}
