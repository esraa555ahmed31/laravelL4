<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table ='_blog';
    protected $fillable=['title','body','version'];
    //send all except slug
    // protected $gaurded=['slug'];
}
