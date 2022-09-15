<?php

namespace mightygraphics\Validation\Rules;

use mightygraphics\Validation\Rule;

class Accepted extends Rule
{
    /** @var bool */
    protected $implicit = true;

    /** @var string */
    protected $message = ":attribute must be accepted";

    /**
     * Check the $value is accepted
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        $acceptables = ['yes', 'on', '1', 1, true, 'true'];
        return in_array($value, $acceptables, true);
    }
}
