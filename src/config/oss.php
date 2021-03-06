<?php
/**
 * 阿里云基本配置
 */
return [

    /*
    |--------------------------------------------------------------------------
    | 阿里云 - 钥密
    |--------------------------------------------------------------------------
    |
    | 获取地方，进入【管理控制台】>【AccessKeys】>【创建】
    |
    */
    'OSS_ACCESS_ID' => '',
    'OSS_ACCESS_KEY' => '',

    /*
    |--------------------------------------------------------------------------
    | 阿里云 - OSS访问域名
    |--------------------------------------------------------------------------
    |
    | 获取地方，https://docs.aliyun.com/?spm=5176.7114037.1996646101.11.XMMlZa&pos=6#/pub/oss/product-documentation/domain-region
    |
    */
    'OSS_ENDPOINT' => 'oss-cn-beijing.aliyuncs.com',

    /*
    |--------------------------------------------------------------------------
    | 阿里云 - bucket
    |--------------------------------------------------------------------------
    |
    | 设置默认的bucket , 没有可为空
    |
    */
    'OSS_TEST_BUCKET' => 'shineforce',

    /*
    |--------------------------------------------------------------------------
    | 阿里云 - 是否记录日志
    |--------------------------------------------------------------------------
    */
    'ALI_LOG' => FALSE,

    /*
    |--------------------------------------------------------------------------
    | 阿里云 - 语言版本设置
    |--------------------------------------------------------------------------
    */
    'ALI_LANG' => 'zh'
];