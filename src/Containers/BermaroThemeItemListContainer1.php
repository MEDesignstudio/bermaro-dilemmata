<?php

namespace DilemmataTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class DilemmataThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('DilemmataTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}