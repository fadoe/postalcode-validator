<?php

namespace FaDoe\PostalCodeValidator;

class GermanPostalCodeValidator
{
    public static function isValid(string $postalCode): bool
    {
        return 0 < preg_match('/^(01|[1-9][0-9])[0-9]{3}$/', $postalCode);
    }
}