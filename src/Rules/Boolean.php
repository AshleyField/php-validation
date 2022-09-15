<?php

namespace mightygraphics\Validation\Rules;

use mightygraphics\Validation\Rule;

class Boolean extends Rule
{
    /** @var string */
    protected $message = ":attribute must be a boolean";

    /**
     * Check the value is valid
     *
     * @param mixed $value
     * @return bool
     * @throws \Exception
     */
    public function check($value): bool
    {
        return \in_array($value, [\true, \false, "true", "false", 1, 0, "0", "1", "y", "n"], \true);
    }
}
