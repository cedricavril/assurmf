<?php
namespace Library;
 
abstract class Field
{
  protected $errorMessage;
  protected $label;
  protected $id;
  protected $name;
  protected $validators = array();
  protected $value;
  protected $placeholder;
   
  public function __construct(array $options = array())
  {
    if (!empty($options))
    {
      $this->hydrate($options);
    }
  }
   
  abstract public function buildWidget();
   
  public function hydrate($options)
  {
    foreach ($options as $type => $value)
    {
      $method = 'set'.ucfirst($type);

      if (is_callable(array($this, $method)))
      {
        $this->$method($value);
      }
    }
  }
   
  public function isValid()
  {
    foreach ($this->validators as $validator)
    {
      if (!$validator->isValid($this->value))
      {
        $this->errorMessage = "<strong style='color: red'>&#8594; ".$validator->errorMessage()."</strong>";
        return false;
      }
    }
     
    return true;
  }

  public function placeholder()
  {
    return $this->placeholder;
  }

  public function id()
  {
    return $this->id;
  }

  public function label()
  {
    return $this->label;
  }
   
  public function length()
  {
    return $this->length;
  }
   
  public function name()
  {
    return $this->name;
  }
   
  public function validators()
  {
    return $this->validators;
  }
   
  public function value()
  {
    return $this->value;
  }

  public function setPlaceholder($placeholder)
  {
    if (is_string($placeholder))
    {
      $this->placeholder = $placeholder;
    }
  }

  public function setId($id)
  {
    if (is_string($id))
    {
      $this->id = $id;
    }
  }

  public function setLabel($label)
  {
    if (is_string($label))
    {
      $this->label = $label;
    }
  }
   
  public function setLength($length)
  {
    $length = (int) $length;
     
    if ($length > 0)
    {
      $this->length = $length;
    }
  }
   
  public function setName($name)
  {
    if (is_string($name))
    {
      $this->name = $name;
    }
  }
   
  public function setValidators(array $validators)
  {
    foreach ($validators as $validator)
    {
      if ($validator instanceof Validator && !in_array($validator, $this->validators))
      {
        $this->validators[] = $validator;
      }
    }
  }
   
  public function setValue($value)
  {
  // test viré car int possible
/*    if (is_string($value))
    {*/
      $this->value = $value;
//    }
  }
}
?>