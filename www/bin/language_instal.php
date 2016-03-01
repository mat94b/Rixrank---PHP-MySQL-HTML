<?php

include('lib/MySQL.php');

SQL_Connect();


mysql_query("INSERT INTO languages VALUES('MENU_JOIN',',join the fun!','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_COMPARE','Compare photos','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_UPLOAD','Upload photo','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_POFILE','My profile','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_LOCAL','Local ranking','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_GLOBAL','Global ranking','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_ASK','Ask/Reply','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_SEARCH','Search','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_SETTINGS','Settings','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MENU_LOGOUT','Logout','',0,'',0,null);");


mysql_query("INSERT INTO languages VALUES('FOOTER_RIGHTS','All rights are reserved.','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('FOOTER_DEVELOPERS','Developers','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('FOOTER_STATUTE','Statute','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('FOOTER_CONTACT','Contact','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('FOOTER_REPORT','Report','',0,'',0,null);");

mysql_query("INSERT INTO languages VALUES('PROFILE_LADY','Lady','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_GENTLEMAN','Gentleman','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_AGE','Age','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_CITY','City','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_LAST','Last loged in','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_CONTACT','s contacts','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_YOUR','Your photos','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_ABOUT','About me','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_COMMENTS','Comments','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_DELETE','delete','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('PROFILE_COMMENT','Comment!','',0,'',0,null);");

mysql_query("INSERT INTO languages VALUES('COMPARE_REPORT','report perverted photo','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('COMPARE_REPORT_TEXT','The photo was reported. Thank you for your help. We will assess whether the photo is offensive soon. ','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('COMPARE_RANK','Rank','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('COMPARE_VICTORIES','Victories','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('COMPARE_NEXT','Next','',0,'',0,null);");

mysql_query("INSERT INTO languages VALUES('UPLOAD_UPLOAD','Upload photo','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_CLICK','Click to upload!','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_SEND','Send','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_CROP_PHOTO','Crop photo','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_ENLARGE','Enlarge','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_DECREASE','Decrease','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_CROP','Crop','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_SAVE','Save','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_INFO','How to add a photo?','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_STEP1','1. Click on the button Click to upload and select picture','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_STEP2','2. Click on button Send.','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_STEP3','3. Crop your photo using simple interface.','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('UPLOAD_STEP4','4. Click Save to finish.','',0,'',0,null);");

mysql_query("INSERT INTO languages VALUES('MESSAGES_QUERIES','Queries','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MESSAGES_REPLIES','Replies','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MESSAGES_SHARE','Share','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MESSAGES_REFUSE','Refuse','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('MESSAGES_BLOCK','Block','',0,'',0,null);");

mysql_query("INSERT INTO languages VALUES('SEARCH_NICK','Nickname','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SEARCH_SEARCH','Search','',0,'',0,null);");

mysql_query("INSERT INTO languages VALUES('SETTINGS_SETTINGS','Settings','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_PERSONAL','Personal','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_NICK','Nick','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_PASS','New password','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_REPEAT','Repeat password','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_MAIL','E-mail','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_COUNTRY','Country','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_BIRTHDAY','Birthday','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_COMPULSORY','It is compulsory to finish registration','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_INFO','Information','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_INFO_TEXT','To finish registration and gain full acces. Input your country and birthday date.','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_LANG','Language','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_PRIVACY','Information & privacy','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_ACTIVE','Active queries/comments','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_NEWS','Newsletter','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_VSB_CITY','Visibility city','',0,'',0,null);");
mysql_query("INSERT INTO languages VALUES('SETTINGS_VSB_MAIL','Visibility mail','',0,'',0,null);");


SQL_Close();
