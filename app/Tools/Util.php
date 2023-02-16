<?php

namespace App\Tools;

class Util
{

    static function mapObject($array, $from, $to)
    {
        $result = [];
        foreach ($array as $key => $value) {

            if (is_array($to)) {
                $texts = [];
                foreach ($to as $item) {
                    $texts[] = $value->$item;
                }
                $result[$value->$from] = implode(' - ', $texts);
            } else {

                $result[$value->$from] = $value->$to;

            }

        }
        return $result;
    }

    static function renderOptions($array, $from, $to, $selected = null)
    {
        $options = self::mapObject($array, $from, $to);
        $result = '<option>selecciona</option>';
        foreach ($options as $key => $opt) {
            if ($selected === $key) {
                $result .= "<option value=$key selected> $opt </option>";

            } else {
                $result .= "<option value=$key> $opt </option>";

            }
        }
        return $result;
    }

}