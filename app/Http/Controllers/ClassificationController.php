<?php

namespace App\Http\Controllers;
use App\Models\Classification;

use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index(){
        $classifications = Classification::all();
        return view('classifications.index', ['classifications' => $classifications]);
    }

    public function create(){
        return view('classifications.create');
    }
}
