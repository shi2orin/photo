<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
use App\Models\Comment;


class ArtworksController extends Controller
{

    public function top()
    {
        return view('top');
    }
    public function show($id)
    {
        $artwork = Artwork::where('id', $id)->first();
        $prev = Artwork::where('id', '<', $artwork->id)->orderBy('id', 'desc')->first();
        $next = Artwork::where('id', '>', $artwork->id)->orderBy('id')->first();
        $comment = new Comment;
        return view('artwork', compact('artwork', 'prev', 'next', 'comment'));
        dd($artwork);
    }
    public function end()
    {
        return view('end');
    }
}
