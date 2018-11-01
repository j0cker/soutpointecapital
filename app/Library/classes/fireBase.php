<?php
namespace App\library\classes;
use Illuminate\Support\Facades\Log;
use Mail;
use App;
use Config;
use Lang;
use Auth;
use DB;
use Carbon\Carbon;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use FCM;
use \Exception;

class fireBase
{
      private $title = "";
      private $body = "";
      private $activity_name = "";
      private $data;
      private $tokens;

      public function __construct($title, $body, $activity_name, $data = [], $tokens = []){
        Log::info("[fireBase][constructor]");

        $this->title = $title;
        $this->body = $body;
        $this->activity_name = $activity_name;
        $this->data = $data;
        $this->tokens = $tokens;

      }

      public function launch(){

        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);

        $notificationBuilder = new PayloadNotificationBuilder($this->title);

        //these badges only works for IOS
        $notificationBuilder->setBody($this->body)
                            ->setSound('default')
                            ->setClickAction($this->activity_name)
                            ->setBadge(1);

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($this->data);

        $optionBuilder = $optionBuilder->build();
        $notificationBuilder = $notificationBuilder->build();
        $dataBuilder = $dataBuilder->build();

        $downstreamResponse = FCM::sendTo($this->tokens, $optionBuilder, $notificationBuilder, $dataBuilder);

        $downstreamResponse->numberSuccess();
        $downstreamResponse->numberFailure();
        $downstreamResponse->numberModification();

        //return Array - you must remove all this tokens in your database
        $downstreamResponse->tokensToDelete();

        //return Array (key : oldToken, value : new token - you must change the token in your database )
        $downstreamResponse->tokensToModify();

        //return Array - you should try to resend the message to the tokens in the array
        $downstreamResponse->tokensToRetry();

        // return Array (key:token, value:errror) - in production you should remove from your database the tokens

        Log::info("[fireBase][launch] numberSuccess: " . $downstreamResponse->numberSuccess() . " numberFailure: " . $downstreamResponse->numberFailure());


      }
}
