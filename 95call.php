<?php
//AGUNG95
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $agung_ch = curl_init();
        curl_setopt($agung_ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($agung_ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($agung_ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($agung_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($agung_ch, CURLOPT_HEADER, true);
        curl_setopt($agung_ch, CURLOPT_POST, 1);
        curl_setopt($agung_ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $agung_asw = curl_exec($agung_ch);
        curl_close($agung_ch);
                echo $agung_asw."\n";
}
echo "NINETYFIVE ; 95 VAMPIERA\n\n";
echo "Nomor\nInput : ";
$agung_nomor = trim(fgets(STDIN));
$agung_execute = send($agung_nomor);
print $agung_execute;
?>
