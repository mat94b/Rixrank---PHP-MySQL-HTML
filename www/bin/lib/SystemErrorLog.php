<?php
////////////////////////////////////////////////////////////////////////////
//SystemErrorLog library////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: �ukasz Kusy
//Descrition.......: Library is responsible for report errors or some
//                   prombems associated with incorrect function webside or
//                   hacking attempt. Reports saved in files allow repair
//                   errors in the future.
//Last update data.: 21.03.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// SEL_InputReport
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////





//Function /////////////////////////////////////////////////////////////////
//Name..........: SEL_LoginReport
//Description...: Function report some problem.
//Syntax........: SEL_LoginReport($File,$NickField,$PassField,$Code,$Text)
//Parameters....: $File - path to xml file
//Return values.: None
//Author .......: �ukasz Kusy
//Modified......: 23.03.2015
////////////////////////////////////////////////////////////////////////////
function SEL_LoginReport($File,$IP,$NickField,$PassField,$Code,$Text)
{
$FileXML = Comments_Load($File);

            foreach ($FileXML->report as $report)
            {
            $Id = $report['id'];
            }
            
$doc = simplexml_load_file($File);
$report = $doc->addChild('report');
$report->addAttribute('id', $Id);
$report->addChild('date', $Date);
$report->addChild('time', $Time);
$report->addChild('ip', $_SERVER['REMOTE_ADDR']);
$report->addChild('nick', $NickField);
$report->addChild('pass', $PassField);
$report->addChild('code', $Code);
$report->addChild('text', $Text);
$doc->asXML($File);

}
////////////////////////////////////////////////////////////////////////////

?>
