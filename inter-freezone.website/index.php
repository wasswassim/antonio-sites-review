<?PHP
include './include/interfree_dbinc.php';
include("./include/dbfix-php.php");	
session_start();
$path = ltrim($_SERVER['REQUEST_URI'], '/'); 
// Trim leading slash(es)	
$elements = explode('/', $path); 
// Split path on slashes	
$stringa= implode('', $elements);
// echo $stringa;
// echo var_dump($elements);	
if(empty($elements[1]))
    {                      
    // Ricordarsi di riportarlo a 0 in caso di cartella root No path elements means home
    //ShowHomepage() 
    header("location: ./home.php");
   // phpinfo();	// Prosegue e visualizza l'html standard
    } 
    else switch($elements[1])             // array_shift($elements) Pop off first item and switch
    {	case 'candeloro':
        //	echo "pippo";	
        // Visualizza utente Candeloro	  
        header("location: ./db/index_page.php?codicino=CANDELORO");				break;
    case 'CANDELORO':	
        //	echo "pippo";	 
        // Visualizza utente Candeloro	  	 
        header("location: ./db/index_page.php?codicino=CANDELORO");					break;
    case 'grp-procurement':    
        //  ShowPicture($elements); 
        // passes rest of parameters to internal function	
        // Visualizza grp-procurement-export	  
        header("location: ./grp-procurement-export");   
        break;
    case 'procurement' :	
        // Interprocurement
    header("location: ./interprocurement/index.html");
    break;
    case 'more':      
        echo "Buongiorno Mr Candeloro";	  
        // ShowElements($elements);	
        break; 
    default:        
        //header('HTTP/1.1 404 Not Found');       
        // Show404Error();	 
        //  echo "default";	 	 // Visualizza le pagine	 //     ShowElements($stringa);	 
        header("location: ./db/ItDetail.php?codicino=".$elements[1]);
    echo "Default";	 
    break;
        
    }

?> 
