<?php

namespace App\Http\Resources;
use App\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        return 
        [
         'title' =>$this->title,
         'ratting' =>$this->ratting,
         'price' =>$this->price,
         'description'=>$this->description,
         'size'=>$this->size,
         'color'=>$this->color,
         'category'=>$this->category,
         'news'=>$this->news,
        ];
    }
}
