<?php
////////////////////////////////////////////////////////////////////////////
//XML library///////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: £ukasz Kusy
//Last update data.: 22.03.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// Comments_Load
// Comments_Add
// Comments_Remove
// Block_Load
// Block_Add
// Block_Remove
// Query_Load
// Query_Add
// Query_Remove
// Reply_Load
// Reply_Add
// Reply_Remove
// DeletedImage_Load
// DeletedImage_Add
// DeletedImage_Return
// DeletedImage_Remove
// EndImage_Load
// EndImage_Add
// EndImage_Return
// EndImage_Remove
// XML_Load
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////





//Function /////////////////////////////////////////////////////////////////
//Name..........: Comments_Load
//Description...: Function load xml file.
//Syntax........: Comments_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 22.03.2015
////////////////////////////////////////////////////////////////////////////
function Comments_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Comments_Add
//Description...: Function add comment.
//Syntax........: Comments_Add($File,$Id,$Date,$Time,$Nick,$Mainimg,$Text)
//Parameters....: $File - path to xml file.
//                $Id - number ordinal
//                $Date - date of comment
//                $Time - time of comment
//                $Nick - sender nick
//                $Mainimg - number of main image profile
//                $Text - comment
//                $Sex - sex of commentator
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 22.03.2015
////////////////////////////////////////////////////////////////////////////
function Comments_Add($File,$Id,$Date,$Time,$Nick,$Mainimg,$Text,$Sex)
{
$doc = simplexml_load_file($File);
$comment = $doc->addChild('comment');
$comment->addAttribute('id', $Id);
$comment->addChild('date', $Date);
$comment->addChild('time', $Time);
$comment->addChild('nick', $Nick);
$comment->addChild('mainimg', $Mainimg);
$comment->addChild('text', $Text);
$comment->addChild('sex', $Sex);

$doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Comments_Remove
//Description...: Function remove comment
//Syntax........: Comments_Remove($File,$Id)
//Parameters....: $File - path to xml file.
//                $Id -  number ordinal
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 22.03.2015
////////////////////////////////////////////////////////////////////////////
function Comments_Remove($File,$Id)
{
$doc = simplexml_load_file($File);
  foreach($doc->comment as $comment)
  {
    if($comment['id'] == $Id)
    {
        $elementsToRemove[] = $comment;
    }
  }

$Set=0;
if(isset($elementsToRemove))
{
   foreach ($elementsToRemove as $comment)
   {
      unset($comment[0]);
      $Set=1;
   }
}


if ($Set == 1) $doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Block_Load
//Description...: Function load xml file.
//Syntax........: Block_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 26.03.2015
////////////////////////////////////////////////////////////////////////////
function  Block_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Block_Add
//Description...: Function add blocked.
//Syntax........: Block_Add($File,$Id,$Date,$Nick,$Mainimg)
//Parameters....: $File - path to xml file.
//                $Id - number ordinal
//                $Date - date of blocked
//                $Nick - sender nick
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 26.03.2015
////////////////////////////////////////////////////////////////////////////
function Block_Add($File,$Id,$Date,$Nick)
{
$doc = simplexml_load_file($File);
$block = $doc->addChild('block');
$block->addAttribute('id', $Id);
$block->addChild('date', $Date);
$block->addChild('nick', $Nick);
$doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Block_Remove
//Description...: Function remove blocked
//Syntax........: Block_Remove($File,$Id)
//Parameters....: $File - path to xml file.
//                $Id -  number ordinal
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 26.03.2015
////////////////////////////////////////////////////////////////////////////
function Block_Remove($File,$Id)
{
$doc = simplexml_load_file($File);
  foreach($doc->block as $block)
  {
    if($block['id'] == $Id)
    {
        $elementsToRemove[] = $block;
    }
  }

$Set=0;
if(isset($elementsToRemove))
{
   foreach ($elementsToRemove as $block)
   {
      unset($block[0]);
      $Set=1;
   }
}


if ($Set == 1) $doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Query_Load
//Description...: Function load xml file.
//Syntax........: Query_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function  Query_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Query_Add
//Description...: Function add blocked.
//Syntax........: Query_Add($File,$Id,$Date,$Nick,$Mainimg)
//Parameters....: $File - path to xml file.
//                $Id - number ordinal
//                $Date - date of blocked
//                $Nick - sender nick
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function Query_Add($File,$Id,$Date,$Nick)
{
$doc = simplexml_load_file($File);
$query = $doc->addChild('query');
$query->addAttribute('id', $Id);
$query->addChild('date', $Date);
$query->addChild('nick', $Nick);
$doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Query_Remove
//Description...: Function remove blocked
//Syntax........: Query_Remove($File,$Id)
//Parameters....: $File - path to xml file.
//                $Id -  number ordinal
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function Query_Remove($File,$Id)
{
$doc = simplexml_load_file($File);

  foreach($doc->query as $query)
  {
    if($query['id'] == $Id)
    {
        $elementsToRemove[] = $query;
    }
  }

$Set=0;
if(isset($elementsToRemove))
{
   foreach ($elementsToRemove as $query)
   {
      unset($query[0]);
      $Set=1;
   }
}


if ($Set == 1) $doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Reply_Load
//Description...: Function load xml file.
//Syntax........: Reply_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function  Reply_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Reply_Add
//Description...: Function add reply.
//Syntax........: Reply_Add($File,$Id,$Date,$Nick,$Mainimg,$NC,$Contact)
//Parameters....: $File - path to xml file.
//                $Id - number ordinal
//                $Date - date of blocked
//                $Nick - sender nick
//                $Mainimg - number of main image profile
//                $NC - number of contact
//                $Contact - contact
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function Reply_Add($File,$Id,$Date,$Nick,$Mainimg,$NC,$Contact)
{
$doc = simplexml_load_file($File);
$reply = $doc->addChild('reply');
$reply->addAttribute('id', $Id);
$reply->addChild('date', $Date);
$reply->addChild('nick', $Nick);
$reply->addChild('mainimg', $Mainimg);
$reply->addChild('nc', $NC);
$reply->addChild('contact', $Contact);
$doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: Reply_Remove
//Description...: Function remove blocked
//Syntax........: Reply_Remove($File,$Id)
//Parameters....: $File - path to xml file.
//                $Id -  number ordinal
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function Reply_Remove($File,$Id)
{
$doc = simplexml_load_file($File);
  foreach($doc->reply as $reply)
  {
    if($reply['id'] == $Id)
    {
        $elementsToRemove[] = $reply;
    }
  }

$Set=0;
if(isset($elementsToRemove))
{
   foreach ($elementsToRemove as $reply)
   {
      unset($reply[0]);
      $Set=1;
   }
}


if ($Set == 1) $doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: DeletedImage_Load
//Description...: Function load xml file.
//Syntax........: DeletedImage_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function  DeletedImage_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: DeletedImage_Add
//Description...: Function add reply.
//Syntax........: DeletedImage_Add($File,$Number)
//Parameters....: $File - path to xml file.
//                $Number - number of image
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function DeletedImage_Add($File,$Number)
{
$doc = simplexml_load_file($File);
$doc->addChild('delimg',$Number);
$doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: DeletedImage_Return
//Description...: Function remove deletedimage file
//Syntax........: DeletedImage_Return($Path)
//Parameters....: $Path - path to file
//Return values.: Number of next image or null where file is empty
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function DeletedImage_Return($Path)
{
$doc = simplexml_load_file($Path);
$result = $doc->delimg[0];

return $result ;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: DeletedImage_Remove
//Description...: Function remove deletedimage file
//Syntax........: DeletedImage_Remove($Path)
//Parameters....: $Path - path to file
//Return values.: Error save or sucessful save
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function DeletedImage_Remove($Path)
{
$doc = simplexml_load_file($Path);

$elementsToRemove[] = $doc->delimg[0];

   foreach ($elementsToRemove as $delimg)
   {
      unset($delimg[0]);
   }

return $doc->asXML($Path) ;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: EndImage_Load
//Description...: Function load xml file.
//Syntax........: EndImage_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function  EndImage_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: EndImage_Add
//Description...: Function add reply.
//Syntax........: EndImage_Add($File,$Number)
//Parameters....: $File - path to xml file.
//                $Number - number of image
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function EndImage_Add($File,$Number)
{
$doc = simplexml_load_file($File);
$doc->addChild('endimg',$Number);
$doc->asXML($File);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: EndImage_Return
//Description...: Function remove deletedimage file
//Syntax........: EndImage_Return($Path)
//Parameters....: $Path - path to file
//Return values.: Number of next image or null where file is empty
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function EndImage_Return($Path)
{
$doc = simplexml_load_file($Path);
$result = $doc->endimg[0];

return $result ;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: EndImage_Remove
//Description...: Function remove deletedimage file
//Syntax........: EndImage_Remove($Path)
//Parameters....: $Path - path to file
//Return values.: Error save or sucessful save
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function EndImage_Remove($Path)
{
$doc = simplexml_load_file($Path);

$elementsToRemove[] = $doc->endimg[0];

   foreach ($elementsToRemove as $endimg)
   {
      unset($endimg[0]);
   }

return $doc->asXML($Path) ;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: XML_Load
//Description...: Function load xml file.
//Syntax........: XML_Load($File)
//Parameters....: $File - path to xml file.
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 21.04.2015
////////////////////////////////////////////////////////////////////////////
function  XML_Load($File)
{
return simplexml_load_file($File);
}
////////////////////////////////////////////////////////////////////////////

?>