<?php
class PageModel extends Model
{
public $LOGIN_CORRECT = false;
public $LOGIN_COUNTRY = 0;

    public function __construct($Options)
    {
      parent::__construct();
      $Result = $this->QueryDatabase("SELECT * FROM translators WHERE nick='".$Options['nick']."'");
      $New_Data = $this->ResultDatabase($Result);
      
      if($New_Data != null && $New_Data['pass'] == $Options['pass']){
          $this->LOGIN_CORRECT = true;
          $this->LOGIN_COUNTRY = $New_Data['country'];
      }
    }
    
    public function __destruct() {
        parent::__destruct();
    }
    
    public function Get($Object = NULL)
    {
        if($Object == NULL) return $this->LOGIN_CORRECT;
        if($Object == 'country') return $this->LOGIN_COUNTRY;
    }
    
}

?>