﻿$(document).ready(function(){
    var bFLeft = $("#divAdLeft");
    var bFRight = $("#divAdRight");
    var left_Positiion = 0;
    var right_Positiion = 0;
    var window_Width = $(window).width();
    var document_Width = 1010;
    if (window_Width < document_Width)
    {
        bFLeft.hide();
        bFRight.hide();
    } else
    {
        //Calculate right position for left banner
        right_Positiion = (window_Width - document_Width)/2 + document_Width;
        left_Positiion = (window_Width - document_Width)/2 + document_Width;
        bFLeft.attr("style", "float: left; position: fixed; top:132px; right: " + right_Positiion + "px;");
        bFRight.attr("style", "float: right; position: fixed; top:132px; left: " + left_Positiion + "px;");
        bFLeft.append("<br style='clear: both;' />");
        bFRight.append("<br style='clear: both;' />");
    }
    
});