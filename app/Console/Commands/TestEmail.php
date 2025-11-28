<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sending test email...');

        \Mail::raw('Test email from Laravel application', function ($message) {
            $message->to('sansan.fauzan21@gmail.com')
                    ->subject('Test Email from Laravel');
        });

        $this->info('Test email sent successfully!');
    }
}
