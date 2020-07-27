<?php 
use Onetechlabs\Contact\Models\Contact;use Onetechlabs\Purchaseinformation\Models\Purchaseinformation;class Cms5f1e2902b3b90173019792_1a04f76ae5ded7d0b11cb912d7cc4032Class extends Cms\Classes\PartialCode
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
