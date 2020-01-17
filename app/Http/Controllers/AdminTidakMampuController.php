<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\SKTM;
use View;

class AdminTidakMampuController extends Controller
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
        $sktm = SKTM::paginate(6);

        return view('admin_tidakmampu', ['sktm' => $sktm]);
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
            $sktm = new SKTM();
            $sktm->title = $request->title;
            $sktm->content = $request->content;
            $sktm->save();
            return response()->json($sktm);
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
        $sktm = SKTM::findOrFail($id);

        return view('sktm.show', ['sktm' => $sktm]);
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
            $sktm = SKTM::findOrFail($id);
            $sktm->title = $request->title;
            $sktm->content = $request->content;
            $sktm->save();
            return response()->json($sktm);
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
        $sktm = SKTM::findOrFail($id);
        $sktm->delete();

        return response()->json($sktm);
    }
}
