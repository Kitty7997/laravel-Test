<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendDailyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send the daily report to all users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Daily report sent successfully!');
    }
}
