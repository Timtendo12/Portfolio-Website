<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class morsGenController extends Controller
{
    public function MorseCode(string $MorseCode)
    {

        $array = $this->morsearray();
        // vervangt de letters met elkaar via een array.
        $morse = "";
        foreach (str_split(strtolower($MorseCode)) as $key => $value) {
            $morse = $morse . $array[$value] . " ";
        }
        return $morse;
    }
    public function Text(string $MorseCode)
    {

        $array = $this->morsearray();
        // vervangt de letters met elkaar via een array.
        $morse = "";
        foreach (explode(" ", strtolower($MorseCode)) as $key => $value) {
            $morse = $morse . $array[$value];
        }
        return $morse;
    }
//hij leest uit wat je hebt ingevuld
    public function TexttoMorse(Request $request)
    {
        $normaal = $request->post("normaal");
        $Morse = $request->post("Morse");
        //als je niks hebt ingevuld in beide vakken dan returnd hij het en staat er je hebt niks ingevuld.
        if ($normaal === null and $Morse === null) {
            return View("Morse", ["normaal" => "je hebt niks ingevuld"]);
        }
        // als er iets ingevuld is bij de normaal vak dan returnd hij het met de vertaling.
        if ($normaal !== null) {
            $normaal = $this->MorseCode($normaal);
            return View('Morse', ["normaal" => $normaal, "geluiden" => str_split($normaal)]);
        }
        //als er iet ingevuld is bij de morse vak dan returnd hij het met de vertaling.
        if ($Morse !== null) {
            $Morse = $this->Text($Morse);
            return View("Morse", ["normaal" => $Morse]);
        }

    }


    //toont het in de formulier aan.
    public function show()
    {
        return View("morse", ["normaal" => "", "geluiden" => []]);
    }

private function morsearray()
{
    return array(
        "a" => ".-",
        "b" => "-...",
        "c" => "-.-.",
        "d" => "-..",
        "e" => ".",
        "f" => "..-.",
        "g" => "--.",
        "h" => "....",
        "i" => "..",
        "j" => ".--",
        "k" => "-.-",
        "l" => ".-..",
        "m" => "--",
        "n" => "-.",
        "o" => "---",
        "p" => ".--.",
        "q" => "--.-",
        "r" => ".-.",
        "s" => "...",
        "t" => "-",
        "u" => "..-",
        "v" => "...-",
        "w" => ".--",
        "x" => "-..-",
        "y" => "-.--",
        "z" => "--..",
        " " => " ",
        "0" => "-----",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" => "....-",
        "5" => ".....",
        "7" => "--...",
        "6" => "-....",
        "8" => "---..",
        "9" => "----.",
        ".-" => "a",
        "-..." => "b",
        "-.-." => "c",
        "-.." => "d",
        "." => "e",
        "..-." => "f",
        "--." => "g",
        "...." => "h",
        ".." => "i",
        ".---" => "j",
        "-.-" => "k",
        ".-.." => "l",
        "--" => "m",
        "-." => "n",
        "---" => "o",
        ".--." => "p",
        "--.-" => "q",
        ".-." => "r",
        "..." => "s",
        "-" => "t",
        "..-" => "u",
        "...-" => "v",
        ".--" => "w",
        "-..-" => "x",
        "-.--" => "y",
        "--.." => "z",
    );


}}














