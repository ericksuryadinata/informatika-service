<?php

namespace App\Console\Commands;

use Illuminate\Console\Command as LaravelCommand;
use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class StartCommand extends LaravelCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start Command to get you started';

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
        $this->replyWithMessage(
            ['text' => 'Selamat Datang di Universitas 17 Agustus 1945 BOT, silahkan ketik apapun pesan yang anda minta, seperti : '],
        );

        $this->replyWithChatAction(
            ['action' => Actions::TYPING]
        );

        $response = '1. Jadwal Seminar TA';

        $this->replyWithMessage(
            ['text' => $response]
        );
    }
}
