<?php

namespace Ash\Validation\Rules;

use Ash\Validation\Rule;

class Numeric extends Rule
{

    /** @var string */
    protected $message = ":attribute must be numeric";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return is_numeric($value);
    }
}
