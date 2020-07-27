<?php 
use Onetechlabs\Contact\Models\Contact;class Cms5f1e2a8b59bfd068787768_54983577b65a09b71984b4d5b6f2631eClass extends Cms\Classes\PageCode
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
