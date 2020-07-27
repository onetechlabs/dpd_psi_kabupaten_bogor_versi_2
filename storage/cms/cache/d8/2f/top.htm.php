<?php 
use Onetechlabs\Contact\Models\Contact;class Cms5f1e2902b2313616155838_7cf987be680eb85377785c292be9dbe8Class extends Cms\Classes\PartialCode
{

public function onStart()
{
    $contact = Contact::find(1);
    $ptn = "/^0/";
    $str = $contact['phone'];
    $rpltxt = "62";
    $rpltxt2 = "+62 ";
    $this['Contact'] = preg_replace($ptn, $rpltxt, $str);
    $this['ContactDisplay'] = preg_replace($ptn, $rpltxt2, $str);
}
}
