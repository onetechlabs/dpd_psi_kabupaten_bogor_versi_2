<?php 
use Onetechlabs\Contact\Models\Contact;class Cms5f1ec716c205d068027109_7a95e98a657a5d4a4b886e2e39254f64Class extends Cms\Classes\PartialCode
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
