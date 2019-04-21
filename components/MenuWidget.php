<?php

namespace app\components;

use yii\base\Widget;
use app\models\Category;

class MenuWidget extends Widget
{
    public $tpl;
    
    public $data;
    
    public $tree;
    
    public $menuHtml;

    public function init(){
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        $this->data = Category::find()->asArray()->indexBy('id')->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHnml($this->tree);
//        d($this->menuHtml,0);
        return $this->menuHtml;
    }
    
    public function getTree(){
        $tree = [];
        foreach ($this->data as $id =>&$node){
            if(!$node['parent_id'])
                $tree[$id] = &$node;
            else 
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }
    
    protected function getMenuHnml($tree){
        $str = '';
        foreach($tree as $category){
            $str .= $this->catToTemplate($category);
        }
        return $str;
    }
    
    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}
