<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealienizeController extends Controller
{
    public function deAlienize(string $alienText)
    {
        /*
         * Programmeer onder dit commentaar jouw functionaliteit de
         * juiste tekst te laten zien. Je mag hierbij *geen* gebruik maken van
    * de ingebouwde functie str_rot13().
         */

        $letters = array(
            "a" => "n",
            "b" => "o",
            "c" => "p",
            "d" => "q",
            "e" => "r",
            "f" => "s",
            "g" => "t",
            "h" => "u",
            "i" => "v",
            "j" => "w",
            "k" => "x",
            "l" => "y",
            "m" => "z",
            "n" => "a",
            "o" => "b",
            "p" => "c",
            "q" => "d",
            "r" => "e",
            "s" => "f",
            "t" => "g",
            "u" => "h",
            "v" => "i",
            "w" => "j",
            "x" => "k",
            "y" => "l",
            "z" => "m",
            " " => " ",
        );


        foreach (str_split(strtolower($alienText)) as $letter) {
            echo $letters[$letter];
        }


    }
    public function showDeAlienizedText()
    {
        echo $this->deAlienize('Nqn Ybirynpr jnf qr nyyrerrefgr cebtenzzrhe');
    }

}

?>
