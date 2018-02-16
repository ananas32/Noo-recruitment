<?php
// Pagination  --workaround
function find_url_param($url, $name)
{
    $url_parts = parse_url($url);

    if (!isset($url_parts['query'])) return null;

    parse_str($url_parts['query'], $query);

    if (!isset($query[$name])) return null;

    return $query[$name];
}

function remove_substr($str, $value)
{
    return str_replace($value, '', $str);
}

function str_copy_before($str, $value)
{
    return substr($str, 0, strpos($str, $value));
}

function rewrite_page_url($page_url)
{
    $number = 0;
    $page_number = find_url_param($page_url, 'page');
    if (isset($page_number)) {
        $number = $page_number;
    }

    if ($number == 1) {
        return url( str_copy_before($page_url, '/page/') );
    }
    return url( remove_substr($page_url, '?page=') );
}
// End pagination