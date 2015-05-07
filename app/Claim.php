<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */
class Claim extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'claims';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'claimTypeID', 'claimDate', 'statusID', 'claimInfo',
        'notes', 'clientID', 'clientTypeID', 'userID', 'solicitorID'];

    /**
     * Getting the 'claimTypeName' field for a corresponding 'claimTypeID'
     * @return mixed
     */
    public function claimType()
    {
        return ClaimType::where('id', $this->claimTypeID)->first()->claimTypeName;
    }

    /**
     * Getting the 'statusName' field for a corresponding 'statusID'
     * @return mixed
     */
    public function status()
    {
        return Status::where('id', $this->statusID)->first()->statusName;
    }

    /**
     * Getting the 'slug' (Client Name) field for a corresponding 'clientID'
     * @return mixed
     */
    public function client()
    {
        return Client::where('id', $this->clientID)->first()->slug;
    }

    /**
     * Getting the 'clientTypeName' field for a corresponding 'clientTypeID'
     * @return mixed
     */
    public function clientType()
    {
        return ClientType::where('id', $this->clientTypeID)->first()->clientTypeName;
    }

    /**
     * Getting the 'name' field for a corresponding 'userID'
     * @return mixed
     */
    public function user()
    {
        return User::where('id', $this->userID)->first()->name;
    }

    /**
     * Getting the 'slug' (solicitor name) field for a corresponding 'solicitorID'
     * @return mixed
     */
    public function solicitor()
    {
        return Solicitor::where('id', $this->solicitorID)->first()->slug;
    }

    /**
     * A Claim has many Tasks
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

}
