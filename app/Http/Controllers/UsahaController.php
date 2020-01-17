<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Usaha;
use App\table_warga;
use App\Warga;
use View;


use Barryvdh\DomPDF\Facade as PDF;

class UsahaController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9]+$/i',
        'jenis_usaha' => 'required|min:4|max:30|regex:/^[a-z ,.\'-]+$/i',
        'sejak_tahun' => 'required|min:4|max:4|regex:/^[0-9]+$/i',
        'nominal' => 'required|min:4|max:10|regex:/^[0-9]+$/i',
        'lama_pinjam' => 'required|min:1|max:3|regex:/^[0-9]+$/i'
    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        if (Warga::where('nik', $request->nik)->exists()) {
            $validator = Validator::make($request->all(), $this->rules);
            if ($validator->fails()) {
                return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            } else {
                $usaha = new Usaha();
                $usaha->nik = $request->nik;
                $usaha->jenis_usaha = $request->jenis_usaha;
                $usaha->sejak_tahun = $request->sejak_tahun;
                $usaha->nominal = $request->nominal;
                $usaha->lama_pinjam = $request->lama_pinjam;
                $usaha->save();
                return response()->json($usaha);
            }
        } else {
            $validator = Validator::make($request->all(), $this->rules);
            return Response::json(array('errors' => $validator->getMessageBag()->toArray(), 'false' => $validator->getMessageBag()->toArray()));
        }
    }
    public function cetakusaha($id)
    {
        $usaha = Usaha::findOrFail($id);

        // $nik = $post->nik;

        // $post = Post::findOrFail($id);
        // // $post->nik = $request->nik;

        // $table_warga = DB::table('table_warga')
        //     ->where('nik', 'like', "%" . $post->nik . "%");
        // ->paginate();
        $table_warga = table_warga::where('nik', '=', $usaha->nik)->firstOrFail();

        $pdf = PDF::loadview('surat_ku_pdf', ['table_warga' => $table_warga, 'surat_usaha' => $usaha]);
        return $pdf->setPaper('legal')->stream();
    }
}
