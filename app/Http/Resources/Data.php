<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Data extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($request);
//        return parent::toArray($request);
        
        return [
            'data' => $this->data,
        ];
    }
}
