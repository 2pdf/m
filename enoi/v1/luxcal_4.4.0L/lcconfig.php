<?php
/*
= LuxCal event calendar configuration =
*/
#CHG After upgrading ensure that the next line contains the NEW version string
#CHG and keep a copy of the updated version of this file in the git source tree
$lcV="4.4.0L"; //LuxCal version
$dbType="SQLite"; //db type (MySQL or SQLite)
#CHG $dbDir="db/"; //db directory
#CHG must reside in PERSISTENT storage
$dbDir="/data/enoi/"; //db directory
$dbDef="enoi"; //default calendar (db name)
$dbSel=1; //selectable in Options panel
?>
