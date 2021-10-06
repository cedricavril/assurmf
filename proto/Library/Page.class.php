<?php
namespace Library;
 
class Page extends ApplicationComponent
{
  protected $contentFile;
  protected $vars = array();
   
  public function addVar($var, $value)
  {
    if (!is_string($var) || is_numeric($var) || empty($var))
    {
      throw new \InvalidArgumentException('Le nom de la variable doit être une chaine de caractère non nulle');
    }
     
    $this->vars[$var] = $value;
  }
   
  public function getGeneratedPage()
  {
    if (!file_exists($this->contentFile))
    {
      throw new \RuntimeException('La vue spécifiée '.$this->contentFile.'n\'existe pas');
    }
	
// pour gérer les utilisateurs
    $user = $this->app->user();
    extract($this->vars);
    ob_start();
      require $this->contentFile;
    $content = ob_get_clean();

	// petit doublon présent dans backcontroller (au pire mettre une propriete et ses méthode et basta)
	// si on a déjà attribué une langue différente du français à l'utilisateur, on récupère la chaine correspondante pour la mettre à la suite de la chaine de vue
	$lang = $this->app->user()->getAttribute("lang");
	// si la langue n'existe pas, il faudra quand même diriger vers un 404 d'une langue. Mais choisissons l'anglais.
	if (!file_exists(__DIR__.'/../Applications/'.$this->app->name().'/Templates/Layout'.$lang.'.php'))
	{
		$lang="en";
	}

    ob_start();
		require __DIR__.'/../Applications/'.$this->app->name().'/Templates/Layout'.$lang.'.php';
	return ob_get_clean();
  }
   
  public function setContentFile($contentFile)
  {
    if (!is_string($contentFile) || empty($contentFile))
    {
      throw new \InvalidArgumentException('La vue spécifiée est invalide');
    }
    $this->contentFile = $contentFile;
  }
}
?>