<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    private int $id;
    protected $fillable =['name','adress','country','town','zipCode','description','review'];
    
    protected $table = 'restaurant';
}
