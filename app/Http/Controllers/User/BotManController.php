<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) { 
            // if ($message == 'hi') {
            //     $this->askName($botman); 
            // }else{
            //     $botman->reply("write 'hi' for testing...");
            // }
            if ($message ) {
                $botman->reply("haha");
            }
        });
        
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) { 
            $name = $answer->getText(); 
            $this->say('Nice to meet you '.$name); 
        });  
    } 
}
