<?php

$rt = (object)[];
    $rt->code = "200";
    $rt->version = "4.0";
    $rt->changelog = " [MAIN]
 - Fix can not detect MTP Samsung ports on some PC
 - Fix Drive sign check and optimize for multi-system PC
 - Add and optimize Reboot, Read information, support LG

 [SAMSUNG]
 [DOWNLOADMODE] - Add Factory reset
 [ADB] - Fix read CSC list, improve change CSC function

 [LG]
 [MTP MODE] [DOWNLOAD MODE] - Add read information 
 [EDL] - Add Factory reset; Remove FRP 

 [XIAOMI]
 [ADB] - Add Bypass Micloud Android 8.1; Enable Diag root 
 [SIDELOAD] - Add Factory reset; Remove FRP;Bypass Micloud (Anti relock) Read offline Micloud data

 Fix some bugs";
    $rt->url = "https://samfw.com/blog/samfw-frp-tool-1-0-remove-samsung-frp-one-click";
    // return $rt;

    return response()->json($rt);
?>