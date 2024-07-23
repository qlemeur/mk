<?php 
class module_user extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		//$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tUser=model_user::getInstance()->findAll();
		
		$oView=new _view('user::list');
		$oView->tUser=$tUser;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oUser=new row_user;
		
		$oView=new _view('user::new');
		$oView->oUser=$oUser;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oUser=model_user::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('user::edit');
		$oView->oUser=$oUser;
		$oView->tId=model_user::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oUser=model_user::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('user::show');
		$oView->oUser=$oUser;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oUser=model_user::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('user::delete');
		$oView->oUser=$oUser;
		
		

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
			$oUser=new row_user;	
		}else{
			$oUser=model_user::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('username','pid','pswd','login','channels','current_city','interactions','createdAt','updatedAt');
		foreach($tColumn as $sColumn){
			$oUser->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oUser->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('user::list');
		}else{
			return $oUser->getListError();
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
	
		$oUser=model_user::getInstance()->findById( _root::getParam('id',null) );
				
		$oUser->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('user::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

