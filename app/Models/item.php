<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class item extends Model
{
    use HasFactory;
    public function transactiondetail() {
        return $this->hasMany(TransactionDetail::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
