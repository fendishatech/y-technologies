<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderByDesc('created_at')->paginate(10);

        return view('users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'], // Assuming this is for the 'users' table
            'phone_no' => ['required', 'string', 'max:255', 'unique:users'], // Assuming this is for the 'users' table
            'password' => ['required', 'string', 'min:8', 'confirmed'], // Add 'confirmed' rule
            'role' => ['required', 'string', 'in:admin,store,employee'],
        ]);

        if ($validatedData) {
            try {
                // Create a new user using mass assignment
                $user = User::create($validatedData);

                if ($user) {
                    return redirect('/users')->with('success', 'User added successfully.');
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
     * Search Product records by name
     */
    public function search(string $searchTerm)
    {
        // $searchTerm = request('searchTerm');
        $sanitizedTerm = strip_tags($searchTerm);

        $results = User::where('name', 'like', "%$sanitizedTerm%")->get();

        return $results;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::find($id);
        return view('users.edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->id()), // Ignore the current user's email
            ], // Assuming this is for the 'users' table
            'phone_no' => ['required', 'string', 'max:255', 'unique:users'], // Assuming this is for the 'users' table
            'role' => ['required', 'string', 'in:admin,store,employee'],
        ]);

        if ($validatedData) {
            try {
                $user = User::find($id);

                // Create a new user using mass assignment
                $user->update($validatedData);

                if ($user) {
                    return redirect('/users')->with('success', 'User added successfully.');
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
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with("success", "User has been deleted");
    }
}
