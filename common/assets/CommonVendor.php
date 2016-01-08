<?php
namespace common\assets;

use Yii;
use yii\web\AssetBundle;

class CommonVendor extends AssetBundle
{
    public $basePath;
    public $baseUrl = '/vendor/bower/';
    
    public $css = [
    ];
    
    public $js = [
    ];
    
    public $depends = [
    ];
    
    public function __construct($config = array()) {
        parent::__construct($config);
        $this->basePath = str_replace(['work', 'hrm', 'kpi'], ['common'], Yii::getAlias("@webroot"));
    }
}
