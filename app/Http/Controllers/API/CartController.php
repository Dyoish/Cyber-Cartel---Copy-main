<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use App\Models\BoughtProducts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;
use Hash;  

class CartController extends Controller
{
    //SHOWS PRODUCTS IN CART
    public function index(){
        $cart = Cart::all();
        return response()->json(['Cart' => $cart]);
    }

    //ADDS TO CART
    public function add_cart($id, Request $request) {
        $product = Products::find($id);
        DB::table('carts')->insert([
            'name' => $product->name,
            'photo' => $product->photo,
            'price' => $product->price,
            'details' => $product->details,
            'category' => $product->category,
            'user_id' => $user_id = $request->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        return response()->json(['message' => 'Product added to cart successfully'], 200);
    }


    //DELETES A PRODUCT FROM CART
    public function destroy($id){
        $product = Cart::find($id);
        $product -> delete();
        return response()->json(['message' => "Product removed"]);
    }

    public function checkout(Request $request){
        $items = Cart::get();
        foreach($items as $key => $value){
            BoughtProducts::create([
                'name' => $value->name,
                'photo' => $value->photo,
                'price' => $value->price,
                'details' => $value->details,
                'category' => $value->category,
                'user_id' => $user_id = $request->user()->id,
            ]);
        }
        $total = Cart::all('price')->sum('price');
        Cart::where('user_id', $user_id)->delete();
        return response()->json([
            'Message' => 'Purchase succesful',
            'Total spent' => $total,
            ], 200);
    }
}