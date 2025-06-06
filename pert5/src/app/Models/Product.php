<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Prodcuts';
    protected $fillable = [
        'name',
        'price',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}