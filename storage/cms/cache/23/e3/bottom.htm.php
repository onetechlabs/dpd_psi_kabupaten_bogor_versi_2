<?php 
use Onetechlabs\Contact\Models\Contact;use Onetechlabs\Purchaseinformation\Models\Purchaseinformation;class Cms5f1ec716cbc58177423879_785641ee50f93c2c0f8f123152a6358fClass extends Cms\Classes\PartialCode
{


public function onStart()
{
    $contact = Contact::find(1);
    $ptn = "/^0/";
    $str = $contact['phone'];
    $rpltxt = "62";
    $rpltxt2 = "+62 ";
    $this['Contact'] = $contact;
    $this['ContactDisplay'] = preg_replace($ptn, $rpltxt2, $str);
}
}
