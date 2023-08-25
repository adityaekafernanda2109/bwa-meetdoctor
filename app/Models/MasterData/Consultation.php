<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;

    // mendeklarasikan tabel
    public $table = 'consultation';

    // this ield must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function appointment(){
        return $this->hasMany('App\Models\Operations\Appointment', 'consultation_id');
    }


}
