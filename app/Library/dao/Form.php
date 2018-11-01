<?php

namespace App\Library\dao;
use Config;
use App;

use Illuminate\Database\Eloquent\Model;

/*

update and insert doesnt need get->()


*/

class Form extends Model
{
    protected $table = 'form';
    public $timestamps = true;
    //protected $dateFormat = 'U';
    const CREATED_AT = "CREATED_AT";
    const UPDATED_AT = null;

    public function scopeAddForm($query, $name, $email, $body)
    {

        $queue_mails = new Form;

        $queue_mails->I_UID = 0;
        $queue_mails->N_PLANTILLA = "emails.custom";
        $queue_mails->N_SEND_TO = "info@southpointecapital.com";
        $queue_mails->I_PRIORIDAD = 1;
        $queue_mails->body = "Name: ".$name."<br />Email: ".$email."<br />Body: ".$body." ";
        $queue_mails->subject = "New Message From Webpage";
        $queue_mails->name = "Soutpointecapital";
        $queue_mails->q_tipo = "";
        $queue_mails->VAR_1 = "";
        $queue_mails->VAR_2 = "";

        $queue_mails->save();

    

        return true;
    }

}
?>
