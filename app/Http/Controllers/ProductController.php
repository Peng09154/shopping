<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Model\Utility;

class ProductController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('backend.Product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('includes.products.productCreate');
    }

    private function handlePicUpload(Request $request){
        $inputs = $request->all();
        if(isset($inputs['picUpload'])){
             // dd('picUpload存在');
            $fileNames = Utility::picsUpload( $request , "picUpload" , null , null, false);
            // dd($fileName);
            if (isset($fileNames)) {
                $inputs['pic'] = $fileNames[0];           
            }     
        }else{
            dd('picUpload不存在');
        }

        return $inputs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $inputs = $this->handlePicUpload($request);
        Product::create($inputs);


        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('buy', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('includes.products.productEdit', compact('product'));
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
        // dd($request->all());
        $product = Product::find($id);
        $inputs = $this->handlePicUpload($request);
        $product->update($inputs);
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products');
    }


}
