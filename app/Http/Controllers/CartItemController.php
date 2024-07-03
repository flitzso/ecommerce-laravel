<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartItemController extends Controller
{
    /**
     * Display a listing of the cart items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = CartItem::all();
        return view('cart.index', compact('cartItems'));
    }

    /**
     * Store a newly created cart item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartItem = new CartItem($request->all());
        $cartItem->save();
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified cart item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();
        return redirect()->route('cart.index');
    }
}
