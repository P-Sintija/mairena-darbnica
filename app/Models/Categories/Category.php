<?php

namespace App\Models\Categories;

use Ebess\AdvancedNovaMediaLibrary\Fields\Media as EbessMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Category extends Model implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'type',
    ];

    protected array $translatable = ['name', 'slug'];

    public function registerMediaConversions(EbessMedia|Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
