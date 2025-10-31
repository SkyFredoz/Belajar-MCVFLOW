<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- 1. IMPORT INI
use Illuminate\Database\Eloquent\Model;
use App\Models\Item; // <-- 3. IMPORT MODEL YANG LOGIS (Item)

class Category extends Model
{
    use HasFactory; // <-- 2. TAMBAHKAN BARIS INI (FIX ERROR FACTORY)

    /**
     * Relasi yang benar:
     * Satu Category (Kategori) memiliki BANYAK Item.
     */
    public function items() // <-- 4. Seharusnya relasinya ke Item
    {
        // 'hasMany' berarti "memiliki banyak"
        return $this->hasMany(Item::class);
    }

    // Fungsi lama Anda ('transactiondetail' dan 'category')
    // saya hapus karena secara logika tidak tepat.
    // Relasi ke TransactionDetail harusnya ada di model Item.
}