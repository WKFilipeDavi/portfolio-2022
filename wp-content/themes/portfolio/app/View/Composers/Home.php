<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    public function with()
    {
        return [
            'whoAmI' => $this->who(),
            'projects' => $this->projects(),
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

    public function projects() {
        $args = array(
            'post_type' => 'pfd_projects',
            'numberposts' => -1,
        );

        return get_posts( $args );
    }
}
