<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'total' => $this->total,
            //order model dosyasında total attribute nı tanımladı
            'order_items' => OrderItemResource::collection($this->orderItems)
            //$this->orderItems model dosyasında ilişii
        ];
    }
}
