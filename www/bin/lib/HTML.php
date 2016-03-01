<?php
////////////////////////////////////////////////////////////////////////////
//HTML library//////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: £ukasz Kusy
//Last update data.: 25.03.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// HTML_NL
// HTML_AddImage
// HTML_AddImageSize
// HTML_AddImageSizeName
// HTML_AddLinkImage
// HTML_AddLinkImageSize
// HTML_AddLinkImageSizeName
// HTML_Text
// HTML_TextCol
// HTML_DivStart
// HTML_DivEnd
// HTML_DivIDStart
// HTML_DivIDNameStart
// HTML_Xmlns
// HTML_HeadStart
// HTML_HeadEnd
// HTML_Title
// HTML_JS
// HTML_CSS
// HTML_BodyStart
// HTML_BodyEnd
// HTML_CenterStart
// HTML_CenterEnd
// HTML_ULStart
// HTML_ULEnd
// HTML_FormStart
// HTML_FormEnd
// HTML_FormAddInput
// HTML_FormAddInputId
// HTML_FormAddButton
// HTML_FormAddButtonID
// HTML_FormAddButtonIDType
// HTML_FormAddInputView
// HTML_FormSelectStart
// HTML_FormSelectEnd
// HTML_FormSelectOption
// HTML_FormTextarea
// HTML_FormTextareaDescription
// HTML_FormCheckbox
// HTML_FormCheckboxChoice
// HTML_FormRadio
// HTML_AddSpecialLnik
// HTML_AddSpan
// HTML_ButtonCommentLeft
// HTML_ButtonCommentRight
// HTML_ButtonReportLeft
// HTML_ButtonReportRight
// HTML_TableStart
// HTML_TableEnd
// HTML_TableRowStart
// HTML_TableRowEnd
// HTML_TableColStart
// HTML_TableColEnd
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////





//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_NL
//Description...: Function add new line/s.
//Syntax........: HTML_NL($Count)
//Parameters....: $Count - Count new line
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_NL($Count)
{
         for ($x = 0; $x < $Count; $x++ )
         {
          echo ("<br>");
         }
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddImage
//Description...: Function add image.
//Syntax........: HTML_AddImage($Name)
//Parameters....: $Name - address of image
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddImage($Name)
{
     echo " <img src=".$Name." />";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddImageSize
//Description...: Function add image size.
//Syntax........: HTML_AddImageSize($Name,$Width,$Height)
//Parameters....: $Name - address of image
//                $Width - image width
//                $Height - image height
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddImageSize($Name,$Width,$Height)
{
     echo " <img src=".$Name." width=".$Width." height=".$Height." />";
}
////////////////////////////////////////////////////////////////////////////


//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddImageSizeName
//Description...: Function add image size.
//Syntax........: HTML_AddImageSizeName($Name,$Width,$Height,$NAME,$Id)
//Parameters....: $Name - address of image
//                $Width - image width
//                $Height - image height
//                $NAME - name div
//                $Id - id javascript
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddImageSizeName($Name,$Width,$Height,$NAME,$Id)
{
     echo " <img id=".$Id." name=".$NAME." src=".$Name." width=".$Width." height=".$Height." />";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddLinkImage
//Description...: Function add image with hyperlink.
//Syntax........: HTML_AddLinkImage($Link,$Name)
//Parameters....: $Link - hyperlink
//                $Name - address of image
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddLinkImage($Link,$Name)
{
    echo "<a href=".$Link."> <img src=".$Name." />    </a>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddLinkImageSize
//Description...: Function add image size with hyperlink.
//Syntax........: HTML_AddLinkImageSize($Link,$Name,$Width,$Height)
//Parameters....: $Link - hyperlink
//                $Name - address of image
//                $Width - image width
//                $Height - image height
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddLinkImageSize($Link,$Name,$Width,$Height)
{
     echo " <a href=".$Link."><img src=".$Name." width=".$Width." height=".$Height." /></a>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddLinkImageSizeName
//Description...: Function add image size with hyperlink.
//Syntax........: HTML_AddLinkImageSizeName($Link,$Name,$Width,$Height,$Names,$Func,$Func1)
//Parameters....: $Link - hyperlink
//                $Name - address of image
//                $Width - image width
//                $Height - image height
//                $Names - name
//                $Func - name of function
//                $Func1 - name of function two
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 21.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddLinkImageSizeName($Link,$Name,$Width,$Height,$Names,$Func,$Func1)
{
     echo " <a href=".$Link."><img src=".$Name." width=".$Width." height=".$Height." name='".$Names."' onmouseover='".$Func."' onmouseout='".$Func1."' /></a>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_Text
//Description...: Function add text.
//Syntax........: HTML_Text($Text)
//Parameters....: $Text - text
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_Text($Text)
{
     echo $Text;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TextCol
//Description...: Function add text color.
//Syntax........: HTML_TextCol($Text,$Color)
//Parameters....: $Text - text
//                $Color - color code
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TextCol($Text,$Color)
{
   echo "<font color=".$Color.">".$Text."</font>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_DivStart
//Description...: Function start div.
//Syntax........: HTML_DivStart($Class)
//Parameters....: $Class - name of class div
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_DivStart($Class)
{
    echo "<div class=".$Class.">";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_DivEnd
//Description...: Function end div.
//Syntax........: HTML_DivEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function  HTML_DivEnd()
{
     echo "</div>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_DivIDStart
//Description...: Function start div.
//Syntax........: HTML_DivIDStart($Class)
//Parameters....: $Class - name of class div
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 18.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_DivIDStart($Class)
{
    echo "<div id=".$Class.">";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_DivIDNameStart
//Description...: Function start div.
//Syntax........: HTML_DivIDNameStart($Class,$Title)
//Parameters....: $Class - name of class div
//                $Title - title
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 28.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_DivIDNameStart($Class,$Title)
{
    echo "<div id='".$Class."' title='".$Title."'>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_Xmlns
//Description...: Function add encoding the webpage.
//Syntax........: HTML_Xmlns()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_Xmlns()
{
         HTML_Text("<html xmlns='http://www.w3.org/1999/xhtml' xml:lang'en'>");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_HeadStart
//Description...: Function add head.
//Syntax........: HTML_HeadStart()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_HeadStart()
{
   echo "<head>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_HeadEnd
//Description...: Function add ending head.
//Syntax........: HTML_HeadEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_HeadEnd()
{
   echo "</head>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_Title
//Description...: Function add webpage name.
//Syntax........: HTML_Title($Name)
//Parameters....: $Name - webpage name
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_Title($Name)
{
   echo "<title>".$Name."</title>  ";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_JS
//Description...: Function add JavaScript code.
//Syntax........: HTML_JS($Name)
//Parameters....: $Name - address of JS file
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_JS($Name)
{
   echo "<script src=".$Name." type='text/javascript'></script> ";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_CSS
//Description...: Function add stylesheet.
//Syntax........: HTML_CSS($Name)
//Parameters....: $Name - address of CSS file
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_CSS($Name)
{
   echo "<link rel='stylesheet' type='text/css' href=".$Name." media='screen' /> ";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_BodyStart
//Description...: Function add body.
//Syntax........: HTML_BodyStart()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_BodyStart()
{
   echo "<body link='#4C4C4C' vlink='#4C4C4C' alink='#4C4C4C'>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_HTML_BodyEnd
//Description...: Function add ending body.
//Syntax........: HTML_BodyEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_BodyEnd()
{
   echo "</body>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_CenterStart
//Description...: Function add center.
//Syntax........: HTML_BodyEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_CenterStart()
{
   echo "<center>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_CenterEnd
//Description...: Function add ending center.
//Syntax........: HTML_CenterEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_CenterEnd()
{
   echo "</center>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_ULStart
//Description...: Function add ul.
//Syntax........: HTML_ULStart()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_ULStart()
{
   echo "<ul>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_ULEnd
//Description...: Function add ending ul.
//Syntax........: HTML_ULEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_ULEnd()
{
   echo "</ul>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormStart
//Description...: Function add form.
//Syntax........: HTML_FormStart($Name)
//Parameters....: $Name - file name
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormStart($Name)
{
   echo "<form action=".$Name." method='post'>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormEnd
//Description...: Function add ending form.
//Syntax........: HTML_FormEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormEnd()
{
   echo "</form>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddInput
//Description...: Function add input element to form.
//Syntax........: HTML_FormAddInput($Class,$Type,$Name,$Value)
//Parameters....: $Class - name of class (css)
//                $Type - type element
//                $Name - file name
//                $Value - return value
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddInput($Class,$Type,$Name,$Value)
{
   echo "<input class=".$Class." type=".$Type." name=".$Name." value=".$Value." >";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddInputId
//Description...: Function add input element to form.
//Syntax........: HTML_FormAddInputId($Class,$Type,$Name,$Value,$Id)
//Parameters....: $Class - name of class (css)
//                $Type - type element
//                $Name - file name
//                $Value - return value
//                $Id - id
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddInputId($Class,$Type,$Name,$Value,$Id)
{
   echo "<input id=".$Id." class=".$Class." type=".$Type." name=".$Name." value=".$Value." >";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddButton
//Description...: Function add button to form.
//Syntax........: HTML_FormAddButton($Class,$Name,$Value)
//Parameters....: $Class - name of class (css)
//                $Name - file name
//                $Value - return value
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddButton($Class,$Name,$Value)
{
   echo "<input class=".$Class." type='submit' name=".$Name." value=".$Value." >";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddButtonID
//Description...: Function add button to form.
//Syntax........: HTML_FormAddButtonID($Class,$Name,$Value)
//Parameters....: $Class - name of class (css)
//                $Name - file name
//                $Value - return value
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 28.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddButtonID($Class,$Name,$Value)
{
   echo "<button name='".$Class."' id='".$Value."'>".$Name."</button>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddButtonIDType
//Description...: Function add button to form.
//Syntax........: HTML_FormAddButtonIDType($Class,$Name,$Value,$Type)
//Parameters....: $Class - name of class (css)
//                $Name - file name
//                $Value - return value
//                $Type - type of button
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 28.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddButtonIDType($Class,$Name,$Value,$Type)
{
   echo "<button name='".$Class."' type='".$Type."' id=".$Value.">".$Name."</button>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddInputMax
//Description...: Function add input element to form.
//Syntax........: HTML_FormAddInputMax($Class,$Type,$Name,$Value,$Lenght)
//Parameters....: $Class - name of class (css)
//                $Type - type element
//                $Name - file name
//                $Value - return value
//                $Lenght - max lenght
//                $Size - size
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 18.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddInputMax($Class,$Type,$Name,$Value,$Lenght,$Size)
{
   echo "<input class=".$Class." type=".$Type." name=".$Name."  maxlength=".$Lenght." size=".$Size." value=".$Value." >";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormAddInputView
//Description...: Function add input element to form.
//Syntax........: HTML_FormAddInputView($Class,$Type,$Name,$Value,$View)
//Parameters....: $Class - name of class (css)
//                $Type - type element
//                $Name - file name
//                $Value - return value
//                $View - disabled
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 16.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormAddInputView($Class,$Type,$Name,$Value,$View)
{
   if ($View == 0)
   {
       echo "<input class=".$Class." type=".$Type." name=".$Name." value=".$Value." >";
   }
   else
   {
      echo "<input class=".$Class." type=".$Type." name=".$Name." disabled='disabled' value=".$Value." >";
   }
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormSelectStart
//Description...: Function add select element to form.
//Syntax........: HTML_FormSelectStart($Class,$Name,$View)
//Parameters....: $Class - name of class (css)
//                $Name - file name
//                $View - (1)disabled (0)enabled
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 16.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormSelectStart($Class,$Name,$View)
{
   if ($View == 0)
   {
       echo "<select class=".$Class." name=".$Name." >";
   }
   else
   {
      echo "<select class=".$Class." name=".$Name." disabled='disabled'>";
   }
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormSelectEnd
//Description...: Function add ending select element.
//Syntax........: HTML_FormSelectEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 16.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormSelectEnd()
{
      echo "</select>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormSelectOption
//Description...: Function add option to select element.
//Syntax........: HTML_FormSelectOption($Option)
//Parameters....: $Option - option
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 16.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormSelectOption($Option)
{
      echo "<option>".$Option."</option>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormTextarea()
//Description...: Function add textarea.
//Syntax........: HTML_FormTextarea()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 25.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormTextarea()
{
      echo "<textarea class='none' name='text' cols=70 rows=5 maxlength='500'></textarea>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormTextareaDescription
//Description...: Function add textarea.
//Syntax........: HTML_FormTextareaDescription($Text)
//Parameters....: $Text - description
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 11.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormTextareaDescription($Text)
{
      echo "<textarea class='none' name='text' cols=70 rows=5>".$Text."</textarea>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormCheckbox
//Description...: Function add checkbox.
//Syntax........: HTML_FormCheckbox($Class,$Name,$Value,$View)
//Parameters....: $Class - css class
//                $Name - name
//                $Value - value
//                $Viev - (1)disabled (0)enabled
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 16.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormCheckbox($Class,$Name,$Value,$View)
{
      if ($View == 0)
   {
       echo "<input class=".$Class." type='checkbox' name=".$Name." value=".$Value."  />";
   }
   else
   {
      echo "<input class=".$Class." type='checkbox' name=".$Name." value=".$Value." disabled='disabled' />";
   }
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormCheckboxChoice
//Description...: Function add checkbox.
//Syntax........: HTML_FormCheckboxChoice($Class,$Name,$Value,$View,$Choice)
//Parameters....: $Class - css class
//                $Name - name
//                $Value - value
//                $Viev - (1)disabled (0)enabled
//                $Choice - checked or not checked
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 16.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormCheckboxChoice($Class,$Name,$Value,$View,$Choice)
{
      if ($View == 0)
   {
       if($Choice == 1)
       {
       echo "<input class='".$Class."' type='checkbox' name='".$Name."' value='".$Value."' checked='checked' />";
       }
       if($Choice == 0)
       {
       echo "<input class='".$Class."' type='checkbox' name='".$Name."' value='".$Value."'  />";
       }
   }
   else
   {
      if($Choice == 1)
      {
      echo "<input class='".$Class."' type='checkbox' name='".$Name."' value='".$Value."' disabled='disabled' checked='checked' />";
      }
      if($Choice == 0)
      {
      echo "<input class='".$Class."' type='checkbox' name='".$Name."' value='".$Value."' disabled='disabled' />";
      }
   }
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_FormRadio
//Description...: Function add radio button.
//Syntax........: HTML_FormRadio($Name,$Value)
//Parameters....: $Name - name variable
//                $Value - value
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 27.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_FormRadio($Name,$Value)
{
      echo "<label><input type='radio' name='".$Name."' value=".$Value." /> </label>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddSpecialLnik
//Description...: Function add specjal link.
//Syntax........: HTML_AddSpecialLnik()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 24.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddSpecialLnik()
{
   echo " <a href='../about/' style='text-decoration: none'>Rixrank.com &copy 2015</a>";
}
////////////////////////////////////////////////////////////////////////////


//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_AddSpan
//Description...: Function add span link.
//Syntax........: HTML_AddSpan($ID)
//Parameters....: $ID - name of link
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 25.03.2015
////////////////////////////////////////////////////////////////////////////
function HTML_AddSpan($ID)
{
   echo "<span id='".$ID."'></span>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_ButtonCommentLeft
//Description...: Function add button to document.
//Syntax........: HTML_ButtonCommentLeft($Mark,$Num1,$Num2,$Name)
//Parameters....: $Mark - mark
//                $Num1 - number of first image
//                $Num2 - number of second image
//                $Name - name of button
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 10.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_ButtonCommentLeft($Mark,$Num1,$Num2,$Name)
{
   echo "<input name='left_button_border' type='button' onclick=left_button(".$Mark.",".$Num1.",".$Num2.") value='".$Name."'/>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_ButtonCommentRight
//Description...: Function add button to document.
//Syntax........: HTML_ButtonCommentRight($Mark,$Num1,$Num2,$Name)
//Parameters....: $Mark - mark
//                $Num1 - number of first image
//                $Num2 - number of second image
//                $Name - name of button
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 10.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_ButtonCommentRight($Mark,$Num1,$Num2,$Name)
{
   echo "<input name='right_button_border' type='button' onclick=right_button(".$Mark.",".$Num1.",".$Num2.") value='".$Name."'/>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_ButtonReportLeft
//Description...: Function add button to document.
//Syntax........: HTML_ButtonReportLeft($Name)
//Parameters....: $Name - name of button
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 10.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_ButtonReportLeft($Name)
{
   echo "<input name='report_left' id=report_js_left type='button' value='".$Name."'/>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_ButtonReportRight
//Description...: Function add button to document.
//Syntax........: HTML_ButtonReportRight($Name)
//Parameters....: $Name - name of button
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 10.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_ButtonReportRight($Name)
{
   echo "<input name='report_right' id=report_js_right type='button' value='".$Name."'/>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TableStart
//Description...: Function start table area.
//Syntax........: HTML_TableStart()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 20.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TableStart()
{
   echo "<table>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TableEnd
//Description...: Function end table area.
//Syntax........: HTML_TableEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 20.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TableEnd()
{
   echo "</table>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TableRowStart
//Description...: Function start row.
//Syntax........: HTML_TableRowStart()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 20.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TableRowStart()
{
   echo "<tr>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TableRowEnd
//Description...: Function end row.
//Syntax........: HTML_TableRowEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 20.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TableRowEnd()
{
   echo "</tr>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TableColStart
//Description...: Function start row.
//Syntax........: HTML_TableColStart($Color)
//Parameters....: $Color - fill color
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 21.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TableColStart($Color)
{
   echo "<td bgcolor='".$Color."'>";
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: HTML_TableColEnd
//Description...: Function end row.
//Syntax........: HTML_TableColEnd()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 20.04.2015
////////////////////////////////////////////////////////////////////////////
function HTML_TableColEnd()
{
   echo "</td>";
}
////////////////////////////////////////////////////////////////////////////

?>