<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitor extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'solicitors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'firmName', 'addressLine1', 'addressLine2', 'city', 'postcode', 'telephone', 'mobile', 'email'];

    /**
     * @return mixed
     */

    /**
     * A Solicitor has many Claims
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claimsSolicitor()
    {
        return $this->hasMany('App\Claim');
    }
}
