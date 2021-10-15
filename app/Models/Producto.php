<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $idCategoria
 * @property $nombre
 * @property $precio
 * @property $stock
 * @property $status
 * @property $created_at
 * @property $updated_at
 *`
 * @property Carrito[] $carritos
 * @property Categorium $categorium
 * @property Guium[] $guias
 * @property IngresoDetalle[] $ingresoDetalles
 * @property OrdenDetalle[] $ordenDetalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    
    static $rules = [
		'idCategoria' => 'required',
		'nombre' => 'required',
		'precio' => 'required',
		'stock' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 12;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCategoria','nombre','precio','stock','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos()
    {
        return $this->hasMany('App\Models\Carrito', 'idProducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categorium()
    {
        return $this->hasOne('App\Models\Categorium', 'id', 'idCategoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guias()
    {
        return $this->hasMany('App\Models\Guium', 'idProducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresoDetalles()
    {
        return $this->hasMany('App\Models\IngresoDetalle', 'idProducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenDetalles()
    {
        return $this->hasMany('App\Models\OrdenDetalle', 'idProducto', 'id');
    }
    

}
