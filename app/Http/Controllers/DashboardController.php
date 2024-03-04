<?php

namespace App\Http\Controllers;
use App\Models\BoughtProducts;
use App\Models\CancelledProducts;
use App\Models\Products;
use App\Models\RefundedProducts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('DashBoard');
    }

    public function index(){
        $products = Products::get();
        $CPU = Products::where("category","CPU")->get();
        $Motherboard = Products::where("category","Motherboard")->get();
        $RAM = Products::where("category","RAM")->get();
        $GPU = Products::where("category","GPU")->get();
        $PSU = Products::where("category","PSU")->get();
        $Case = Products::where("category","Case")->get();
        $Storage = Products::where("category","Storage")->get();
        return view('DashBoard', compact('products','CPU','Motherboard','GPU','RAM','PSU','Storage','Case'));
    }

    
    public function signup(){
        return view('Signup');
    }

    public function details($id){
        $product = Products::find($id);
        return view('Product_demo',compact('product'));
    }
    public function admindashboard(){
        $user = User::get();
        $usercount = User::count();
        $products = Products::count();
        $bought = BoughtProducts::sum('quantity');
        $boughtsold = BoughtProducts::sum('price');
        $boughtcount = BoughtProducts::count();
        $refunded = RefundedProducts::sum('quantity');
        $cancelled = CancelledProducts::sum('quantity');
        return view('Admindashboards', compact('user','products','boughtsold','boughtcount','refunded','cancelled','bought','usercount'));
    }
    public function adminanalytics(){
        $user = User::count();
        $products = Products::count();
        $bought = BoughtProducts::sum('quantity');
        $boughtsold = BoughtProducts::sum('price');
        $boughtcount = BoughtProducts::count();
        $refunded = RefundedProducts::sum('quantity');
        $cancelled = CancelledProducts::sum('quantity');
        $GPU = BoughtProducts::where("category","GPU")->sum('quantity');
        $GPUSold = BoughtProducts::where("category","GPU",)->sum('price');
        $GPUCount = BoughtProducts::where("category","GPU",)->count();
        $Motherboard = BoughtProducts::where("category","Motherboard")->sum('quantity');
        $MotherboardSold = BoughtProducts::where("category","Motherboard",)->sum('price');
        $MotherboardCount = BoughtProducts::where("category","Motherboard",)->count();
        $RAM = BoughtProducts::where("category","RAM")->sum('quantity');
        $RAMSold = BoughtProducts::where("category","RAM",)->sum('price');
        $RAMCount = BoughtProducts::where("category","RAM",)->count();
        $CPU = BoughtProducts::where("category","CPU")->sum('quantity');
        $CPUSold = BoughtProducts::where("category","CPU",)->sum('price');
        $CPUCount = BoughtProducts::where("category","CPU",)->count();
        $PSU = BoughtProducts::where("category","PSU")->sum('quantity');
        $PSUSold = BoughtProducts::where("category","PSU",)->sum('price');
        $PSUCount = BoughtProducts::where("category","PSU",)->count();
        $Storage = BoughtProducts::where("category","Storage")->sum('quantity');
        $StorageSold = BoughtProducts::where("category","Storage",)->sum('price');
        $StorageCount = BoughtProducts::where("category","Storage",)->count();
        $Case = BoughtProducts::where("category","Case")->sum('quantity');
        $CaseSold = BoughtProducts::where("category","Case",)->sum('price');
        $CaseCount = BoughtProducts::where("category","Case",)->count();
        return view('Adminanalytics', compact('GPU','GPUSold','GPUCount','CPU','CPUSold','Motherboard',
        'MotherboardSold','PSU','PSUSold','Storage','StorageSold','Case','CaseSold','RAM','RAMSold','user',
        'MotherboardCount','RAMCount','CPUCount','PSUCount','StorageCount','CaseCount','bought','refunded','cancelled','products','boughtsold','boughtcount'));
    }
    public function admincustomers(){
        $user = User::get();
        $count = BoughtProducts::get();
        return view('Admincustomers', compact('user','count',));
    }
    public function adminmanagement(){
        return view('Adminmanagements');
    }
    public function adminlogin(){
        return view('Adminlogin');
    }
    
}

    
