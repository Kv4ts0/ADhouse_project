<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getFilteredProducts(Request $request){
        $products = Product::orderBy("created_at", "DESC");
    
        if($request->id != null){
            $products->where('id', $request->id);
        }
        if($request->name != null){
            $products->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->min_price != null){
            $products->where('price', '>=', $request->min_price);
        }
        if($request->max_price != null){
            $products->where('price', '<=', $request->max_price);
        }
        if($request->category != null){
            $products->where('category', $request->category);
        }
        return $products->get();
    }    
    public function viewAllProduct(Request $request){
        $products = $this->getFilteredProducts($request);
    
        return view('all-product')->with('products', $products)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'category' => $request->category,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
        ]);
    }
    public function editProduct(Request $request, $id){
        $product = Product::where('id', $id)->first();
        return view('edit-product')->with('product', $product);
    }
    public function updateProduct(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->brand = $request->brand;
        $product->color = $request->color;
        $product->material = $request->material;
        $product->description = $request->description;
        if ($request->hasFile('image1')) {
            $name1 = $request->file('image1')->getClientOriginalName();
            $request->file('image1')->storeAs('public/post', $name1);
            $product->image1 = $name1;
        }
    
        if ($request->hasFile('image2')) {
            $name2 = $request->file('image2')->getClientOriginalName();
            $request->file('image2')->storeAs('public/post', $name2);
            $product->image2 = $name2;
        }
    
        if ($request->hasFile('image3')) {
            $name3 = $request->file('image3')->getClientOriginalName();
            $request->file('image3')->storeAs('public/post', $name3);
            $product->image3 = $name3;
        }
    
        if ($request->hasFile('image4')) {
            $name4 = $request->file('image4')->getClientOriginalName();
            $request->file('image4')->storeAs('public/post', $name4);
            $product->image4 = $name4;
        }
    
        $product->save();
    
        return redirect()->route('products.all');
    }
    
    public function addNewProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->brand = $request->brand;
        $product->color = $request->color;
        $product->material = $request->material;
        $product->description = $request->description;
        $size1 = $request->file('image1')->getSize();
        $name1 = $request->file('image1')->getClientOriginalName();
        $size2 = $request->file('image2')->getSize();
        $name2 = $request->file('image2')->getClientOriginalName();
        $size3 = $request->file('image3')->getSize();
        $name3 = $request->file('image3')->getClientOriginalName();
        $size4 = $request->file('image4')->getSize();
        $name4 = $request->file('image4')->getClientOriginalName();
        $request->file('image1')->storeAs('public/post', $name1);
        $product->image1 = $name1;
        $request->file('image2')->storeAs('public/post', $name2);
        $product->image2 = $name2;
        $request->file('image3')->storeAs('public/post', $name3);
        $product->image3 = $name3;
        $request->file('image4')->storeAs('public/post', $name4);
        $product->image4 = $name4;
        $product->save();      
        return redirect()->route('products.all');
    }
    public function deleteProduct(Request $request){
        Product::where('id', $request->product_id)->delete();
        return redirect()->route('products.all');
    }

    public function viewHomepage(Request $request){
        $products = $this->getFilteredProducts($request);
        return view('index')->with('products', $products)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'category' => $request->category,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
        ]);
    }
    public function viewProductpage(Request $request){
        $products = $this->getFilteredProducts($request);
        return view('products')->with('products', $products)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
            'category' => $request->category,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
        ]);
    }
}