<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\SKTM    ;
use App\table_warga;
use App\Warga;
use View;

use Barryvdh\DomPDF\Facade as PDF;

class SKTMController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9 ,.\'-]+$/i'
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
                $sktm = new SKTM();
                $sktm->nik = $request->nik;
                $sktm->save();
                return response()->json($sktm);
            }
        }else{
            $validator = Validator::make($request->all(), $this->rules);
            return Response::json(array('errors' => $validator->getMessageBag()->toArray(), 'false' => $validator->getMessageBag()->toArray()));
        }
    }
     public function cetakkeramaian($id)
    {
        $sktm = SKTM::findOrFail($id);

        // $nik = $post->nik;

        // $post = Post::findOrFail($id);
        // // $post->nik = $request->nik;

        // $table_warga = DB::table('table_warga')
        //     ->where('nik', 'like', "%" . $post->nik . "%");
        // ->paginate();
        $table_warga = table_warga::where('nik', '=', $sktm->nik)->firstOrFail();

        $pdf = PDF::loadview('surat_ktm_pdf', ['table_warga' => $table_warga,'surat_sktm' => $sktm]);
        return $pdf->setPaper('legal')->stream();
    }
}
