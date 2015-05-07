<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceType extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'insurance_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['insuranceTypeName'];

    /**
     * An Insurance Type has many Clients
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
