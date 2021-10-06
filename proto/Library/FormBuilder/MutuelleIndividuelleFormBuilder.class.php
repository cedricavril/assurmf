<?php
namespace Library\FormBuilder;
 
class mutuelleIndividuelleFormBuilder extends \Library\FormBuilder
{
  public function build()
  {

//echo "test - " . var_dump($regimesList);

    $this->form->add(new \Library\DateField(array(
        'label' => 'Date de naissance<span class="text-danger"> *</span>',
        'id' => 'dateNaissance',
        'name' => 'dateNaissance',
        'placeholder' => '--/--/----',
        'validators' => array(
          new \Library\NotNullValidator('Merci de spécifier la date'),
          new \Library\FrenchDateValidator('Merci de spécifier la date sous la forme jj/mm/aaaa'),
        )

       )));
  }
}
?>