<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $cart = Order::with('product')->where([['user_id', '=', $user_id], ['status', '=', 'Cart']])->get();
        return view('pages.customer.cart')->with('cart', $cart);
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
        $product_id = $request->product_id;
        $user_id = auth()->user()->id;

        $addToCart = Order::updateOrCreate(['user_id' => $user_id, 'product_id' => $product_id, 'status' => 'Cart'], ['user_id' => $user_id, 'product_id' => $product_id])->increment('quantity');
        
        return response()->json($addToCart);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate
        $this->validate($request, ['quantity' => 'required']);

        // Update Cart Quantity
        $cart = Order::find($id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return response()->json($cart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Order::where('id',$id)->delete();
   
        return response()->json($cart);
    }

    public function clear(){
        $user_id = auth()->user()->id;
        $cart = Order::where([['user_id', '=', $user_id], ['status', '=', 'Cart']])->delete();
        return redirect('/orders')->with('success', 'Successfully Clear the Cart');
    }

    public function checkout(){
        $user_id = auth()->user()->id;
        $cart = Order::with('product')->where([['user_id', '=', $user_id], ['status', '=', 'Cart']])->get();
        $total_cost = 0;
        $shipping_fee = 0;
        foreach ($cart as $item) {
            $price = $item->product->discounted_price ? $item->product->discounted_price : $item->product->price;
            $total_cost += $price*$item->quantity;
        }

        if ($total_cost < 500) {
            return redirect('/orders');
        }
        $data = ['cart' => $cart, 'total_cost' => $total_cost, 'shipping_fee' => 50];
        return view('pages.customer.checkout')->with($data);
    }

    public function checkout_confirm(Request $request){
        $this->validate($request, [
            'delivery_address' => 'required',
            'mode_of_payment' => 'required'
        ]);

        $user_id = auth()->user()->id;
        $unique_id = $user_id.time();
        $orders = Order::where([['user_id', '=', $user_id], ['status', '=', 'Cart']])->update(['status' => 'Order Confirmed', 'order_number' => $unique_id, 'mode_of_payment' => $request->mode_of_payment, 'delivery_address' => $request->delivery_address]);
        // return redirect('/orders/tracking')->with('success', 'Order Confirmed');
        return redirect('/')->with('success', 'Order Confirmed');

    }

    public function order_tracking(){
        return view('pages.customer.order_tracking');
    }

  
}
