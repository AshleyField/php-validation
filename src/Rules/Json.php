<?php

namespace mightygraphics\Validation\Rules;

use mightygraphics\Validation\Rule;

class Json extends Rule
{

    /** @var string */
    protected $message = ":attribute must be a valid JSON string";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        if (! is_string($value) || empty($value)) {
            return false;
        }

        json_decode($value);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return false;
        }

        return true;
    }
}
