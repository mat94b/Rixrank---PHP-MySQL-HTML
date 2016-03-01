<?php

class Page extends Controler
{
    function __construct($PATH)
    {
       parent::__construct();
       
       if($this->alarmGet('../bin/alarm/','ALARM_MAIN'))  header("Location: ../bin/logout.php");
       
       $this->loadTitle('Your Profile - Rixrank');
       
       if($this->session('user')) $Data['menu']['user'] = $this->session ('user');
       else $Data['menu']['user'] = 'Guest';
       $this->loadView($PATH,'menu',$Data) ;
       $this->loadView($PATH,'my_profile',NULL);
    }
    
}
