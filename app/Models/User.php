<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'Registration';

    /**
     * The table column's primary key.
     *
     * @var string
     */
    protected $primaryKey = 'RegID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'RegID', 'EmailAddress', 'Username',
        'Password', 'DateRegistered', 'LastName',
        'FirstName', 'MiddleName', 'Gender',
        'Religion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['Password'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
	protected $dates = ['DateRegistered'];
}
