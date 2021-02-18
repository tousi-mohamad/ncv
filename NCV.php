<?php

namespace tousi\NCV;

//salam
class NCV{


    protected $input;

    public function NCV($input){

        $this->input=$input;

        $error = false;


        $input = preg_replace("/[^0-9]/", '', $input);

        if (strlen($input) != 10) {
            $error = true;
            echo "تعداد کراکتر وارد شده صحیح نیست";
        }

        if ($error === false) {


            $input = str_split($input);

            $checkNumber = $input[9];


            $totalSum = ($input[0] * 10) + ($input[1] * 9) + ($input[2] * 8) + ($input[3] * 7) + ($input[4] * 6) + ($input[5] * 5) + ($input[6] * 4) + ($input[7] * 3) + ($input[8] * 2);

            $remain = $totalSum % 11;

            if ($remain == 0 && $remain != $checkNumber) {
                $error = true;
                $msg = "کد ملی وارد شده 5معتبر نیست";
            } elseif ($remain == 1 && $remain != $checkNumber) {
                $error = true;
                $msg = "کد ملی وارد شده معتبر نیست";
            } elseif ($remain > 1) {

                $x = 11 - $remain;

                if ($x == $checkNumber) {
                    $msg = 'کد ملی معتبر است';
                } else {
                    $msg = 'کد ملی وارد شده نا معتبر است';

                }


            }
            return $msg;
        }


//print_r($input);
    }


}

