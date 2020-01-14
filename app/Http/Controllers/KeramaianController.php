<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Keramaian;
use App\Warga;
use View;

class KeramaianController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9 ,.\'-]+$/i',
        'hiburan' => 'required|min:4|max:20|regex:/^[a-z ,.\'-]+$/i',
        'tanggal' => 'required|min:10|max:10|regex:/^[0-9 ,.\'-]+$/i'
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
                $keramaian->save();
                return response()->json($keramaian);
            }
        }else{
            $validator = Validator::make($request->all(), $this->rules);
            return Response::json(array('errors' => $validator->getMessageBag()->toArray(), 'false' => $validator->getMessageBag()->toArray()));
        }
    }
}
