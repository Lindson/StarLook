<?php

$smarty = new Template();
$smarty->assign('BANNER', Rotas::ImageLink('black-friday.jpg', 730, 269));
$smarty->display('home.tpl');
include_once Rotas::get_Pasta_Controller().'/produtos.php';