<?php
namespace Library;

class SelectField extends Field
{
  protected $listeSujets,
            $suffixe;

  public function buildWidget()
  {
    $widget = '';
    if (!empty($this->errorMessage)) $widget .= $this->errorMessage.'<br />';

    $selected = (!empty($this->value))? $this->value : "";



//    $widget .= '<label for="'.$this->name.'">'.$this->label.'</label><select name="'.$this->name.'">'; 


    $widget .= '<div class="form-group col-sm-6 flex-column d-flex row justify-content-end"><label class="control-label col-sm-12" for="'.$this->name.'">'.$this->label.'</label><div class="col-sm-10"><select name="'.$this->name.'">';

    foreach ($this->listeSujets as $key => $item) {
      if (!empty($this->listeSujets)) {
        $selectage = "";
        if($selected != "")
          if($item == $selected) $selectage="selected ";
        $widget .= "<option $selectage value='".htmlspecialchars($item)."'>".htmlspecialchars($item)."</option>";
      }
    }
    return $widget.'</select>'.$this->suffixe.'</div></div>';
  }

public function setSuffixe($suffixe)
{
  $this->suffixe = $suffixe;
}
public function setListeSujets($items)
{
  foreach($items as $item)
  {
    $this->listeSujets[] = $item;
  }
}
}