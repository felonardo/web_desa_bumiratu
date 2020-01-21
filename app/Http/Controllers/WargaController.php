<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Warga;
use View;

class WargaController extends Controller
{
    protected $rules =
    [
        'id' => 'required|min:16|max:16|regex:/^[0-9]+$/i',
        'nama' => 'required|min:4|max:30|regex:/^[a-z ]+$/i',
        'ttl' => 'required|min:4|max:30|regex:/^[0-9a-z ,.\'-]+$/i',
        'jenis_kelamin' => 'required|min:4|max:9|regex:/^[a-z ,.\'-]+$/i',
        'agama' => 'required|min:5|max:8|regex:/^[a-z ,.\'-]+$/i',
        'pekerjaan' => 'required|min:4|max:30|regex:/^[a-z ,.\'-]+$/i',
        'alamat' => 'required|min:4|max:60|regex:/^[a-z ,.\'-]+$/i',
        'dusun' => 'required|min:9|max:13|regex:/^[a-z ,.\'-]+$/i'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::paginate(6);

        return view('admin_warga', ['warga' => $warga]);
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
            $warga = new Warga();
            $warga->id = $request->id;
            $warga->nama = $request->nama;
            $warga->ttl = $request->ttl;
            $warga->jenis_kelamin = $request->jenis_kelamin;
            $warga->agama = $request->agama;
            $warga->pekerjaan = $request->pekerjaan;
            $warga->alamat = $request->alamat;
            $warga->dusun = $request->dusun;
            $warga->save();
            return response()->json($warga);
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
        $warga = Warga::findOrFail($id);

        return view('post.show', ['post' => $post]);
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
            $warga = Warga::findOrFail($id);
            $warga->nama = $request->nama;
            $warga->ttl = $request->ttl;
            $warga->jenis_kelamin = $request->jenis_kelamin;
            $warga->agama = $request->agama;
            $warga->pekerjaan = $request->pekerjaan;
            $warga->alamat = $request->alamat;
            $warga->dusun = $request->dusun;
            $warga->save();
            return response()->json($warga);
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
        $warga = Warga::findOrFail($id);
        $warga->delete();

        return response()->json($warga);
    }
}
