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
            'design' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        if ($validatedData) {
            try {
                // save design file to storage and save path to database
                if ($request->hasFile('design')) {
                    // get file
                    $design_file = $request->file('design');
                    // get filename
                    $filename = time() . '-' . $design_file->getClientOriginalName();
                    // move image to store/uploads
                    $file_path = $design_file->storeAs('designs', $filename, 'public');
                }

                // set size
                $width = $validatedData['width'];
                $height = $validatedData['height'];

                $size = "{$width}mm*{$height}mm";

                $validatedData['size'] = $size;

                // set remaining pay
                $remaining_pay = $validatedData['price'] - $validatedData['prepay'];
                $validatedData['remaining'] = $remaining_pay;

                // set file path
                $validatedData['design_img'] = isset($file_path) ? $file_path : null;

                // Create a new order using mass assignment
                $order = Order::create($validatedData);

                if ($order) {
                    return redirect('/orders')->with('success', 'Order added successfully.');
                } else {
                    return redirect()->back()->withErrors("All fields are required")->withInput();
                }
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->back()->withErrors(["custom_error" => "There was an error saving new record"])->withInput();
            }
        } else {
            return redirect()->back()->withErrors("All fields are required")->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $order = Order::with('customer')->findOrFail($id);
        return view('orders.show')->with(['order' => $order]);
    }

    /**
     * Search Client record by order no
     */
    public function search(string $searchTerm)
    {
        // $searchTerm = request('searchTerm');
        $sanitizedTerm = strip_tags($searchTerm);

        $results = Order::where('order_no', 'like', "%$sanitizedTerm%")->get();

        return $results;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::all();
        $order = Order::find($id);
        // Split the size string by "x" to get an array of width and height values
        list($width, $height) = explode('*', $order['size']);

        // Remove any non-numeric characters and spaces from the width and height values
        $order->width = preg_replace('/[^0-9]/', '', $width);
        $order->height = preg_replace('/[^0-9]/', '', $height);

        return view('orders.edit')->with(['order' => $order, 'customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
            'design' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        if ($validatedData) {
            try {
                $order = Order::find($id);

                // save design file to storage and save path to database
                if ($request->hasFile('design')) {
                    // get file
                    $design_file = $request->file('design');
                    // get filename
                    $filename = time() . '-' . $design_file->getClientOriginalName();
                    // move image to store/uploads
                    $file_path = $design_file->storeAs('designs', $filename, 'public');
                }

                // size
                $width = $validatedData['width'];
                $height = $validatedData['height'];

                $size = "{$width}mm*{$height}mm";

                $validatedData['size'] = $size;

                $remaining_pay = $validatedData['price'] - $validatedData['prepay'];
                $validatedData['remaining'] = $remaining_pay;

                $validatedData['design_img'] = isset($file_path) ? $file_path : $order->design_img;
                // Create a new order using mass assignment
                $order->update($validatedData);

                if ($order) {
                    return redirect('/orders')->with('success', 'Order added successfully.');
                } else {
                    return redirect()->back()->withErrors("All fields are required")->withInput();
                }
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->back()->withErrors(["custom_error" => "There was an error saving new record"])->withInput();
            }
        } else {
            return redirect()->back()->withErrors("All fields
        are required")->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('orders')->with("success", "Order has been deleted");
    }
}
