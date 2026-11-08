<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function create(Request $request)
    {
        $Item = Categories::create([
            'name' => $request->name,
        ]);

        return $Item;
    }

public function update(Request $request)
{
    Categories::where('id', $request->id)->update([
        'name' => $request->name,
    ]);

    $updatedDate = Categories::find($request->id);

    return $updatedDate;
    }

    public function destroy(Request $request)
    {
        Categories::where('id', $request->id)->delete();

        return 'Category is deleted!';
    }

    public function all()
    {
        return Categories::all();
    }

    
}