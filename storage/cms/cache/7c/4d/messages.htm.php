<?php 
class Cms5a375d6027577262247964_8905bd10a266053e6ab2d4c8477244e9Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['messages'] = RainLab\Translate\Models\Message::all();
}
}
