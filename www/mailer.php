<?php
$Option = "From: Rixrank.com <contact@rixrank.com>".PHP_EOL;
             $Option .= "MIME-Version: 1.0".PHP_EOL;
             $Option .= "Content-type: text/html; charset=iso-8859-2".PHP_EOL;

             $NICK = "Quelitalover";
             $PASSWORD = "Your address e-mail";
             $Message = "<div style='background-color: rgb(230,115,0);
                        color: rgb(255,255,255);
                        padding-top:20px;
                        padding-left:20px;
                        font-size:35px;
                        border-radius: 10px;
                        padding-bottom:20px;  '> Rixrank welcomes you!</div>";
             $Message .= "<div style='margin-top:20px;
                         background-color: rgb(45,45,45);
                         border:2px solid rgb(230,115,0);
                         border-radius: 10px;
                         color: rgb(255,255,255);
                         padding:20px;
                         font-size:20px;
                         ' >Hi <div style='font-weight:bold; display:inline;'>".$NICK."</div>,<br><br>
                         Thank you for your help, <br>
                         <a href='http://rixrank.com/translators' style='color:rgb(230,115,0);'>Panel translator</a><br><br>
                         Nick: ".$NICK."<br>
                         Password: ".$PASSWORD." <br><br>
                         
                          <div style='float:right; margin:0px; font-size:10px; '>Rixrank.com &copy; 2015  </div></div>";


              mail("lukiqs@gmail.com", "Rixrank - Translates", $Message,$Option);?>