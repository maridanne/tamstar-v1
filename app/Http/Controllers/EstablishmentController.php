<?php

namespace App\Http\Controllers;
use App\Models\Establishment;

use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index(){
        $establishments = Establishment::all();
        return view('establishments.index', ['establishments' => $establishments]);
    }

    public function create(){
        return view('establishments.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'classification_id' => 'required',
            'province' => 'required',
            'city_municipality' => 'required',
            'male_emp_count' => 'nullable',
            'female_emp_count' => 'nullable',
            'num_of_employees' => 'nullable',
            'num_of_vehicles' => 'nullable',
            'num_of_rooms'=> 'nullable',
            'name_of_entity' => 'required',
            'address' => 'required',
            'owner_opmngr_genmngr' => 'required',
            'accreditation_no' => 'required',
            'type_of_organization'=> 'nullable',
            'date_established'=> 'nullable',
        ]);
        $newClassification = Establishment::create($data);

        return redirect(route('establishments.index'));
    }
}
