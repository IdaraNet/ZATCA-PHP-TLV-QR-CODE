<?php
function einv_generate_tlv_qr_code($array_tag=array()){
    $index=1;
    foreach($array_tag as $tag_val){
        $tlv_string.=pack("H*", sprintf("%02X",(string) "$index")).
                     pack("H*", sprintf("%02X",strlen((string) "$tag_val"))).
                     (string) "$tag_val";
        $index++;                              
    }      
    return base64_encode($tlv_string);
}
//Just send you tags values in array to the function and it will return you the TLV content of QRcode

$data_tlv=einv_generate_tlv_qr_code(array($company_name,$vat_reference,$timestamp,$total,$vat);

?>
