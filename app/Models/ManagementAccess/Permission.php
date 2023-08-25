<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // mendeklarasikan tabel
    public $table = 'permission';

    // this ield must type date
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // declare fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
