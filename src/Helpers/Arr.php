<?php

namespace Sura\Menu\Helpers;

class Arr
{
    public static function map(array $array, $callback): array
    {
        $keys = array_keys($array);

        $items = array_map($callback, $array, $keys);

        return array_combine($keys, $items);
    }

    public static function push(array $array, $item): array
    {
        $array[] = $item;

        return $array;
    }
}
