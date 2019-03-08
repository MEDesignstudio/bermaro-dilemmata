<?php

namespace DilemmataTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class DilemmataThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('DilemmataTheme::Stylesheet');
    }
}