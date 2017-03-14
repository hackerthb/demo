<?php
class IndexController extends Yaf_Bootstrap_Abstract {
   public function indexAction() {//默认Action
       $this->getView()->assign("content", "Hello Yaf");
   }
}
?>