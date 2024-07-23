<?php 
class module_villes_france_free extends abstract_module{
	
	public function before(){
		$this->oLayout=new _layout('bootstrap');
		
		//$this->oLayout->addModule('menu','menu::index');
	}
	
	
	public function _index(){
	    //on considere que la page par defaut est la page de listage
	    $this->_list();
	}
	
	
	public function _list(){
		
		$tVilles_france_free=model_villes_france_free::getInstance()->findAll();
		
		$oView=new _view('villes_france_free::list');
		$oView->tVilles_france_free=$tVilles_france_free;
		
		
		
		$this->oLayout->add('main',$oView);
		 
	}
		
	
	
	public function _new(){
		$tMessage=$this->processSave();
	
		$oVilles_france_free=new row_villes_france_free;
		
		$oView=new _view('villes_france_free::new');
		$oView->oVilles_france_free=$oVilles_france_free;
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
			
	
	
	public function _edit(){
		$tMessage=$this->processSave();
		
		$oVilles_france_free=model_villes_france_free::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('villes_france_free::edit');
		$oView->oVilles_france_free=$oVilles_france_free;
		$oView->tId=model_villes_france_free::getInstance()->getIdTab();
		
		
		
		$oPluginXsrf=new plugin_xsrf();
		$oView->token=$oPluginXsrf->getToken();
		$oView->tMessage=$tMessage;
		
		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _show(){
		$oVilles_france_free=model_villes_france_free::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('villes_france_free::show');
		$oView->oVilles_france_free=$oVilles_france_free;
		
		

		$this->oLayout->add('main',$oView);
	}
		
	
	
	public function _delete(){
		$tMessage=$this->processDelete();

		$oVilles_france_free=model_villes_france_free::getInstance()->findById( _root::getParam('id') );
		
		$oView=new _view('villes_france_free::delete');
		$oView->oVilles_france_free=$oVilles_france_free;
		
		

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
			$oVilles_france_free=new row_villes_france_free;	
		}else{
			$oVilles_france_free=model_villes_france_free::getInstance()->findById( _root::getParam('id',null) );
		}
		
		$tColumn=array('ville_departement','ville_slug','ville_nom','ville_nom_simple','ville_nom_reel','ville_nom_soundex','ville_nom_metaphone','ville_code_postal','ville_commune','ville_code_commune','ville_arrondissement','ville_canton','ville_amdi','ville_population_2010','ville_population_1999','ville_population_2012','ville_densite_2010','ville_surface','ville_longitude_deg','ville_latitude_deg','ville_longitude_grd','ville_latitude_grd','ville_longitude_dms','ville_latitude_dms','ville_zmin','ville_zmax');
		foreach($tColumn as $sColumn){
			$oVilles_france_free->$sColumn=_root::getParam($sColumn,null) ;
		}
		
		
		if($oVilles_france_free->save()){
			//une fois enregistre on redirige (vers la page liste)
			_root::redirect('villes_france_free::list');
		}else{
			return $oVilles_france_free->getListError();
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
	
		$oVilles_france_free=model_villes_france_free::getInstance()->findById( _root::getParam('id',null) );
				
		$oVilles_france_free->delete();
		//une fois enregistre on redirige (vers la page liste)
		_root::redirect('villes_france_free::list');
		
	}
		
	
	public function after(){
		$this->oLayout->show();
	}
	
	
}

