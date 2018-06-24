<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cgy;
use App\Http\Controllers\Model\Utility;
use App\Carousel;
// use Mail;
use App\Product;

class CgyController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except' => ['showCgys','showProducts']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cgies = Cgy::get();
        return view('backend.Cgy',compact('cgies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('includes.cgys.cgyCreate');

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
        Cgy::create($inputs);


        return redirect('cgys');
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
        $cgy = Cgy::find($id);
        return view('includes.cgys.cgyEdit', compact('cgy'));
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
        $cgy = Cgy::find($id);
        $inputs = $this->handlePicUpload($request);
        $cgy->update($inputs);
        return redirect('cgys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cgy $cgy)
    {
        $cgy->delete();
        return redirect('cgys');
    }

    // public function sendOrder(Request $request){
    //     $data = ['name' => 'Test'];
    //     Mail::send('email.email', $data, function($message) {
    //         $message->to('your@email')->subject('This is test email');
    //     });
    //     return '信件寄送成功!';
    // }

    
    public function showCgys(Request $request){
        $cgys = Cgy::get();
        return view('index',compact('cgys'));
    }



    public function showProducts(Request $request, $id)
    {
        $cgy = Cgy::find($id);
        $products = Product::where('cgy_id',$id)->orderBy('sort','asc')->get();
        return view('product category',compact('cgy','products'));
    }
    
}
