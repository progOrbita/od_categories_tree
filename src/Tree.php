<?php

class Tree
{

    /**
     * function to make html tree 
     * 
     * @param array $data
     * @param string $txt
     * 
     * @return string
     */

    public static function makeTree(array $data, string $txt = ''): string
    {
        if (empty($data)) {
            return '';
        }

        $txt .= '<ul class="collapse show">';

        foreach ($data as $key => $cat) {
            if (isset($cat['children'])) {
                $txt .= ' <li class=" less" id=' . $key . ' "><div class="checkbox"><i class="fa fa-angle-down" onclick="openClose(' . $key . ')"></i><label><input class="input" name="' . $cat['name'] . '" value="' . $key . '"type="checkbox">' . $cat['name'] . ' <input class="radio" type="radio"></div></label>';
                if (isset($cat['children'])) {
                    $txt .= self::makeTree($cat['children']);
                }
                continue;
            }

            $txt .= ' <li class=""><div class="checkbox"><label><input class="input" name="' . $cat['name'] . '" value="' . $key . '"type="checkbox">' . $cat['name'] . ' <input class="radio" type="radio"></label></div></li>';
        }

        $txt .= '</li></ul>';

        return $txt;
    }
}
