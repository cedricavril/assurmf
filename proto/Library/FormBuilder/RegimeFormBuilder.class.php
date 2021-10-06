<?php
namespace Library\FormBuilder;
 
class regimeFormBuilder extends \Library\FormBuilder
{
  public function build()
  {


    


       $this->form->add(new \Library\SelectField(array(
        'label' => 'Régime <span class="text-danger"> *</span>',
        'name' => 'regime',
        'id' => 'regime',
        'listeSujets' => $this->data,
        'suffixe' => ''
       )));





       // Si c'est pas une modif de commentaire, inutile d'ajouter le champ email
/*      if (!strstr($_SERVER['REQUEST_URI'],"commentUpdate")) {
         $this->form->add(new \Library\StringField(array(
          'label' => 'Ajoutez votre E-mail si vous souhaitez être averti de la (non-) publication de votre commentaire (facultatif)',
          'name' => 'email',
          'rows' => 7,
          'cols' => 50
         )));
      }
*/  }
}
?>