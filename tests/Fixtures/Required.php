<?php

namespace Ash\Validation\Tests;

use Ash\Validation\Rule;

class Required extends Rule
{

    public function check($value): bool
    {
        return true;
    }
}
