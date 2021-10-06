<?php
namespace Library;
 
class DateField extends Field
{

  public function buildWidget()
  {
    $widget = '';

  	if (!empty($this->errorMessage))
    {
  		$widget .= $this->errorMessage.'<br />';
    }

// l'id est en fait obligatoire depuis le rajout de for

    $widget .= '<div class="form-group col-sm-6 flex-column d-flex row justify-content-end"><label class="control-label col-sm-12" for="'.$this->id.'">'.$this->label.'</label><div class="col-sm-10"><input type="text" name="'.$this->name.'" maxlength="10"';






/*    $widget .= '<label for="'.$this->id.'">'.$this->label.'</label><input type="text" name="'.$this->name.'" maxlength="10"';
*/
    if (!empty($this->id))
    {
      $widget .= ' id="'.htmlspecialchars($this->id).'" ';
    }
     
    if (!empty($this->value))
    {
//      $widget .= ' value="'.htmlspecialchars($this->value->format("d/m/Y")).'" ';
      $widget .= ' value="'.htmlspecialchars($this->value).'" ';
    }

    if (!empty($this->placeholder))
    {
      $widget .= ' placeholder="'.htmlspecialchars($this->placeholder).'"';
    }
     
    return $widget .= ' /></div></div>';
  }
}