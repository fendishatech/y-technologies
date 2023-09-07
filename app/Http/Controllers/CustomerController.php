<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderByDesc('created_at')->paginate(10);

        return view('customers.index')->with([
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:30'],
            'email' => ['string', 'max:15', 'unique:customers'],
            'phone_no' => ['required', 'string', 'max:15', 'unique:customers'],
        ]);

        try {

            if ($validatedData) {

                // Create a new customer using mass assignment
                $customer = Customer::create($validatedData);

                if ($customer) {
                    return redirect('/customers')->with('success', 'Customer added successfully.');
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
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with(['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => ['nullable', 'string', 'max:30'],
            'last_name' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'string', Rule::unique('customers')->ignore($customer->id)],
            'phone_no' => ['nullable', 'string', Rule::unique('customers')->ignore($customer->id)],
        ]);
        try {

            if ($validatedData) {

                // Create a new customer using mass assignment
                $customer->update($validatedData);

                return redirect('/customers')->with('success', 'Customer updated successfully.');
            } else {
                return redirect()->back()->withErrors(["custom_error" => "There was an error saving Customer"])->withInput();
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(["custom_error" => "There was an error saving Customer"])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customers')->with("success", "Customer has been deleted");
    }
}
