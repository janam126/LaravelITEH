<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trening;
use Illuminate\Support\Facades\DB;

class TreningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function indexx(){
        $trening = DB::select('select * from trenings');
        return view('dashboard',['trening'=>$trening]);
    }

    public function dodaj(){
        return view('unos');
    }

    public function index()
    {
        return Trening::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Trening::create($request->all());
        echo "<script>alert('Uspesno sacuvano');</script>";
        return view('unos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Trening::find($id);
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
        $trening = Trening::find($id);
        $trening->update($request->all());
        return $trening;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Trening::destroy($id);
    }
}
