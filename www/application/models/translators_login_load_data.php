<?php
class PageModel extends Model
{
public $LOGIN_SIGNATURE = '';
public $LOGIN_NEWSTRANSLATES = 0;
public $LOGIN_NAMEFOOTER = 0;
public $LOGIN_EDITS = 0;
public $LOGIN_TRANSLATES = 0;
public $LOGIN_EVERYBODY = 0;
public $LOGIN_ONLY = 0;
var $TRANSLATELIST = array();

    public function __construct($Options)
    {
      parent::__construct();
      $Result = $this->QueryDatabase("SELECT * FROM translators WHERE nick='".$Options['nick']."'");
      $New_Data = $this->ResultDatabase($Result);
      
      $this->LOGIN_SIGNATURE = $New_Data['signature'] ;
      $this->LOGIN_NEWSTRANSLATES = $New_Data['new_translates'] ;
      $this->LOGIN_NAMEFOOTER = $New_Data['name_footer'] ;
      $this->LOGIN_EDITS = $New_Data['number_of_edits'] ;
      $this->LOGIN_TRANSLATES = $New_Data['number_of_new_translates'] ;
      $this->LOGIN_EVERYBODY = $New_Data['number_of_everybody'] ;
      $this->LOGIN_ONLY = $New_Data['number_of_only'] ;
      $this->LOGIN_NOBODY = $New_Data['number_of_nobody'] ;
      
      $Result = $this->QueryDatabase("SELECT * FROM languages WHERE country=0");
      $i = 1;
      while ($row = $this->ResultDatabase($Result))
      {
         $this->TRANSLATELIST[$i]['id'] = $row['id']; 
         $this->TRANSLATELIST[$i]['text'] = $row['text'];
         $this->TRANSLATELIST[$i]['translate'] = $row['translate'];
         $this->TRANSLATELIST[$i]['nick'] = $row['nick'];
         $this->TRANSLATELIST[$i]['type'] = $row['type'];
         $this->TRANSLATELIST[$i]['date'] = $row['date'];
         
         $Result2 = $this->QueryDatabase("SELECT * FROM languages WHERE id='".$row['id']."' and country=".$Options['country'].";");
         $row2 = $this->ResultDatabase($Result2);
         if($row2 != NULL){
            $this->TRANSLATELIST[$i]['text'] = $row2['text'];
            $this->TRANSLATELIST[$i]['translate'] = $row2['translate'];
            $this->TRANSLATELIST[$i]['nick'] = $row2['nick'];
            if($Options['nick'] != $row2['nick'] && $row2['type'] == 1){
                $this->TRANSLATELIST[$i]['type'] = 2;
            }
            else{
                $this->TRANSLATELIST[$i]['type'] = $row2['type'];
            }
            $this->TRANSLATELIST[$i]['date'] = $row2['date']; 
         }
         $i++;
      }
    $this->TRANSLATELIST[0]['size'] = $i-1;
    }
    
    public function __destruct() {
        parent::__destruct();
    }
    
    public function Get($Object = NULL)
    {
        if($Object == NULL) return $this->TRANSLATELIST;
        if($Object == 'edits') return $this->LOGIN_EDITS;
        if($Object == 'everybody') return $this->LOGIN_EVERYBODY;
        if($Object == 'set_footer') return $this->LOGIN_NAMEFOOTER;
        if($Object == 'set_newtranslates') return $this->LOGIN_NEWSTRANSLATES;
        if($Object == 'nobody') return $this->LOGIN_NOBODY;
        if($Object == 'only') return $this->LOGIN_ONLY;
        if($Object == 'signature') return $this->LOGIN_SIGNATURE;
        if($Object == 'translates') return $this->LOGIN_TRANSLATES;
    }
    
}

?>