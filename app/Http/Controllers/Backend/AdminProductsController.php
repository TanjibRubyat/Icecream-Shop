<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class AdminProductsController extends Controller
{
    public function create()
    {
        return view('backend.pages.products-upload');
    }

    public function store(Request $req)
    {
        $product = new Products;

        $product->product_name = $req->product_name;
        $product->description = $req->description;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $images = $req->file('images');
        $imageName = time().'.'.$images->extension();
        $images -> move(public_path('images'),$imageName);
        $product->images = $imageName;
        $product->save();
        
        return redirect()->back()->with('success',"Upload successful");
    }

    public function manage()
    {
        $products = Products::all();
        return view('backend.pages.products-manage')->with('products', $products);
    }

    public function edit($id)
    {
        $products = Products::find($id);
        return view('backend.pages.products-edit')->with('item',$products);
    }

    public function update(Request $req, $id)
    {
        $products = Products::find($id);
        $products->product_name = $req->product_name;
        //$products->description = $req->description;
        $products->quantity = $req->quantity;
        $products->price = $req->price;
        $products->save();

        return redirect()->back()->with('success','Update successful');
    }

    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
