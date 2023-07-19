<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $categories_id
 * @property int $idproducts
 * @property int $idproducts
 * @property int $id
 * @property int $id
 * @property int $id
 * @property int $id
 * @property int $quantity
 * @property int $available
 * @property int $price
 * @property int $weight
 * @property int $quantity
 * @property int $price
 * @property int $weight
 * @property int $delivery
 * @property int $stock
 * @property int $available
 * @property int $categories_idcategories
 * @property int $prixTTC
 * @property int $weight
 * @property int $remise
 * @property int $categorie_id
 * @property int $categorie_id
 * @property int $categorie_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $price
 * @property int $weight
 * @property int $quantity
 * @property int $categories_id
 * @property string $productname
 * @property string $productdescription
 * @property string $productimage
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $name
 * @property string $image_url
 * @property string $description
 * @property string $nom
 * @property string $image
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $productname
 * @property string $urlimageproduct
 * @property string $productdescription
 * @property float $productprice
 * @property float $productweight
 * @property float $price
 * @property float $weight
 * @property float $price
 * @property float $weight
 * @property float $price
 * @property float $weight
 * @property float $priceproduct
 * @property float $weight
 * @property boolean $available
 * @property boolean $available
 * @property boolean $available
 * @property boolean $available
 * @property boolean $available
 * @property boolean $stock
 */
class Products extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
        'categories_id', 'idproducts', 'idproducts', 'productname', 'productdescription', 'productprice', 'quantity', 'productweight', 'available', 'productimage', 'category_id', 'name', 'description', 'image', 'price', 'weight', 'available', 'quantity', 'name', 'price', 'weight', 'delivery', 'image_url', 'stock', 'available', 'description', 'categories_idcategories', 'nom', 'prixTTC', 'weight', 'remise', 'image', 'name', 'description', 'price', 'weight', 'image', 'quantity', 'available', 'categorie_id', 'name', 'description', 'price', 'weight', 'image', 'quantity', 'available', 'categorie_id', 'name', 'description', 'price', 'weight', 'image', 'quantity', 'available', 'categorie_id', 'created_at', 'updated_at', 'category_id', 'name', 'description', 'image', 'price', 'weight', 'available', 'quantity', 'productname', 'priceproduct', 'weight', 'urlimageproduct', 'categories_id', 'productdescription', 'stock'
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
        'id' => 'int', 'categories_id' => 'int', 'idproducts' => 'int', 'idproducts' => 'int', 'id' => 'int', 'id' => 'int', 'id' => 'int', 'id' => 'int', 'productname' => 'string', 'productdescription' => 'string', 'productprice' => 'float', 'quantity' => 'int', 'productweight' => 'float', 'available' => 'int', 'productimage' => 'string', 'name' => 'string', 'description' => 'string', 'image' => 'string', 'price' => 'int', 'weight' => 'int', 'available' => 'boolean', 'quantity' => 'int', 'name' => 'string', 'price' => 'int', 'weight' => 'int', 'delivery' => 'int', 'image_url' => 'string', 'stock' => 'int', 'available' => 'int', 'description' => 'string', 'categories_idcategories' => 'int', 'nom' => 'string', 'prixTTC' => 'int', 'weight' => 'int', 'remise' => 'int', 'image' => 'string', 'name' => 'string', 'description' => 'string', 'price' => 'float', 'weight' => 'float', 'image' => 'string', 'available' => 'boolean', 'categorie_id' => 'int', 'name' => 'string', 'description' => 'string', 'price' => 'float', 'weight' => 'float', 'image' => 'string', 'available' => 'boolean', 'categorie_id' => 'int', 'name' => 'string', 'description' => 'string', 'price' => 'float', 'weight' => 'float', 'image' => 'string', 'available' => 'boolean', 'categorie_id' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp', 'name' => 'string', 'description' => 'string', 'image' => 'string', 'price' => 'int', 'weight' => 'int', 'available' => 'boolean', 'quantity' => 'int', 'productname' => 'string', 'priceproduct' => 'float', 'weight' => 'float', 'urlimageproduct' => 'string', 'categories_id' => 'int', 'productdescription' => 'string', 'stock' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
}
