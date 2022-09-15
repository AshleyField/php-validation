<?php

namespace Ash\Validation\Rules;

use Ash\Validation\Rule;

class Regex extends Rule
{

    /** @var string */
    protected $message = ":attribute is not valid format";

    /** @var array */
    protected $fillableParams = ['regex'];

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        $this->requireParameters($this->fillableParams);
        $regex = $this->parameter('regex');
        return preg_match($regex, $value) > 0;
    }
}
