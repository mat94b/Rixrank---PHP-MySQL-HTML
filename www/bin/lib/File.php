<?php
////////////////////////////////////////////////////////////////////////////
//File library//////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: £ukasz Kusy
//Last update data.: 17.04.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// File_Open
// File_Close
// File_ReadLock
// File_WriteLock
// File_Unlock
// File_Exist
// File_GetImageSize
// File_Copy
// File_NameFolder
// File_GenerateKey
////////////////////////////////////////////////////////////////////////////






//Function /////////////////////////////////////////////////////////////////
//Name..........: File_Open
//Description...: Function open file
//Syntax........: File_Open($Path)
//Parameters....: $Path - path to file
//Return values.: Handle to file
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function File_Open($Path)
{
   return fopen($Path, "r+");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_Close
//Description...: Function close file
//Syntax........: File_Close($Path)
//Parameters....: $Path - path to file
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function File_Close($Path)
{
   fclose($Path);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_ReadLock
//Description...: Function lock on read
//Syntax........: File_ReadLock($Path)
//Parameters....: $Path - path to file
//Return values.: False or True
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function File_ReadLock($Path)
{
   return flock($Path, LOCK_SH);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_WriteLock
//Description...: Function lock on write
//Syntax........: File_WriteLock($Path)
//Parameters....: $Path - path to file
//Return values.: False or True
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function File_WriteLock($Path)
{
   return flock($Path, LOCK_EX);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_Unlock
//Description...: Function unlock file
//Syntax........: File_Unlock($Path)
//Parameters....: $Path - path to file
//Return values.: False or True
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function File_Unlock($Path)
{
   return flock($Path, LOCK_UN);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_Exist
//Description...: Function checks existion file
//Syntax........: File_Exist($Path)
//Parameters....: $Path - path to file
//Return values.: False or True
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function File_Exist($Path)
{
   return file_exists($Path);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_GetImageSize
//Description...: Function get image size
//Syntax........: File_GetImageSize($Path)
//Parameters....: $Path - path to file
//Return values.: False or True
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function File_GetImageSize($Path)
{
   return getimagesize($Path);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_Copy
//Description...: Function get image size
//Syntax........: File_Copy($Path1,$Path2)
//Parameters....: $Path - path to file (sourse)
//                $Path2 - path
//Return values.: False or True
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function File_Copy($Path1,$Path2)
{
   return copy($Path1,$Path2);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_NameFolder
//Description...: Function
//Syntax........: File_NameFolder($Number)
//Parameters....: $Number - number of image
//Return values.: Name folder
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function  File_NameFolder($Number)
{
    if( $Number <= 20000) return 1;
    if( $Number > 20000 && $Number <= 40000) return 2;
    if( $Number > 40000 && $Number <= 60000) return 3;
    if( $Number > 60000 && $Number <= 80000) return  4;
    if( $Number > 80000 && $Number <= 100000) return  5;
    if( $Number > 100000 && $Number <= 120000) return 6;
    if( $Number > 120000 && $Number <= 140000) return 7;
    if( $Number > 140000 && $Number <= 160000) return 8;
    if( $Number > 160000 && $Number <= 180000) return 9;
    if( $Number > 180000 && $Number <= 200000) return 10;
    if( $Number > 200000 && $Number <= 220000) return 11;
    if( $Number > 220000 && $Number <= 240000) return 12;
    if( $Number > 240000 && $Number <= 260000) return 13;
    if( $Number > 260000 && $Number <= 280000) return 14;
    if( $Number > 280000 && $Number <= 300000) return 15;
    if( $Number > 300000 && $Number <= 320000) return 16;
    if( $Number > 320000 && $Number <= 340000) return 17;
    if( $Number > 340000 && $Number <= 360000) return 18;
    if( $Number > 360000 && $Number <= 380000) return 19;
    if( $Number > 380000 && $Number <= 400000) return 20;
    if( $Number > 400000 && $Number <= 420000) return 21;
    if( $Number > 420000 && $Number <= 440000) return 22;
    if( $Number > 440000 && $Number <= 460000) return 23;
    if( $Number > 460000 && $Number <= 480000) return 24;
    if( $Number > 480000 && $Number <= 500000) return 25;
    if( $Number > 500000 && $Number <= 520000) return 26;
    if( $Number > 520000 && $Number <= 540000) return 27;
    if( $Number > 540000 && $Number <= 560000) return 28;
    if( $Number > 560000 && $Number <= 580000) return 29;
    if( $Number > 580000 && $Number <= 600000) return 30;
    if( $Number > 600000 && $Number <= 620000) return 31;
    if( $Number > 620000 && $Number <= 640000) return 32;
    if( $Number > 640000 && $Number <= 660000) return 33;
    if( $Number > 660000 && $Number <= 680000) return 34;
    if( $Number > 680000 && $Number <= 700000) return 35;
    if( $Number > 700000 && $Number <= 720000) return 36;
    if( $Number > 720000 && $Number <= 740000) return 37;
    if( $Number > 740000 && $Number <= 760000) return 38;
    if( $Number > 760000 && $Number <= 780000) return 39;
    if( $Number > 780000 && $Number <= 800000) return 40;
    if( $Number > 800000 && $Number <= 820000) return 41;
    if( $Number > 820000 && $Number <= 840000) return 42;
    if( $Number > 840000 && $Number <= 860000) return 43;
    if( $Number > 860000 && $Number <= 880000) return 44;
    if( $Number > 880000 && $Number <= 900000) return 45;
    if( $Number > 900000 && $Number <= 920000) return 46;
    if( $Number > 920000 && $Number <= 940000) return 47;
    if( $Number > 940000 && $Number <= 960000) return 48;
    if( $Number > 960000 && $Number <= 980000) return 49;
    if( $Number > 980000 && $Number <= 1000000) return 50;
    if( $Number > 1000000 && $Number <= 1020000) return 51;
    if( $Number > 1020000 && $Number <= 1040000) return 52;
    if( $Number > 1040000 && $Number <= 1060000) return 53;
    if( $Number > 1060000 && $Number <= 1080000) return 54;
    if( $Number > 1080000 && $Number <= 1100000) return 55;
    if( $Number > 1100000 && $Number <= 1120000) return 56;
    if( $Number > 1120000 && $Number <= 1140000) return 57;
    if( $Number > 1140000 && $Number <= 1160000) return 58;
    if( $Number > 1160000 && $Number <= 1180000) return 59;
    if( $Number > 1180000 && $Number <= 1200000) return 60;
    if( $Number > 1200000 && $Number <= 1220000) return 61;
    if( $Number > 1220000 && $Number <= 1240000) return 62;
    if( $Number > 1240000 && $Number <= 1260000) return 63;
    if( $Number > 1260000 && $Number <= 1280000) return 64;
    if( $Number > 1280000 && $Number <= 1300000) return 65;
    if( $Number > 1300000 && $Number <= 1320000) return 66;
    if( $Number > 1320000 && $Number <= 1340000) return 67;
    if( $Number > 1340000 && $Number <= 1360000) return 68;
    if( $Number > 1360000 && $Number <= 1380000) return 69;
    if( $Number > 1380000 && $Number <= 1400000) return 70;
    if( $Number > 1400000 && $Number <= 1420000) return 71;
    if( $Number > 1420000 && $Number <= 1440000) return 72;
    if( $Number > 1440000 && $Number <= 1460000) return 73;
    if( $Number > 1460000 && $Number <= 1480000) return 74;
    if( $Number > 1480000 && $Number <= 1500000) return 75;
    if( $Number > 1500000 && $Number <= 1520000) return 76;
    if( $Number > 1520000 && $Number <= 1540000) return 77;
    if( $Number > 1540000 && $Number <= 1560000) return 78;
    if( $Number > 1560000 && $Number <= 1580000) return 79;
    if( $Number > 1580000 && $Number <= 1600000) return 80;
    if( $Number > 1600000 && $Number <= 1620000) return 81;
    if( $Number > 1620000 && $Number <= 1640000) return 82;
    if( $Number > 1640000 && $Number <= 1660000) return 83;
    if( $Number > 1660000 && $Number <= 1680000) return 84;
    if( $Number > 1680000 && $Number <= 1700000) return 85;
    if( $Number > 1700000 && $Number <= 1720000) return 86;
    if( $Number > 1720000 && $Number <= 1740000) return 87;
    if( $Number > 1740000 && $Number <= 1760000) return 88;
    if( $Number > 1760000 && $Number <= 1780000) return 89;
    if( $Number > 1780000 && $Number <= 1800000) return 90;
    if( $Number > 1800000 && $Number <= 1820000) return 91;
    if( $Number > 1820000 && $Number <= 1840000) return 92;
    if( $Number > 1840000 && $Number <= 1860000) return 93;
    if( $Number > 1860000 && $Number <= 1880000) return 94;
    if( $Number > 1880000 && $Number <= 1900000) return 95;
    if( $Number > 1900000 && $Number <= 1920000) return 96;
    if( $Number > 1920000 && $Number <= 1940000) return 97;
    if( $Number > 1940000 && $Number <= 1960000) return 98;
    if( $Number > 1960000 && $Number <= 1980000) return 99;
    if( $Number > 1980000 && $Number <= 2000000) return 100;
    if( $Number > 2000000 && $Number <= 2020000) return 101;
    if( $Number > 2020000 && $Number <= 2040000) return 102;
    if( $Number > 2040000 && $Number <= 2060000) return 103;
    if( $Number > 2060000 && $Number <= 2080000) return 104;
    if( $Number > 2080000 && $Number <= 2100000) return 105;
    if( $Number > 2100000 && $Number <= 2120000) return 106;
    if( $Number > 2120000 && $Number <= 2140000) return 107;
    if( $Number > 2140000 && $Number <= 2160000) return 108;
    if( $Number > 2160000 && $Number <= 2180000) return 109;
    if( $Number > 2180000 && $Number <= 2200000) return 110;
    if( $Number > 2200000 && $Number <= 2220000) return 111;
    if( $Number > 2220000 && $Number <= 2240000) return 112;
    if( $Number > 2240000 && $Number <= 2260000) return 113;
    if( $Number > 2260000 && $Number <= 2280000) return 114;
    if( $Number > 2280000 && $Number <= 2300000) return 115;
    if( $Number > 2300000 && $Number <= 2320000) return 116;
    if( $Number > 2320000 && $Number <= 2340000) return 117;
    if( $Number > 2340000 && $Number <= 2360000) return 118;
    if( $Number > 2360000 && $Number <= 2380000) return 119;
    if( $Number > 2380000 && $Number <= 2400000) return 120;
    if( $Number > 2400000 && $Number <= 2420000) return 121;
    if( $Number > 2420000 && $Number <= 2440000) return 122;
    if( $Number > 2440000 && $Number <= 2460000) return 123;
    if( $Number > 2460000 && $Number <= 2480000) return 124;
    if( $Number > 2480000 && $Number <= 2500000) return 125;
    if( $Number > 2500000 && $Number <= 2520000) return 126;
    if( $Number > 2520000 && $Number <= 2540000) return 127;
    if( $Number > 2540000 && $Number <= 2560000) return 128;
    if( $Number > 2560000 && $Number <= 2580000) return 129;
    if( $Number > 2580000 && $Number <= 2600000) return 130;
    if( $Number > 2600000 && $Number <= 2620000) return 131;
    if( $Number > 2620000 && $Number <= 2640000) return 132;
    if( $Number > 2640000 && $Number <= 2660000) return 133;
    if( $Number > 2660000 && $Number <= 2680000) return 134;
    if( $Number > 2680000 && $Number <= 2700000) return 135;
    if( $Number > 2700000 && $Number <= 2720000) return 136;
    if( $Number > 2720000 && $Number <= 2740000) return 137;
    if( $Number > 2740000 && $Number <= 2760000) return 138;
    if( $Number > 2760000 && $Number <= 2780000) return 139;
    if( $Number > 2780000 && $Number <= 2800000) return 140;
    if( $Number > 2800000 && $Number <= 2820000) return 141;
    if( $Number > 2820000 && $Number <= 2840000) return 142;
    if( $Number > 2840000 && $Number <= 2860000) return 143;
    if( $Number > 2860000 && $Number <= 2880000) return 144;/*
    if( $Number > 2880000 && $Number <= 2900000) return 2900000;
    if( $Number > 2900000 && $Number <= 2920000) return 2920000;
    if( $Number > 2920000 && $Number <= 2940000) return 2940000;
    if( $Number > 2940000 && $Number <= 2960000) return 2960000;
    if( $Number > 2960000 && $Number <= 2980000) return 2980000;
    if( $Number > 2980000 && $Number <= 3000000) return 3000000;
    if( $Number > 3000000 && $Number <= 3020000) return 3020000;
    if( $Number > 3020000 && $Number <= 3040000) return 3040000;
    if( $Number > 3040000 && $Number <= 3060000) return 3060000;
    if( $Number > 3060000 && $Number <= 3080000) return 3080000;
    if( $Number > 3080000 && $Number <= 3100000) return 3100000;
    if( $Number > 3100000 && $Number <= 3120000) return 3120000;
    if( $Number > 3120000 && $Number <= 3140000) return 3140000;
    if( $Number > 3140000 && $Number <= 3160000) return 3160000;
    if( $Number > 3160000 && $Number <= 3180000) return 3180000;
    if( $Number > 3180000 && $Number <= 3200000) return 3200000;
    if( $Number > 3200000 && $Number <= 3220000) return 3220000;
    if( $Number > 3220000 && $Number <= 3240000) return 3240000;
    if( $Number > 3240000 && $Number <= 3260000) return 3260000;
    if( $Number > 3260000 && $Number <= 3280000) return 3280000;
    if( $Number > 3280000 && $Number <= 3300000) return 3300000;
    if( $Number > 3300000 && $Number <= 3320000) return 3320000;
    if( $Number > 3320000 && $Number <= 3340000) return 3340000;
    if( $Number > 3340000 && $Number <= 3360000) return 3360000;
    if( $Number > 3360000 && $Number <= 3380000) return 3380000;
    if( $Number > 3380000 && $Number <= 3400000) return 3400000;
    if( $Number > 3400000 && $Number <= 3420000) return 3420000;
    if( $Number > 3420000 && $Number <= 3440000) return 3440000;
    if( $Number > 3440000 && $Number <= 3460000) return 3460000;
    if( $Number > 3460000 && $Number <= 3480000) return 3480000;
    if( $Number > 3480000 && $Number <= 3500000) return 3500000;
    if( $Number > 3500000 && $Number <= 3520000) return 3520000;
    if( $Number > 3520000 && $Number <= 3540000) return 3540000;
    if( $Number > 3540000 && $Number <= 3560000) return 3560000;
    if( $Number > 3560000 && $Number <= 3580000) return 3580000;
    if( $Number > 3580000 && $Number <= 3600000) return 3600000;
    if( $Number > 3600000 && $Number <= 3620000) return 3620000;
    if( $Number > 3620000 && $Number <= 3640000) return 3640000;
    if( $Number > 3640000 && $Number <= 3660000) return 3660000;
    if( $Number > 3660000 && $Number <= 3680000) return 3680000;
    if( $Number > 3680000 && $Number <= 3700000) return 3700000;
    if( $Number > 3700000 && $Number <= 3720000) return 3720000;
    if( $Number > 3720000 && $Number <= 3740000) return 3740000;
    if( $Number > 3740000 && $Number <= 3760000) return 3760000;
    if( $Number > 3760000 && $Number <= 3780000) return 3780000;
    if( $Number > 3780000 && $Number <= 3800000) return 3800000;
    if( $Number > 3800000 && $Number <= 3820000) return 3820000;
    if( $Number > 3820000 && $Number <= 3840000) return 3840000;
    if( $Number > 3840000 && $Number <= 3860000) return 3860000;
    if( $Number > 3860000 && $Number <= 3880000) return 3880000;
    if( $Number > 3880000 && $Number <= 3900000) return 3900000;
    if( $Number > 3900000 && $Number <= 3920000) return 3920000;
    if( $Number > 3920000 && $Number <= 3940000) return 3940000;
    if( $Number > 3940000 && $Number <= 3960000) return 3960000;
    if( $Number > 3960000 && $Number <= 3980000) return 3980000;
    if( $Number > 3980000 && $Number <= 4000000) return 4000000;
    if( $Number > 4000000 && $Number <= 4020000) return 4020000;
    if( $Number > 4020000 && $Number <= 4040000) return 4040000;
    if( $Number > 4040000 && $Number <= 4060000) return 4060000;
    if( $Number > 4060000 && $Number <= 4080000) return 4080000;
    if( $Number > 4080000 && $Number <= 4100000) return 4100000;
    if( $Number > 4100000 && $Number <= 4120000) return 4120000;
    if( $Number > 4120000 && $Number <= 4140000) return 4140000;
    if( $Number > 4140000 && $Number <= 4160000) return 4160000;
    if( $Number > 4160000 && $Number <= 4180000) return 4180000;
    if( $Number > 4180000 && $Number <= 4200000) return 4200000;
    if( $Number > 4200000 && $Number <= 4220000) return 4220000;
    if( $Number > 4220000 && $Number <= 4240000) return 4240000;
    if( $Number > 4240000 && $Number <= 4260000) return 4260000;
    if( $Number > 4260000 && $Number <= 4280000) return 4280000;
    if( $Number > 4280000 && $Number <= 4300000) return 4300000;
    if( $Number > 4300000 && $Number <= 4320000) return 4320000;
    if( $Number > 4320000 && $Number <= 4340000) return 4340000;
    if( $Number > 4340000 && $Number <= 4360000) return 4360000;
    if( $Number > 4360000 && $Number <= 4380000) return 4380000;
    if( $Number > 4380000 && $Number <= 4400000) return 4400000;
    if( $Number > 4400000 && $Number <= 4420000) return 4420000;
    if( $Number > 4420000 && $Number <= 4440000) return 4440000;
    if( $Number > 4440000 && $Number <= 4460000) return 4460000;
    if( $Number > 4460000 && $Number <= 4480000) return 4480000;
    if( $Number > 4480000 && $Number <= 4500000) return 4500000;
    if( $Number > 4500000 && $Number <= 4520000) return 4520000;
    if( $Number > 4520000 && $Number <= 4540000) return 4540000;
    if( $Number > 4540000 && $Number <= 4560000) return 4560000;
    if( $Number > 4560000 && $Number <= 4580000) return 4580000;
    if( $Number > 4580000 && $Number <= 4600000) return 4600000;
    if( $Number > 4600000 && $Number <= 4620000) return 4620000;
    if( $Number > 4620000 && $Number <= 4640000) return 4640000;
    if( $Number > 4640000 && $Number <= 4660000) return 4660000;
    if( $Number > 4660000 && $Number <= 4680000) return 4680000;
    if( $Number > 4680000 && $Number <= 4700000) return 4700000;
    if( $Number > 4700000 && $Number <= 4720000) return 4720000;
    if( $Number > 4720000 && $Number <= 4740000) return 4740000;
    if( $Number > 4740000 && $Number <= 4760000) return 4760000;
    if( $Number > 4760000 && $Number <= 4780000) return 4780000;
    if( $Number > 4780000 && $Number <= 4800000) return 4800000;
    if( $Number > 4800000 && $Number <= 4820000) return 4820000;
    if( $Number > 4820000 && $Number <= 4840000) return 4840000;
    if( $Number > 4840000 && $Number <= 4860000) return 4860000;
    if( $Number > 4860000 && $Number <= 4880000) return 4880000;
    if( $Number > 4880000 && $Number <= 4900000) return 4900000;
    if( $Number > 4900000 && $Number <= 4920000) return 4920000;
    if( $Number > 4920000 && $Number <= 4940000) return 4940000;
    if( $Number > 4940000 && $Number <= 4960000) return 4960000;
    if( $Number > 4960000 && $Number <= 4980000) return 4980000;
    if( $Number > 4980000 && $Number <= 5000000) return 5000000;
    if( $Number > 5000000 && $Number <= 5020000) return 5020000;
    if( $Number > 5020000 && $Number <= 5040000) return 5040000;
    if( $Number > 5040000 && $Number <= 5060000) return 5060000;
    if( $Number > 5060000 && $Number <= 5080000) return 5080000;
    if( $Number > 5080000 && $Number <= 5100000) return 5100000;
    if( $Number > 5100000 && $Number <= 5120000) return 5120000;
    if( $Number > 5120000 && $Number <= 5140000) return 5140000;
    if( $Number > 5140000 && $Number <= 5160000) return 5160000;
    if( $Number > 5160000 && $Number <= 5180000) return 5180000;
    if( $Number > 5180000 && $Number <= 5200000) return 5200000;
    if( $Number > 5200000 && $Number <= 5220000) return 5220000;
    if( $Number > 5220000 && $Number <= 5240000) return 5240000;
    if( $Number > 5240000 && $Number <= 5260000) return 5260000;
    if( $Number > 5260000 && $Number <= 5280000) return 5280000;
    if( $Number > 5280000 && $Number <= 5300000) return 5300000;
    if( $Number > 5300000 && $Number <= 5320000) return 5320000;
    if( $Number > 5320000 && $Number <= 5340000) return 5340000;
    if( $Number > 5340000 && $Number <= 5360000) return 5360000;
    if( $Number > 5360000 && $Number <= 5380000) return 5380000;
    if( $Number > 5380000 && $Number <= 5400000) return 5400000;
    if( $Number > 5400000 && $Number <= 5420000) return 5420000;
    if( $Number > 5420000 && $Number <= 5440000) return 5440000;
    if( $Number > 5440000 && $Number <= 5460000) return 5460000;
    if( $Number > 5460000 && $Number <= 5480000) return 5480000;
    if( $Number > 5480000 && $Number <= 5500000) return 5500000;
    if( $Number > 5500000 && $Number <= 5520000) return 5520000;
    if( $Number > 5520000 && $Number <= 5540000) return 5540000;
    if( $Number > 5540000 && $Number <= 5560000) return 5560000;
    if( $Number > 5560000 && $Number <= 5580000) return 5580000;
    if( $Number > 5580000 && $Number <= 5600000) return 5600000;
    if( $Number > 5600000 && $Number <= 5620000) return 5620000;
    if( $Number > 5620000 && $Number <= 5640000) return 5640000;
    if( $Number > 5640000 && $Number <= 5660000) return 5660000;
    if( $Number > 5660000 && $Number <= 5680000) return 5680000;
    if( $Number > 5680000 && $Number <= 5700000) return 5700000;
    if( $Number > 5700000 && $Number <= 5720000) return 5720000;
    if( $Number > 5720000 && $Number <= 5740000) return 5740000;
    if( $Number > 5740000 && $Number <= 5760000) return 5760000;
    if( $Number > 5760000 && $Number <= 5780000) return 5780000;
    if( $Number > 5780000 && $Number <= 5800000) return 5800000;
    if( $Number > 5800000 && $Number <= 5820000) return 5820000;
    if( $Number > 5820000 && $Number <= 5840000) return 5840000;
    if( $Number > 5840000 && $Number <= 5860000) return 5860000;
    if( $Number > 5860000 && $Number <= 5880000) return 5880000;
    if( $Number > 5880000 && $Number <= 5900000) return 5900000;
    if( $Number > 5900000 && $Number <= 5920000) return 5920000;
    if( $Number > 5920000 && $Number <= 5940000) return 5940000;
    if( $Number > 5940000 && $Number <= 5960000) return 5960000;
    if( $Number > 5960000 && $Number <= 5980000) return 5980000;
    if( $Number > 5980000 && $Number <= 6000000) return 6000000;
    if( $Number > 6000000 && $Number <= 6020000) return 6020000;
    if( $Number > 6020000 && $Number <= 6040000) return 6040000;
    if( $Number > 6040000 && $Number <= 6060000) return 6060000;
    if( $Number > 6060000 && $Number <= 6080000) return 6080000;
    if( $Number > 6080000 && $Number <= 6100000) return 6100000;
    if( $Number > 6100000 && $Number <= 6120000) return 6120000;
    if( $Number > 6120000 && $Number <= 6140000) return 6140000;
    if( $Number > 6140000 && $Number <= 6160000) return 6160000;
    if( $Number > 6160000 && $Number <= 6180000) return 6180000;
    if( $Number > 6180000 && $Number <= 6200000) return 6200000;
    if( $Number > 6200000 && $Number <= 6220000) return 6220000;
    if( $Number > 6220000 && $Number <= 6240000) return 6240000;
    if( $Number > 6240000 && $Number <= 6260000) return 6260000;
    if( $Number > 6260000 && $Number <= 6280000) return 6280000;
    if( $Number > 6280000 && $Number <= 6300000) return 6300000;
    if( $Number > 6300000 && $Number <= 6320000) return 6320000;
    if( $Number > 6320000 && $Number <= 6340000) return 6340000;
    if( $Number > 6340000 && $Number <= 6360000) return 6360000;
    if( $Number > 6360000 && $Number <= 6380000) return 6380000;
    if( $Number > 6380000 && $Number <= 6400000) return 6400000;
    if( $Number > 6400000 && $Number <= 6420000) return 6420000;
    if( $Number > 6420000 && $Number <= 6440000) return 6440000;
    if( $Number > 6440000 && $Number <= 6460000) return 6460000;
    if( $Number > 6460000 && $Number <= 6480000) return 6480000;
    if( $Number > 6480000 && $Number <= 6500000) return 6500000;
    if( $Number > 6500000 && $Number <= 6520000) return 6520000;
    if( $Number > 6520000 && $Number <= 6540000) return 6540000;
    if( $Number > 6540000 && $Number <= 6560000) return 6560000;
    if( $Number > 6560000 && $Number <= 6580000) return 6580000;
    if( $Number > 6580000 && $Number <= 6600000) return 6600000;
    if( $Number > 6600000 && $Number <= 6620000) return 6620000;
    if( $Number > 6620000 && $Number <= 6640000) return 6640000;
    if( $Number > 6640000 && $Number <= 6660000) return 6660000;
    if( $Number > 6660000 && $Number <= 6680000) return 6680000;
    if( $Number > 6680000 && $Number <= 6700000) return 6700000;
    if( $Number > 6700000 && $Number <= 6720000) return 6720000;
    if( $Number > 6720000 && $Number <= 6740000) return 6740000;
    if( $Number > 6740000 && $Number <= 6760000) return 6760000;
    if( $Number > 6760000 && $Number <= 6780000) return 6780000;
    if( $Number > 6780000 && $Number <= 6800000) return 6800000;
    if( $Number > 6800000 && $Number <= 6820000) return 6820000;
    if( $Number > 6820000 && $Number <= 6840000) return 6840000;
    if( $Number > 6840000 && $Number <= 6860000) return 6860000;
    if( $Number > 6860000 && $Number <= 6880000) return 6880000;
    if( $Number > 6880000 && $Number <= 6900000) return 6900000;
    if( $Number > 6900000 && $Number <= 6920000) return 6920000;
    if( $Number > 6920000 && $Number <= 6940000) return 6940000;
    if( $Number > 6940000 && $Number <= 6960000) return 6960000;
    if( $Number > 6960000 && $Number <= 6980000) return 6980000;
    if( $Number > 6980000 && $Number <= 7000000) return 7000000;
    if( $Number > 7000000 && $Number <= 7020000) return 7020000;
    if( $Number > 7020000 && $Number <= 7040000) return 7040000;
    if( $Number > 7040000 && $Number <= 7060000) return 7060000;
    if( $Number > 7060000 && $Number <= 7080000) return 7080000;
    if( $Number > 7080000 && $Number <= 7100000) return 7100000;
    if( $Number > 7100000 && $Number <= 7120000) return 7120000;
    if( $Number > 7120000 && $Number <= 7140000) return 7140000;
    if( $Number > 7140000 && $Number <= 7160000) return 7160000;
    if( $Number > 7160000 && $Number <= 7180000) return 7180000;
    if( $Number > 7180000 && $Number <= 7200000) return 7200000;
    if( $Number > 7200000 && $Number <= 7220000) return 7220000;
    if( $Number > 7220000 && $Number <= 7240000) return 7240000;
    if( $Number > 7240000 && $Number <= 7260000) return 7260000;
    if( $Number > 7260000 && $Number <= 7280000) return 7280000;
    if( $Number > 7280000 && $Number <= 7300000) return 7300000;
    if( $Number > 7300000 && $Number <= 7320000) return 7320000;
    if( $Number > 7320000 && $Number <= 7340000) return 7340000;
    if( $Number > 7340000 && $Number <= 7360000) return 7360000;
    if( $Number > 7360000 && $Number <= 7380000) return 7380000;
    if( $Number > 7380000 && $Number <= 7400000) return 7400000;
    if( $Number > 7400000 && $Number <= 7420000) return 7420000;
    if( $Number > 7420000 && $Number <= 7440000) return 7440000;
    if( $Number > 7440000 && $Number <= 7460000) return 7460000;
    if( $Number > 7460000 && $Number <= 7480000) return 7480000;
    if( $Number > 7480000 && $Number <= 7500000) return 7500000;
    if( $Number > 7500000 && $Number <= 7520000) return 7520000;
    if( $Number > 7520000 && $Number <= 7540000) return 7540000;
    if( $Number > 7540000 && $Number <= 7560000) return 7560000;
    if( $Number > 7560000 && $Number <= 7580000) return 7580000;
    if( $Number > 7580000 && $Number <= 7600000) return 7600000;
    if( $Number > 7600000 && $Number <= 7620000) return 7620000;
    if( $Number > 7620000 && $Number <= 7640000) return 7640000;
    if( $Number > 7640000 && $Number <= 7660000) return 7660000;
    if( $Number > 7660000 && $Number <= 7680000) return 7680000;
    if( $Number > 7680000 && $Number <= 7700000) return 7700000;
    if( $Number > 7700000 && $Number <= 7720000) return 7720000;
    if( $Number > 7720000 && $Number <= 7740000) return 7740000;
    if( $Number > 7740000 && $Number <= 7760000) return 7760000;
    if( $Number > 7760000 && $Number <= 7780000) return 7780000;
    if( $Number > 7780000 && $Number <= 7800000) return 7800000;
    if( $Number > 7800000 && $Number <= 7820000) return 7820000;
    if( $Number > 7820000 && $Number <= 7840000) return 7840000;
    if( $Number > 7840000 && $Number <= 7860000) return 7860000;
    if( $Number > 7860000 && $Number <= 7880000) return 7880000;
    if( $Number > 7880000 && $Number <= 7900000) return 7900000;
    if( $Number > 7900000 && $Number <= 7920000) return 7920000;
    if( $Number > 7920000 && $Number <= 7940000) return 7940000;
    if( $Number > 7940000 && $Number <= 7960000) return 7960000;
    if( $Number > 7960000 && $Number <= 7980000) return 7980000;
    if( $Number > 7980000 && $Number <= 8000000) return 8000000;
    if( $Number > 8000000 && $Number <= 8020000) return 8020000;
    if( $Number > 8020000 && $Number <= 8040000) return 8040000;
    if( $Number > 8040000 && $Number <= 8060000) return 8060000;
    if( $Number > 8060000 && $Number <= 8080000) return 8080000;
    if( $Number > 8080000 && $Number <= 8100000) return 8100000;
    if( $Number > 8100000 && $Number <= 8120000) return 8120000;
    if( $Number > 8120000 && $Number <= 8140000) return 8140000;
    if( $Number > 8140000 && $Number <= 8160000) return 8160000;
    if( $Number > 8160000 && $Number <= 8180000) return 8180000;
    if( $Number > 8180000 && $Number <= 8200000) return 8200000;
    if( $Number > 8200000 && $Number <= 8220000) return 8220000;
    if( $Number > 8220000 && $Number <= 8240000) return 8240000;
    if( $Number > 8240000 && $Number <= 8260000) return 8260000;
    if( $Number > 8260000 && $Number <= 8280000) return 8280000;
    if( $Number > 8280000 && $Number <= 8300000) return 8300000;
    if( $Number > 8300000 && $Number <= 8320000) return 8320000;
    if( $Number > 8320000 && $Number <= 8340000) return 8340000;
    if( $Number > 8340000 && $Number <= 8360000) return 8360000;
    if( $Number > 8360000 && $Number <= 8380000) return 8380000;
    if( $Number > 8380000 && $Number <= 8400000) return 8400000;
    if( $Number > 8400000 && $Number <= 8420000) return 8420000;
    if( $Number > 8420000 && $Number <= 8440000) return 8440000;
    if( $Number > 8440000 && $Number <= 8460000) return 8460000;
    if( $Number > 8460000 && $Number <= 8480000) return 8480000;
    if( $Number > 8480000 && $Number <= 8500000) return 8500000;
    if( $Number > 8500000 && $Number <= 8520000) return 8520000;
    if( $Number > 8520000 && $Number <= 8540000) return 8540000;
    if( $Number > 8540000 && $Number <= 8560000) return 8560000;
    if( $Number > 8560000 && $Number <= 8580000) return 8580000;
    if( $Number > 8580000 && $Number <= 8600000) return 8600000;
    if( $Number > 8600000 && $Number <= 8620000) return 8620000;
    if( $Number > 8620000 && $Number <= 8640000) return 8640000;
    if( $Number > 8640000 && $Number <= 8660000) return 8660000;
    if( $Number > 8660000 && $Number <= 8680000) return 8680000;
    if( $Number > 8680000 && $Number <= 8700000) return 8700000;
    if( $Number > 8700000 && $Number <= 8720000) return 8720000;
    if( $Number > 8720000 && $Number <= 8740000) return 8740000;
    if( $Number > 8740000 && $Number <= 8760000) return 8760000;
    if( $Number > 8760000 && $Number <= 8780000) return 8780000;
    if( $Number > 8780000 && $Number <= 8800000) return 8800000;
    if( $Number > 8800000 && $Number <= 8820000) return 8820000;
    if( $Number > 8820000 && $Number <= 8840000) return 8840000;
    if( $Number > 8840000 && $Number <= 8860000) return 8860000;
    if( $Number > 8860000 && $Number <= 8880000) return 8880000;
    if( $Number > 8880000 && $Number <= 8900000) return 8900000;
    if( $Number > 8900000 && $Number <= 8920000) return 8920000;
    if( $Number > 8920000 && $Number <= 8940000) return 8940000;
    if( $Number > 8940000 && $Number <= 8960000) return 8960000;
    if( $Number > 8960000 && $Number <= 8980000) return 8980000;
    if( $Number > 8980000 && $Number <= 9000000) return 9000000;
    if( $Number > 9000000 && $Number <= 9020000) return 9020000;
    if( $Number > 9020000 && $Number <= 9040000) return 9040000;
    if( $Number > 9040000 && $Number <= 9060000) return 9060000;
    if( $Number > 9060000 && $Number <= 9080000) return 9080000;
    if( $Number > 9080000 && $Number <= 9100000) return 9100000;
    if( $Number > 9100000 && $Number <= 9120000) return 9120000;
    if( $Number > 9120000 && $Number <= 9140000) return 9140000;
    if( $Number > 9140000 && $Number <= 9160000) return 9160000;
    if( $Number > 9160000 && $Number <= 9180000) return 9180000;
    if( $Number > 9180000 && $Number <= 9200000) return 9200000;
    if( $Number > 9200000 && $Number <= 9220000) return 9220000;
    if( $Number > 9220000 && $Number <= 9240000) return 9240000;
    if( $Number > 9240000 && $Number <= 9260000) return 9260000;
    if( $Number > 9260000 && $Number <= 9280000) return 9280000;
    if( $Number > 9280000 && $Number <= 9300000) return 9300000;
    if( $Number > 9300000 && $Number <= 9320000) return 9320000;
    if( $Number > 9320000 && $Number <= 9340000) return 9340000;
    if( $Number > 9340000 && $Number <= 9360000) return 9360000;
    if( $Number > 9360000 && $Number <= 9380000) return 9380000;
    if( $Number > 9380000 && $Number <= 9400000) return 9400000;
    if( $Number > 9400000 && $Number <= 9420000) return 9420000;
    if( $Number > 9420000 && $Number <= 9440000) return 9440000;
    if( $Number > 9440000 && $Number <= 9460000) return 9460000;
    if( $Number > 9460000 && $Number <= 9480000) return 9480000;
    if( $Number > 9480000 && $Number <= 9500000) return 9500000;
    if( $Number > 9500000 && $Number <= 9520000) return 9520000;
    if( $Number > 9520000 && $Number <= 9540000) return 9540000;
    if( $Number > 9540000 && $Number <= 9560000) return 9560000;
    if( $Number > 9560000 && $Number <= 9580000) return 9580000;
    if( $Number > 9580000 && $Number <= 9600000) return 9600000;
    if( $Number > 9600000 && $Number <= 9620000) return 9620000;
    if( $Number > 9620000 && $Number <= 9640000) return 9640000;
    if( $Number > 9640000 && $Number <= 9660000) return 9660000;
    if( $Number > 9660000 && $Number <= 9680000) return 9680000;
    if( $Number > 9680000 && $Number <= 9700000) return 9700000;
    if( $Number > 9700000 && $Number <= 9720000) return 9720000;
    if( $Number > 9720000 && $Number <= 9740000) return 9740000;
    if( $Number > 9740000 && $Number <= 9760000) return 9760000;
    if( $Number > 9760000 && $Number <= 9780000) return 9780000;
    if( $Number > 9780000 && $Number <= 9800000) return 9800000;
    if( $Number > 9800000 && $Number <= 9820000) return 9820000;
    if( $Number > 9820000 && $Number <= 9840000) return 9840000;
    if( $Number > 9840000 && $Number <= 9860000) return 9860000;
    if( $Number > 9860000 && $Number <= 9880000) return 9880000;
    if( $Number > 9880000 && $Number <= 9900000) return 9900000;
    if( $Number > 9900000 && $Number <= 9920000) return 9920000;
    if( $Number > 9920000 && $Number <= 9940000) return 9940000;
    if( $Number > 9940000 && $Number <= 9960000) return 9960000;
    if( $Number > 9960000 && $Number <= 9980000) return 9980000;
    if( $Number > 9980000 && $Number <= 10000000) return 10000000;
    
    if( $Number > 10000000 && $Number <= 10020000) return 10020000;
    if( $Number > 10020000 && $Number <= 10040000) return 10040000;
    if( $Number > 10040000 && $Number <= 10060000) return 10060000;
    if( $Number > 10060000 && $Number <= 10080000) return 10080000;
    if( $Number > 10080000 && $Number <= 10100000) return 10100000;
    if( $Number > 10100000 && $Number <= 10120000) return 10120000;
    if( $Number > 10120000 && $Number <= 10140000) return 10140000;
    if( $Number > 10140000 && $Number <= 10160000) return 10160000;
    if( $Number > 10160000 && $Number <= 10180000) return 10180000;
    if( $Number > 10180000 && $Number <= 10200000) return 10200000;
    if( $Number > 10200000 && $Number <= 10220000) return 10220000;
    if( $Number > 10220000 && $Number <= 10240000) return 10240000;
    if( $Number > 10240000 && $Number <= 10260000) return 10260000;
    if( $Number > 10260000 && $Number <= 10280000) return 10280000;
    if( $Number > 10280000 && $Number <= 10300000) return 10300000;
    if( $Number > 10300000 && $Number <= 10320000) return 10320000;
    if( $Number > 10320000 && $Number <= 10340000) return 10340000;
    if( $Number > 10340000 && $Number <= 10360000) return 10360000;
    if( $Number > 10360000 && $Number <= 10380000) return 10380000;
    if( $Number > 10380000 && $Number <= 10400000) return 10400000;
    if( $Number > 10400000 && $Number <= 10420000) return 10420000;
    if( $Number > 10420000 && $Number <= 10440000) return 10440000;
    if( $Number > 10440000 && $Number <= 10460000) return 10460000;
    if( $Number > 10460000 && $Number <= 10480000) return 10480000;
    if( $Number > 10480000 && $Number <= 10500000) return 10500000;
    if( $Number > 10500000 && $Number <= 10520000) return 10520000;
    if( $Number > 10520000 && $Number <= 10540000) return 10540000;
    if( $Number > 10540000 && $Number <= 10560000) return 10560000;
    if( $Number > 10560000 && $Number <= 10580000) return 10580000;
    if( $Number > 10580000 && $Number <= 10600000) return 10600000;
    if( $Number > 10600000 && $Number <= 10620000) return 10620000;
    if( $Number > 10620000 && $Number <= 10640000) return 10640000;
    if( $Number > 10640000 && $Number <= 10660000) return 10660000;
    if( $Number > 10660000 && $Number <= 10680000) return 10680000;
    if( $Number > 10680000 && $Number <= 10700000) return 10700000;
    if( $Number > 10700000 && $Number <= 10720000) return 10720000;
    if( $Number > 10720000 && $Number <= 10740000) return 10740000;
    if( $Number > 10740000 && $Number <= 10760000) return 10760000;
    if( $Number > 10760000 && $Number <= 10780000) return 10780000;
    if( $Number > 10780000 && $Number <= 10800000) return 10800000;
    if( $Number > 10800000 && $Number <= 10820000) return 10820000;
    if( $Number > 10820000 && $Number <= 10840000) return 10840000;
    if( $Number > 10840000 && $Number <= 10860000) return 10860000;
    if( $Number > 10860000 && $Number <= 10880000) return 10880000;
    if( $Number > 10880000 && $Number <= 10900000) return 10900000;
    if( $Number > 10900000 && $Number <= 10920000) return 10920000;
    if( $Number > 10920000 && $Number <= 10940000) return 10940000;
    if( $Number > 10940000 && $Number <= 10960000) return 10960000;
    if( $Number > 10960000 && $Number <= 10980000) return 10980000;
    if( $Number > 10980000 && $Number <= 11000000) return 11000000;
    if( $Number > 11000000 && $Number <= 11020000) return 11020000;
    if( $Number > 11020000 && $Number <= 11040000) return 11040000;
    if( $Number > 11040000 && $Number <= 11060000) return 11060000;
    if( $Number > 11060000 && $Number <= 11080000) return 11080000;
    if( $Number > 11080000 && $Number <= 11100000) return 11100000;
    if( $Number > 11100000 && $Number <= 11120000) return 11120000;
    if( $Number > 11120000 && $Number <= 11140000) return 11140000;
    if( $Number > 11140000 && $Number <= 11160000) return 11160000;
    if( $Number > 11160000 && $Number <= 11180000) return 11180000;
    if( $Number > 11180000 && $Number <= 11200000) return 11200000;
    if( $Number > 11200000 && $Number <= 11220000) return 11220000;
    if( $Number > 11220000 && $Number <= 11240000) return 11240000;
    if( $Number > 11240000 && $Number <= 11260000) return 11260000;
    if( $Number > 11260000 && $Number <= 11280000) return 11280000;
    if( $Number > 11280000 && $Number <= 11300000) return 11300000;
    if( $Number > 11300000 && $Number <= 11320000) return 11320000;
    if( $Number > 11320000 && $Number <= 11340000) return 11340000;
    if( $Number > 11340000 && $Number <= 11360000) return 11360000;
    if( $Number > 11360000 && $Number <= 11380000) return 11380000;
    if( $Number > 11380000 && $Number <= 11400000) return 11400000;
    if( $Number > 11400000 && $Number <= 11420000) return 11420000;
    if( $Number > 11420000 && $Number <= 11440000) return 11440000;
    if( $Number > 11440000 && $Number <= 11460000) return 11460000;
    if( $Number > 11460000 && $Number <= 11480000) return 11480000;
    if( $Number > 11480000 && $Number <= 11500000) return 11500000;
    if( $Number > 11500000 && $Number <= 11520000) return 11520000;
    if( $Number > 11520000 && $Number <= 11540000) return 11540000;
    if( $Number > 11540000 && $Number <= 11560000) return 11560000;
    if( $Number > 11560000 && $Number <= 11580000) return 11580000;
    if( $Number > 11580000 && $Number <= 11600000) return 11600000;
    if( $Number > 11600000 && $Number <= 11620000) return 11620000;
    if( $Number > 11620000 && $Number <= 11640000) return 11640000;
    if( $Number > 11640000 && $Number <= 11660000) return 11660000;
    if( $Number > 11660000 && $Number <= 11680000) return 11680000;
    if( $Number > 11680000 && $Number <= 11700000) return 11700000;
    if( $Number > 11700000 && $Number <= 11720000) return 11720000;
    if( $Number > 11720000 && $Number <= 11740000) return 11740000;
    if( $Number > 11740000 && $Number <= 11760000) return 11760000;
    if( $Number > 11760000 && $Number <= 11780000) return 11780000;
    if( $Number > 11780000 && $Number <= 11800000) return 11800000;
    if( $Number > 11800000 && $Number <= 11820000) return 11820000;
    if( $Number > 11820000 && $Number <= 11840000) return 11840000;
    if( $Number > 11840000 && $Number <= 11860000) return 11860000;
    if( $Number > 11860000 && $Number <= 11880000) return 11880000;
    if( $Number > 11880000 && $Number <= 11900000) return 11900000;
    if( $Number > 11900000 && $Number <= 11920000) return 11920000;
    if( $Number > 11920000 && $Number <= 11940000) return 11940000;
    if( $Number > 11940000 && $Number <= 11960000) return 11960000;
    if( $Number > 11960000 && $Number <= 11980000) return 11980000;
    if( $Number > 11980000 && $Number <= 12000000) return 12000000;
    if( $Number > 12000000 && $Number <= 12020000) return 12020000;
    if( $Number > 12020000 && $Number <= 12040000) return 12040000;
    if( $Number > 12040000 && $Number <= 12060000) return 12060000;
    if( $Number > 12060000 && $Number <= 12080000) return 12080000;
    if( $Number > 12080000 && $Number <= 12100000) return 12100000;
    if( $Number > 12100000 && $Number <= 12120000) return 12120000;
    if( $Number > 12120000 && $Number <= 12140000) return 12140000;
    if( $Number > 12140000 && $Number <= 12160000) return 12160000;
    if( $Number > 12160000 && $Number <= 12180000) return 12180000;
    if( $Number > 12180000 && $Number <= 12200000) return 12200000;
    if( $Number > 12200000 && $Number <= 12220000) return 12220000;
    if( $Number > 12220000 && $Number <= 12240000) return 12240000;
    if( $Number > 12240000 && $Number <= 12260000) return 12260000;
    if( $Number > 12260000 && $Number <= 12280000) return 12280000;
    if( $Number > 12280000 && $Number <= 12300000) return 12300000;
    if( $Number > 12300000 && $Number <= 12320000) return 12320000;
    if( $Number > 12320000 && $Number <= 12340000) return 12340000;
    if( $Number > 12340000 && $Number <= 12360000) return 12360000;
    if( $Number > 12360000 && $Number <= 12380000) return 12380000;
    if( $Number > 12380000 && $Number <= 12400000) return 12400000;
    if( $Number > 12400000 && $Number <= 12420000) return 12420000;
    if( $Number > 12420000 && $Number <= 12440000) return 12440000;
    if( $Number > 12440000 && $Number <= 12460000) return 12460000;
    if( $Number > 12460000 && $Number <= 12480000) return 12480000;
    if( $Number > 12480000 && $Number <= 12500000) return 12500000;
    if( $Number > 12500000 && $Number <= 12520000) return 12520000;
    if( $Number > 12520000 && $Number <= 12540000) return 12540000;
    if( $Number > 12540000 && $Number <= 12560000) return 12560000;
    if( $Number > 12560000 && $Number <= 12580000) return 12580000;
    if( $Number > 12580000 && $Number <= 12600000) return 12600000;
    if( $Number > 12600000 && $Number <= 12620000) return 12620000;
    if( $Number > 12620000 && $Number <= 12640000) return 12640000;
    if( $Number > 12640000 && $Number <= 12660000) return 12660000;
    if( $Number > 12660000 && $Number <= 12680000) return 12680000;
    if( $Number > 12680000 && $Number <= 12700000) return 12700000;
    if( $Number > 12700000 && $Number <= 12720000) return 12720000;
    if( $Number > 12720000 && $Number <= 12740000) return 12740000;
    if( $Number > 12740000 && $Number <= 12760000) return 12760000;
    if( $Number > 12760000 && $Number <= 12780000) return 12780000;
    if( $Number > 12780000 && $Number <= 12800000) return 12800000;
    if( $Number > 12800000 && $Number <= 12820000) return 12820000;
    if( $Number > 12820000 && $Number <= 12840000) return 12840000;
    if( $Number > 12840000 && $Number <= 12860000) return 12860000;
    if( $Number > 12860000 && $Number <= 12880000) return 12880000;
    if( $Number > 12880000 && $Number <= 12900000) return 12900000;
    if( $Number > 12880000 && $Number <= 12920000) return 12920000;
    if( $Number > 12880000 && $Number <= 12940000) return 12940000;
    if( $Number > 12880000 && $Number <= 12960000) return 12960000;
    if( $Number > 12960000 && $Number <= 12980000) return 12980000;
    if( $Number > 12960000 && $Number <= 13000000) return 13000000;
    if( $Number > 13000000 && $Number <= 13020000) return 13020000;
    if( $Number > 13020000 && $Number <= 13040000) return 13040000;
    if( $Number > 13040000 && $Number <= 13060000) return 13060000;
    if( $Number > 13060000 && $Number <= 13080000) return 13080000;
    if( $Number > 13080000 && $Number <= 13100000) return 13100000;
    if( $Number > 13100000 && $Number <= 13120000) return 13120000;
    if( $Number > 13120000 && $Number <= 13140000) return 13140000;
    if( $Number > 13140000 && $Number <= 13160000) return 13160000;
    if( $Number > 13160000 && $Number <= 13180000) return 13180000;
    if( $Number > 13180000 && $Number <= 13200000) return 13200000;
    if( $Number > 13200000 && $Number <= 13220000) return 13220000;
    if( $Number > 13220000 && $Number <= 13240000) return 13240000;
    if( $Number > 13240000 && $Number <= 13260000) return 13260000;
    if( $Number > 13260000 && $Number <= 13280000) return 13280000;
    if( $Number > 13280000 && $Number <= 13300000) return 13300000;
    if( $Number > 13300000 && $Number <= 13320000) return 13320000;
    if( $Number > 13320000 && $Number <= 13340000) return 13340000;
    if( $Number > 13340000 && $Number <= 13360000) return 13360000;
    if( $Number > 13360000 && $Number <= 13380000) return 13380000;
    if( $Number > 13380000 && $Number <= 13400000) return 13400000;
    if( $Number > 13400000 && $Number <= 13420000) return 13420000;
    if( $Number > 13420000 && $Number <= 13440000) return 13440000;
    if( $Number > 13420000 && $Number <= 13460000) return 13460000;
    if( $Number > 13460000 && $Number <= 13480000) return 13480000;
    if( $Number > 13480000 && $Number <= 13500000) return 13500000;
    if( $Number > 13500000 && $Number <= 13520000) return 13520000;
    if( $Number > 13520000 && $Number <= 13540000) return 13540000;
    if( $Number > 13540000 && $Number <= 13560000) return 13560000;
    if( $Number > 13560000 && $Number <= 13580000) return 13580000;
    if( $Number > 13580000 && $Number <= 13600000) return 13600000;
    if( $Number > 13600000 && $Number <= 13620000) return 13620000;
    if( $Number > 13620000 && $Number <= 13640000) return 13640000;
    if( $Number > 13640000 && $Number <= 13660000) return 13660000;
    if( $Number > 13660000 && $Number <= 13680000) return 13680000;
    if( $Number > 13680000 && $Number <= 13700000) return 13700000;
    if( $Number > 13700000 && $Number <= 13720000) return 13720000;
    if( $Number > 13720000 && $Number <= 13740000) return 13740000;
    if( $Number > 13740000 && $Number <= 13760000) return 13760000;
    if( $Number > 13760000 && $Number <= 13780000) return 13780000;
    if( $Number > 13780000 && $Number <= 13800000) return 13800000;
    if( $Number > 13800000 && $Number <= 13820000) return 13820000;
    if( $Number > 13820000 && $Number <= 13840000) return 13840000;
    if( $Number > 13840000 && $Number <= 13860000) return 13860000;
    if( $Number > 13860000 && $Number <= 13880000) return 13880000;
    if( $Number > 13880000 && $Number <= 13900000) return 13900000;
    if( $Number > 13900000 && $Number <= 13920000) return 13920000;
    if( $Number > 13920000 && $Number <= 13940000) return 13940000;
    if( $Number > 13940000 && $Number <= 13960000) return 13960000;
    if( $Number > 13960000 && $Number <= 13980000) return 13980000;
    if( $Number > 13980000 && $Number <= 14000000) return 14000000;
    if( $Number > 14000000 && $Number <= 14020000) return 14020000;
    if( $Number > 14020000 && $Number <= 14040000) return 14040000;
    if( $Number > 14040000 && $Number <= 14060000) return 14060000;
    if( $Number > 14060000 && $Number <= 14080000) return 14080000;
    if( $Number > 14080000 && $Number <= 14100000) return 14100000;
    if( $Number > 14100000 && $Number <= 14120000) return 14120000;
    if( $Number > 14120000 && $Number <= 14140000) return 14140000;
    if( $Number > 14140000 && $Number <= 14160000) return 14160000;
    if( $Number > 14160000 && $Number <= 14180000) return 14180000;
    if( $Number > 14180000 && $Number <= 14200000) return 14200000;
    if( $Number > 14200000 && $Number <= 14220000) return 14220000;
    if( $Number > 14220000 && $Number <= 14240000) return 14240000;
    if( $Number > 14240000 && $Number <= 14260000) return 14260000;
    if( $Number > 14260000 && $Number <= 14280000) return 14280000;
    if( $Number > 14280000 && $Number <= 14300000) return 14300000;
    if( $Number > 14300000 && $Number <= 14320000) return 14320000;
    if( $Number > 14320000 && $Number <= 14340000) return 14340000;
    if( $Number > 14340000 && $Number <= 14360000) return 14360000;
    if( $Number > 14360000 && $Number <= 14380000) return 14380000;
    if( $Number > 14380000 && $Number <= 14400000) return 14400000;
    if( $Number > 14400000 && $Number <= 14420000) return 14420000;
    if( $Number > 14420000 && $Number <= 14440000) return 14440000;
    if( $Number > 14440000 && $Number <= 14460000) return 14460000;
    if( $Number > 14460000 && $Number <= 14480000) return 14480000;
    if( $Number > 14480000 && $Number <= 14500000) return 14500000;
    if( $Number > 14500000 && $Number <= 14520000) return 14520000;
    if( $Number > 14520000 && $Number <= 14540000) return 14540000;
    if( $Number > 14540000 && $Number <= 14560000) return 14560000;
    if( $Number > 14560000 && $Number <= 14580000) return 14580000;
    if( $Number > 14580000 && $Number <= 14600000) return 14600000;
    if( $Number > 14600000 && $Number <= 14620000) return 14620000;
    if( $Number > 14620000 && $Number <= 14640000) return 14640000;
    if( $Number > 14640000 && $Number <= 14660000) return 14660000;
    if( $Number > 14660000 && $Number <= 14680000) return 14680000;
    if( $Number > 14680000 && $Number <= 14700000) return 14700000;
    if( $Number > 14700000 && $Number <= 14720000) return 14720000;
    if( $Number > 14720000 && $Number <= 14740000) return 14740000;
    if( $Number > 14740000 && $Number <= 14760000) return 14760000;
    if( $Number > 14760000 && $Number <= 14780000) return 14780000;
    if( $Number > 14780000 && $Number <= 14800000) return 14800000;
    if( $Number > 14800000 && $Number <= 14820000) return 14820000;
    if( $Number > 14820000 && $Number <= 14840000) return 14840000;
    if( $Number > 14840000 && $Number <= 14860000) return 14860000;
    if( $Number > 14860000 && $Number <= 14880000) return 14880000;
    if( $Number > 14880000 && $Number <= 14900000) return 14900000;
    if( $Number > 14900000 && $Number <= 14920000) return 14920000;
    if( $Number > 14920000 && $Number <= 14940000) return 14940000;
    if( $Number > 14940000 && $Number <= 14960000) return 14960000;
    if( $Number > 14960000 && $Number <= 14980000) return 14980000;
    if( $Number > 14980000 && $Number <= 15000000) return 15000000;
    if( $Number > 15000000 && $Number <= 15020000) return 15020000;
    if( $Number > 15020000 && $Number <= 15040000) return 15040000;
    if( $Number > 15040000 && $Number <= 15060000) return 15060000;
    if( $Number > 15060000 && $Number <= 15080000) return 15080000;
    if( $Number > 15080000 && $Number <= 15100000) return 15100000;
    if( $Number > 15100000 && $Number <= 15120000) return 15120000;
    if( $Number > 15120000 && $Number <= 15140000) return 15140000;
    if( $Number > 15140000 && $Number <= 15160000) return 15160000;
    if( $Number > 15160000 && $Number <= 15180000) return 15180000;
    if( $Number > 15180000 && $Number <= 15200000) return 15200000;
    if( $Number > 15200000 && $Number <= 15220000) return 15220000;
    if( $Number > 15220000 && $Number <= 15240000) return 15240000;
    if( $Number > 15240000 && $Number <= 15260000) return 15260000;
    if( $Number > 15260000 && $Number <= 15280000) return 15280000;
    if( $Number > 15280000 && $Number <= 15300000) return 15300000;
    if( $Number > 15300000 && $Number <= 15320000) return 15320000;
    if( $Number > 15320000 && $Number <= 15340000) return 15340000;
    if( $Number > 15340000 && $Number <= 15360000) return 15360000;
    if( $Number > 15360000 && $Number <= 15380000) return 15380000;
    if( $Number > 15380000 && $Number <= 15400000) return 15400000;
    if( $Number > 15400000 && $Number <= 15420000) return 15420000;
    if( $Number > 15420000 && $Number <= 15440000) return 15440000;
    if( $Number > 15440000 && $Number <= 15460000) return 15460000;
    if( $Number > 15460000 && $Number <= 15480000) return 15480000;
    if( $Number > 15480000 && $Number <= 15500000) return 15500000;
    if( $Number > 15500000 && $Number <= 15520000) return 15520000;
    if( $Number > 15520000 && $Number <= 15540000) return 15540000;
    if( $Number > 15540000 && $Number <= 15560000) return 15560000;
    if( $Number > 15560000 && $Number <= 15580000) return 15580000;
    if( $Number > 15580000 && $Number <= 15600000) return 15600000;
    if( $Number > 15600000 && $Number <= 15620000) return 15620000;
    if( $Number > 15620000 && $Number <= 15640000) return 15640000;
    if( $Number > 15640000 && $Number <= 15660000) return 15660000;
    if( $Number > 15660000 && $Number <= 15680000) return 15680000;
    if( $Number > 15680000 && $Number <= 15700000) return 15700000;
    if( $Number > 15700000 && $Number <= 15720000) return 15720000;
    if( $Number > 15720000 && $Number <= 15740000) return 15740000;
    if( $Number > 15740000 && $Number <= 15760000) return 15760000;
    if( $Number > 15760000 && $Number <= 15780000) return 15780000;
    if( $Number > 15780000 && $Number <= 15800000) return 15800000;
    if( $Number > 15800000 && $Number <= 15820000) return 15820000;
    if( $Number > 15820000 && $Number <= 15840000) return 15840000;
    if( $Number > 15840000 && $Number <= 15860000) return 15860000;
    if( $Number > 15860000 && $Number <= 15880000) return 15880000;
    if( $Number > 15880000 && $Number <= 15900000) return 15900000;
    if( $Number > 15900000 && $Number <= 15920000) return 15920000;
    if( $Number > 15920000 && $Number <= 15940000) return 15940000;
    if( $Number > 15940000 && $Number <= 15960000) return 15960000;
    if( $Number > 15960000 && $Number <= 15980000) return 15980000;
    if( $Number > 15980000 && $Number <= 16000000) return 16000000;
    if( $Number > 16000000 && $Number <= 16020000) return 16020000;
    if( $Number > 16020000 && $Number <= 16040000) return 16040000;
    if( $Number > 16040000 && $Number <= 16060000) return 16060000;
    if( $Number > 16060000 && $Number <= 16080000) return 16080000;
    if( $Number > 16080000 && $Number <= 16100000) return 16100000;
    if( $Number > 16100000 && $Number <= 16120000) return 16120000;
    if( $Number > 16120000 && $Number <= 16140000) return 16140000;
    if( $Number > 16140000 && $Number <= 16160000) return 16160000;
    if( $Number > 16160000 && $Number <= 16180000) return 16180000;
    if( $Number > 16180000 && $Number <= 16200000) return 16200000;
    if( $Number > 16200000 && $Number <= 16220000) return 16220000;
    if( $Number > 16220000 && $Number <= 16240000) return 16240000;
    if( $Number > 16240000 && $Number <= 16260000) return 16260000;
    if( $Number > 16260000 && $Number <= 16280000) return 16280000;
    if( $Number > 16280000 && $Number <= 16300000) return 16300000;
    if( $Number > 16300000 && $Number <= 16320000) return 16320000;
    if( $Number > 16320000 && $Number <= 16340000) return 16340000;
    if( $Number > 16340000 && $Number <= 16360000) return 16360000;
    if( $Number > 16360000 && $Number <= 16380000) return 16380000;
    if( $Number > 16380000 && $Number <= 16400000) return 16400000;
    if( $Number > 16400000 && $Number <= 16420000) return 16420000;
    if( $Number > 16420000 && $Number <= 16440000) return 16440000;
    if( $Number > 16440000 && $Number <= 16460000) return 16460000;
    if( $Number > 16460000 && $Number <= 16480000) return 16480000;
    if( $Number > 16480000 && $Number <= 16500000) return 16500000;
    if( $Number > 16500000 && $Number <= 16520000) return 16520000;
    if( $Number > 16520000 && $Number <= 16540000) return 16540000;
    if( $Number > 16540000 && $Number <= 16560000) return 16560000;
    if( $Number > 16560000 && $Number <= 16580000) return 16580000;
    if( $Number > 16580000 && $Number <= 16600000) return 16600000;
    if( $Number > 16600000 && $Number <= 16620000) return 16620000;
    if( $Number > 16620000 && $Number <= 16640000) return 16640000;
    if( $Number > 16640000 && $Number <= 16660000) return 16660000;
    if( $Number > 16660000 && $Number <= 16680000) return 16680000;
    if( $Number > 16680000 && $Number <= 16700000) return 16700000;
    if( $Number > 16700000 && $Number <= 16720000) return 16720000;
    if( $Number > 16720000 && $Number <= 16740000) return 16740000;
    if( $Number > 16740000 && $Number <= 16760000) return 16760000;
    if( $Number > 16760000 && $Number <= 16780000) return 16780000;
    if( $Number > 16780000 && $Number <= 16800000) return 16800000;
    if( $Number > 16800000 && $Number <= 16820000) return 16820000;
    if( $Number > 16820000 && $Number <= 16840000) return 16840000;
    if( $Number > 16840000 && $Number <= 16860000) return 16860000;
    if( $Number > 16860000 && $Number <= 16880000) return 16880000;
    if( $Number > 16880000 && $Number <= 16900000) return 16900000;
    if( $Number > 16900000 && $Number <= 16920000) return 16920000;
    if( $Number > 16920000 && $Number <= 16940000) return 16940000;
    if( $Number > 16940000 && $Number <= 16960000) return 16960000;
    if( $Number > 16960000 && $Number <= 16980000) return 16980000;
    if( $Number > 16980000 && $Number <= 17000000) return 17000000;
    if( $Number > 17000000 && $Number <= 17020000) return 17020000;
    if( $Number > 17020000 && $Number <= 17040000) return 17040000;
    if( $Number > 17040000 && $Number <= 17060000) return 17060000;
    if( $Number > 17060000 && $Number <= 17080000) return 17080000;
    if( $Number > 17080000 && $Number <= 17100000) return 17100000;
    if( $Number > 17100000 && $Number <= 17120000) return 17120000;
    if( $Number > 17120000 && $Number <= 17140000) return 17140000;
    if( $Number > 17140000 && $Number <= 17160000) return 17160000;
    if( $Number > 17160000 && $Number <= 17180000) return 17180000;
    if( $Number > 17180000 && $Number <= 17200000) return 17200000;
    if( $Number > 17200000 && $Number <= 17220000) return 17220000;
    if( $Number > 17220000 && $Number <= 17240000) return 17240000;
    if( $Number > 17240000 && $Number <= 17260000) return 17260000;
    if( $Number > 17260000 && $Number <= 17280000) return 17280000;
    if( $Number > 17280000 && $Number <= 17300000) return 17300000;
    if( $Number > 17300000 && $Number <= 17320000) return 17320000;
    if( $Number > 17320000 && $Number <= 17340000) return 17340000;
    if( $Number > 17340000 && $Number <= 17360000) return 17360000;
    if( $Number > 17360000 && $Number <= 17380000) return 17380000;
    if( $Number > 17380000 && $Number <= 17400000) return 17400000;
    if( $Number > 17400000 && $Number <= 17420000) return 17420000;
    if( $Number > 17420000 && $Number <= 17440000) return 17440000;
    if( $Number > 17440000 && $Number <= 17460000) return 17460000;
    if( $Number > 17460000 && $Number <= 17480000) return 17480000;
    if( $Number > 17480000 && $Number <= 17500000) return 17500000;
    if( $Number > 17500000 && $Number <= 17520000) return 17520000;
    if( $Number > 17520000 && $Number <= 17540000) return 17540000;
    if( $Number > 17540000 && $Number <= 17560000) return 17560000;
    if( $Number > 17560000 && $Number <= 17580000) return 17580000;
    if( $Number > 17580000 && $Number <= 17600000) return 17600000;
    if( $Number > 17600000 && $Number <= 17620000) return 17620000;
    if( $Number > 17620000 && $Number <= 17640000) return 17640000;
    if( $Number > 17640000 && $Number <= 17660000) return 17660000;
    if( $Number > 17660000 && $Number <= 17680000) return 17680000;
    if( $Number > 17680000 && $Number <= 17700000) return 17700000;
    if( $Number > 17700000 && $Number <= 17720000) return 17720000;
    if( $Number > 17720000 && $Number <= 17740000) return 17740000;
    if( $Number > 17740000 && $Number <= 17760000) return 17760000;
    if( $Number > 17760000 && $Number <= 17780000) return 17780000;
    if( $Number > 17780000 && $Number <= 17800000) return 17800000;
    if( $Number > 17800000 && $Number <= 17820000) return 17820000;
    if( $Number > 17820000 && $Number <= 17840000) return 17840000;
    if( $Number > 17840000 && $Number <= 17860000) return 17860000;
    if( $Number > 17860000 && $Number <= 17880000) return 17880000;
    if( $Number > 17880000 && $Number <= 17900000) return 17900000;
    if( $Number > 17900000 && $Number <= 17920000) return 17920000;
    if( $Number > 17920000 && $Number <= 17940000) return 17940000;
    if( $Number > 17940000 && $Number <= 17960000) return 17960000;
    if( $Number > 17960000 && $Number <= 17980000) return 17980000;
    if( $Number > 17980000 && $Number <= 18000000) return 18000000;
    if( $Number > 18000000 && $Number <= 18020000) return 18020000;
    if( $Number > 18020000 && $Number <= 18040000) return 18040000;
    if( $Number > 18040000 && $Number <= 18060000) return 18060000;
    if( $Number > 18060000 && $Number <= 18080000) return 18080000;
    if( $Number > 18080000 && $Number <= 18100000) return 18100000;
    if( $Number > 18100000 && $Number <= 18120000) return 18120000;
    if( $Number > 18120000 && $Number <= 18140000) return 18140000;
    if( $Number > 18140000 && $Number <= 18160000) return 18160000;
    if( $Number > 18160000 && $Number <= 18180000) return 18180000;
    if( $Number > 18180000 && $Number <= 18200000) return 18200000;
    if( $Number > 18200000 && $Number <= 18220000) return 18220000;
    if( $Number > 18220000 && $Number <= 18240000) return 18240000;
    if( $Number > 18240000 && $Number <= 18260000) return 18260000;
    if( $Number > 18260000 && $Number <= 18280000) return 18280000;
    if( $Number > 18280000 && $Number <= 18300000) return 18300000;
    if( $Number > 18300000 && $Number <= 18320000) return 18320000;
    if( $Number > 18320000 && $Number <= 18340000) return 18340000;
    if( $Number > 18340000 && $Number <= 18360000) return 18360000;
    if( $Number > 18360000 && $Number <= 18380000) return 18380000;
    if( $Number > 18380000 && $Number <= 18400000) return 18400000;
    if( $Number > 18400000 && $Number <= 18420000) return 18420000;
    if( $Number > 18420000 && $Number <= 18440000) return 18440000;
    if( $Number > 18440000 && $Number <= 18460000) return 18460000;
    if( $Number > 18460000 && $Number <= 18480000) return 18480000;
    if( $Number > 18480000 && $Number <= 18500000) return 18500000;
    if( $Number > 18500000 && $Number <= 18520000) return 18520000;
    if( $Number > 18520000 && $Number <= 18540000) return 18540000;
    if( $Number > 18540000 && $Number <= 18560000) return 18560000;
    if( $Number > 18560000 && $Number <= 18580000) return 18580000;
    if( $Number > 18580000 && $Number <= 18600000) return 18600000;
    if( $Number > 18600000 && $Number <= 18620000) return 18620000;
    if( $Number > 18620000 && $Number <= 18640000) return 18640000;
    if( $Number > 18640000 && $Number <= 18660000) return 18660000;
    if( $Number > 18660000 && $Number <= 18680000) return 18680000;
    if( $Number > 18680000 && $Number <= 18700000) return 18700000;
    if( $Number > 18700000 && $Number <= 18720000) return 18720000;
    if( $Number > 18720000 && $Number <= 18740000) return 18740000;
    if( $Number > 18740000 && $Number <= 18760000) return 18760000;
    if( $Number > 18760000 && $Number <= 18780000) return 18780000;
    if( $Number > 18780000 && $Number <= 18800000) return 18800000;
    if( $Number > 18800000 && $Number <= 18820000) return 18820000;
    if( $Number > 18820000 && $Number <= 18840000) return 18840000;
    if( $Number > 18840000 && $Number <= 18860000) return 18860000;
    if( $Number > 18860000 && $Number <= 18880000) return 18880000;
    if( $Number > 18880000 && $Number <= 18900000) return 18900000;
    if( $Number > 18900000 && $Number <= 18920000) return 18920000;
    if( $Number > 18920000 && $Number <= 18940000) return 18940000;
    if( $Number > 18940000 && $Number <= 18960000) return 18960000;
    if( $Number > 18960000 && $Number <= 18980000) return 18980000;
    if( $Number > 18980000 && $Number <= 19000000) return 19000000;
    if( $Number > 19000000 && $Number <= 19020000) return 19020000;
    if( $Number > 19020000 && $Number <= 19040000) return 19040000;
    if( $Number > 19040000 && $Number <= 19060000) return 19060000;
    if( $Number > 19060000 && $Number <= 19080000) return 19080000;
    if( $Number > 19080000 && $Number <= 19100000) return 19100000;
    if( $Number > 19100000 && $Number <= 19120000) return 19120000;
    if( $Number > 19120000 && $Number <= 19140000) return 19140000;
    if( $Number > 19140000 && $Number <= 19160000) return 19160000;
    if( $Number > 19160000 && $Number <= 19180000) return 19180000;
    if( $Number > 19180000 && $Number <= 19200000) return 19200000;
    if( $Number > 19200000 && $Number <= 19220000) return 19220000;
    if( $Number > 19220000 && $Number <= 19240000) return 19240000;
    if( $Number > 19240000 && $Number <= 19260000) return 19260000;
    if( $Number > 19260000 && $Number <= 19280000) return 19280000;
    if( $Number > 19280000 && $Number <= 19300000) return 19300000;
    if( $Number > 19300000 && $Number <= 19320000) return 19320000;
    if( $Number > 19320000 && $Number <= 19340000) return 19340000;
    if( $Number > 19340000 && $Number <= 19360000) return 19360000;
    if( $Number > 19360000 && $Number <= 19380000) return 19380000;
    if( $Number > 19380000 && $Number <= 19400000) return 19400000;
    if( $Number > 19400000 && $Number <= 19420000) return 19420000;
    if( $Number > 19420000 && $Number <= 19440000) return 19440000;
    if( $Number > 19440000 && $Number <= 19460000) return 19460000;
    if( $Number > 19460000 && $Number <= 19480000) return 19480000;
    if( $Number > 19480000 && $Number <= 19500000) return 19500000;
    if( $Number > 19500000 && $Number <= 19520000) return 19520000;
    if( $Number > 19520000 && $Number <= 19540000) return 19540000;
    if( $Number > 19540000 && $Number <= 19560000) return 19560000;
    if( $Number > 19560000 && $Number <= 19580000) return 19580000;
    if( $Number > 19580000 && $Number <= 19600000) return 19600000;
    if( $Number > 19600000 && $Number <= 19620000) return 19620000;
    if( $Number > 19620000 && $Number <= 19640000) return 19640000;
    if( $Number > 19640000 && $Number <= 19660000) return 19660000;
    if( $Number > 19660000 && $Number <= 19680000) return 19680000;
    if( $Number > 19680000 && $Number <= 19700000) return 19700000;
    if( $Number > 19700000 && $Number <= 19720000) return 19720000;
    if( $Number > 19720000 && $Number <= 19740000) return 19740000;
    if( $Number > 19740000 && $Number <= 19760000) return 19760000;
    if( $Number > 19760000 && $Number <= 19780000) return 19780000;
    if( $Number > 19780000 && $Number <= 19800000) return 19800000;
    if( $Number > 19800000 && $Number <= 19820000) return 19820000;
    if( $Number > 19820000 && $Number <= 19840000) return 19840000;
    if( $Number > 19840000 && $Number <= 19860000) return 19860000;
    if( $Number > 19860000 && $Number <= 19880000) return 19880000;
    if( $Number > 19880000 && $Number <= 19900000) return 19900000;
    if( $Number > 19900000 && $Number <= 19920000) return 19920000;
    if( $Number > 19920000 && $Number <= 19940000) return 19940000;
    if( $Number > 19940000 && $Number <= 19960000) return 19960000;
    if( $Number > 19960000 && $Number <= 19980000) return 19980000;
    if( $Number > 19980000 && $Number <= 20000000) return 20000000;
    
    if( $Number > 20000000 && $Number <= 20020000) return 20020000;
    if( $Number > 20020000 && $Number <= 20040000) return 20040000;
    if( $Number > 20040000 && $Number <= 20060000) return 20060000;
    if( $Number > 20060000 && $Number <= 20080000) return 20080000;
    if( $Number > 20080000 && $Number <= 20100000) return 20100000;
    if( $Number > 20100000 && $Number <= 20120000) return 20120000;
    if( $Number > 20120000 && $Number <= 20140000) return 20140000;
    if( $Number > 20140000 && $Number <= 20160000) return 20160000;
    if( $Number > 20160000 && $Number <= 20180000) return 20180000;
    if( $Number > 20180000 && $Number <= 20200000) return 20200000;
    if( $Number > 20200000 && $Number <= 20220000) return 20220000;
    if( $Number > 20220000 && $Number <= 20240000) return 20240000;
    if( $Number > 20240000 && $Number <= 20260000) return 20260000;
    if( $Number > 20260000 && $Number <= 20280000) return 20280000;
    if( $Number > 20280000 && $Number <= 20300000) return 20300000;
    if( $Number > 20300000 && $Number <= 20320000) return 20320000;
    if( $Number > 20320000 && $Number <= 20340000) return 20340000;
    if( $Number > 20340000 && $Number <= 20360000) return 20360000;
    if( $Number > 20360000 && $Number <= 20380000) return 20380000;
    if( $Number > 20380000 && $Number <= 20400000) return 20400000;
    if( $Number > 20400000 && $Number <= 20420000) return 20420000;
    if( $Number > 20420000 && $Number <= 20440000) return 20440000;
    if( $Number > 20440000 && $Number <= 20460000) return 20460000;
    if( $Number > 20460000 && $Number <= 20480000) return 20480000;
    if( $Number > 20480000 && $Number <= 20500000) return 20500000;
    if( $Number > 20500000 && $Number <= 20520000) return 20520000;
    if( $Number > 20520000 && $Number <= 20540000) return 20540000;
    if( $Number > 20540000 && $Number <= 20560000) return 20560000;
    if( $Number > 20560000 && $Number <= 20580000) return 20580000;
    if( $Number > 20580000 && $Number <= 20600000) return 20600000;
    if( $Number > 20600000 && $Number <= 20620000) return 20620000;
    if( $Number > 20620000 && $Number <= 20640000) return 20640000;
    if( $Number > 20640000 && $Number <= 20660000) return 20660000;
    if( $Number > 20660000 && $Number <= 20680000) return 20680000;
    if( $Number > 20680000 && $Number <= 20700000) return 20700000;
    if( $Number > 20700000 && $Number <= 20720000) return 20720000;
    if( $Number > 20720000 && $Number <= 20740000) return 20740000;
    if( $Number > 20740000 && $Number <= 20760000) return 20760000;
    if( $Number > 20760000 && $Number <= 20780000) return 20780000;
    if( $Number > 20780000 && $Number <= 20800000) return 20800000;
    if( $Number > 20800000 && $Number <= 20820000) return 20820000;
    if( $Number > 20820000 && $Number <= 20840000) return 20840000;
    if( $Number > 20840000 && $Number <= 20860000) return 20860000;
    if( $Number > 20860000 && $Number <= 20880000) return 20880000;
    if( $Number > 20880000 && $Number <= 20900000) return 20900000;
    if( $Number > 20900000 && $Number <= 20920000) return 20920000;
    if( $Number > 20920000 && $Number <= 20940000) return 20940000;
    if( $Number > 20940000 && $Number <= 20960000) return 20960000;
    if( $Number > 20960000 && $Number <= 20980000) return 20980000;
    if( $Number > 20980000 && $Number <= 21000000) return 21000000;
    if( $Number > 21000000 && $Number <= 21020000) return 21020000;
    if( $Number > 21020000 && $Number <= 21040000) return 21040000;
    if( $Number > 21040000 && $Number <= 21060000) return 21060000;
    if( $Number > 21060000 && $Number <= 21080000) return 21080000;
    if( $Number > 21080000 && $Number <= 21100000) return 21100000;
    if( $Number > 21100000 && $Number <= 21120000) return 21120000;
    if( $Number > 21120000 && $Number <= 21140000) return 21140000;
    if( $Number > 21140000 && $Number <= 21160000) return 21160000;
    if( $Number > 21160000 && $Number <= 21180000) return 21180000;
    if( $Number > 21180000 && $Number <= 21200000) return 21200000;
    if( $Number > 21200000 && $Number <= 21220000) return 21220000;
    if( $Number > 21220000 && $Number <= 21240000) return 21240000;
    if( $Number > 21240000 && $Number <= 21260000) return 21260000;
    if( $Number > 21260000 && $Number <= 21280000) return 21280000;
    if( $Number > 21280000 && $Number <= 21300000) return 21300000;
    if( $Number > 21300000 && $Number <= 21320000) return 21320000;
    if( $Number > 21320000 && $Number <= 21340000) return 21340000;
    if( $Number > 21340000 && $Number <= 21360000) return 21360000;
    if( $Number > 21360000 && $Number <= 21380000) return 21380000;
    if( $Number > 21380000 && $Number <= 21400000) return 21400000;
    if( $Number > 21400000 && $Number <= 21420000) return 21420000;
    if( $Number > 21420000 && $Number <= 21440000) return 21440000;
    if( $Number > 21440000 && $Number <= 21460000) return 21460000;
    if( $Number > 21460000 && $Number <= 21480000) return 21480000;
    if( $Number > 21480000 && $Number <= 21500000) return 21500000;
    if( $Number > 21500000 && $Number <= 21520000) return 21520000;
    if( $Number > 21520000 && $Number <= 21540000) return 21540000;
    if( $Number > 21540000 && $Number <= 21560000) return 21560000;
    if( $Number > 21560000 && $Number <= 21580000) return 21580000;
    if( $Number > 21580000 && $Number <= 21600000) return 21600000;
    if( $Number > 21600000 && $Number <= 21620000) return 21620000;
    if( $Number > 21620000 && $Number <= 21640000) return 21640000;
    if( $Number > 21640000 && $Number <= 21660000) return 21660000;
    if( $Number > 21660000 && $Number <= 21680000) return 21680000;
    if( $Number > 21680000 && $Number <= 21700000) return 21700000;
    if( $Number > 21700000 && $Number <= 21720000) return 21720000;
    if( $Number > 21720000 && $Number <= 21740000) return 21740000;
    if( $Number > 21740000 && $Number <= 21760000) return 21760000;
    if( $Number > 21760000 && $Number <= 21780000) return 21780000;
    if( $Number > 21780000 && $Number <= 21800000) return 21800000;
    if( $Number > 21800000 && $Number <= 21820000) return 21820000;
    if( $Number > 21820000 && $Number <= 21840000) return 21840000;
    if( $Number > 21840000 && $Number <= 21860000) return 21860000;
    if( $Number > 21860000 && $Number <= 21880000) return 21880000;
    if( $Number > 21880000 && $Number <= 21900000) return 21900000;
    if( $Number > 21900000 && $Number <= 21920000) return 21920000;
    if( $Number > 21920000 && $Number <= 21940000) return 21940000;
    if( $Number > 21940000 && $Number <= 21960000) return 21960000;
    if( $Number > 21960000 && $Number <= 21980000) return 21980000;
    if( $Number > 21980000 && $Number <= 22000000) return 22000000;
    if( $Number > 22000000 && $Number <= 22020000) return 22020000;
    if( $Number > 22020000 && $Number <= 22040000) return 22040000;
    if( $Number > 22040000 && $Number <= 22060000) return 22060000;
    if( $Number > 22060000 && $Number <= 22080000) return 22080000;
    if( $Number > 22080000 && $Number <= 22100000) return 22100000;
    if( $Number > 22100000 && $Number <= 22120000) return 22120000;
    if( $Number > 22120000 && $Number <= 22140000) return 22140000;
    if( $Number > 22140000 && $Number <= 22160000) return 22160000;
    if( $Number > 22160000 && $Number <= 22180000) return 22180000;
    if( $Number > 22180000 && $Number <= 22200000) return 22200000;
    if( $Number > 22200000 && $Number <= 22220000) return 22220000;
    if( $Number > 22220000 && $Number <= 22240000) return 22240000;
    if( $Number > 22240000 && $Number <= 22260000) return 22260000;
    if( $Number > 22260000 && $Number <= 22280000) return 22280000;
    if( $Number > 22280000 && $Number <= 22300000) return 22300000;
    if( $Number > 22300000 && $Number <= 22320000) return 22320000;
    if( $Number > 22320000 && $Number <= 22340000) return 22340000;
    if( $Number > 22340000 && $Number <= 22360000) return 22360000;
    if( $Number > 22360000 && $Number <= 22380000) return 22380000;
    if( $Number > 22380000 && $Number <= 22400000) return 22400000;
    if( $Number > 22400000 && $Number <= 22420000) return 22420000;
    if( $Number > 22420000 && $Number <= 22440000) return 22440000;
    if( $Number > 22440000 && $Number <= 22460000) return 22460000;
    if( $Number > 22460000 && $Number <= 22480000) return 22480000;
    if( $Number > 22480000 && $Number <= 22500000) return 22500000;
    if( $Number > 22500000 && $Number <= 22520000) return 22520000;
    if( $Number > 22520000 && $Number <= 22540000) return 22540000;
    if( $Number > 22540000 && $Number <= 22560000) return 22560000;
    if( $Number > 22560000 && $Number <= 22580000) return 22580000;
    if( $Number > 22580000 && $Number <= 22600000) return 22600000;
    if( $Number > 22600000 && $Number <= 22620000) return 22620000;
    if( $Number > 22620000 && $Number <= 22640000) return 22640000;
    if( $Number > 22640000 && $Number <= 22660000) return 22660000;
    if( $Number > 22660000 && $Number <= 22680000) return 22680000;
    if( $Number > 22680000 && $Number <= 22700000) return 22700000;
    if( $Number > 22700000 && $Number <= 22720000) return 22720000;
    if( $Number > 22720000 && $Number <= 22740000) return 22740000;
    if( $Number > 22740000 && $Number <= 22760000) return 22760000;
    if( $Number > 22760000 && $Number <= 22780000) return 22780000;
    if( $Number > 22780000 && $Number <= 22800000) return 22800000;
    if( $Number > 22800000 && $Number <= 22820000) return 22820000;
    if( $Number > 22820000 && $Number <= 22840000) return 22840000;
    if( $Number > 22840000 && $Number <= 22860000) return 22860000;
    if( $Number > 22860000 && $Number <= 22880000) return 22880000;
    if( $Number > 22880000 && $Number <= 22900000) return 22900000;
    if( $Number > 22900000 && $Number <= 22920000) return 22920000;
    if( $Number > 22920000 && $Number <= 22940000) return 22940000;
    if( $Number > 22940000 && $Number <= 22960000) return 22960000;
    if( $Number > 22960000 && $Number <= 22980000) return 22980000;
    if( $Number > 22980000 && $Number <= 23000000) return 23000000;
    if( $Number > 23000000 && $Number <= 23020000) return 23020000;
    if( $Number > 23020000 && $Number <= 23040000) return 23040000;
    if( $Number > 23040000 && $Number <= 23060000) return 23060000;
    if( $Number > 23060000 && $Number <= 23080000) return 23080000;
    if( $Number > 23080000 && $Number <= 23100000) return 23100000;
    if( $Number > 23100000 && $Number <= 23120000) return 23120000;
    if( $Number > 23120000 && $Number <= 23140000) return 23140000;
    if( $Number > 23140000 && $Number <= 23160000) return 23160000;
    if( $Number > 23160000 && $Number <= 23180000) return 23180000;
    if( $Number > 23180000 && $Number <= 23200000) return 23200000;
    if( $Number > 23200000 && $Number <= 23220000) return 23220000;
    if( $Number > 23220000 && $Number <= 23240000) return 23240000;
    if( $Number > 23240000 && $Number <= 23260000) return 23260000;
    if( $Number > 23260000 && $Number <= 23280000) return 23280000;
    if( $Number > 23280000 && $Number <= 23300000) return 23300000;
    if( $Number > 23300000 && $Number <= 23320000) return 23320000;
    if( $Number > 23320000 && $Number <= 23340000) return 23340000;
    if( $Number > 23340000 && $Number <= 23360000) return 23360000;
    if( $Number > 23360000 && $Number <= 23380000) return 23380000;
    if( $Number > 23380000 && $Number <= 23400000) return 23400000;
    if( $Number > 23400000 && $Number <= 23420000) return 23420000;
    if( $Number > 23420000 && $Number <= 23440000) return 23440000;
    if( $Number > 23440000 && $Number <= 23460000) return 23460000;
    if( $Number > 23460000 && $Number <= 23480000) return 23480000;
    if( $Number > 23480000 && $Number <= 23500000) return 23500000;
    if( $Number > 23500000 && $Number <= 23520000) return 23520000;
    if( $Number > 23520000 && $Number <= 23540000) return 23540000;
    if( $Number > 23540000 && $Number <= 23560000) return 23560000;
    if( $Number > 23560000 && $Number <= 23580000) return 23580000;
    if( $Number > 23580000 && $Number <= 23600000) return 23600000;
    if( $Number > 23600000 && $Number <= 23620000) return 23620000;
    if( $Number > 23620000 && $Number <= 23640000) return 23640000;
    if( $Number > 23640000 && $Number <= 23660000) return 23660000;
    if( $Number > 23660000 && $Number <= 23680000) return 23680000;
    if( $Number > 23680000 && $Number <= 23700000) return 23700000;
    if( $Number > 23700000 && $Number <= 23720000) return 23720000;
    if( $Number > 23720000 && $Number <= 23740000) return 23740000;
    if( $Number > 23740000 && $Number <= 23760000) return 23760000;
    if( $Number > 23760000 && $Number <= 23780000) return 23780000;
    if( $Number > 23780000 && $Number <= 23800000) return 23800000;
    if( $Number > 23800000 && $Number <= 23820000) return 23820000;
    if( $Number > 23820000 && $Number <= 23840000) return 23840000;
    if( $Number > 23840000 && $Number <= 23860000) return 23860000;
    if( $Number > 23860000 && $Number <= 23880000) return 23880000;
    if( $Number > 23880000 && $Number <= 23900000) return 23900000;
    if( $Number > 23900000 && $Number <= 23920000) return 23920000;
    if( $Number > 23920000 && $Number <= 23940000) return 23940000;
    if( $Number > 23940000 && $Number <= 23960000) return 23960000;
    if( $Number > 23960000 && $Number <= 23980000) return 23980000;
    if( $Number > 23980000 && $Number <= 24000000) return 24000000;
    if( $Number > 24000000 && $Number <= 24020000) return 24020000;
    if( $Number > 24020000 && $Number <= 24040000) return 24040000;
    if( $Number > 24040000 && $Number <= 24060000) return 24060000;
    if( $Number > 24060000 && $Number <= 24080000) return 24080000;
    if( $Number > 24080000 && $Number <= 24100000) return 24100000;
    if( $Number > 24100000 && $Number <= 24120000) return 24120000;
    if( $Number > 24120000 && $Number <= 24140000) return 24140000;
    if( $Number > 24140000 && $Number <= 24160000) return 24160000;
    if( $Number > 24160000 && $Number <= 24180000) return 24180000;
    if( $Number > 24180000 && $Number <= 24200000) return 24200000;
    if( $Number > 24200000 && $Number <= 24220000) return 24220000;
    if( $Number > 24220000 && $Number <= 24240000) return 24240000;
    if( $Number > 24240000 && $Number <= 24260000) return 24260000;
    if( $Number > 24260000 && $Number <= 24280000) return 24280000;
    if( $Number > 24280000 && $Number <= 24300000) return 24300000;
    if( $Number > 24300000 && $Number <= 24320000) return 24320000;
    if( $Number > 24320000 && $Number <= 24340000) return 24340000;
    if( $Number > 24340000 && $Number <= 24360000) return 24360000;
    if( $Number > 24360000 && $Number <= 24380000) return 24380000;
    if( $Number > 24380000 && $Number <= 24400000) return 24400000;
    if( $Number > 24400000 && $Number <= 24420000) return 24420000;
    if( $Number > 24420000 && $Number <= 24440000) return 24440000;
    if( $Number > 24440000 && $Number <= 24460000) return 24460000;
    if( $Number > 24460000 && $Number <= 24480000) return 24480000;
    if( $Number > 24480000 && $Number <= 24500000) return 24500000;
    if( $Number > 24500000 && $Number <= 24520000) return 24520000;
    if( $Number > 24520000 && $Number <= 24540000) return 24540000;
    if( $Number > 24540000 && $Number <= 24560000) return 24560000;
    if( $Number > 24560000 && $Number <= 24580000) return 24580000;
    if( $Number > 24580000 && $Number <= 24600000) return 24600000;
    if( $Number > 24600000 && $Number <= 24620000) return 24620000;
    if( $Number > 24620000 && $Number <= 24640000) return 24640000;
    if( $Number > 24640000 && $Number <= 24660000) return 24660000;
    if( $Number > 24660000 && $Number <= 24680000) return 24680000;
    if( $Number > 24680000 && $Number <= 24700000) return 24700000;
    if( $Number > 24700000 && $Number <= 24720000) return 24720000;
    if( $Number > 24720000 && $Number <= 24740000) return 24740000;
    if( $Number > 24740000 && $Number <= 24760000) return 24760000;
    if( $Number > 24760000 && $Number <= 24780000) return 24780000;
    if( $Number > 24780000 && $Number <= 24800000) return 24800000;
    if( $Number > 24800000 && $Number <= 24820000) return 24820000;
    if( $Number > 24820000 && $Number <= 24840000) return 24840000;
    if( $Number > 24840000 && $Number <= 24860000) return 24860000;
    if( $Number > 24860000 && $Number <= 24880000) return 24880000;
    if( $Number > 24880000 && $Number <= 24900000) return 24900000;
    if( $Number > 24900000 && $Number <= 24920000) return 24920000;
    if( $Number > 24920000 && $Number <= 24940000) return 24940000;
    if( $Number > 24940000 && $Number <= 24960000) return 24960000;
    if( $Number > 24960000 && $Number <= 24980000) return 24980000;
    if( $Number > 24980000 && $Number <= 25000000) return 25000000;
    if( $Number > 25000000 && $Number <= 25020000) return 25020000;
    if( $Number > 25020000 && $Number <= 25040000) return 25040000;
    if( $Number > 25040000 && $Number <= 25060000) return 25060000;
    if( $Number > 25060000 && $Number <= 25080000) return 25080000;
    if( $Number > 25080000 && $Number <= 25100000) return 25100000;
    if( $Number > 25100000 && $Number <= 25120000) return 25120000;
    if( $Number > 25120000 && $Number <= 25140000) return 25140000;
    if( $Number > 25140000 && $Number <= 25160000) return 25160000;
    if( $Number > 25160000 && $Number <= 25180000) return 25180000;
    if( $Number > 25180000 && $Number <= 25200000) return 25200000;
    if( $Number > 25200000 && $Number <= 25220000) return 25220000;
    if( $Number > 25220000 && $Number <= 25240000) return 25240000;
    if( $Number > 25240000 && $Number <= 25260000) return 25260000;
    if( $Number > 25260000 && $Number <= 25280000) return 25280000;
    if( $Number > 25280000 && $Number <= 25300000) return 25300000;
    if( $Number > 25300000 && $Number <= 25320000) return 25320000;
    if( $Number > 25320000 && $Number <= 25340000) return 25340000;
    if( $Number > 25340000 && $Number <= 25360000) return 25360000;
    if( $Number > 25360000 && $Number <= 25380000) return 25380000;
    if( $Number > 25380000 && $Number <= 25400000) return 25400000;
    if( $Number > 25400000 && $Number <= 25420000) return 25420000;
    if( $Number > 25420000 && $Number <= 25440000) return 25440000;
    if( $Number > 25440000 && $Number <= 25460000) return 25460000;
    if( $Number > 25460000 && $Number <= 25480000) return 25480000;
    if( $Number > 25480000 && $Number <= 25500000) return 25500000;
    if( $Number > 25500000 && $Number <= 25520000) return 25520000;
    if( $Number > 25520000 && $Number <= 25540000) return 25540000;
    if( $Number > 25540000 && $Number <= 25560000) return 25560000;
    if( $Number > 25560000 && $Number <= 25580000) return 25580000;
    if( $Number > 25580000 && $Number <= 25600000) return 25600000;
    if( $Number > 25600000 && $Number <= 25620000) return 25620000;
    if( $Number > 25620000 && $Number <= 25640000) return 25640000;
    if( $Number > 25640000 && $Number <= 25660000) return 25660000;
    if( $Number > 25660000 && $Number <= 25680000) return 25680000;
    if( $Number > 25680000 && $Number <= 25700000) return 25700000;
    if( $Number > 25700000 && $Number <= 25720000) return 25720000;
    if( $Number > 25720000 && $Number <= 25740000) return 25740000;
    if( $Number > 25740000 && $Number <= 25760000) return 25760000;
    if( $Number > 25760000 && $Number <= 25780000) return 25780000;
    if( $Number > 25780000 && $Number <= 25800000) return 25800000;
    if( $Number > 25800000 && $Number <= 25820000) return 25820000;
    if( $Number > 25820000 && $Number <= 25840000) return 25840000;  */
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: File_GenerateKey
//Description...: Function generate register key
//Syntax........: File_GenerateKey()
//Parameters....: None
//Return values.: Key
//Author .......: £ukasz Kusy
//Modified......: 24.04.2015
////////////////////////////////////////////////////////////////////////////
function File_GenerateKey()
{
$KEY = "R";
   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(100,999);

   $KEY = $KEY.$Var1;

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(100,999);

   $KEY = $KEY.$Var1;

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(0,9);

   $KEY = $KEY.$Var1;

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(100,999);

   $KEY = $KEY.$Var1;

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   $Var1 = rand(100,999);

   $KEY = $KEY.$Var1;

   $Var1 = rand(0,13);

   if($Var1 == 0) $KEY = $KEY."a";
   if($Var1 == 1) $KEY = $KEY."b";
   if($Var1 == 2) $KEY = $KEY."c";
   if($Var1 == 3) $KEY = $KEY."d";
   if($Var1 == 4) $KEY = $KEY."e";
   if($Var1 == 5) $KEY = $KEY."f";
   if($Var1 == 6) $KEY = $KEY."g";
   if($Var1 == 7) $KEY = $KEY."h";
   if($Var1 == 8) $KEY = $KEY."i";
   if($Var1 == 9) $KEY = $KEY."j";
   if($Var1 == 10) $KEY = $KEY."k";
   if($Var1 == 11) $KEY = $KEY."l";
   if($Var1 == 12) $KEY = $KEY."x";
   if($Var1 == 13) $KEY = $KEY."q";

   return $KEY;
}
////////////////////////////////////////////////////////////////////////////

?>