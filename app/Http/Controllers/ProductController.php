<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(5);
        $categories = Category::all();

        return view('admin.products.index', compact('products', 'categories'));
    }



    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nom' => 'required',
                'price' => 'required',
                'description' => 'required',
                'details' => 'required',
                'weight' => 'required',
                'category_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $product = new Product();
            $product->nom = $request->input('nom');
            $product->price = $request->input('price');
            $product->description = $request->input('description');
            $product->details = $request->input('details');
            $product->weight = $request->input('weight');
            $product->category_id = $request->input('category_id');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $product->image = $name;
            }

            $product->save();

            return redirect()->route('products.index')->with('success', __('messages.product_created_success'));
        } catch (\Exception $e) {
            return redirect()->route('products.create')->with('error', __('messages.product_create_error'));
        }
    }



    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }


    public function update(Request $request, Product $product)
    {
        try {
            $request->validate([
                'nom' => 'required',
                'details' => 'required',
                'price' => 'required|numeric',
                'category_id' => 'required',
                'description' => 'required',
                'weight' => 'required|numeric',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
            }

            $product->update([
                'nom' => $request->nom,
                'details' => $request->details,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'weight' => $request->weight,
                'image' => isset($imageName) ? $imageName : $product->image,
            ]);

            return redirect()->route('products.index')->with('success', __('messages.product_updated_success'));
        } catch (\Exception $e) {
            return redirect()->route('products.edit')->with('error', __('messages.product_update_error'));
        }
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('products.index')->with('success', 'messages.product_delete_success');
    }
}
