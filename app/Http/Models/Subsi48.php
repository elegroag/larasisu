<?php
namespace sisu\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Subsi48 extends Model
{
	protected $table ='subsi48';
	
	protected $primaryKey = "nit";

	protected $incrementing = false;

	protected $fillable = [
		"nit","codsuc","fecafi","detalle","estado"
	];

	/**
	 * empresa propietaria del la sucursal
	 */
	public function empresa()
	{
		return $this->belongsTo(Subsi02::class, 'nit', 'nit');
	}
}