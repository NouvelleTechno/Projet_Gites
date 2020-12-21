<?php
class Db{

    private $_host = 'localhost';
    private $_user = 'root';
	private $_pass = '';
    private $_dbname = 'gites';
    
    protected $dbc;
	
	public function __construct(){

			try {	
			// pour acceder avec $this a une variable qu'on a declaré dans les attributs de la classe, 
				$this->dbc = new PDO("mysql:host=$this->_host;dbname=$this->_dbname", $this->_user, $this->_pass);
				
			}
			catch(PDOException $e){
				print "Erreur connexion BDD: " . $e->getMessage() . "<br/>";
				die();	
			}	
		}	
		
		public function DbClose(){
		
			$this->dbc=null;
			
		}
}			
?>