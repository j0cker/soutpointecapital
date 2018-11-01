<?php
namespace App\library\classes;
use Illuminate\Support\Facades\Log;
use Mail;
use App;
use Config;
use Lang;

/*
Clase que envía correos a través del cronjob de MailsLauncher get Response
*/

class sendMailsSpam
{   private $data;
    private $direccion = "mudanzas.profesionales1@vash.mx";

    public function __construct($data = []){
        Log::info("[sendMailsSpam][constructor]");
        $this->data = $data;
    }
    public function welcome(){
        Log::info("[sendMailsSpam][welcome][send]");
        $data = $this->data;
        Mail::send('emails.welcome', $data, function($message) use ($data)
        {
            $message->from($this->direccion, Config::get('app.name'));
            $message->subject(Lang::get('messages.emailWelcome'));
            $message->to($data['email']);
        });
    }
    public function reset(){
        Log::info("[sendMailsSpam][reset][send]");
        $data = $this->data;
        Mail::send('emails.reset', $data, function($message) use ($data)
        {
            $message->from($this->direccion, Config::get('app.name'));
            $message->subject(Lang::get('messages.emailReset'));
            $message->to($data['email']);
        });
    }
    public function verificationCompare(){
        Log::info("[sendMailsSpam][verificationCompare]");
        $data = $this->data;
        $verification_code = str_random(20);
        $email=$data["mail_previous"];
        $ClientesVer = App\Library\dao\Clientes::updateVerify($verification_code);
        Log::info('[sendMailsSpam][saveProfile][Post][All][WithoutPass] emailBD: '.$email.' emailPost: '.$data["email"].'');
        if($email!=$data["email"]){
            if($ClientesVer==1){
                $data["verification_code"] = $verification_code;
                Log::info("[sendMailsSpam][verificationCompare][send]");
                Mail::send('emails.verification', $data, function($message) use ($data)
                {
                    $message->from($this->direccion, Config::get('app.name'));
                    $message->subject(Lang::get('messages.emailVerification'));
                    $message->to($data['mail_previous']);
                });
                Mail::send('emails.verification', $data, function($message) use ($data)
                {
                    $message->from($this->direccion, Config::get('app.name'));
                    $message->subject(Lang::get('messages.emailVerification'));
                    $message->to($data['email']);
                });

            } else {
                Log::info("[sendMailsSpam][verificationCompare][no send]");
            }
        } else {
            Log::info("[sendMailsSpam][verificationCompare][no send]");
        }
    }
    public function newPassword(){
        Log::info("[sendMailsSpam][newPassword][send]");
        $data = $this->data;
        Mail::send('emails.password', $data, function($message) use ($data)
        {
            $message->from($this->direccion, Config::get('app.name'));
            $message->subject(Lang::get('messages.emailReset'));
            $message->to($data['email']);
        });
    }
    public function singleMailUnique(){
        Log::info("[sendMailsSpam][singleMailUnique][send]");
        $data = $this->data;
        Mail::send('emails.custom', $data, function($message) use ($data)
        {
            $message->from($this->direccion, Config::get('app.name'));
            $message->subject($data['subject']);
            $message->to($data['email']);
        });
    }
    public function customMail(){
        Log::info("[sendMailsSpam][customMail][send]");
        $data = $this->data;
        try {
          Mail::send('emails.custom', $data, function($message) use ($data)
          {
            $message->from($this->direccion, Config::get('app.name'));
            $message->subject($data['subject']);
            $message->to($data['email']);
          });
        } catch(\Exception $e){
          Log::error("[sendMailsSpam][customMail][send] ERROR: ".$e." ".$data['email']."");
        }
    }

}
