<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\SKTMSekolah;
use App\table_warga;
use App\Warga;
use View;

use Barryvdh\DomPDF\Facade as PDF;

class SKTMSekolahController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9]+$/i'
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
                $sktmSekolah = new SKTMSekolah();
                $sktmSekolah->nik = $request->nik;
                $sktmSekolah->save();
                return response()->json($sktmSekolah);
            }
        } else {
            $validator = Validator::make($request->all(), $this->rules);
            return Response::json(array('errors' => $validator->getMessageBag()->toArray(), 'false' => $validator->getMessageBag()->toArray()));
        }
    }
    public function cetaksktm($id)
    {
        $sktmSekolah = SKTMSekolah::findOrFail($id);

        // $nik = $post->nik;

        // $post = Post::findOrFail($id);
        // // $post->nik = $request->nik;

        // $table_warga = DB::table('table_warga')
        //     ->where('nik', 'like', "%" . $post->nik . "%");
        // ->paginate();
        $table_warga = table_warga::where('nik', '=', $sktmSekolah->nik)->firstOrFail();

        $pdf = PDF::loadview('surat_ktm_pdf', ['table_warga' => $table_warga, 'surat_sktmsekolah' => $sktmSekolah]);
        return $pdf->setPaper('a4')->stream();
    }
}
