<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Keramaian;
use View;

class KeramaianController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9 ,.\'-]+$/i',
        'hiburan' => 'required|min:4|max:20|regex:/^[a-z ,.\'-]+$/i'
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
    }
}
