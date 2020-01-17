<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\SKTMSekolah;
use View;

class AdminTidakMampuSekolahController extends Controller
{
    protected $rules =
    [
        'nik' => 'required|min:16|max:16|regex:/^[0-9 ,.\'-]+$/i'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sktmSekolah = SKTMSekolah::paginate(6);

        return view('admin_tidakmampusekolah', ['sktmSekolah' => $sktmSekolah]);
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
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $sktmSekolah = new SKTMSekolah();
            $sktmSekolah->title = $request->title;
            $sktmSekolah->content = $request->content;
            $sktmSekolah->save();
            return response()->json($sktmSekolah);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sktmSekolah = SKTMSekolah::findOrFail($id);

        return view('sktmSekolah.show', ['sktmSekolah' => $sktmSekolah]);
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
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $sktmSekolah = SKTMSekolah::findOrFail($id);
            $sktmSekolah->title = $request->title;
            $sktmSekolah->content = $request->content;
            $sktmSekolah->save();
            return response()->json($sktmSekolah);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sktmSekolah = SKTMSekolah::findOrFail($id);
        $sktmSekolah->delete();

        return response()->json($sktmSekolah);
    }
}
