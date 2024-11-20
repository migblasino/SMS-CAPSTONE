<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $table = 'districts'; 
    protected $primaryKey = 'id';
    protected $fillable = ['district_name','created_at','updated_at'];

    public function patientsDistrict()
    {
        return $this->hasMany(patients::class, 'district_id');
    }
}
