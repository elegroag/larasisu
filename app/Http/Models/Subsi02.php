<?php
namespace sisu\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Subsi02 extends Model
{
	protected $table = "subsi02";

	protected $primaryKey = "nit";

	protected $fillable = [
		"nit","coddoc","razsoc","nomemp","cedrep","repleg","codciu","telefono","codzon","codact","codind","fecafi","fecsis","estado"
	];

	public function sucursales()
	{
		return $this->belongsToMany(Subsi48::class, 'subsi02', 'nit', 'nit');
	}

}
