<?php

namespace Ash\Validation\Rules;

use Ash\Validation\Rule;

class AlphaDash extends Rule
{

    /** @var string */
    protected $message = ":attribute only allows a-z, 0-9, _ and -";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        return preg_match('/^[\pL\pM\pN_-]+$/u', $value) > 0;
    }
}
