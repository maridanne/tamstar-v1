<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
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
    ];
}
