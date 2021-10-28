<?php
namespace Library\FormBuilder;
 
class mutuelleIndividuelleFormBuilder extends \Library\FormBuilder
{
  public function build()
  {

    $this->form->add(new \Library\DateField(array(
        'label' => 'Date de naissance<span class="text-danger"> *</span>',
        'id' => 'dateNaissance',
        'name' => 'dateNaissance',
        'placeholder' => '--/--/----',
        'validators' => array(
          new \Library\NegativeDateValidator('Merci de spécifier une date ultérieure à aujourd\'hui')
        )

       )));
  }
}
?>