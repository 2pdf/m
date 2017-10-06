// RSA signatures using PHP openssl library 
// If openssl is not available, use phpsec (a pure PHP implementation) of SSL
<?php
phpinfo();

$data = "Beeeeer is really good.. hic...";
//echo "$data\n";		//XX

// You can get a simple private/public key pair using:
// openssl genrsa 4096 >private_key.txt
// openssl rsa -pubout <private_key.txt >public_key.txt

$private_key = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
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
-----END RSA PRIVATE KEY-----
EOD;
$public_key = <<<EOD
-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAnB0i1b5K9PPmmcDnNOqT
39POF46U4xnOGdlgpKWg+SAttlCRHDPy2kLGj2zIb9toTymPnERnyi1bxtDQtSTW
x0k5+JOcSWlsT5UuzM7pzxQphqPT8IsWdfH4k01/DkAc2bi2CuhFeFvv7vfolyCk
LbMOT+zDFiJ8z3AGhoiHjpDBdQ7P0VP0p+QvRp8rtU8fa4Vj5u8/qvrryCoHbpRD
9PZUMCDSMMMg5KQbKlvygt7FjEEvHcefFVSV1fBT5D0dGSRTmqYNNQkmJ239V6lq
F4GbfSTNeUw3awCVRFJjPQLzda7+1+p9Mz64ZAsCWIieinbk+pRJtDlUoZTcSwqt
tVqgGKXLul6Wb8jtMh0LHy3dK6/lAg+sEYjMBQWrCke+hjdXzVJoDH+WXRXx1B/j
1/3Oz+0iPyyvluabpaM27SkYdhdr/oOlGhxQZsJ4YD9X4TanWCu4nsEtKDKIMAZK
GAEfdV753Wg2J9WHAKAVMq34MJWGGgxXJPCuhVhbOm/pkcFO426fOPpb99gFPvGU
btRmgztdyXu3b7S0m9pJSzKC/DEeASz9VpV1vd+KokZm1OarLa3c1+0Hl3HhM3Jw
7BZxHb/nb/HOsvOWTGFi3Mzj7pDsRzFaLAZKRyIjyfANSoCdkgMFzXUnZ/CG0xCm
yN4fkMBCBEirMCG5nQ/nigsCAwEAAQ==
-----END PUBLIC KEY-----
EOD;

$binary_signature = "";

$ok = openssl_sign($data, $binary_signature, $private_key, "sha512");
if ($ok =! 1) {
    echo "error signing data\n";
} else {
    echo base64_encode( $binary_signature );
}


// Check signature
$ok = openssl_verify($data, $binary_signature, $public_key, "sha512");
if ($ok != 1) { echo "error checking signature\n"; }


?>
