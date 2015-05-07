<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
	protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'claimID', 'taskInfo', 'statusID', 'taskSetDate', 'taskDeadlineDate', 'notes', 'userID'];

    /**
     * Getting the 'statusName' field for a corresponding 'statusID'
     * @return mixed
     */
    public function status()
    {
        return Status::where('id', $this->statusID)->first()->statusName;
    }

    /**
     * Getting the 'slug' (claim name) field for a corresponding 'claimID'
     * @return mixed
     */
    public function claim()
    {
        return Claim::where('id', $this->claimID)->first()->slug;
    }

    /**
     * Getting the 'slug' (username) field for a corresponding 'userID'
     * @return mixed
     */
    public function user()
    {
        return User::where('id', $this->userID)->first()->slug;
    }


}
