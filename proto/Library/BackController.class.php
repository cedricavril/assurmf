<?php
namespace Library;
 
abstract class BackController extends ApplicationComponent
{
  protected $action = '';
  protected $module = '';
  protected $page = null;
  protected $view = '';
  protected $managers = null;
   
  public function __construct(Application $app, $module, $action)
	{

		parent::__construct($app); // on appelle le constructeur parent sachant je crois que les feuilles qui sont appelées instancieront obligatoirement leur backcontroller et que donc les parents seront pas encore 
// instanciés.

		$this->managers = new Managers('PDO', PDOFactory::getMysqlConnexion());
		$this->page = new Page($app);

		$this->page->addVar('module', $module);
		$this->setModule($module);
		$this->setAction($action);
		$this->setView($action);
	}
   
  public function execute()
  {
    $method = 'execute'.ucfirst($this->action);
     
    if (!is_callable(array($this, $method)))
    {
      throw new \RuntimeException('L\'action "'.$this->action.'" n\'est pas définie sur ce module');
    }
     
    $this->$method($this->app->httpRequest());
  }
   
  public function page()
  {
    return $this->page;
  }
   
  public function setModule($module)
  {
    if (!is_string($module) || empty($module))
    {
      throw new \InvalidArgumentException('Le module doit être une chaine de caractères valide');
    }
     
    $this->module = $module;
  }
   
  public function setAction($action)
  {
    if (!is_string($action) || empty($action))
    {
      throw new \InvalidArgumentException('L\'action doit être une chaine de caractères valide');
    }
     
    $this->action = $action;
  }
   
  public function setView($view)
  {
    if (!is_string($view) || empty($view))
    {
      throw new \InvalidArgumentException('La vue doit être une chaine de caractères valide');
    }

    $this->view = $view;

	//	si on a déjà attribué une langue différente du français à l'utilisateur, on récupère la chaine correspondante pour la mettre à la suite de la chaine de vue
	$lang = $this->app->user()->getAttribute("lang");
	// s'il a cliqué sur une autre langue, idem
	if($this->app->httpRequest()->getData("lang") != "") $lang = $_GET['lang'];

	// lang = en par défaut.
  // "php" a été trouvé par défaut pour "lang"... bug peut être.
	if(!empty($lang) && $lang != "php") {
		$this->app->user()->setAttribute("lang", $lang);
		// redirection, si on a cliqué sur une langue, vers le même url sans le get de lang
	}	else {
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$lang = $lang{0}.$lang{1};
		if($lang =="fr" || $lang == "en" || $lang = "es") {
			$this->app->user()->setAttribute("lang",$lang);
			$this->page->addVar('lang', '?lang='.$lang); 
		} else $lang = "en";
	}

  $this->page->setContentFile(__DIR__.'/../Applications/'.$this->app->name().'/Modules/'.$this->module.'/Views/'.$this->view.$lang.'.php');
  }
}
?>