<?php
namespace App\Helpers;

class Helper{

    // public static function id_card_generator($model, $trow, $length = 4, $prefix){

    //     $data = $model::orderBy('id', 'desc')->first(); // getting last inserted record data
    //     if(!$data){
    //         $og_length = $length;
    //         $last_number = '';
    //     }
    //     else{
    //         $code = substr($data->trow, strlen($prefix)+1); //e20240001 get last code without prefix
    //         $actial_last_number = (intval($code)/1)*1; // if last code is 000012 then the last number = (000012/1)*1 = 12
    //         $increment_last_number = $actial_last_number+1; // if last code is 000012 , last number is 12, so increment last number by 1 = 12+1 = 13;
    //         $last_number_length = strlen($increment_last_number);
    //         $og_length = $length - $last_number_length;
    //         $last_number = $increment_last_number;
    //     }

    //     $zeros = "";

    //     for($i=0; $i<$og_length; $i++){
    //         $zeros.="0";
    //     }
    //     return $prefix.$zeros.''.$last_number;
    // }

    public static function id_card_generator($model, $prefix, $length = 4) {
        // Get the last inserted record data
        $data = $model::orderBy('id', 'desc')->first();
        // $data = $model::latest('id')->first();

        // Initialize variables
        $last_number = 0;
        $og_length = $length;

        if ($data) {
            // Extract the numeric part of the ID card
            $code = preg_replace('/[^0-9]/', '', $data->trow);
            $last_number = intval($code);
        }

        // Increment the last number
        $last_number++;

        // Calculate the number of leading zeros
        $zeros = str_repeat('0', max(0, $og_length - strlen($last_number)));

        // Generate the new ID card
        $new_id_card = $prefix . $zeros . $last_number;

        return $new_id_card;
    }
}
?>
