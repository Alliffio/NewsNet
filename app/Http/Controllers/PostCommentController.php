<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posting;
use App\Komentar;

class PostCommentController extends Controller
{
    public function store(Request $request, $id){
        $user = new Komentar();
        $user->nama = $request->nama;
        $user->komentar = $request->komentar;
        $user->id_artikel = $request->id;
        $user->save();
        return back();
    }
}
