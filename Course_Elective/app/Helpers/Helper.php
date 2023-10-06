<?php
namespace App\Helpers;

class Helper{

    public static function id_card_generator($model, $trow, $length = 4, $prefix){

        $data = $model::orderBy('id', 'desc')->first(); // getting last inserted record data
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }
        else{
            $code = substr($data->trow, strlen($prefix)+1); //e20240001 get last code without prefix
            $actial_last_number = (intval($code)/1)*1; // if last code is 000012 then the last number = (000012/1)*1 = 12
            $increment_last_number = $actial_last_number+1; // if last code is 000012 , last number is 12, so increment last number by 1 = 12+1 = 13;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }

        $zeros = "";

        for($i=0; $i<$og_length; $i++){
            $zeros.="0";
        }
        return $prefix.$zeros.''.$last_number;

    }


}











?>
