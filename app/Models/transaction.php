<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // <-- Penting: import HasMany

// 1. Nama class harus PascalCase (Transaction)
class Transaction extends Model
{
    /**
     * 2. Nama method relasi harus camelCase dan jamak (plural)
     * karena satu transaksi punya BANYAK detail.
     */
    public function transactionDetails(): HasMany
    {
        /**
         * 3. Ini akan menunjuk ke class 'TransactionDetail' (singular)
         * yang ada di file 'TransactionDetail.php'
         */
        return $this->hasMany(TransactionDetail::class);
    }

    public function transactiondetail() {
        return $this->belongsTo(User::class);
    }

    // Jangan lupa tambahkan relasi ke User juga
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
