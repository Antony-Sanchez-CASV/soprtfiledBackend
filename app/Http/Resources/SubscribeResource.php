<?php

namespace App\Http\Resources;
use App\Models\Subsvcurse;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscribeResource extends JsonResource
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
            'id_curse'=>,//id del curso
            //'schedule'=>,//materia del curso
            'name'=>,
            'description'=>,
            'schedules'=>,
            'instructor'=>,
            'weeks'=>,
            'time_mounth'=>,
            'located'=>,
            'quota'=>,
            
        ];
    }
}
