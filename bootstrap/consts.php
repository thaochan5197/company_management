<?php
//constant template
//view realty post add
const REALTY_POST_VIEW_ADD = 'realty_post.add';
//view category add
const CATEGORY_VIEW_ADD = 'category.add';
const CATEGORY_VIEW_LIST = 'category.list';

//constant STATUS
const CAT_PARENT = 0;
const STATUS_CATEGORY = [
    'draft' => 0,
    'public' => 1
];
const STATUS_CATEGORY_BY_INT = [
    0 => 'draft',
    1 => 'public'
];
const TYPE_CATEGORY = [
    'news' => 0,
    'realty_sell' => 1,
    'realty_buy' => 2,
];
const TYPE_CAT_ID = [
    0 => 'news',
    1 => 'realty_sell',
    2 => 'realty_buy'
];
const STATUS_COLOR = [
    STATUS_CATEGORY['draft'] => 'fa fa-lock text-danger',
    STATUS_CATEGORY['public'] => 'fa fa-globe text-primary',
];