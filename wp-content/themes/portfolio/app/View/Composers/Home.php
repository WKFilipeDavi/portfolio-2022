<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    public function with()
    {
        return [
            'whoAmI' => $this->who(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function who()
    {
        $who = get_field('who');
        return $who;
    }
}
