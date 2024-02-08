<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $create_at = null;
    protected $update_at = null;
    protected $fillable = ['categoryname'];
}
