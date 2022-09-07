<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Schedule;
use App\Http\Resources\ScheduleResource;

class SvcurseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Muestra los horarios de cursos
        return [

            'day'=>$this->getDays(),
            'time'=>$this->getHours(),


        ];
    }
}
