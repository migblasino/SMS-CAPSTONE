<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status'; 
    protected $primaryKey = 'id';
    protected $fillable = ['status_name','created_at','updated_at'];

    public function patient()
    {
        return $this->hasMany(patients::class, 'status_id');
    }
}
