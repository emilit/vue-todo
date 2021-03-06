<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class User extends JsonResource
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
          'email' => $this->email,
          'avatar' => $this->avatar ? 'uploads/' . $this->avatar : '',
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
      ];
    }
}
