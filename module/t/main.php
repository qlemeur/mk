<?php 
class module_t extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		//$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _tt(){
	
		$oView=new _view('t::tt');
		
		$this->oLayout->add('main',$oView);
	}
			
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}
