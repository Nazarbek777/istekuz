<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('admin.order.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'size_height' => 'required|string|max:255',
            'size_weight' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'seriya' => 'required|string|max:255',
            'complect' => 'required|string|max:255',
            'profile_color' => 'required|string|max:255',
            'laminate_color' => 'required|string|max:255',
            'window_type' => 'required|string|max:255',
            'sheet' => 'required|string|max:255',
        ]);

        Order::create($validated);

        return back()->with('success', 'Order created successfully.');
    }


    public function edit(Order $order)
    {
        return view('admin.order.edit')->with(['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $register = Order::find($id);
        if ($register) {
            $register->status = $validated['status'];
            $register->save();
            return redirect()->route('order.index')->with('success', 'Order updated successfully.');
        } else {
            return redirect()->route('order.index')->with('error', 'Order not found.');
        }
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back();
    }
}
