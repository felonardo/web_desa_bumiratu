<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\Post;
use View;

class HomeController extends Controller
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
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = new Post();
            $post->nik = $request->nik;
            $post->save();
            return response()->json($post);
        }
    }

    public function changeStatus() 
    {
        $id = $this->request->get('id');

        $post = Post::findOrFail($id);
        $post->save();

        return response()->json($post);
    }
}
