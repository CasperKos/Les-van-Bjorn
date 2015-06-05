<?php
/*
 * De hoger gelegen layer praat met de lager gelegen layer
 *
 * Presetation   = Zorgt voor de views en voor de teruggift van gegevens aan de eindgebruiker
 * Application   =
 * Business      = het hart van de applicatie
 * infastruture  = zorgt voor de database querys en zorgt er voor dat de andere lagen hun werk kunnen doen + je hoeft er niks aan te veranderen
 *
 */
use Pragtig\application\ArticleService;
use Pragtig\infrastructure\ArticleRepository;
use Pragtig\infrastructure\DbConnection;
use Pragtig\presentation\web\controllers\ArticleController;

$connection = new DbConnection();
$repository = new ArticleRepository($connection);
$service = new ArticleService($repository);
$controller = new ArticleController($service);

$controller->create($_POST);