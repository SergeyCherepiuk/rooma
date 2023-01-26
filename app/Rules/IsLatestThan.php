<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use DateTime;

class IsLatestThan implements Rule
{
    private $date;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($date = NULL)
    {
        $this->date = $date;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user_date = new DateTime($value);
        if (($this->date != NULL) && ($this->date > date('Y-m-d'))) {
            return $user_date->format('Y-m-d') > $this->date;
        }
        $this->date = date('Y-m-d');
        return $user_date->format('Y-m-d') > date('Y-m-d');
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute data must be latest than ' . $this->date . '.';
    }
}
