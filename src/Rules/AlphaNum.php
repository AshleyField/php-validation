<?php

namespace AshF\Validation\Rules;

use AshF\Validation\Rule;

class AlphaNum extends Rule
{

    /** @var string */
    protected $message = ":attribute only allows alphabet and numeric";

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

        return preg_match('/^[\pL\pM\pN]+$/u', $value) > 0;
    }
}
