<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Keramaian;
use App\table_warga;
use App\Warga;
use View;

use Barryvdh\DomPDF\Facade as PDF;
class KeramaianController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9 ,.\'-]+$/i',
        'hiburan' => 'required|min:4|max:30|regex:/^[a-z ,.\'-]+$/i',
        'tanggal' => 'required|min:10|max:10|regex:/^[0-9 ,.\'-]+$/i',
        'pria' => 'required|min:4|max:30|regex:/^[a-z ,.\'-]+$/i',
        'perempuan' => 'required|min:4|max:30|regex:/^[a-z ,.\'-]+$/i'
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
                $keramaian = new Keramaian();
                $keramaian->nik = $request->nik;
                $keramaian->hiburan = $request->hiburan;
                $keramaian->tanggal = $request->tanggal;
                $keramaian->pria = $request->pria;
                $keramaian->perempuan = $request->perempuan;
                $keramaian->save();
                return response()->json($keramaian);
            }
        }else{
            $validator = Validator::make($request->all(), $this->rules);
            return Response::json(array('errors' => $validator->getMessageBag()->toArray(), 'false' => $validator->getMessageBag()->toArray()));
        }
    }
     public function cetakkeramaian($id)
    {
        $keramaian= Keramaian::findOrFail($id);

        // $nik = $post->nik;

        // $post = Post::findOrFail($id);
        // // $post->nik = $request->nik;

        // $table_warga = DB::table('table_warga')
        //     ->where('nik', 'like', "%" . $post->nik . "%");
        // ->paginate();
        $table_warga = table_warga::where('nik', '=', $keramaian->nik)->firstOrFail();

        $pdf = PDF::loadview('surat_ik_pdf', ['table_warga' => $table_warga,'surat_keramaian' => $keramaian]);
        return $pdf->setPaper('legal')->stream();
    }
}

