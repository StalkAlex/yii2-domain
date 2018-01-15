<?php

namespace PHPKitchen\Domain\mixins;

/**
 * Represents
 *
 * @package PHPKitchen\Domain\mixins
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
trait StaticSelfAccess {
    /**
     * @return \PHPKitchen\Domain\base\Component[]
     */
    protected static $_instances = [];

    /**
     * @return $this
     */
    public static function getInstance() {
        if (!isset(static::$_instances[static::class])) {
            static::initializeInstance();
        }

        return static::$_instances[static::class];
    }

    protected static function initializeInstance() {
        static::$_instances[static::class] = \Yii::$container->create(static::class);
    }
}