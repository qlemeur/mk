<?php 
class module_house extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		//$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tHouse=model_house::getInstance()->findAll();
		
		$oView=new _view('house::list');
		$oView->tHouse=$tHouse;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oHouse=new row_house;
		
		$oView=new _view('house::new');
		$oView->oHouse=$oHouse;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oHouse=model_house::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('house::edit');
		$oView->oHouse=$oHouse;
		$oView->tId=model_house::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oHouse=model_house::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('house::show');
		$oView->oHouse=$oHouse;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oHouse=model_house::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('house::delete');
		$oView->oHouse=$oHouse;
		
		

		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	

	private function processSave(){
		if(!_root::getRequest()->isPost() ){ //si ce n'est pas une requete POST on ne soumet pas
			return null;
		}
		
		$oPluginXsrf=new plugin_xsrf();
		if(!$oPluginXsrf->checkToken( _root::getParam('token') ) ){ //on verifie que le token est valide
			return array('token'=>$oPluginXsrf->getMessage() );
		}
	
		$iId=_root::getParam('id',null);
		if($iId==null){
			$oHouse=new row_house;	
		}else{
			$oHouse=model_house::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('channel','rewards','createdAt','updatedAt');
		foreach($tColumn as $sColumn){
			$oHouse->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oHouse->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('house::list');
		}else{
			return $oHouse->getListError();
		}
		
	}
	
	
	public function processDelete(){
		if(!_root::getRequest()->isPost() ){ //si ce n'est pas une requete POST on ne soumet pas
			return null;
		}
		
		$oPluginXsrf=new plugin_xsrf();
		if(!$oPluginXsrf->checkToken( _root::getParam('token') ) ){ //on verifie que le token est valide
			return array('token'=>$oPluginXsrf->getMessage() );
		}
	
		$oHouse=model_house::getInstance()->findById( _root::getParam('id',null) );
				
		$oHouse->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('house::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

