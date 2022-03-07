<?php
function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function load($data): array
{
    foreach ($_POST as $k => $v) {
        if (array_key_exists($k, $data)) {
            $data[$k] ['value'] = trim($v);
        }
    }
    return $data;
}

function loadText ($data): string
{
    $str = "";
    foreach ($data as $k => $v) {
        if (!empty($v['value'])) {
            $str .= "{$v['fields_name']}: {$v['value']}\n";
        }
    }
    return $str;
}