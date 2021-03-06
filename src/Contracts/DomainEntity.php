<?php

namespace PHPKitchen\Domain\Contracts;

/**
 * Represents domain entity.
 *
 * @package PHPKitchen\Domain
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
interface DomainEntity {
    public function isNew();

    public function isNotNew();
}