<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static function insert(array $toArray)
    {
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
