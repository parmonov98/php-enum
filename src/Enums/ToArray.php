<?php

namespace Parmonov98\PhpEnum\Enums;

trait ToArray
{
    public static function toArray($assoc = false): array
    {
        if (!$assoc) {
            return array_map(
                fn (self $enum) => [$enum->name => $enum->value],
                self::cases()
            );
        }
        $values = [];
        foreach (self::cases() as $enum) {
            $values[$enum->name] =  $enum->value;
        }
        return $values;
    }
    public static function values(): array
    {
        return array_map(
            fn (self $enum) => $enum->value,
            self::cases()
        );
    }
    public static function keys(): array
    {
        return array_map(
            fn (self $enum) => $enum->name,
            self::cases()
        );
    }
}
