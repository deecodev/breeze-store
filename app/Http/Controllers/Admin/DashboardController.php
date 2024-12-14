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
        // Mengambil data pengguna, toko, dan produk dengan cara yang lebih efisien
        $users = User::count(); // Menghitung jumlah pengguna
        $stores = Store::count(); // Menghitung jumlah toko
        $products = Product::count(); // Menghitung jumlah produk

        return view('admin.dashboard', compact('users', 'stores', 'products'));
    }

    public function users()
    {
        // Mengambil data pengguna terbaru dengan relasi 'stores'
        $users = User::latest()->select('id', 'name', 'email')->with('stores')->get();
        return view('admin.users', compact('users'));
    }

    public function stores()
    {
        // Mengambil data toko terbaru dengan relasi 'products'
        $stores = Store::latest()->with('products')->get();
        return view('admin.stores', compact('stores'));
    }

    public function products()
    {
        // Mengambil data produk terbaru dengan relasi 'category'
        $products = Product::latest()->with('category')->get();
        return view('admin.products', compact('products'));
    }
}
