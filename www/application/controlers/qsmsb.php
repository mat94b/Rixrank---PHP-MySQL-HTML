<?php

class Page extends Controler
{
    function __construct($PATH)
    {
       parent::__construct();
       

       if($this->post('nick') && $this->post('pass'))
       {
          $Array['status'] = false;
          if($this->post('nick') == 'q' && $this->post('pass') == 'q'){
          $Array['status'] = true;
          setcookie('status',"true", time()+600);
          }
          $this->Json($Array);
       }
       else if($this->post('update') && $this->post('number'))
       {
           $Array['status'] = false;
           if($this->post('update') == 'GLOBAL'){
                if($this->post('number') == 1)$Array['status'] = true;
                if($this->post('number') == 2)$Array['status'] = true;
           }
           
           if($this->post('update') == 'LOCAL'){
                
           }
           $this->Json($Array);
           
       }
       else if($this->post('alarm') && $this->post('name')){
           $Array['status'] = false;
           $this->Json($Array);
       }
       else if(isset($_COOKIE['status'])){
          
          $DataPage['timeglobal'] = $this->fileTime("../data/ranking/global/female.xml", "d-m-Y H:i:s");
          $DataPage['timelocal'] =  $this->fileTime("../data/ranking/local/female/184.xml", "d-m-Y H:i:s");
          
          $DataPage['log'][0]= array('id' => 3244,
                                    'code' => '#POST',
                                    'source' => 'http://rixrank.com/search/index.php',
                                    'desc' => 'Atack POST injection.',
                                    'ip' => '89.74.179.178',
                                    'piority' => 3);
          $DataPage['log'][1]= array('id' => 854,
                                    'code' => '#POST',
                                    'source' => 'http://rixrank.com/search/index.php',
                                    'desc' => 'Atack POST injection.',
                                    'ip' => '89.74.179.178',
                                    'piority' => 1);
          $DataPage['log'][2]= array('id' => 854,
                                    'code' => '#POST',
                                    'source' => 'http://rixrank.com/search/index.php',
                                    'desc' => 'Atack POST injection.',
                                    'ip' => '89.74.179.178',
                                    'piority' => 2);
          $DataPage['log'][3]= array('id' => 854,
                                    'code' => '#POST',
                                    'source' => 'http://rixrank.com/search/index.php',
                                    'desc' => 'Atack POST injection.',
                                    'ip' => '89.74.179.178',
                                    'piority' => 3);
          $DataPage['log'][4]= array('id' => 854,
                                    'code' => '#POST',
                                    'source' => 'http://rixrank.com/search/index.php',
                                    'desc' => 'Atack POST injection.',
                                    'ip' => '89.74.179.178',
                                    'piority' => 2);
          
          
          $DataPage['engine'][2]= array('name' => 'Rixframework',
                                    'version' => '1.0.0.0',
                                    'date' => '06-06-2015',
                                    'size' => '13 KB',
                                    'loc' => 280,
                                    'class' => 3,
                                    'interfaces' => 0,
                                    'methods' => 15,
                                    'resurs' => 348,
                                    'status' => 0);
          
          $DataPage['engine'][1]= array('name' => 'Rixframework',
                                    'version' => '1.0.1.0',
                                    'date' => '23-06-2015',
                                    'size' => '26 KB',
                                    'loc' => 604,
                                    'class' => 3,
                                    'interfaces' => 8,
                                    'methods' => 36,
                                    'resurs' => 896,
                                    'status' => 0);
          
          $DataPage['engine'][0]= array('name' => 'Rixframework',
                                    'version' => '1.0.2.0',
                                    'date' => 'xx-07-2015',
                                    'size' => '40 KB',
                                    'loc' => 1028,
                                    'class' => 3,
                                    'interfaces' => 12,
                                    'methods' => 84,
                                    'resurs' => 1356,
                                    'status' => 1);
          
          $InfoTPL = $this->engineInfoTPL();
          $DataPage['interiorTPL']['loc'] = $InfoTPL['loc'];
          $DataPage['interiorTPL']['size'] = $this->fileSizeInformatic($InfoTPL['size']);
                  
          $InfoCSS = $this->engineInfoCSS();
          $DataPage['interiorCSS']['loc'] = $InfoCSS['loc'];
          $DataPage['interiorCSS']['size'] = $this->fileSizeInformatic($InfoCSS['size']);
          
          $InfoJS = $this->engineInfoJS();
          $DataPage['interiorJS']['loc'] = $InfoJS['loc'];
          $DataPage['interiorJS']['size'] = $this->fileSizeInformatic($InfoJS['size']);
          
          $InfoPHP = $this->engineInfoPHP();
          $DataPage['interiorPHP']['loc'] = $InfoPHP['loc'];
          $DataPage['interiorPHP']['size'] = $this->fileSizeInformatic($InfoPHP['size']);
          
          $DataPage['interiorsum']['loc'] = $InfoTPL['loc'] + $InfoCSS['loc'] + $InfoJS['loc'] + $InfoPHP['loc']; 
          $DataPage['interiorsum']['size'] = $this->fileSizeInformatic($InfoTPL['size'] + $InfoCSS['size'] + $InfoJS['size'] + $InfoPHP['size']);
          
          $DataPage['interiorTPL']['prc'] = round($InfoTPL['loc']*100/$DataPage['interiorsum']['loc']);
          $DataPage['interiorCSS']['prc'] = round($InfoCSS['loc']*100/$DataPage['interiorsum']['loc']);
          $DataPage['interiorJS']['prc'] = round($InfoJS['loc']*100/$DataPage['interiorsum']['loc']);
          $DataPage['interiorPHP']['prc'] = round($InfoPHP['loc']*100/$DataPage['interiorsum']['loc']);
          
          $this->engineReportSEL();
          
          $this->loadTitle('Admin Panel - Rixrank');
          $this->loadView($PATH,'qsmsb_panel',$DataPage) ;
       }
       else
       {
          $DataPage['engine']['version']= $this->VERSION;
          $this->loadTitle('Admin Panel - Rixrank');
          $this->loadView($PATH,'qsmsb',$DataPage) ;
       }

    }

}

?>
