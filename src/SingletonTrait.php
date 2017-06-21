<?php

namespace elementary\core\Singleton;


trait SingletonTrait
{
    /**
     * @var SingletonTrait
     */
    protected static $instance = null;

    /**
     * @return SingletonTrait
     */
    public static function me()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}