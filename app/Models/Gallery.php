<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = "galleries";

    // Para asignación masiva
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'category'
    // ];

    protected $guarded = [
        'status'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
