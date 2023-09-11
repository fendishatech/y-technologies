<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::orderByDesc('created_at')->paginate(10);

        return view('orders.index')->with([
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();

        return view('orders.new')->with(['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => ['required', 'exists:customers,id'],
            'order_no' => ['required', 'string', 'max:255'],
            'material' => ['required', 'string', 'max:255'],
            'thickness' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'item_name' => ['required', 'string', 'max:255'],
            'item_id' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'prepay' => ['required', 'numeric'],
            'width' => ['required', 'numeric'],
            'height' => ['required', 'numeric'],
        ]);

        try {

            if ($validatedData) {
                // size
                $width = $validatedData['width'];
                $height = $validatedData['height'];

                $size = "{$width}mm*{$height}mm";

                $validatedData['size'] = $size;

                $remaining_pay = $validatedData['price'] - $validatedData['prepay'];
                $validatedData['remaining'] = $remaining_pay;

                // Create a new order using mass assignment
                $order = Order::create($validatedData);

                if ($order) {
                    return redirect('/orders')->with('success', 'Order added successfully.');
                } else {
                    return redirect()->back()->withErrors("All fields are required")->withInput();
                }
            } else {
                return redirect()->back()->withErrors("All fields are required")->withInput();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(["custom_error" => "There was an error saving new record"])->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::all();
        $order = Order::find($id);
        $order->width = 234;
        $order->height = 222;
        return view('orders.edit')->with(['order' => $order, 'customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'customer_id' => ['nullable', 'exists:customers,id'],
            'order_no' => ['nullable', 'string', 'max:255'],
            'material' => ['nullable', 'string', 'max:255'],
            'thickness' => ['nullable', 'string', 'max:255'],
            'quantity' => ['nullable', 'integer'],
            'item_name' => ['nullable', 'string', 'max:255'],
            'item_id' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'numeric'],
            'prepay' => ['nullable', 'numeric'],
            'width' => ['nullable', 'numeric'],
            'height' => ['nullable', 'numeric'],
        ]);

        try {
            $order = Order::find($id);

            if ($validatedData) {
                // size
                $width = $validatedData['width'];
                $height = $validatedData['height'];

                $size = "{$width}mm*{$height}mm";

                $validatedData['size'] = $size;

                $remaining_pay = $validatedData['price'] - $validatedData['prepay'];
                $validatedData['remaining'] = $remaining_pay;

                // Create a new order using mass assignment
                $order->update($validatedData);

                if ($order) {
                    return redirect('/orders')->with('success', 'Order added successfully.');
                } else {
                    return redirect()->back()->withErrors("All fields are required")->withInput();
                }
            } else {
                return redirect()->back()->withErrors("All fields are required")->withInput();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(["custom_error" => "There was an error saving new record"])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('orders')->with("success", "Order has been deleted");
    }
}
