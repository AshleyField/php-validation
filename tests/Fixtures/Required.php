<?php

namespace AshF\Validation\Tests;

use AshF\Validation\Rule;

class Required extends Rule
{

    public function check($value): bool
    {
        return true;
    }
}
