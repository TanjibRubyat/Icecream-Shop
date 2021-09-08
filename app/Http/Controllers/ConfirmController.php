<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirm;

class ConfirmController extends Controller
{
    public function index()
    {
        $data = Confirm::all();
        return view('frontend.pages.confirm');
    }

    public function upload()
    {
        return view('frontend.pages.confirmation-inc');
    }

    public function store(Request $req)
    {
        $confirm = new Confirm();
        $confirm->user_id = $req->user_id;
        $confirm->cart_id = $req->cart_id;
        $confirm->product_id = $req->product_id;
        $confirm->customer_name = $req->customer_name;
        $confirm->save();

        return redirect()->back();
    }
}
