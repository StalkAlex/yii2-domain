<?php

namespace DeKey\Examples\User;

use dekey\domain\base\Entity;

/**
 * Represents user entity.
 *
 * Attributes fetched from UserRecord:
 *
 * @property int $id
 * @property int $status
 * @property int $email
 * Attributes fetched from ProfileRecord:
 * @property int $fullName
 * @property int $dateOfBirth
 *
 * @package DeKey\Examples\User
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class UserEntity extends Entity {
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;

    public function activate() {
        $this->status = self::STATUS_ACTIVE;
    }

    public function deActivate() {
        $this->status = self::STATUS_INACTIVE;
    }

    public function isActive() {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isInactive() {
        return $this->status === self::STATUS_INACTIVE;
    }
}