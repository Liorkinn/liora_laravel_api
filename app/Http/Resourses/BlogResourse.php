<?php

namespace App\Http\Resources;
use App\Blog;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
         'description' =>$this->description,
         'author_id' =>$this->author_id,
         'orders'=>$this->orders,
         'revenue'=>$this->revenue,
         'price'=>$this->price,
         'sold'=>$this->sold,
         'salereport'=>$this->salereport,
        ];
    }
}
