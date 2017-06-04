<?php
namespace App\Modules\Mail\Services;

use GuzzleHttp\Psr7\Request;
use Swift_SmtpTransport;

class MailService
{
    public function send(Request $request)
    {

    }
    public function test()
    {

        try{
            $transport = Swift_SmtpTransport::newInstance(config('mail.host'), config('mail.port'), config('mail.encryption'));
            $transport->setUsername(config('mail.username'));
            $transport->setPassword(config('mail.password'));

            $mailer = \Swift_Mailer::newInstance($transport);

            $mailer->getTransport()->start();

            return 'ok';
        } catch (Swift_TransportException $e) {
            return $e->getMessage();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}