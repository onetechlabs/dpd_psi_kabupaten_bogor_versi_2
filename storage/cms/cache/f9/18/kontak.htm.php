<?php 
use Onetechlabs\Contact\Models\Contact;class Cms5f1ec7297c8e9110779413_62823167e443b24dd4fd8c3df1a6cbd7Class extends Cms\Classes\PageCode
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
