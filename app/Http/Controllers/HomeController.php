<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = auth()->user();
            
            if ($user->hasRole('user')) {
                $products = Product::take(6)->get();
                $categories = Category::all();
                return view('dashboard', compact('products', 'categories', 'blogs'));
            } elseif ($user->hasRole('admin')) {
                return view('admin.dashboard');
            } else {
                return redirect()->back();
            }
        }
    }
}
