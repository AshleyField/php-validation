<?php

namespace mightygraphics\Validation\Tests;

use mightygraphics\Validation\Rule;

class Even extends Rule
{

    protected $message = ":attribute must be even";

    public function check($value): bool
    {
        if (! is_numeric($value)) {
            return false;
        }

        return $value % 2 === 0;
    }
}
