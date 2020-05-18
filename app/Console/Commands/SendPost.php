<?php

namespace App\Console\Commands;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cookie;
use GuzzleHttp\Exception\RequestException;

class SendPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:post';

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
     * @return mixed
     */
    public function handle()
    {
        try {

            $client = new Client(['base_uri' => 'https://atomic.incfile.com']);
            $message = 'send a simple POST';
            $response = $client->request(
                'POST', 
                '/fakepost',
                [
                    'headers' => ['Content-type' => 'application/json'],
                    'json' => [
                        'message' => $message,
                    ],
                ]
            );

            $this->info($response->getStatusCode() . ' Request sent');
            $this->info($response->getBody());

            return true;

        } catch (RequestException $e) {

            $this->info($this->handlingAnswer($e->getCode()));
            $this->info(Psr7\str($e->getRequest()));
            if ($e->hasResponse()) {
                $this->info(Psr7\str($e->getResponse()));
            }

            return false;

        } 
        
    }

    private static function handlingAnswer(int $code)
    {

        switch ($code) {
            case 0:
                return (string) 'Error setting certificate verify locations.';
                break;

            case 404:
                return (string) '405 METHOD NOT ALLOWED';
                break;

            case 405:
                return (string) '404 NOT FOUND';
                break;
            
            default:
                return (string) 'We cannot process your request.';
                break;
        }
    }
}
