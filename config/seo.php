<?php
/**
 * Created by PhpStorm.
 * User: johnny.zhang
 * Date: 2017/2/17
 * Time: 18:26
 */
return array(


    /*
	|--------------------------------------------------------------------------
	| site name
	|--------------------------------------------------------------------------
    |
    |
    */
    'default_site_name' => env('SEO_DEFAULT_SITE_NAME'),
    'default_admin_site_name' => env('SEO_DEFAULT_ADMIN_SITE_NAME'),

    /*
	|--------------------------------------------------------------------------
	| defautl meta data
	|--------------------------------------------------------------------------
    |
    |
    */
    'default_keywords' => env('SEO_DEFAULT_KEYWORDS', '米酷科技,科技,数码产品,米酷,'),
    'default_description' => env('SEO_DEFAULT_DESCRIPTION', '米酷科技，专注于高品质数码产品的研发与生存，微广大中小商家及消费者提供优良的产品与服务。'),

    /* not tracking ip */
    'exclude' => [
        'ip' => [
            '183.13.99.73',
        ],
    ],

    'default_sub_title' => 'MeetCool',
);
