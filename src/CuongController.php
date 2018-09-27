<?php

namespace CUONGNQ\SimpleAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use CUONGNQ\SimpleAdmin\CuongModel;

class CuongController extends Controller
{
    public function index()
    {
        $data = CuongModel::all();
        
        return view('package::list',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
   {
       return view('package::add');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $sp = new CuongModel;
       $sp->name = $request->txtSP;
       $sp->price = $request->txtSL;
       $sp->save();
       return redirect('package'); 
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
       $data = CuongModel::find($id);
       return view('package::edit',compact('data'));
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
       $sp = CuongModel::find($id);
       $sp->name = $request->txtSP;
       $sp->price = $request->txtSL;
       $sp->save();
       return redirect('package');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $data = CuongModel::destroy($id);
       return redirect()->back();
   }
}
