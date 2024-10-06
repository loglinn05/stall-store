<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "price" => $this->price,
            "old_price" => $this->old_price,
            "image_url" => env("APP_URL") . Storage::url($this->image_url),
            "category" => $this->category,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
