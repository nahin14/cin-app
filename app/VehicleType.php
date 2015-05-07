<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicle_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['vehicleTypeName'];

    /**
     * Vehicle Type has many Vehicles
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
