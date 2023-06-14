<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ShoppingItem extends Model
{
    protected $fillable = [
        'product_name', 'deadline', 'checked_by', 'purchased',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
