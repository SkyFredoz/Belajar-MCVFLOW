<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 1. Nama class harus PascalCase dan singular (TransactionDetail)
class TransactionDetail extends Model
{
public function transaction(){
    return
$this->belongsTo(Transaction::class);
}
public function item(){
    return $this->belongsTo(Item::class);
}
}
