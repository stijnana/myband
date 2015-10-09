<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Maak de database connectie
require_once 'includes/database.php' ;
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;

include "libs/functions.php";

// Koppel de felue van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Gaming');
//  de template: output html
$templateParser->display('head.tpl');

$page = (empty($_GET['page']))?'' : $_GET['page'];
$templateParser->assign('currentPage',$page);

$templateParser->display('header.tpl');
// get the  news items op





//include 'models/menu.php';

switch($page) {
    case 'home';

        $templateParser->display('home.tpl');

        break;

    case 'news';
        $pageN = (empty($_GET['pnumber']))? 1 :$_GET['pnumber'];
        $templateParser->assign('currentPage',$pageN);
        require 'models/select_newsarticles.php';
        $templateParser->assign("data", $result);
        $templateParser->display('newsarticles.tpl');
        require "models/search.php";


        break;
    case 'search';
        //read out search field
        $search_string = isset($_POST['search_string'])?$_POST{'search_string'} : "";
        //search database for search(model)
        require 'models/search_articles.php';

        $templateParser->assign('result',$search_result);
        $templateParser->display('search_result.tpl');

        break;

    case 'new';

        $templateParser->display('new.tpl');

    case 'reviews';

        $templateParser->display('reviews.tpl');
        break;

    case 'esports';

        $templateParser->display('esports.tpl');
        break;

    case 'about';

        $templateParser->display('about.tpl');
        break;

    default:
        $templateParser->display('home.tpl');
        require "models/search.php";
}



$templateParser->display('footer.tpl');