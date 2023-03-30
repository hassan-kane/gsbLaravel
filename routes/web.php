<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
        /*-------------------- Use case connexion---------------------------*/
Route::get('/',[
        'as' => 'chemin_connexion',
        'uses' => 'connexionController@connecter'
]);

Route::post('/',[
        'as'=>'chemin_valider',
        'uses'=>'connexionController@valider'
]);
Route::get('deconnexion',[
        'as'=>'chemin_deconnexion',
        'uses'=>'connexionController@deconnecter'
]);

         /*-------------------- Use case état des frais---------------------------*/
Route::get('selectionMois',[
        'as'=>'chemin_selectionMois',
        'uses'=>'etatFraisController@selectionnerMois'
]);

Route::post('listeFrais',[
        'as'=>'chemin_listeFrais',
        'uses'=>'etatFraisController@voirFrais'
]);

        /*-------------------- Use case gérer les frais---------------------------*/

Route::get('gererFrais',[
        'as'=>'chemin_gestionFrais',
        'uses'=>'gererFraisController@saisirFrais'
]);

Route::post('sauvegarderFrais',[
        'as'=>'chemin_sauvegardeFrais',
        'uses'=>'gererFraisController@sauvegarderFrais'
]);


//pour une année tous les frais par visiteur

Route::get('voirFraisParVisiteurPourUneAnne',[
        'as'=>'chemin_voirFraisParVisiteurPourUneAnne',
        'uses'=>'adminController@voirFraisParVisiteurPourUneAnne'
]);

Route::post('afficherFraisParVisiteurPourUneAnne',[
        'as'=>'chemin_afficherFraisParVisiteurPourUneAnne',
        'uses'=>'adminController@afficherFraisParVisiteurPourUneAnne'
]);

//pour un visiteur tous les frais par mois

Route::get('voirFraisParMoisPourUnVisiteur',[
        'as'=>'chemin_voirFraisParMoisPourUnVisiteur',
        'uses'=>'adminController@voirFraisParMoisPourUnVisiteur'
]);

Route::post('afficherFraisParMoisPourUnVisiteur',[
        'as'=>'chemin_afficherFraisParMoisPourUnVisiteur',
        'uses'=>'adminController@afficherFraisParMoisPourUnVisiteur'
]);


//pour un type de frais tous les montants par mois et par visiteur

Route::get('voirFraisParMoisEtParVisiteurPourUnTypeDeFrais',[
        'as'=>'chemin_voirFraisParMoisEtParVisiteurPourUnTypeDeFrais',
        'uses'=>'adminController@voirFraisParMoisEtParVisiteurPourUnTypeDeFrais'
]);

Route::post('afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais',[
        'as'=>'chemin_afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais',
        'uses'=>'adminController@afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais'
]);








