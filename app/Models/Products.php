<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Products extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'description',
    'quantity',
    'price',
    'categories_id',
    'sizes_id',
    'slug'
    ];

    public function categories() {
        return $this->belongsTo(Categories::class);
    }

    public function sizes() {
        return $this->belongsTo(Sizes::class);
    }

    public function pictures() {
        return $this->hasMany(Picture::class);
    }

    public function attachFiles(array $files) {
        $pictures = [];

        foreach($files as $file) {
            if ($file->getError()) {
                continue;
            }
            $filename = $file->store('product'.$this->id, 'public');
            $pictures[] = [
                'filename' => $filename
            ];
        }
        if (count($pictures) > 0) {
            $this->pictures()->createMany($pictures);
        }
    }

    public function getImage() : ?Picture {
        return $this->pictures[0] ?? null;
    }


    
}
