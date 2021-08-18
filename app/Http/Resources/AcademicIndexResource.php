<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AcademicIndexResource extends JsonResource
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
            'name' => $this->name,
            'tutor' => $this->tutor,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'cover' => $this->cover,
            'price' => $this->price,
        ];
    }
}
