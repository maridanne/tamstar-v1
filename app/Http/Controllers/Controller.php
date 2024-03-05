<?php

namespace App\Http\Controllers;
use App\Models\Classification;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $classification = Classification::all();
        return view('classifications.index', ['classifications' => $classifications]);
    }
}
