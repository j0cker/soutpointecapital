<?php
namespace App\Library\vo;

use Illuminate\Support\Facades\Log;

class responseJSON
{
    public $success;
    public $description;
    public $recordsTotal;

    public function __construct($success, $description, $recordsTotal){
        Log::info("[responseJSON][constructor]");
        $this->success = $success;
        $this->description = $description;
        $this->recordsTotal = $recordsTotal;

    }

    public function getSuccess(){
        Log::info("[responseJSON][getSuccess]");
        return $this->success;
    }
}
