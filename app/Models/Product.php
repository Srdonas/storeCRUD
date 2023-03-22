<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\orderDetails;
/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $price
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
		'name' => 'required',
		'price' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','price','stock'];

/**
 * Get all of the comments for the Product
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function orderDetails(): HasMany
{
    return $this->hasMany(orderDetails::class);
}

}
