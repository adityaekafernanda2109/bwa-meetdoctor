<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    use SoftDeletes;

    // mendeklarasikan tabel
    public $table = 'specialist';

    // this ield must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // one to many
    public function doctor(){
        // 2 parameter(path Models, field foreign key)
        return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
    }
}
