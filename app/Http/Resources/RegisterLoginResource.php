<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterLoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name'          => $this->name ?? null,
            'date_of_birth' => $this->date_of_birth ?? null,
            'gender'        => $this->gender ?? null,
            'phone_number'  => $this->phone_number ?? null,
            'country'       => $this->country_id ?? null,
            'email'         => $this->email ?? null,
            'password'      => '******',
        ];
    }
}
