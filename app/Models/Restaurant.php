<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    private int $id;
    private string $name;
    // private string $adress;
    // private int $zipcode;
    // private string $town;
    // private string $country;
    // private string $description;
    // private int $review;

    
    protected $table = 'restaurant';
}
