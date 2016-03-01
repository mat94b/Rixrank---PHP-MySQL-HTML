<?php
class PageModel extends Model
{
    public function __construct($Options){
      parent::__construct();
      
      if(isset($Options['translate'])){
          
      $Result = $this->QueryDatabase("SELECT * FROM languages WHERE id='".$Options['id']."' and country=".$Options['country'].";");
      $New_Data = $this->ResultDatabase($Result);
      $Options['translate'] = str_replace("\"", "", $Options['translate']);
      $Options['translate'] = str_replace("'", "", $Options['translate']);
      
      if($New_Data == NULL){
         $this->QueryDatabase("INSERT INTO languages VALUES('".$Options['id']."', '".
                 $Options['text']."', '".
                 trim($Options['translate'])."', ".
                 $Options['country'].", '".
                 $Options['nick']."', ".
                 $Options['type'].", now());"); 
        $this->QueryDatabase("UPDATE translators SET number_of_new_translates= number_of_new_translates +1 WHERE nick='".$Options['nick']."'");
        if($Options['type'] == 0)
            $this->QueryDatabase("UPDATE translators SET number_of_everybody= number_of_everybody +1 WHERE nick='".$Options['nick']."'");
        if($Options['type'] == 1)
            $this->QueryDatabase("UPDATE translators SET number_of_only= number_of_only +1 WHERE nick='".$Options['nick']."'");
        if($Options['type'] == 2)
            $this->QueryDatabase("UPDATE translators SET number_of_nobody= number_of_nobody +1 WHERE nick='".$Options['nick']."'");
        }
        else {
         $this->QueryDatabase("UPDATE languages SET translate='".
                 $Options['translate']."', nick='".
                 $Options['nick']."', type=".
                 $Options['type'].", date=now() WHERE id='".$Options['id']."' and country=".$Options['country'].";"); 
         $this->QueryDatabase("UPDATE translators SET number_of_edits= number_of_edits +1 WHERE nick='".$Options['nick']."'");
         $TypeName= '';
         if($Options['type'] == 0){
            $TypeName= 'Everybody can edit';
            $this->QueryDatabase("UPDATE translators SET number_of_everybody= number_of_everybody +1 WHERE nick='".$Options['nick']."'");
         }
        if($Options['type'] == 1){
            $TypeName= 'Only you can edit';
            $this->QueryDatabase("UPDATE translators SET number_of_only= number_of_only +1 WHERE nick='".$Options['nick']."'");
        } 
        if($Options['type'] == 2){
            $TypeName= 'Nobody can edit';
            $this->QueryDatabase("UPDATE translators SET number_of_nobody= number_of_nobody +1 WHERE nick='".$Options['nick']."'");
        }
            
         $EditList = $this->fileReadAll('../data/translators/'.$Options['nick'].'.txt');
         $Handle = $this->fileOpen('../data/translators/'.$Options['nick'].'.txt', 'w');
         $Data = "<tr><td><h7>".$Options['id']."</td> <td><h7>".$TypeName."</td> <td><h7>".date('d-m-Y')."</td></tr>".$EditList;
         $this->filePuts($Handle, $Data);
        }
      }
      else{
        $Options['signature'] = str_replace("\"", "", $Options['signature']);
      $Options['signature'] = str_replace("'", "", $Options['signature']);  
          
         $this->QueryDatabase("UPDATE translators SET signature='".
                 $Options['signature']."', new_translates=".
                 $Options['inform']." , name_footer=".
                 $Options['footer']."  WHERE nick='".
                 $Options['nick']."' ;"); 
      }
          
      
    }
    
    public function __destruct() {
        parent::__destruct();
    }
    
}
