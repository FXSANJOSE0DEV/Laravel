<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $idcustomers
 * @property int    $id
 * @property int    $id
 * @property int    $id
 * @property int    $id
 * @property int    $customerzipcode
 * @property int    $zipcode
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $customercity
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $postal_code
 * @property string $city
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $adresse
 * @property string $city
 * @property string $first_name
 * @property string $last_name
 * @property string $adresse
 * @property string $city
 * @property string $first_name
 * @property string $last_name
 * @property string $adresse
 * @property string $city
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $postal_code
 * @property string $city
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $customeraddress
 * @property string $city
 */
class Customers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idcustomers', 'first_name', 'last_name', 'address', 'customerzipcode', 'customercity', 'first_name', 'last_name', 'address', 'postal_code', 'city', 'first_name', 'last_name', 'email', 'first_name', 'last_name', 'adresse', 'zip_code', 'city', 'first_name', 'last_name', 'adresse', 'zip_code', 'city', 'first_name', 'last_name', 'adresse', 'zip_code', 'city', 'first_name', 'last_name', 'address', 'postal_code', 'city', 'lastname', 'firstname', 'email', 'zipcode', 'customeraddress', 'city'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'idcustomers' => 'int', 'id' => 'int', 'id' => 'int', 'id' => 'int', 'id' => 'int', 'first_name' => 'string', 'last_name' => 'string', 'address' => 'string', 'customerzipcode' => 'int', 'customercity' => 'string', 'first_name' => 'string', 'last_name' => 'string', 'address' => 'string', 'postal_code' => 'string', 'city' => 'string', 'first_name' => 'string', 'last_name' => 'string', 'email' => 'string', 'first_name' => 'string', 'last_name' => 'string', 'adresse' => 'string', 'city' => 'string', 'first_name' => 'string', 'last_name' => 'string', 'adresse' => 'string', 'city' => 'string', 'first_name' => 'string', 'last_name' => 'string', 'adresse' => 'string', 'city' => 'string', 'first_name' => 'string', 'last_name' => 'string', 'address' => 'string', 'postal_code' => 'string', 'city' => 'string', 'lastname' => 'string', 'firstname' => 'string', 'email' => 'string', 'zipcode' => 'int', 'customeraddress' => 'string', 'city' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
