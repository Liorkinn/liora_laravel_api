<?php

namespace App\Http\Resources;
use App\Author;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'name' => $this->name,
            'age' =>$this->age,
            'blogs' => $this->blogs,
        ];
    }
}
