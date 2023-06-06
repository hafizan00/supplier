<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize System';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        collect([
            [
                'permission'    => 'permission:create-role',
                'name'          => 'affiliate',
                'guard'         => 'web',
                'permissions'   => 'create articles|edit articles',
            ],
            [
                'permission'    => 'permission:create-role',
                'name'          => 'affiliate',
                'guard'         => 'web',
                'permissions'   => 'create articles|edit articles',
            ],
        ])->each($this->message(...));
    }

    public function message(array $data)
    {
        return $this->call($data['permission'], [
            'name'          => $data['name'],
            'guard'         => $data['guard'],
            'permissions'   => $data['permissions']
        ]);
    }
}
