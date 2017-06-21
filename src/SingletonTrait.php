<?php

namespace elementary\core\Singleton;


trait SingletonTrait
{
    /**
     * @var self
     */
    protected static $instance = null;

    /**
     * @return self
     */
    public static function me()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}