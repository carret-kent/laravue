<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AccountType extends Enum
{
    const ADMIN = 0;
    const USER = 1;
    const GUEST = 2;

    /**
     * Get value name
     *
     * @param int|string $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value) {
            case self::ADMIN:
                return '管理者';
            case self::USER:
                return '利用者';
            case self::GUEST:
                return 'ゲスト';
        }

        return parent::getDescription($value);
    }
}
