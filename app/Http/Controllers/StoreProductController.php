<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class StoreProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.seller.products.manage')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.seller.products.add')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validation
        $this->validate($request, [
            'ProductName' => 'required',
            'Category' => 'required',
            'Variation' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Quantity' => 'required',
            'ProductImage' => 'image|nullable|max:1999'
        ]);

        $image_folder = str_replace(' ', '-', strtolower($request->input('ProductName')));

        // Handle File Upload
        if($request->hasFile('ProductImage')){
            //Get file extension
            $extension = $request->file('ProductImage')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $request->input('Variation').'.'.$extension;
            //Upload the image
            $path = $request->file('ProductImage')->storeAs('public/uploads/images/'.$image_folder, $fileNameToStore);
        }else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Add product to database
        $product = new Product;
        $product->product_name = $request->input('ProductName');
        $product->variation = $request->input('Variation');
        $product->category = $request->input('Category');
        $product->description = $request->input('Description');
        $product->availability = $request->input('Quantity');
        $product->price = $request->input('Price');
        $product->image_folder = $image_folder;
        $product->barcode = 0;
        $product->save();

        return redirect('/store/products/create')->with('success', $request->input('ProductName').' Successfully Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
