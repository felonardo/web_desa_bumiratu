<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Post;
use App\table_warga;
use App\Warga;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use View;

class DomisiliController extends Controller
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
        return view('index');
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
        if (Warga::where('nik', $request->nik)->exists()) {
            $validator = Validator::make($request->all(), $this->rules);
            if ($validator->fails()) {
                return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
            } else {
                $post = new Post();
                $post->nik = $request->nik;
                $post->save();
                return response()->json($post);
            }
        }else{
            $validator = Validator::make($request->all(), $this->rules);
            return Response::json(array('errors' => $validator->getMessageBag()->toArray(), 'false' => $validator->getMessageBag()->toArray()));
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
        $post = Post::findOrFail($id);

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
            $post = Post::findOrFail($id);
            $post->nik = $request->nik;
            $post->save();
            return response()->json($post);
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
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json($post);
    }

    public function cetakdomisili($id)
    {
        $post = Post::findOrFail($id);

        // $nik = $post->nik;

        // $post = Post::findOrFail($id);
        // // $post->nik = $request->nik;

        // $table_warga = DB::table('table_warga')
        //     ->where('nik', 'like', "%" . $post->nik . "%");
        // ->paginate();
        $table_warga = table_warga::where('nik', '=', $post->nik)->firstOrFail();

        $pdf = PDF::loadview('surat_domisili_pdf', ['table_warga' => $table_warga]);
        return $pdf->setPaper('a4')->stream();
    }
}
