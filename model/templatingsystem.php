<?php
/**
* [TemplatingSystem description]
*/
class TemplatingSystem {
  //properties
  public $file = 'default.tpl';
  private $errors = "";
  public $readTemplate = false;

  //methods     
  /**
  *
  *@param boolean $file [description]
  */
  function __construct($template = false){
    $this->template = $template;
  }

    function readTemplate(){
        if(file_exists($this->template)) {
          $this->tpl = file_get_contents($this->template); //get content
          $this->readTemplate = true;
        }
  }

    function setTemplateData($pattern, $replacement){
      if($this->readTemplate == false) {
        $this->readTemplate();
      }
       $this->tpl = preg_replace("#\{" . $pattern . "\}#si" , $replacement, $this->tpl);
  }

      function parseTemplate(){
        return $this->tpl;
  }
}

$templatingSystem = new TemplatingSystem('default.tpl');
$templatingSystem->setTemplateData('title', 'titel');
$templatingSystem->setTemplateData('txt', 'test');
echo $templatingSystem->parseTemplate();
?>