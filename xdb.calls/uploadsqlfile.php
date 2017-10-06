<?php
// update an SQLITE database, only if signature verifies
// multipart/form-data:
//	f=file with sql commands to upload
//	s=file containing f's signed digest
//	what=exec or query
//      delimiter=string delimiting query output columns (default: tab)
//	hash=used to verify data (default sha512)
//	ftime=time of file signature(unix seconds, to prevent command replaying)
//	sftime=file containing ftime's signed digest


// are we running under openshift?
$dataDir="/data/xdb.calls";
if (getenv(OPENSHIFT_DATA_DIR)) {
	$dataDir = getenv(OPENSHIFT_DATA_DIR);
}

define(DB, $dataDir . "/calls.sqlite");
define(MAXFILESIZE, 100000);

define(TIME_DIFF, 1.0*60); // the current time should not differ more
			   // than n*60 seconds, since when the file
			   // containing the commands was signed (ie. ftime)


// form data processing
$what = $_POST["what"];
if (!($_POST["delimiter"])) {
	$delimiter="\t";
} else {
	$delimiter=$_POST["delimiter"];
};
if (!($_POST["hash"])) {
	$hash="sha512";
} else {
	$hash=$_POST["hash"];
};
if (!($_POST["ftime"])) {
	$ftime="0";
} else {
	$ftime=$_POST["ftime"];
};

$formdata = array("f", "s", "sftime");
foreach ($formdata as $key => $value) {
  //echo "key  -> value  $key $value \n";
  if ($_FILES[$value]["error"] > 0) {
    echo "Error: " . $_FILES[$value]["error"] . "\n";
  }
//else {
//  echo "Upload: " . $_FILES[$value]["name"] . "\n";
//  echo "Type: " . $_FILES[$value]["type"] . "\n";
//  echo "Size: " . ($_FILES[$value]["size"] ) . " bytes\n";
//  echo "Stored in: " . $_FILES[$value]["tmp_name"]. "\n";
//}
}	// foreach $formdata





//// Check whether file signature verifies and whether signature time verifies
//echo "Signature: " . base64_encode(
//	file_get_contents($_FILES["s"]["tmp_name"])
//	) . " \n";

// signature can be created manually with:
// openssl dgst -sha512 -sign private_key.txt data.txt >binary_signature
// 
// signature can be verified manually with:
// openssl dgst -sha512 -signature binary_signature -verify public_key.txt data
//
// You can get a private/public key pair using:
// openssl genrsa 4096 >private_key.txt
// openssl rsa -pubout <private_key.txt >public_key.txt


set_include_path(get_include_path() . PATH_SEPARATOR . 'phpsec');
include('Crypt/RSA.php');
$rsa = new Crypt_RSA();
$rsa->setSignatureMode(CRYPT_RSA_SIGNATURE_PKCS1);
// avaialable hashes:
// md2,md5,md5-96,sha1,sha1-96,sha256,sha256-96,sha384,andsha512,sha512-96
if (
	($hash != 'sha256') &&
	($hash != 'sha384') &&
	($hash != 'sha512') &&
1 ){
	echo "invalid hash algorithm\n"; // don't accept insecure hashes
	exit(1);
}

$rsa->setHash($hash);
$rsa->loadKey( file_get_contents("pubkey.pem")); // public key

$now=time();
$ok = (abs($now - $ftime) < TIME_DIFF) &&
				// file signed in the past few seconds?
      $rsa->verify($ftime, file_get_contents($_FILES["sftime"]["tmp_name"])) &&
				// ftime properly signed?
      $rsa->verify(		// file properly signed?
	file_get_contents($_FILES["f"]["tmp_name"]),
	file_get_contents($_FILES["s"]["tmp_name"])
);



if (1 == 0){	// DEBUG
	echo "    ok = <"; if($ok){echo "T";}else{echo "F";};echo ">  ";
	$x=(abs($now - $ftime) < TIME_DIFF);
	echo "abs diff <"; if($x){echo "T";}else{echo "F";};echo ">  ";
	$x=$rsa->verify( $ftime,
      		file_get_contents($_FILES["sftime"]["tmp_name"]));
	echo "time ver <"; if($x){echo "T";}else{echo "F";};echo ">  ";
	$x=$rsa->verify(file_get_contents($_FILES["f"]["tmp_name"]),file_get_contents($_FILES["s"]["tmp_name"]));
	echo "file ver <"; if($x){echo "T";}else{echo "F";};echo ">  ";
	echo "  time = <". $now .">  ";
	echo " ftime = <". $ftime .">  ";
	echo "abs(time-ftime) = <". abs($now-$ftime) .">  ";
	echo "sftime = <". substr(base64_encode(
		file_get_contents($_FILES["sftime"]["tmp_name"])),0,10) .">\n";
}	// DEBUG




if (!($ok)) {		// bad signature
	echo "error checking signature"."\n";
	exit(1);
}



if ($_FILES["f"]["size"] < MAXFILESIZE) {
  if ($_FILES["f"]["error"] > 0) {
    echo "Return Code: " . $_FILES["f"]["error"] . "\n";
  }
  else
  {
//    echo "Upload: " . $_FILES["f"]["name"] . "\n";
//    echo "Type: " . $_FILES["f"]["type"] . "\n";
//    echo "Size: " . ($_FILES["f"]["size"] / 1024) . " kB\n";
//    echo "Temp file: " . $_FILES["f"]["tmp_name"] . "\n";
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open(DB);
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";

      //echo file_get_contents($_FILES["f"]["tmp_name"]);

      if ( $what == "exec") {
         //echo "executing...\n";
         $ret = $db->exec(file_get_contents($_FILES["f"]["tmp_name"]));
         //echo "db->exec returns   $ret\n";
         if(!$ret){
            echo $db->lastErrorMsg() . "\n";
         }
      }

      if ($what == "query") {
	//echo "querying...\n";
	$q = @$db->query(
         file_get_contents($_FILES["f"]["tmp_name"])
	);
        if ($q === false) {
            echo $db->lastErrorMsg() . "\n";
        } else {
            while ( $ret = $q->fetchArray(SQLITE3_NUM)) {
		// print_r ($ret);
		print implode($delimiter, $ret) . "\n";

            }
        }
      }


      $db->close();
   }
  }
} else {
  echo "File too big.". "\n";
}

		// just in case
unlink($_FILES["f"]["tmp_name"]);
unlink($_FILES["s"]["tmp_name"]);

?>
