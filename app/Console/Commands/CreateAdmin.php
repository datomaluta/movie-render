<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	protected $signature = 'movie-quotes:create-admin';

	protected $description = 'Create admin with artisan';

	public function handle()
	{
		$name = $this->ask('Please, Input your username?');
		$password = $this->secret('Please, Input your password?');

		$attributes = ['username'=>$name, 'password'=>bcrypt($password)];

		User::create($attributes);

		$this->info('Admin Created Successfully');

		return Command::SUCCESS;
	}
}
