<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the category the product belongs to
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFiltered(Builder $query)
    {
        $request = request();
        return $query
            ->when($request->category_id, function ($query) use ($request) {
                $query->where('category_id', $request->category_id);
            })
            ->when($request->order_by, function ($query) use ($request) {
                $query->orderBy($request->order_by, $request->order_direction ?? 'asc');
            });
    }
}
