<?php
 
namespace customTopNavLTSModern\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class customTopNavLTSModernContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('customTopNavLTSModern::content.customTopNavLTSModern');
    }
}