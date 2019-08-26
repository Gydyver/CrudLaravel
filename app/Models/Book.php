<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'bookid'; // or null
    protected $fillable= ['bookid','title','author','pbyear','genre'];
    public $incrementing = false;
}
