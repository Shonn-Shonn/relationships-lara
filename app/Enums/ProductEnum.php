<?php

namespace App\Enums;


enum ProductEnum:string {
    case Pending = 'pending';
    case Active  = 'active';
    case Inactive = 'inactive';
    case Rejected = 'rejected';
}