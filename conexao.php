 <?php 
 /*  
  * Constantes de parâmetros para configuração da conexão  
  */  
 define('HOST', '185.201.11.44');  
 define('DBNAME', 'u136429679_facul');  
 define('CHARSET', 'utf8');  
 define('USER', 'u136429679_facul');  
 define('PASSWORD', 'trabalho');  

 // define('HOST', '127.0.0.1');  
 // define('DBNAME', 'portalplan');  
 // define('CHARSET', 'utf8');  
 // define('USER', 'root');  
 // define('PASSWORD', '');  

 class Conexao {  

   private static $pdo;

   private function __construct() {  
     //  
   } 
 
   /*  
    * Método estático para retornar uma conexão válida  
    * Verifica se já existe uma instância da conexão, caso não, configura uma nova conexão  
    */  
   public static function getInstance() {  
     if (!isset(self::$pdo)) {  
       try {  
         $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);  
         self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);  
       } catch (PDOException $e) {  
         print "Erro: " . $e->getMessage();  
       }  
     }  
     return self::$pdo;  
   }

 }

