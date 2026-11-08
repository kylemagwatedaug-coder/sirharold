<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        $Item = Customer::create([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'birth_date' => $request->birth_date,
        'age' => $request->age,
        'gender' => $request->gender

        ]);

        return $Item;
    }

public function update(Request $request)
{
    Customer::where('id', $request->id)->update([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'birth_date' => $request->birth_date,
        'age' => $request->age,
        'gender' => $request->gender
    ]);

    $updatedDate = Customer::find($request->id);

    return $updatedDate;
    }

    public function destroy(Request $request)
    {
        Customer::where('id', $request->id)->delete();

        return 'Customer is deleted!';
    }

    public function all()
    {
        return Customer::all();
    }

    
}
