@extends ('modeles/admin')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">

             </div>
               <ul id="menuList">
                  <li>
                    <strong>Bonjour {{ $admin['nom'] . ' ' . $admin['prenom'] }}</strong>
                  </li>

                  <li class="smenu">
                    <a href="{{ route('chemin_voirFraisParMoisEtParVisiteurPourUnTypeDeFrais') }}" title="Frais par mois et par visiteur pour type de frais">Frais par mois et par visiteur pour type de frais</a>
                  </li>

                  <li class="smenu">
                    <a href="{{ route('chemin_voirFraisParMoisPourUnVisiteur') }}" title="Frais par mois pour un visiteur">Frais par mois pour un visiteur</a>
                  </li>


                  <li class="smenu">
                    <a href="{{ route('chemin_voirFraisParVisiteurPourUneAnne') }}" title="Frais par visiteur pour une année">Frais par visiteur pour une année</a>
                  </li>

                  <li class="smenu">
                    <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter">Déconnexion</a>
                  </li>
                </ul>

                  </div>
    @endsection