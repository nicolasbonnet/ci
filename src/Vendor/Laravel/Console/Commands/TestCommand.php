<?php

namespace PragmaRX\TestsWatcher\Vendor\Laravel\Console\Commands;

class TestCommand extends BaseCommand
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'ci:work';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Continuously run tests';

	/**
	 * Create a new command instance.
	 *
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
	public function fire()
	{
		$this->getLaravel()->make('ci.tester')->run($this);
	}

    /**
     * Handle command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->fire();
    }
}
