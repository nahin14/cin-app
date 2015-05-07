<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurer extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'insurers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'addressLine1', 'addressLine2', 'city', 'postcode', 'telephone', 'email'];

    /**
     * An Insurer has many Clients
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientsInsurer()
    {
        return $this->hasMany('App\Client');
    }

}
