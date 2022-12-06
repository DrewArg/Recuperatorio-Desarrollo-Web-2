<?php

function page_list($list, $current_page, $page_quantity)
{
    $from = ($current_page - 1) * $page_quantity;
    return array_splice($list, $from, $page_quantity);
}

function page_links($quantity, $current_page, $page_quantity)
{

    $amount_of_pages = ceil($quantity / $page_quantity);

    $result = array(
        'amount' => $amount_of_pages,
        'current' => $current_page,
        'previous' => ($current_page > 1) ? ($current_page - 1) : null,
        'next' => ($current_page < $amount_of_pages) ? ($current_page + 1) : null,
        'first' => ($current_page > 1) ? 1 : null,
        'last' => ($current_page < $amount_of_pages) ? $amount_of_pages : null
    );

    return $result;
}
