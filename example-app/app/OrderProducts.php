<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $orders_id
 * @property int $products_id
 * @property int $quantity
 */
class OrderProducts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_products';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'orders_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id', 'quantity'
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
        'orders_id' => 'int', 'products_id' => 'int', 'quantity' => 'int'
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
