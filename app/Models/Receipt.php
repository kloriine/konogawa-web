<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $table = 'receipts';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_name',
        'ordered_items',
        'total_price',
        'status',
    ];
}
