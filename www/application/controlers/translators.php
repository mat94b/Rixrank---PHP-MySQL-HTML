<?php

class Page extends Controler
{
    function __construct($PATH){
       parent::__construct();
       
       if($this->post('nick') && $this->post('pass')){
           
          $Array['status'] = false;
          $DataPageModel['nick'] = $this->post('nick');
          $DataPageModel['pass'] = $this->post('pass');
          $MODEL_LOGIN = $this->loadModel($PATH,'translators_login',$DataPageModel);
          
          if( $MODEL_LOGIN->Get() ){
            $Array['status'] = true;
            $this->statistic($PATH, 'login');
            $Data = "(T){".$DataPageModel['nick']."}";
            $this->statisticConsole($PATH, 'login', $Data);
          
            
            setcookie('TVD35dsv8fE3dfR4sd',$this->post('nick'), time()+3600);
            setcookie('TVD35dsv8fE3dfC4sd',$MODEL_LOGIN->Get('country'), time()+3600);
          }
          $this->Json($Array);
       }
       else if($this->post('trans_id') && $this->post('trans') && $this->post('type') && $this->post('text') && isset($_COOKIE['TVD35dsv8fE3dfR4sd'])){
           
           $DataPageModel['id'] = $this->post('trans_id');
           $DataPageModel['text'] = $this->post('text');
           $DataPageModel['translate'] = $this->post('trans');
           if($this->post('type') == 'Everybody can edit') $TYPE=0;
           else if($this->post('type') == 'Only you can edit') $TYPE=1;
           else $TYPE=2;

            
           $DataPageModel['type'] = $TYPE;
           $DataPageModel['nick'] = $_COOKIE['TVD35dsv8fE3dfR4sd'];
           $DataPageModel['country'] = $_COOKIE['TVD35dsv8fE3dfC4sd'];
           
           $Data = "{".$DataPageModel['id']."}{".$DataPageModel['nick']."}";
           $this->statisticConsole($PATH, 'translate', $Data);
           
           $this->loadModel($PATH,'translators_login_set_data',$DataPageModel);
           
           header("Location: index.php#".$DataPageModel['id']);
       }
       else if($this->post('signature') & $this->post('footer') & $this->post('inform')){
           $DataPageModel['signature'] = $this->post('signature');
           $DataPageModel['footer'] = $this->post('footer');
           $DataPageModel['inform'] = $this->post('inform');
           $DataPageModel['nick'] = $_COOKIE['TVD35dsv8fE3dfR4sd'];
           
           $this->loadModel($PATH,'translators_login_set_data',$DataPageModel);
           
           $Data['status']=true;
           $this->Json($Data);
       }
       else if ($this->post('logout')) {
          setcookie('TVD35dsv8fE3dfR4sd','', time());
          setcookie('TVD35dsv8fE3dfC4sd','', time());
          
          header("Location: ");
       }
       else if(isset($_COOKIE['TVD35dsv8fE3dfR4sd'])){
          setcookie('TVD35dsv8fE3dfR4sd',$_COOKIE['TVD35dsv8fE3dfR4sd'], time()+3600);
          setcookie('TVD35dsv8fE3dfC4sd',$_COOKIE['TVD35dsv8fE3dfC4sd'], time()+3600);
            
          $DataPageModel['nick'] = $_COOKIE['TVD35dsv8fE3dfR4sd'];
          $DataPageModel['country'] = $_COOKIE['TVD35dsv8fE3dfC4sd'];
          $MODEL_LOGIN = $this->loadModel($PATH,'translators_login_load_data',$DataPageModel);
          
          $DataPage['country']['number'] = $_COOKIE['TVD35dsv8fE3dfC4sd']; 
          $DataPage['edit']['table']= $this->fileReadAll('../data/translators/'.$_COOKIE['TVD35dsv8fE3dfR4sd'].'.txt');
          $DataPage['edit']['all']= $MODEL_LOGIN->Get('edits');
          $DataPage['edit']['newtran']= $MODEL_LOGIN->Get('translates');
          $DataPage['edit']['everybody']= $MODEL_LOGIN->Get('everybody');
          $DataPage['edit']['only']= $MODEL_LOGIN->Get('only');
          $DataPage['edit']['nobody']= $MODEL_LOGIN->Get('nobody');
          
          $DataPage['set']['footer']= $MODEL_LOGIN->Get('set_footer');
          $DataPage['set']['newtranslates']= $MODEL_LOGIN->Get('set_newtranslates');
          $DataPage['set']['signature']= $MODEL_LOGIN->Get('signature');
          
          $TtanslateList = $MODEL_LOGIN->Get();
          
          for($k= 0; $k<$TtanslateList[0]['size']; $k++){
              
          $DataPage['translate'][$k]= array('id' => $TtanslateList[$k+1]['id'],
                                    'text' => $TtanslateList[$k+1]['text'],
                                    'trans' => $TtanslateList[$k+1]['translate'],
                                    'author' => $TtanslateList[$k+1]['nick'],
                                    'type' => $TtanslateList[$k+1]['type'],
                                    'date' => $TtanslateList[$k+1]['date']);
          }
          
          $this->loadMetaTag($this->MetaTag());
          $this->loadTitle('Translator Panel - Rixrank');
          $this->loadView($PATH,'translators_panel',$DataPage) ; 
       }
       else
       {
          $DataPage['engine']['version']= $this->VERSION;
          $this->loadTitle('Translator Panel - Rixrank');
          $this->loadView($PATH,'translators',$DataPage) ;
       }

    }
    
    private function MetaTag()
    {
        $Option['content-type'] = 'text/html';
        $Option['charset'] = 'UTF-8';
        $Option['description'] = 'Share your the best pictures and become a winner.
                Your photos will take part in thousand battles with people from
                over the world. Comment and estimate photos of handsome gentelman
                and beautiful ladies. Meet new friends and have a good time' ;
        $Option['keywords'] = 'model,models,girl,girls,women,beautiful,compare images,friends,funny,good time,' ;
        $Option['language'] = 'en-us';    
        return $Option;
    }

}

?>

