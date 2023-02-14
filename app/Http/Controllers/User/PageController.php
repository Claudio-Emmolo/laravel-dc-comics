<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $comicList = Comic::all();
        return view('user.homepage', compact('comicList'));
    }
}