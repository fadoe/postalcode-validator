<?php

namespace FaDoe\PostalCodeValidatorTest;

use FaDoe\PostalCodeValidator\GermanPostalCodeValidator;
use PHPUnit\Framework\TestCase;

class GermanPostalCodeValidatorTest extends TestCase
{
    /**
     * @param string $postalCode
     * @param bool $valid
     *
     * @dataProvider germanPostalCodeProvider
     */
    public function testStaticValidatePostalCode(string $postalCode, bool $valid)
    {
        $this->assertEquals($valid, GermanPostalCodeValidator::isValid($postalCode));
    }

    /**
     * @return array
     */
    public function germanPostalCodeProvider()
    {
        return [
            [ '00000', false ],
            [ '00001', false ],
            [ '00010', false ],
            [ '00100', false ],
            [ '01000', true ],
            [ '10000', true ],
            [ '99999', true ],
            [ '100000', false ],
            [ '1000', false ],
            [ '03222', true ],
            [ '07000', true ],
            [ '99000', true ],
        ];
    }
}
