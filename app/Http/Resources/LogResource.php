<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
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
            'id' => $this->id,
            'date' => $this->date,
            'login_time' => $this->login_time,
            'logout_time' => $this->logout_time,
            'total_hours' => $this->total_hours,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name
            ]
            ];
    }
}
