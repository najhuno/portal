<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContentUtama;
use Datatables;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Dasboard";
        return view('backend.home', compact('title'));
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

    public function contentutama(){
        
        if(request()->ajax()) {
            return datatables()->of(ContentUtama::select('*'))
            ->addColumn('Aksi', 'backend.contentutama.edit')
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
        }
       return view('backend.contentutama.list');
    }

    public function storecontentutama(Request $request){
        $companyId = $request->id;

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $name = $request->file('image')->getClientOriginalName();
       

        $path = $request->file('image')->store('public/images');
        
        $company   =   ContentUtama::updateOrCreate(
                    [
                     'id' => $companyId
                    ],
                    [
                    'judul' => $request->name, 
                    'isi' => $request->email,
                    'catatankecil' => $request->address,
                    'button' => $request->address,
                    'url' => $request->address,
                    'namagambar' => $request->address,
                    'path' => $request->address
                    ]);    
                         
        return Response()->json($company);
    }

    public function editcontentutama(Request $request){
        $where = array('id' => $request->id);
        $content  = ContentUtama::where($where)->first();
      
        return Response()->json($content);
    }

    public function deletecontentutama(Request $request){
        $company = ContentUtama::where('id',$request->id)->delete();
      
        return Response()->json($company);
    }

    
}
