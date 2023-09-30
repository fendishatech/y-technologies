<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesignRequest;
use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designs = Design::orderByDesc('created_at')->paginate(10);

        return view('designs.index')->with([
            'designs' => $designs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('designs.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignRequest $request)
    {
        $validated = $request->validated();

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
            $design = new Design();
            $design->name = $request->name;
            $design->img_path = $file_path;

            $design->save();

            if ($design) {
                return redirect('/designs')->with('success', 'Design added successfully.');
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
    public function show(Design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Design $design)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Design $design)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Design $design)
    {
        //
    }
}
