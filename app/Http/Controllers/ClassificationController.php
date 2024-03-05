<?php

namespace App\Http\Controllers;
use App\Models\Classification;

use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index(){
        $classifications = Classification::all();
        return view('classifications.index',['classifications' => $classifications]);
    }

    public function create(){
        return view('classifications.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
        ]);
        $newClassification = Classification::create($data);

        return redirect(route('classifications.index'));
    }
}
