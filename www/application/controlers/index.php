<?php
class Page extends Controler
{
    function __construct($PATH)
    {
       parent::__construct();
       $DataPage = Array();
       $DataPageModel = Array();
       
       if($this->PostHeader() == 'MAIN'){
       
        $this->LoginStatus();
        $this->statistic($PATH,'main');
        $this->loadMetaTag($this->MetaTag());
        $this->loadTitle('Rixrank welcomes you!');
        $this->loadView($PATH,'index',$DataPage) ;

       }
       else if($this->PostHeader() == 'REMINDER_MAIL'){
       
        $Array = Array();
        $Array['result'] = 1;
        if($Array['mail'] = $this->validEmail($_POST['mail']))
        {
            $DataPageModel['mail'] = $_POST['mail'];
            if( $this->loadModel($PATH,'index',$DataPageModel)->Get() ) $Array['result'] = 2;
        }
        $this->Json($Array);
        
       }

    }
    
    private function MetaTag()
    {
        $Option['content-type'] = 'text/html';
        $Option['charset'] = 'utf-8';
        $Option['description'] = 'Share your the best pictures and become a winner.
                Your photos will take part in thousand battles with people from
                over the world. Comment and estimate photos of handsome gentelman
                and beautiful ladies. Meet new friends and have a good time' ;
            $Option['keywords'] = 'model,models,girl,girls,women,beautiful,compare images,friends,funny,good time,' ;
        return $Option;
    }
    
    private function LoginStatus()
    {
        if (isset($_SESSION['USR'])) header("Location: my_profile/");
    }
    
    private function PostHeader()
    {
        if (!isset($_POST['mail']) &&
            !isset($_POST['nick']) &&
            !isset($_POST['password']) &&
            !isset($_POST['sex'])) return 'MAIN';
            
        else if (isset($_POST['mail']) &&
            !isset($_POST['nick']) &&
            !isset($_POST['password']) &&
            !isset($_POST['sex'])) return 'REMINDER_MAIL';
            
        else if (!isset($_POST['mail']) &&
            isset($_POST['nick']) &&
            isset($_POST['password']) &&
            !isset($_POST['sex'])) return 'LOGIN';
            
        else if (isset($_POST['mail']) &&
            isset($_POST['nick']) &&
            isset($_POST['password']) &&
            isset($_POST['sex'])) return 'SIGNIN';
    }

}
?>