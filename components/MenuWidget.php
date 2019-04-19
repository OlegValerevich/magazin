<<<<<<< HEAD
<?php

namespace app\components;

use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;

    public function init(){
    parent::init();

    if ($this->tpl === null) {
        
        $this->tpl = 'menu';
    }
    
    $this->tpl .= '.php';
    }

    public function run(){

    return $this->tpl;
    }
}
=======
<?php

namespace app\components;

use yii\base\Widget;

class MenuWidget extends Widget
{
	public $tpl;

	public function init(){
		parent::init();

		if ($this->tpl === null) {
			$this->tpl = 'menu';
		}
		$this->tpl .= '.php';
	}

	public function run(){

		return $this->tpl;
	}
}
>>>>>>> e85b3b0c9d2d9e9ecb8a05b212f101144b36f021
