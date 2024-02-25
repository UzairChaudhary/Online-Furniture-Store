<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    public function index()
    {
        $data = array(
            'list' => DB::table('carts')->get()

        );
        return view('cart/index',$data);
    }
    public function upload(Request $request)
    {
         $data = new Cart;
         $Price="400";
         $Name = "Lightning Lamp";
         $data->productPrice =$Price;
         $data->productName = $Name;
         
         $data->save();
         return redirect()->back();
    }
}
