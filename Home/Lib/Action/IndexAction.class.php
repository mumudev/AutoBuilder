<?php
class IndexAction extends CommonAction {
    public function index(){
		$this->assign('flag','0_arc');
		$this->display();
    }

}