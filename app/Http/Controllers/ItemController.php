<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function create(Request $request)
    {
        $Item = Item::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price
        ]);

        return $Item;
    }

public function update(Request $request)
{
    Item::where('id', $request->id)->update([
        'name' => $request->name,
        'brand' => $request->brand,
        'price' => $request->price
    ]);

    $updatedDate = Item::find($request->id);

    return $updatedDate;
    }

    public function destroy(Request $request)
    {
        Item::where('id', $request->id)->delete();

        return 'Item is deleted!';
    }

    public function all()
    {
        return Item::all();
    }

    
}