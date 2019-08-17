<?php

if (!function_exists('getSubCategory')) {
    function getSubCategory ($data, $type = 'select', $default = false, $editMode = false, $parent = CAT_PARENT, $string = "")
    {
        foreach ($data as $key => $item) {
            if ($item['parent_id'] == $parent) {
                switch ($type) {
                    case 'select':
                        if ($editMode && $default && $default == $item['id']) {
                            echo "<option value='".$item['id']."' selected='selected'>" . $string . $item['title']  . "</option>";
                        } else {
                            echo "<option value='".$item['id']."'>" . $string . $item['title']  . "</option>";
                        }
                        break;
                    case 'table':
                        echo "<tr>";
                        echo "<td>" . $item['id'] . "</td>";
                        echo "<td>" . $string . $item['title'] . "</td>";
                        echo "<td>" . __('common.' . TYPE_CAT_ID[$item['type']]) . "</td>";
                        echo "<td><i class=' " .  STATUS_COLOR[$item['status']] . "'></i></td>";
                        echo "<td>" . $item['created_at'] . "</td>";
                        echo "<td>" . $item['updated_at'] ."</td>";
                        echo "<td><a href='" .  route('category.edit.action') . '?id=' . $item['id']  . "' class='btn btn-success btn-sm'><i class='fa fa-pencil-square-o'></i></a></td>";
                        echo "</tr>";
                        break;
                }
                unset($data[$key]);
                getSubCategory($data, $type, $default, $editMode, $item['id'], $string . "--- ");
            }
        }
    }
}

// if (!function_exists('check_status')) {
    // function check_status ()
// }