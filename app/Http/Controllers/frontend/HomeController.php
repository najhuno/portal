<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function detailproduk($produk = null){

        if($produk == "deposito"){
            return view('frontend.produk.detailprodukdeposito');
        } 
        if($produk == "tabungan"){
            return view('frontend.produk.detailproduktabungan');
        }
        if($produk == "kredit"){
            return view('frontend.produk.detailprodukkredit');
        }else{
            return view('frontend.404');
        }
        
    }

    public function kredit($jenis = null){

        if($jenis  == "kpr"){
            return view('frontend.produk.kredit.kreditkpr');
        } 
        // if($jenis  == "tabungan"){
        //     return view('frontend.produk.detailproduktabungan');
        // }
        // if($jenis  == "kredit"){
        //     return view('frontend.produk.detailprodukkredit');
        // }else{
        //     return view('frontend.404');
        // }
        
    }

    public function getdashboard(Request $request){
        // $where = array('id' => $request->id);
        $content  = Dashboard::all();
        
      
        return Response()->json($content);
    }
}
