<?php

namespace DilemmataTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class DilemmataThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('DilemmataTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}