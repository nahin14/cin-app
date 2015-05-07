<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'clientID', 'vehicleTypeID'];

    /**
     * Getting the 'slug' (client name) field for a corresponding 'clientID'
     * @return mixed
     */
    public function client()
    {
        return Client::where('id', $this->clientID)->first()->slug;
    }

    /**
     * Getting the 'vehicleTypeName' field for a corresponding 'vehicleTypeID'
     * @return mixed
     */
    public function vehicleType()
    {
        return VehicleType::where('id', $this->vehicleTypeID)->first()->vehicleTypeName;
    }
}
