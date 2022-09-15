<?php

namespace mightygraphics\Validation\Rules;

use mightygraphics\Validation\Rule;

class Lowercase extends Rule
{

    /** @var string */
    protected $message = ":attribute must be lowercase";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return mb_strtolower($value, mb_detect_encoding($value)) === $value;
    }
}
