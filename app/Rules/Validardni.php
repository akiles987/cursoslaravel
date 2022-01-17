<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Http\Requests\Validardni1;

class Validardni implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        return ($this->isValidNif($value) || $this->isValidNie($value));
    }

    public function message()
   {
      return 'Debe ser un Nif o Nie válido';
   }

   public function isValidNif($nif)
   {
      $nifRegEx = '/^[0-9]{8}[A-Z]$/i';
      $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

      if (preg_match($nifRegEx, $nif)) {
         return ($letras[(substr($nif, 0, 8) % 23)] == $nif[8]);
      }

      return false;
   }

   public function isValidNie($nif)
   {
      $nieRegEx = '/^[KLMXYZ][0-9]{7}[A-Z]$/i';
      $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

      if (preg_match($nieRegEx, $nif)) {

         $r = str_replace(['X', 'Y', 'Z'], [0, 1, 2], $nif);

         return ($letras[(substr($r, 0, 8) % 23)] == $nif[8]);
      }

      return false;
   }
}