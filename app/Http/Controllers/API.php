<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Lang;
use App;
use Config;
use Auth;
use DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class API extends Controller
{

    public function postMessage(Request $request){
        Log::info('[postMessage]');

        if($request->isMethod('POST')) {

            //POST Form
            $name = $request->input('name');
            $email = $request->input('email');
            $body = $request->input('body');

            $formAdd = App\Library\dao\Form::addForm($name, $email, $body);
            
            if($formAdd==1){
                $responseJSON = new App\Library\vo\responseJSON(Lang::get('messages.successTrue'),Lang::get('messages.BDsuccess'), 1);
                $responseJSON->data = [];
                return json_encode($responseJSON);
            } else {
                $responseJSON = new App\Library\vo\responseJSON(Lang::get('messages.successFalse'),Lang::get('messages.errorsBD'), 1);
                $responseJSON->data = [];
                return json_encode($responseJSON);
            }
    
        } else {
            abort(404);
        }


         $title = "".Config::get('app.name').".";
         $lang = $this->getLanguage();

         //$lang = Config::get('app.locale');
         //$lang = App::getLocale();
         //$lang = Lang::getLocale();
         return view('layouts.index.index',["title" => $title, "lang" => $lang]);
     }
 
    public function getLanguage(){
      $functions = new App\Library\util\functions();
      $lang = $functions->getUserLanguage();
      return $lang;
    }

    public function date(){
      $date = Carbon::createFromFormat('Y-m-d H:i:s', '2016-12-30 23:37:00', 'America/Detroit');
      $date->setTimezone(Config::get('app.timezone'));//America/Mexico_City
      return $date;
    }


}
