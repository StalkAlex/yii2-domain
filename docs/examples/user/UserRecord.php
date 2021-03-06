<?php

namespace DeKey\Examples\User;

use PHPKitchen\Domain\DB\Record;

/**
 * Represents record of a user in the DB.
 *
 * Attributes:
 *
 * @property int $id
 * @property int $status
 * @property int $email
 *
 * Relations:
 * @property ProfileRecord $profile link to profile table in the DB.
 *
 * @package DeKey\Examples\User
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class UserRecord extends Record {
    public function behaviors() {
        return [
            'role' => [
                // see https://github.com/yii2tech/ar-role
                'class' => \yii2tech\ar\role\RoleBehavior::class,
                'roleRelation' => 'profile',
            ],
        ];
    }

    /**
     * @override
     * @inheritdoc
     */
    public static function tableName() {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [
                [
                    'id',
                    'status',
                ],
                'required',
            ],
        ];
    }

    public function getProfile() {
        return $this->hasOne(ProfileRecord::class, ['userId' => 'id'])->alias('profile');
    }
}