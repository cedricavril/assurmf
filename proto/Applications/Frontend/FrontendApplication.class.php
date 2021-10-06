<?php
namespace Applications\Frontend;
 
class FrontendApplication extends \Library\Application
{
  public function __construct()
  {
    parent::__construct();

    $this->name = 'Frontend';
  }
   
  public function run()
  {
    $controller = $this->getController();
    $controller->execute();
     
    $this->user()->setAttribute("URIDemandee",$this->httpRequest->requestURI()); // on aurait sans doute pu plutôt la mettre dans une propriété
    $this->httpResponse->setPage($controller->page());
    $this->httpResponse->send();
  }
}
?>