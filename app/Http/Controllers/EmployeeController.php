<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        $Item = employee::create([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'position' => $request->position,
        'birth_date' => $request->birth_date,
        'age' => $request->age,
        'civil_status' => $request->civil_status,
        'gender' => $request->gender
        ]);

        return $Item;
    }

public function update(Request $request)
{
    employee::where('id', $request->id)->update([
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'position' => $request->position,
        'birth_date' => $request->birth_date,
        'age' => $request->age,
        'civil_status' => $request->civil_status,
        'gender' => $request->gender
    ]);

    $updatedDate = employee::find($request->id);

    return $updatedDate;
    }

    public function destroy(Request $request)
    {
        employee::where('id', $request->id)->delete();

        return 'Employee is deleted!';
    }

    public function all()
    {
        return employee::all();
    }

    
}