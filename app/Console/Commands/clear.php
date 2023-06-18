<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class clear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'routes:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear & cache routes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $commands = [
            'optimize',
            'route:cache',
            'route:clear',
        ];

        foreach ($commands as $command) {
            $this->info("Executing command: $command");
            $this->call($command);
        }

        $this->info('All commands executed successfully.');
    }
    
}
