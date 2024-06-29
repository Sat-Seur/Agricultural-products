<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model
use Illuminate\Http\Request; 

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.showproduct.index', compact('products'));
    }

    public function create()
    {
        return view('admin.showproduct.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->long_name = $request->long_name;
        $product->brand = $request->brand;
        $product->price = $request->price;

        $imageFile = $request->image; // Get from input
        $imageName = time().'.'.$imageFile->getClientOriginalExtension(); // Get the file extension
        $imageFile->move(public_path('upload/admin/images/product'), $imageName); // Move the file to the correct location

        $imagePath = 'upload/admin/images/product/' . $imageName; // Set the image path
        $product->image = $imagePath;

        $product->save();

        return redirect()->route('product.index');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.showProduct.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.showproduct.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->long_name = $request->input('long_name');
        $product->brand = $request->input('brand');
        $product->price = $request->input('price');

        if ($request->hasFile('image')) {
            $imageFile = $request->image; // Get from input
            $imageName = time().'.'.$imageFile->getClientOriginalExtension(); // Get the file extension
            $imageFile->move(public_path('upload/admin/images/product'), $imageName); // Move the file to the correct location

            $imagePath = 'upload/admin/images/product/' . $imageName; // Set the image path
            $product->image = $imagePath;
        }

        $product->save();

        return redirect('admin/product')->with('success', 'Product updated!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect() -> route('product.index');
    }
}
