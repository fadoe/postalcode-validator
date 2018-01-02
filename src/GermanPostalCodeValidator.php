<?php

namespace FaDoe\PostalCodeValidator;

class GermanPostalCodeValidator
{
    /**
     * Method isValid.
     *
     * @param string $postalCode
     *
     * @return bool
     */
    public static function isValid(string $postalCode): bool
    {
        $res = 0 < preg_match('/^(0[1-9]|[1-9][0-9])[0-9]{3}$/', $postalCode, $matches);

        return $res;
    }
}