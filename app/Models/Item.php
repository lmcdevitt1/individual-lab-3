<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'size',
        'price',
        'price_range',
        'model',
        'manufacturer',
    ];

    public function toString(): string
    {
        return "Name: {$this->name}, Manufacturer: {$this->manufacturer}, Make: {$this->make}, Model: {$this->model}, Price: {$this->price}, Price Range: {$this->price_range}";
    }
}
