<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Search::truncate();
        $saveSearches = DB::table('products')->get();
        foreach($saveSearches as $saveSearch)
        {
            $search = new Search();
            $search->id = $saveSearch->id;
            $search->product_name = $saveSearch->product_name;
            $search->product_description = $saveSearch->product_description;
            $search->product_price = $saveSearch->product_price;
            $search->image = $saveSearch->image;
            $search->save();
        }
        $products = Product::paginate(10);
        // dd($products);
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'build/assets/images/items/';
            $request->image->move(public_path($destinationPath), $imageName);
            $product->image = $imageName;
        }
        $product->save();
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->firstOrFail();
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::where('id', $id)->first();
    
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_price = $request->price;
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'build/assets/images/items/';
    
            // Delete prevoius image
            if ($product->image && File::exists('public/build/assets/images/items/' . $product->image)) {
                File::delete('build/assets/images/items/' . $product->image);
            }
            
            $request->image->move(public_path($destinationPath), $imageName);
            $product->image = $imageName;
        }
    
        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Delete the item's image if it exists
        if ($product->image && File::exists('public/build/assets/images/items/' . $product->image)) {
            File::delete('build/assets/images/items/' . $product->image);
        }

        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}
