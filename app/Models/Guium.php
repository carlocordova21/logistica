<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guium
 *
 * @property $id
 * @property $idProducto
 * @property $idCondicion
 * @property $cantidad
 *
 * @property Condicion $condicion
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guium extends Model
{
    protected $table = "guia";
    public $timestamps = false;
    
    static $rules = [
		'idProducto' => 'required',
		'idCondicion' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 12;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProducto','idCondicion','cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function condicion()
    {
        return $this->hasOne('App\Models\Condicion', 'id', 'idCondicion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'idProducto');
    }
    

}
