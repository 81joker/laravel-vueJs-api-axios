<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => number_format($this->price / 100, 2),
            // 'attributes' => [
            //     'name' => $this->name,
            //     // 'category_id' => $this->category_id,
            //     'description' => $this->description,
            //     'price' => number_format($this->price / 100, 2),
            //     'created_at' => $this->created_at,
            //     'updated_at' => $this->updated_at,
            // ],
            // 'relationships' => [
            //     'id' => (string) $this->user->id,
            //     'User name' => $this->user->name,
            // ],
        ];
    }
}
