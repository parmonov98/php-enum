<?php

namespace Parmonov98\PhpEnum\Enums;

enum States: string
{
    use ToArray;
    case CREATED = 'created';
    case PUBLISHED = 'active';
    case IN_MODERATION = 'in_moderation';
    case ARCHIVED = 'inactive';
    case DELETED = 'deleted';
}
