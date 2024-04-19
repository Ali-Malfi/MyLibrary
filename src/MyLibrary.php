<?php

namespace AliMalfi\MyLibrary;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class MyLibrary {
    public function shortenStringImpl1($string){
        // Als de lengte van de string kleiner is dan of gelijk is aan 6, retourneer de originele string, anders retourneer
        // een verkorte versie met het begin, '...', en het einde van de string
        return strlen($string) <= 6 ? $string : substr($string, 0, 3) . "..." . substr($string, -3);
    }

    public function shortenStringIml2($string){
        // Controleer of de lengte van de string kleiner is dan of gelijk is aan 3
        if(strlen($string) <= 3) {
            return $string; // Als ja, retourneer de originele string omdat deze al kort genoeg is
        } else {
            // Bereken de lengte van het eerste en laatste deel van de string dat behouden moet blijven
            $firstLength = ceil((strlen($string) - 3) / 2);
            $lastLength = floor((strlen($string) - 3) / 2);

            // Construeer de verkorte string door het eerste deel, gevolgd door '...', en ten slotte het laatste deel samen te voegen
            return substr($string, 0, $firstLength) . "..." . substr($string, -$lastLength);
        }
    }
    public function shortenStringImpl3($string, $preserveLength = 3) {
        // Controleer of de lengte van de string kleiner of gelijk is aan tweemaal de lengte van het te behouden deel
        if(strlen($string) <= ($preserveLength * 2)) {
            return $string;// Als ja, retourneer de originele string omdat deze al kort genoeg is
        } else {
            // Bereken de lengte van het eerste en laatste deel van de string dat behouden moet blijven
            $firstLength = ceil((strlen($string) - ($preserveLength * 2)) / 2);
            $lastLength = floor((strlen($string) - ($preserveLength * 2)) / 2);
            return substr($string, 0, $firstLength) . str_repeat(".", $preserveLength) . substr($string, -$lastLength);
        }
    }
}
//require 'vendor/autoload.php'; // Autoload bestanden van Composer (indien van toepassing)

//$myObject = new Buonzz\MyLibrary\MyClass();
//   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
//   private $m_SampleProperty = '';
 
  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
//   public function shortenString($string){
//       //ertyeuisdfgyr - ert...gyr
//       $length = strlen($string);
//       // Als de lengte van de string 3 of minder is, retourneer gewoon de string
//       if ($length <= 3) {
//           return $string;
//       }
//       // Bepaal de lengte van het eerste en laatste deel van de string
//       $firstLength = ceil(($length - 3) / 2); // Afgerond naar boven om een even aantal karakters te vermijden
//       $lastLength = floor(($length - 3) / 2); // Afgerond naar beneden
//       // Bouw de verkorte string op
//       // Combineer het verkorte middelste deel van de oorspronkelijke string door het eerste deel, de verkorting ('...'), en het laatste deel samen te voegen
//       $verkorteString = substr($string, 0, $firstLength) . "..." . substr($string, -$lastLength);
//
//       return $verkorteString;
//
//       return "Hello World";
//   }
//}
//// Instantieer een object van de MyLibrary klasse om toegang te krijgen tot de shortenString methode
//$myLibrary = new MyLibrary();
//
//// Definieer een voorbeeldstring die verkort moet worden
//$voorbeeldString = "abcdefghijklmnopqrstuvwxyz";
//
//// Roep de shortenString methode aan op het $myLibrary object om de voorbeeldstring te verkorten en druk het verkorte resultaat af
//echo $myLibrary->shortenString($voorbeeldString);






