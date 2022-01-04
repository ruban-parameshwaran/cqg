<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => (string)$this->id,
            "type" => "author",
            "attributes" => [
                "name" => $this->name,
                "category_id" => $this->category_id,
                "description" => $this->description,
                "img_url" => $this->img_url,
                "slug" => $this->slug
            ]
        ];
    }
}
