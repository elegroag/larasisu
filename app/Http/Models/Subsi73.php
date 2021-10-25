<?php
namespace sisu\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Subsi73 extends Model
{
	protected $table ='subsi73';
	
	protected $primaryKey = "nit";

	protected $fillable = [
		"nit","codlist","detalle"
	];

	/**
	 * empresa propietaria del la sucursal
	 */
	public function empresa()
	{
		return $this->belongsTo(Subsi02::class, 'nit', 'nit');
	}
}