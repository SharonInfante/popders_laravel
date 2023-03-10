<?php

namespace App\Enums;


enum RoleTypeEnum: int
{
    case VISITOR = 1;
    case ADMIN = 2;
    case CODER = 3;
}