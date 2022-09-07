<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

class Svcurse extends Model
{
    static $rules = [
		'id_vCurse' => 'required',
		'id_schedule' => 'required',
		'quotaAvalible' => 'required',

    ];
    protected $table = "svcurses";
    protected $fillable = 
        [
            "id",
            "id_vCurse",
            "id_schedule",
            "quotaAvalible",
        ];
    use HasFactory;
    public function vcurses()
    {
        return $this->belongsToMany(Vcurse::class)->withTimestamps();
    }
    public function schedules()
    {
        return $this->belongsToMany(Schedule ::class)->withTimestamps();
    }
    public function getHours(){
        $sch=Schedule::where('id',$this->id_schedule)->first();
        return $sch->gethour();
    } 
    public function getDays(){
        $sch=Schedule::where('id',$this->id_schedule)->first();
        return $sch->getDayName();
    } 
}
