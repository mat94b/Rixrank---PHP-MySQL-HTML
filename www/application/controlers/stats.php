<?php
class Page extends Controler
{
    function __construct($PATH)
    {
       parent::__construct();
       

       if(!isset($_POST['stat']))
       {
       $this->loadTitle('Rixrank statistic');
       $this->loadView($PATH,'stats') ;
       }
       else
       {
       $Array['status'] = false;
    
        $this->statisticGeneratorImage($PATH,"main");
        $this->statisticGeneratorImage($PATH,"test");
        $this->statisticGeneratorImage($PATH,"login");
        $this->statisticGeneratorImage($PATH,"register");
        $this->statisticGeneratorImage($PATH,"activate");
        $this->statisticGeneratorImage($PATH,"upload");
       
        $this->Json($Array);
       }

    }

}

?>
