<?php

namespace App\Enums;

enum RoleTypeEnum: int
{
    case Admin = 1;
    case Coder = 2;

    public static function toArray(): array
    {
        return [
            self::Admin => 'Admin',
            self::Coder => 'Coder',
        ];
    }
}
