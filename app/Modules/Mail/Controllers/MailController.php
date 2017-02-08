<?php
namespace App\Modules\Mail\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Mail\Services\MailService;
use GuzzleHttp\Psr7\Request;

class MailController extends Controller {
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function send(Request $request){
        return response()->json($this->mailService->send($request));
    }

    public function test()
    {
        return response()->json($this->mailService->test());
    }

}