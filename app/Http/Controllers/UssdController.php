<?php

namespace App\Http\Controllers;
use App\Ussd;

class UssdController extends Controller
{
    
    public function show(){
        $ussd = new Ussd;
        $parties = array(1 => "ACCORD", 2 => "AAC", 3 => "ACPN", 4 => "ADC", 5 => "APC", 6 => "APGA",
            7 => "GDPN", 8 => "FDP", 9 => "PDP", 10 => "PPN", 11 => "YES PARTY", 12 => "YPP"
        );
        if(!empty($_POST)){
            $sessionId      =   $_POST['sessionId'];
            $serviceCode    =   $_POST['serviceCode'];
            $phoneNumber    =   $_POST['phoneNumber'];
            $text           =   $_POST['text'];
            // $textArray      =   explode('*', $text);
            // $userResponse   =   trim(end($textArray));
            switch($text){
                case "":
                    $response = "CON Please choose a party.\n"; 
                    foreach ($parties as $key => $value) {
                        $response   .=    " $key. $value.\n"; 
                    }
                    echo $response;
                break;

                case "1":
                        $this->cumulate($ussd,$parties[1]);
                        $response = $this->getCumulative($ussd,$parties[1]);
                        echo $response;
                break;

                case "2":
                        $this->cumulate($ussd,$parties[2]);
                        $response = $this->getCumulative($ussd,$parties[2]);
                        echo $response;
                break;

                case "3":
                        $this->cumulate($ussd,$parties[3]);
                        $response = $this->getCumulative($ussd,$parties[3]);
                        echo $response;
                break;

                case "4":
                        $this->cumulate($ussd,$parties[4]);
                        $response = $this->getCumulative($ussd,$parties[4]);
                        echo $response;
                break;

                case "5":
                        $this->cumulate($ussd,$parties[5]);
                        $response = $this->getCumulative($ussd,$parties[5]);
                        echo $response;
                break;

                case "6":
                        $this->cumulate($ussd,$parties[6]);
                        $response = $this->getCumulative($ussd,$parties[6]);
                        echo $response;
                break;

                case "7":
                        $this->cumulate($ussd,$parties[7]);
                        $response = $this->getCumulative($ussd,$parties[7]);
                        echo $response;
                break;

                case "8":
                        $this->cumulate($ussd,$parties[8]);
                        $response = $this->getCumulative($ussd,$parties[8]);
                        echo $response;
                break;

                case "9":
                        $this->cumulate($ussd,$parties[9]);
                        $response = $this->getCumulative($ussd,$parties[9]);
                        echo $response;
                break;

                case "10":
                        $this->cumulate($ussd,$parties[10]);
                        $response = $this->getCumulative($ussd,$parties[10]);
                        echo $response;
                break;

                case "11":
                        $this->cumulate($ussd,$parties[11]);
                        $response = $this->getCumulative($ussd,$parties[11]);
                        echo $response;
                break;

                case "12":
                        $this->cumulate($ussd,$parties[12]);
                        $response = $this->getCumulative($ussd,$parties[12]);
                        echo $response;
                default:
                    $response = "END Please enter a valid option";
                    break;    
            }
        }
    }

    public function cumulate($modelVar,$party){
        $id =   1;
        try{
            $modelVar::find($id)->increment($party);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function getCumulative($modelVar,$party){
        $id =   1;
        try{
            $count  = $modelVar::select($party)->where('id',1)->first();
            $val = $count->$party;
            $res    = "END $val ";
            return $res;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    
}
