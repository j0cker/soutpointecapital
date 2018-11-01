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
class Index extends Controller
{

    public function index(Request $request){
        Log::info('[index]');


         $title = "".Config::get('app.name').".";
         $lang = $this->getLanguage();

         //$lang = Config::get('app.locale');
         //$lang = App::getLocale();
         //$lang = Lang::getLocale();
         return view('layouts.index.index',["title" => $title, "lang" => $lang]);
     }
 

     public function people(Request $request){
      Log::info('[people]');


       $title = "".Config::get('app.name').".";
       $lang = $this->getLanguage();

       //$lang = Config::get('app.locale');
       //$lang = App::getLocale();
       //$lang = Lang::getLocale();
       return view('layouts.index.people',["title" => $title, "lang" => $lang]);
   }
 

   public function portfolio(Request $request){
    Log::info('[portfolio]');


     $title = "".Config::get('app.name').".";
     $lang = $this->getLanguage();

     //$lang = Config::get('app.locale');
     //$lang = App::getLocale();
     //$lang = Lang::getLocale();
     return view('layouts.index.portfolio',["title" => $title, "lang" => $lang]);
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
