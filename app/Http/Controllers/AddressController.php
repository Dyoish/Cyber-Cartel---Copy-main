<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Auth;
use Hash;   

class AddressController extends Controller
{
    //SHOWS ALL THE ADDRESSES
    public function index(){
        $addresses = Address::all()->where('user_id',Auth::user()->id);
        return  view('Profile.Address',compact('addresses'));
    }

    public function create(){
        return view('Profile.Add_New_Address');
    }

    // CREATES A NEW ADDRESS
    public function store(Request $request){

        $request->validate([
            'region' => 'required|max:255|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|max:255|string',
        ]);

        $addresses = Address::all();
        $user_id = $request->user()->id;
        Address::create([
            'region' => $request->region,
            'city' => $request->city,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'user_id' => $user_id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        
        ]);
        return redirect('add_new_address')->with('status', 'success');
    }

    // EDITS THE ADDRESS
    public function update(Request $request, $id){
        $addresses = Address::find($id);
        $addresses -> update($request->all());
        return response()->json(['addresses' => $addresses]);
    }

    // DESTROYS ADDRESS
    public function destroy($id){
        $address = Address::find($id);
        $address -> delete();
        return response()->json(['message' => "succesfully deleted"]);
    }











//     public function create_address(Request $request){
//         $validator = Validator::make($request->all(), [
            
//             'region' => 'required|max:30',
//             'city' => 'required|max:30',
//             'address' => 'required|max:30',
//             'postal_code' => 'required|max:4'
//         ]);

//         if ($validator->fails()){
//             return response()->json([
//                 'message'=> 'Failed',
//                 'errors' => $validator->errors()
//             ], 422);
//         }

//         $addresses = Address::create([
            
//             'region' => $request->region,
//             'city' => $request->city,
//             'address' => $request->address,
//             'postal_code' => $request->postal_code
//         ]);

//         return response()->json([
//             'message'=> 'Successfully added',
//             'data'=>$addresses  
//         ], 200);
    
// }
}
