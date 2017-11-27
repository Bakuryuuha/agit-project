<?php 
class Cms5a1c1ae1a85da535633058_afc1e5c0010c513bb34453a4c6507594Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['messages'] = RainLab\Translate\Models\Message::all();
}
}
