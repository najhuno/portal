<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContentUtama;
use App\Models\Dashboard;
use App\Models\Sukubunga;
use App\Models\NasabahBaru;
use Carbon\Carbon;



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


    // content slider 
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


    // dashboard

    public function dashboard(){
        
        if(request()->ajax()) {
            return datatables()->of(Dashboard::select('*'))
            ->addColumn('Aksi', 'backend.dashboard.edit')
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
        }
       return view('backend.dashboard.list',
                    ['title' => 'Dashboard']
                );
    }

    public function storedashboard(Request $request){
        $companyId = $request->id;

        
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

    public function editdashboard(Request $request){
        $where = array('id' => $request->id);
        $content  = ContentUtama::where($where)->first();
      
        return Response()->json($content);
    }

    // suku bunga

    public function sukubunga(){
        
        if(request()->ajax()) {
            return datatables()->of(Sukubunga::select('*'))
            ->addColumn('Aksi', 'backend.sukubunga.edit')
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->make(true);
        }
       return view('backend.sukubunga.list',
                ['title' => 'Suku Bunga']
            );
    }

    public function storesukubunga(Request $request){

        $id         = $request->id;
        $username   = User::first();
        
        $company    =   Sukubunga::updateOrCreate(
                        [
                        'id' => $id
                        ],
                        [
                            'jenis_produk' => $request->jenis, 
                            'nama_produk' => $request->produk,
                            'suku_bunga' => $request->sukubunga,
                            'update_by' => $username->name,
                            'created_at' => Carbon::now(),    
                            'updated_at' => Carbon::now()    
                        ]
                    );    
                    
                         
        return Response()->json($company);
    }

    public function editsukubunga(Request $request){
        $where = array('id' => $request->id);
        $content  = ContentUtama::where($where)->first();
      
        return Response()->json($content);
    }


    //  Nasabah Baru
    public function createPDF() {
        // retreive all records from db
        $data = NasabahBaru::all();
        

        // share data to view
        view()->share('employee',$data);
        $pdf = PDF::loadView('reportNasabahBaru', $data);
        
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }

    public function showNasabahBaru()
    {
        //
        $title = "Nasabah Baru";
        $data = NasabahBaru::all();
        return view('backend.nasabahbaru.list', compact('title','data'));
    }
   



    
}
