<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClaimType extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'claim_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['claimTypeName'];

    /**
     * ClaimType has many Claims
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claims()
    {
        return $this->hasMany('App\Claim');
    }
}
