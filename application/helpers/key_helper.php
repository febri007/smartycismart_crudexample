<?php
function rupiah($nominal){
    $result = "Rp ". number_format($nominal,0,',','.');
    return $result;
}


function indo_date($date){
    $d = substr($date,8,2);
    $m = substr($date,5,2);
    $y = substr($date,0,4);
    return $d.'-'.$m.'-'.$y;
} 

    function getServerKey()
    {
        // return "SB-Mid-server-LGhgyGOtmzoC20KGT0JVr_w7";
        return "Mid-server-OI3PPQ8h5o1Q5YKP60PkRHcy";
    }

    function getClientKey(){
        // return "SB-Mid-client-4TFhB5uD0B6Toeai";
        return "Mid-client-aUK68XbLUOG9d6zG";
    }

    function getTawkKey(){
        return "https://embed.tawk.to/5fa75fcf0a68960861bcbd80/default";
        // return "SB-Mid-client-0p8lbY7CC1VMsL_y";
    }
?>