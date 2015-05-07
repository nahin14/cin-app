<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'dob', 'addressLine1', 'addressLine2',
        'city', 'postcode', 'email', 'telephone', 'mobile', 'licenseNo',
        'insuranceTypeID', 'insurerID'];

    /**
     * @return mixed
     */
    public function insuranceType()
    {
        return InsuranceType::where('id', $this->insuranceTypeID)->first()->insuranceTypeName;
    }

    /**
     * Getting the 'slug' (insurer name) field for a corresponding 'insurerID'
     * @return mixed
     */
    public function insurer()
    {
        return Insurer::where('id', $this->insurerID)->first()->slug;
    }

    /**
     * Relationship
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }

}
