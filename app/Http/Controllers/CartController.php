<?php

namespace App\Http\Controllers;

use App\Cart;

use App\User;
use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);

        $producto = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'imageLoc' => $product->imageLoc,

        ];

        session()->push('cart.products', $producto);

        $limit = 15;
        $products = Product::make()->paginate($limit);

        return redirect('/products');

    }

    public function remove($id, Request $request)
    {
        $products = $request->session()->get('cart.products');
        $keys = array_keys($products);

        foreach($keys as $index) {
            if($products[$index]['id'] == $id) {
                $request->session()->forget('cart.products.' . $index);
            }
        }
        return redirect()->back();

    }

    public function flush(Request $request)
    {
        $request->session()->flush();
        return redirect('/products');
    }

    public function checkout($id)
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = session('cart')['products'];
        return view('cart.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
