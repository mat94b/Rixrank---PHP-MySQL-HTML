<?php
class PageModel extends Model
{
public $MAIL_EXISTS = false;

    public function __construct($Options)
    {
      parent::__construct();
      $Result = $this->QueryDatabase("SELECT * FROM users WHERE mail='".$Options['mail']."'");
      $New_Data = $this->ResultDatabase($Result);
      
      if($New_Data != null) $this->MAIL_EXISTS = true;
    }
    
    public function __destruct() {
        parent::__destruct();
    }
    
    public function Get()
    {
        return $this->MAIL_EXISTS;
    }
}

?>