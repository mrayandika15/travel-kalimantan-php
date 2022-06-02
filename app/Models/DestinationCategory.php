<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationCategory extends Model
{
    use HasFactory;
    public $table = "destination_category";

    public $primaryKey = 'destination_category_id';
    protected $fillable = [
        'destination_category_name',
        'destination_category_image'
    ];
}
