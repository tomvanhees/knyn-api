<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Tenancy\Facades\Tenancy;

class CreateTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $tenant = Tenant::create([
            'path' => 'tomvanhees'
        ]);

        Tenancy::setTenant($tenant);

        User::create([
            'name' => 'tom vanhees',
            'email' => 'tom@datalink.be',
            'password' => Hash::make('tom123')
        ]);
    }
}
