<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get products that belong to this category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Find the category by its title
     * @param string $title
     * @return TModel|null
     */
    public static function findByTitle(string $title)
    {
        return self::where("title", $title)->first();
    }
}
