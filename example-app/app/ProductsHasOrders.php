<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $products_idproducts
 * @property int $orders_idorders
 * @property int $quantity
 */
class ProductsHasOrders extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products_has_orders';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'products_idproducts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orders_idorders', 'quantity'
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
        'products_idproducts' => 'int', 'orders_idorders' => 'int', 'quantity' => 'int'
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
