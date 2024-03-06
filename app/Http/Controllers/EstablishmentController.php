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
            'classification_id',
            'province',
            'city_municipality',
            'male_emp_count',
            'female_emp_count',
            'num_of_employees',
            'num_of_vehicles',
            'num_of_rooms',
            'name_of_entity',
            'address',
            'owner_opmngr_genmngr',
            'accreditation_no',
            'type_of_organization',
            'date_established',
        ]);
        $newClassification = Establishment::create($data);

        return redirect(route('establishments.index'));
    }
}
