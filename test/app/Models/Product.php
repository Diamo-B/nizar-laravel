<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    use HasUuids;

    protected $fillable = ['name', 'price', 'quantity'];
    
    public $timestamps = false; // Disable timestamps
}