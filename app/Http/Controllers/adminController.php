<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PdoGsb;

class adminController extends Controller
{
    // pour une année tous les frais par visiteur
    function voirFraisParVisiteurPourUneAnne()
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lesAnnees = PdoGsb::getLesAnnees();

            $vue = view('voirFraisParVisiteurPourUneAnne')
                ->with('admin', $admin)
                ->with('lesAnnees', $lesAnnees);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function afficherFraisParVisiteurPourUneAnne(Request $request)
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lAnnee = $request['annee'];
            $lesAnnees = PdoGsb::getLesAnnees();

            $lesInfos = PdoGsb::getInfosParAnnee($lAnnee);
            $json = json_encode($lesInfos);
            file_put_contents("fraisParVisiteur.json",$json);

            $vue = view('afficherFraisParVisiteurPourUneAnne')
                ->with('admin', $admin)
                ->with('lesInfos', $lesInfos)
                ->with('lesAnnees', $lesAnnees)
                ->with('lAnnee', $lAnnee);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }


    // pour un visiteur tous les frais par mois
    function voirFraisParMoisPourUnVisiteur()
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lesVisiteurs = PdoGsb::getLesVisiteurs();

            $vue = view('voirFraisParMoisPourUnVisiteur')
                ->with('admin', $admin)
                ->with('lesVisiteurs', $lesVisiteurs);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function afficherFraisParMoisPourUnVisiteur(Request $request)
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $leVisiteur = $request['visiteur'];
            $lesVisiteurs = PdoGsb::getLesVisiteurs();

            $lesInfos = PdoGsb::getInfosParVisiteur($leVisiteur);
            $json = json_encode($lesInfos);
            file_put_contents("fraisParMois.json",$json);

            $vue = view('afficherFraisParMoisPourUnVisiteur')
                ->with('admin', $admin)
                ->with('lesInfos', $lesInfos)
                ->with('lesVisiteurs', $lesVisiteurs)
                ->with('leVisiteur', $leVisiteur);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }


    // pour un type de frais tous les montants par mois et par visiteur
    function voirFraisParMoisEtParVisiteurPourUnTypeDeFrais()
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $lesTypes = PdoGsb::getLesTypes();

            $vue = view('voirFraisParMoisEtParVisiteurPourUnTypeDeFrais')
                ->with('admin', $admin)
                ->with('lesTypes', $lesTypes);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

    function afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais(Request $request)
    {
        if (session('admin') != null) {
            $admin = session("admin");

            $leType = $request['type'];
            $lesTypes = PdoGsb::getLesTypes();

            $lesInfos = PdoGsb::getLesInfosParType($leType);
            $json = json_encode($lesInfos);
            file_put_contents("fraisParMoisEtParVisiteur.json",$json);

            $vue = view('afficherFraisParMoisEtParVisiteurPourUnTypeDeFrais')
                ->with('admin', $admin)
                ->with('lesInfos', $lesInfos)
                ->with('leType', $leType)
                ->with('lesTypes', $lesTypes);

            return $vue;
        } else {
            return view('connexion')->with('erreurs', null);
        }
    }

}
