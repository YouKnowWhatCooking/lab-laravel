<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Product;

class ProductsController extends Controller
{
     public function index()
   {
	   if (Cache::has('products') {
			return view ('products.index', compact('products'));
	   } else {
		   $products = Product::all();
		   Cache::set('products', $products);
	   }
	   return view('products.index', compact('products'));
   }


	public function store(Request $request)
    {
  
        Product::create($request->all());
   
        return redirect('products/index');
    }

   
    public function create()
    {
        return view('products.create');
    }
	
	
	 public function remove(Product $product)
    {
        $product->delete();
        return redirect('products/index');
    }
	
 public function cart()
    {
        return view('products/cart');
    }
	
public function addToCart($id)
    {
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
