<?php

namespace mightygraphics\Validation\Tests;

use mightygraphics\Validation\Rule;

class Required extends Rule
{

    public function check($value): bool
    {
        return true;
    }
}
