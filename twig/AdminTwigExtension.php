<?php
namespace Grav\Plugin;

use \Grav\Common\Grav;

class AdminTwigExtension extends \Twig_Extension
{
    protected $grav;

    public function __construct()
    {
        $this->grav = Grav::instance();
    }

    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'AdminTwigExtension';
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('tu', [$this, 'tuFilter']),

        ];
    }

    public function tuFilter()
    {
        return $this->grav['language']->translate(func_get_args());
    }

}