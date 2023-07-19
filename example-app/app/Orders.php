<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $id
 * @property int      $customer_id
 * @property int      $idorders
 * @property int      $id
 * @property int      $id
 * @property int      $id
 * @property int      $id
 * @property int      $number
 * @property int      $total
 * @property int      $total
 * @property int      $quantity
 * @property int      $customers_idcustomers
 * @property int      $number
 * @property int      $total
 * @property int      $customer_id
 * @property int      $number
 * @property int      $total
 * @property int      $customer_id
 * @property int      $number
 * @property int      $total
 * @property int      $customer_id
 * @property int      $total
 * @property int      $customers_id
 * @property Date     $date
 * @property string   $number
 * @property string   $number
 * @property string   $date
 * @property string   $total_price
 * @property string   $number
 * @property string   $ordername
 * @property DateTime $date
 * @property DateTime $date
 * @property DateTime $date
 * @property DateTime $date
 * @property DateTime $date
 * @property DateTime $date
 * @property float    $totalorderprice
 */
class Orders extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
        'customer_id', 'idorders', 'number', 'date', 'total', 'number', 'customer_id', 'date', 'total', 'number', 'date', 'total_price', 'quantity', 'customers_idcustomers', 'number', 'total', 'date', 'customer_id', 'number', 'total', 'date', 'customer_id', 'number', 'total', 'date', 'customer_id', 'number', 'customer_id', 'date', 'total', 'ordername', 'totalorderprice', 'date', 'customers_id'
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
        'id' => 'int', 'customer_id' => 'int', 'idorders' => 'int', 'id' => 'int', 'id' => 'int', 'id' => 'int', 'id' => 'int', 'number' => 'int', 'date' => 'date', 'total' => 'int', 'number' => 'string', 'date' => 'datetime', 'total' => 'int', 'number' => 'string', 'date' => 'string', 'total_price' => 'string', 'quantity' => 'int', 'customers_idcustomers' => 'int', 'number' => 'int', 'total' => 'int', 'date' => 'datetime', 'customer_id' => 'int', 'number' => 'int', 'total' => 'int', 'date' => 'datetime', 'customer_id' => 'int', 'number' => 'int', 'total' => 'int', 'date' => 'datetime', 'customer_id' => 'int', 'number' => 'string', 'date' => 'datetime', 'total' => 'int', 'ordername' => 'string', 'totalorderprice' => 'float', 'date' => 'datetime', 'customers_id' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date', 'date', 'date', 'date', 'date', 'date', 'date'
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
