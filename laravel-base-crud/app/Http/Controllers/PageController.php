<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class PageController extends Controller
{
    public function index() {
        
        $myComics = Comic::paginate(10);
        
        $data = [
            'comics' => $myComics
        ];

        return view('index', $data);
    }
}
