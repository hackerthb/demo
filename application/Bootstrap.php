<?php

class Bootstrap extends Yaf_Bootstrap_Abstract {
    #里面具体需要啥，自己补充
    public function _initConfig(Yaf_Dispatcher $dispatcher) {
            var_dump(__METHOD__);
    }
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        var_dump(__METHOD__);
    }
}