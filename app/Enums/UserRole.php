<?php

namespace App\Enums;

enum UserRole: string
{
    //
    case SuperAdmin = 'super_admin';
    case Admin = 'admin';
    case Registrar = 'registrar';
    case Finance = 'finance';
    case Teacher = 'teacher';
    case Student = 'student';
    case Parent = 'parent';

    public function label(): string
    {
        return match ($this) {
            self::SuperAdmin => 'Super Admin',
            self::Admin => 'Admin',
            self::Registrar => 'Registrar',
            self::Finance => 'Finance',
            self::Teacher => 'Teacher',
            self::Student => 'Student',
            self::Parent => 'Parent',
        };
    }

}
