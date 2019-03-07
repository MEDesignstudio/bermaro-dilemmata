<?php

namespace DilemmataTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class DilemmataThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('DilemmataTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}