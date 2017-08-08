<?php

return [
    /*
     * 源慧API - config
     */
    'yuanhui' => [
        /*
         * 客户/账号
         */
        'cid' => env('YUANHUI_CID', ''),

        /*
         * 获取 API 校验
         */
        'appkey' => env('YUANHUI_APP_KEY', ''),

        /*
         * 服务地址
         */
        'url' => env('YUANHUI_API_DOMAIN', 'http://i.eswapi.com/API/'),

        /*
         * 资源 :
         */
        'resource' => [ // productid(资源ID) => 奖品资源名称
            '10105020' => '腾讯视频好莱坞会员月卡',
            '10105021' => '腾讯视频好莱坞会员季卡',
            '10105022' => '腾讯视频好莱坞会员半年卡',
            '10105023' => '腾讯视频好莱坞会员年卡',

            '10105007' => '爱奇艺黄金会员月卡',
            '10105008' => '爱奇艺黄金会员季卡',
            '10105009' => '爱奇艺黄金会员半年卡',
            '10105010' => '爱奇艺黄金会员年卡',

            '10105091' => '2D全国通兑电影票',
            '10105090' => '3D全国通兑电影票',

            '10105017' => '京东E卡10元',
            '10105041' => '京东E卡20元',
            '10105042' => '京东E卡50元',
            '10105016' => '京东E卡100元',
            '10105043' => '京东E卡200元',
            '10105044' => '京东E卡500元',
        ],

    ],

];