<?php
//constant template
const ADMIN_PREFIX = 'admin';
const ADMIN_LAYOUTS = ADMIN_PREFIX . '.layouts.admin';
const ADMIN_HEADER = ADMIN_PREFIX . '.include.header';
const ADMIN_BREADCUM = ADMIN_PREFIX . '.include.breadcum';

// realty post template
const REALTY_POST_VIEW_ADD = ADMIN_PREFIX . '.realty_post.add';

// view category add
const CATEGORY_VIEW_ADD = ADMIN_PREFIX . '.category.add';
const CATEGORY_VIEW_LIST = ADMIN_PREFIX . '.category.list';

// dashboard view
const DASHBOARD_VIEW = ADMIN_PREFIX . '.dashboard.index';

//project view
const PROJECT_VIEW_ADD = ADMIN_PREFIX . '.project.add';

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