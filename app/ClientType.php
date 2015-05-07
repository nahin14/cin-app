<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['clientTypeName'];

    /**
     * ClientType has many Claims
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claimsClientType()
    {
        return $this->hasMany('App\Claim');
    }
}
