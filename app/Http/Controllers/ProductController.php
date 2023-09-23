<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderByDesc('created_at')->paginate(10);

        return view('products.index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        if ($validatedData) {
            try {
                // Create a new product using mass assignment
                $product = Product::create($validatedData);

                if ($product) {
                    return redirect('/products')->with('success', 'Product added successfully.');
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
    public function show(Product $product)
    {
        //
    }

    /**
     * Search Product records by name
     */
    public function search(string $searchTerm)
    {
        // $searchTerm = request('searchTerm');
        $sanitizedTerm = strip_tags($searchTerm);

        $results = Product::where('name', 'like', "%$sanitizedTerm%")->get();

        return $results;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('products.edit')->with(['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        if ($validatedData) {
            try {
                $product = Product::find($id);

                // Create a new product using mass assignment
                $product->update($validatedData);

                if ($product) {
                    return redirect('/products')->with('success', 'Product added successfully.');
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
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with("success", "Product has been deleted");
    }
}
