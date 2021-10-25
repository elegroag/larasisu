<?php
namespace sisu\Console\Commands;

use sisu\Http\Models\Subsi02;
use sisu\Http\Models\Subsi73;
use sisu\Http\Models\Subsi48;
use Illuminate\Console\Command;

class ProcesarGiros extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'procesar_giros {nit}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command para procesar el giro de subsidio';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->buscar_lista();
	}

	public function buscar_sucursal()
	{
		$sucursales =  Subsi02::where("nit",'=','1045017137')->get()->first()->sucursales;
		foreach ($sucursales as $sucursal) 
		{
			$this->info('Display :'.$sucursal->detalle);
		}
	}

	public function buscar_empresa()
	{
		$empresa =  Subsi48::where("nit",'=','24289833')->where("codsuc",'=','001')->get()->first()->empresa;
		$this->info('Display sucursal:'.$empresa->razsoc);
	}

	public function buscar_lista()
	{
		$empresa =  Subsi73::where("nit",'=','24289833')->where("codlis",'=','001')->get()->first()->empresa;
		$this->info('Display lista:'.$empresa->razsoc);
	}
}
