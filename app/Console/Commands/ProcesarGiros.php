<?php
namespace sisu\Console\Commands;

use sisu\Http\Models\Subsi02;
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
		$empresa =  Subsi02::find($this->argument('nit'));
		$this->info('Display :'.$empresa->cedrep);
	}
}
