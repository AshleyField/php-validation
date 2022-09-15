<?php

namespace AshF\Validation\Rules;

use AshF\Validation\Rule;

class TypeArray extends Rule
{

    /** @var string */
    protected $message = ":attribute must be array";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return is_array($value);
    }
}
