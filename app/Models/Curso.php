<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //The only fields to get into db, no matter the form request
    // protected $fillable = [
    //     'name', 
    //     'description',
    //     'categoria'
    // ];


    //Instead of protecting the fields that are increasing into db, we protect
    //data that is not gonna get into the form 
    protected $guarded =[];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
 