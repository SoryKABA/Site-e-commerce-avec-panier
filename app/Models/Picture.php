<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use League\Glide\Urls\UrlBuilderFactory;

class Picture extends Model
{
    use HasFactory;
    protected $fillable = ['filename', 'products_id'];
    public function getUrl(?int $width = null, ?int $heigth = null) {

        if ($width === null) {
            
            return Storage::disk('public')->url($this->filename);
        }
        $urlBuilder = UrlBuilderFactory::create('/images/', config('glide.key'));
        //dd($urlBuilder->getUrl($this->filename, ['w' => $width, 'h' => $heigth, 'fit' => 'crop']));
        return $urlBuilder->getUrl($this->filename, ['w' => $width, 'h' => $heigth, 'fit' => 'crop']);
    }

    protected static function booted(): void
    {
        static::deleting(function (Picture $picture) {
            Storage::disk('public')->delete($picture->filename);
        });
    }
}
