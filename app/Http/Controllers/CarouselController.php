<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Http\Controllers\Model\Utility;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::get();
        return view('backend.Carousel',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('includes.carousels.carouselCreate');
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
        Carousel::create($inputs);


        return redirect('carousels');
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
        $carousel = Carousel::find($id);
        return view('includes.carousels.carouselEdit', compact('carousel'));
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
        $carousel = Carousel::find($id);
        $inputs = $this->handlePicUpload($request);
        $carousel->update($inputs);
        return redirect('carousels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect('carousels');
    }
}
