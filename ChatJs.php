<?php
namespace dedermus\chat;

use Yii;
use yii\web\AssetBundle;

class ChatJs extends AssetBundle {

    public $sourcePath = '@vendor/dedermus/yii2-chat/assets/';

    public $js = [
        'js/jScrollPane/jquery.mousewheel.js',
        'js/jScrollPane/jScrollPane.min.js',
        'js/script.js',
    ];

    public $css = [
        'js/jScrollPane/jScrollPane.css',
        'css/page.css',
        'css/chat.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}