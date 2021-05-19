<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Sukubunga;


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


    public function detailproduk($produk = null, $jenis = null){

        if($produk == "deposito"){
            return view('frontend.produk.detailprodukdeposito');
        } 
        if($produk == "tabungan"){
            return view('frontend.produk.detailproduktabungan');
        }
        if($produk == "kredit"){
            if($jenis == "potpns"){
                return view('frontend.produk.kredit.potpns');
            }
            if($jenis == "sertifikasi"){
                return view('frontend.produk.detailprodukkredit');
            }
            if($jenis == "siltap"){
                return view('frontend.produk.detailprodukkredit');
            }
            if($jenis == "tpp"){
                return view('frontend.produk.detailprodukkredit');
            }
            if($jenis == "umum"){
                return view('frontend.produk.detailprodukkredit');
            }
            if($jenis == "kepincut"){
                return view('frontend.produk.detailprodukkredit');
            }else{
                return view('frontend.produk.detailprodukkredit');
            }
            
        }else{
            return view('frontend.404');
        }
        
    }

    public function kredit($jenis = null){

        if($jenis  == "potpns"){
            return view('frontend.produk.kredit.potpns');
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

    public function getSukuBunga(Request $request){
        
        $content  = Sukubunga::all();
        
        return Response()->json($content);
    }

    // Profile Perusahaan
    public function profile(){
        
        return view('frontend.profil');
    }
}
