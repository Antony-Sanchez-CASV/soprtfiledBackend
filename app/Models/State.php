<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "states";
    static $rules = [
		'name' => 'required',

    ];
    protected $fillable = 
        [
            "name",
        ];
    use HasFactory;
    //relaciones
    public function subsvcurse()
    {
        return $this->hasMany(Subsvcurse::class);
    }
    public function lendsfield()
    {
        return $this->hasMany(Lendsfiel::class);
    }
}
