<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        // $users = User::latest()->with('stores')->get();
        return view('admin.users');
    }

    public function stores()
    {
        // $stores = Store::latest()->with('products')->get();
        return view('admin.stores');
    }

    public function products()
    {
        $products = Product::latest()->with('category')->get();
        return view('admin.products');
    }
}
