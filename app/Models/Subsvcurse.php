<?php

namespace App\Models;
use App\Models\Vcurse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Subsvcurse
 *
 * @property $id
 * @property $id_vcurse
 * @property $id_user
 * @property $id_state
 * @property $created_at
 * @property $updated_at
 *
 * @property State $state
 * @property User $user
 * @property Vcurse $vcurse
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subsvcurse extends Model
{
    use HasFactory;

    
    static $rules = [
		'id_vcurse' => 'required',
		'id_user' => 'required',
		'id_state' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vcurse','id_user','id_state'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function state()
    {
        return $this->hasOne('App\Models\State', 'id', 'id_state');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vcurse()
    {
        return $this->hasOne('App\Models\Vcurse', 'id', 'id_vcurse');
    }
    public function getNameCurse(){
        $curse=Vcurse::where('id_vcurse',$this->id_vcurse)->first();
        return "$curse->name";
    }
    public function getDescriptionCurse(){
        $curse=Vcurse::where('id_vcurse',$this->id_vcurse)->first();
        return "$curse->name";
    }
    public function getCapacityCurse(){
        $curse=Vcurse::where('id_vcurse',$this->id_vcurse)->first();
        return "$curse->name";
    }

}
