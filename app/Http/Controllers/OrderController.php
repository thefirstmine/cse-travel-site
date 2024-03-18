<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
class OrderController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function orderedpackages(){
        $orders = Order::all();
        return view('ordered', compact('orders'));
    }
    public function order(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->input('user_id');
        $order->package = $request->input('package');
        $order->status = $request->input('status');
        $order->save();

        return redirect('/home')->with('success', 'Order created successfully!');
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $order = Order::find($id);
        $order->status = $request->input('status');
        $order->save();

        return redirect('/ordered')->with('success', 'Order created successfully!');
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $order = Order::find($id);
        $order->delete();

        return redirect('/ordered')->with('success', 'Order created successfully!');
    }
    public function deleteuser(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'Order created successfully!');
    }
}
