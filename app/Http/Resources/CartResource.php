<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $items = CartItemResource::collection($this->items);
        return [
            'items' => $items,
            'total' => collect($items)->sum('total'),
            'count' => collect($items)->count()
        ];
    }
}
