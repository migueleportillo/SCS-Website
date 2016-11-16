<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // don't need to define $table reference b/c the class
    // name is used to find the right table
    // https://laravel.com/docs/5.3/eloquent#defining-models
    protected $fillable = ['name', 'description', 'link_to_github'];
}
