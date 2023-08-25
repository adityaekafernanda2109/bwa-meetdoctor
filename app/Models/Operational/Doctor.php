<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    // mendeklarasikan tabel
    public $table = 'doctor';

    // this ield must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function specialist(){
        //3 parameter (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\Specialist','specialist_id', 'id');
    }

    // one to many
    public function appointment(){
        // 2 parameter(path Models, field foreign key)
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
