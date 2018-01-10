<?php
require_once 'Controleur/ControleurIndex.php';

class Routeur {

    // Route une requête entrante : exécution la bonne méthode de contrôleur en fonction de l'URL
    public function routerRequete() {
		// s'il y a un parametre 'entite'
        if (isset($_GET['entite'])) {
			// on détermine avec quelle entité on veut travailler
			switch($_GET['entite']) {
				case 'produit' :
					// on détermine quelle action (CRUD) on veut effectuer sur l'entité choisie
					switch($_GET['action']) {
						case 'C' :  // 'C' = Create = ajout d'un étudiant...
									$ctrlPrd = new ControleurProduit();
									$ctrlPrd->ajouterProduit();
									break;
						case 'R' : 	// 'R' = Read = lecture des étudiants ou d'un seul s'il y a un parametre id
									if (isset($_GET['id'])) {
										$ctrlPrd = new ControleurProduit();
										$ctrlPrd->getProduit($_GET['id']);
									}
									else {
										$ctrlPrd = new ControleurProduit();
										$ctrlPrd->getListeProduits();
									}
									break;
						case 'U' : 	// 'U' = Update = modification d'un étudiant à partir de son id
									if (isset($_GET['id'])){
                     $ctrlPrd = new ControleurProduit();
                     $ctrlPrd->modifProduit($_GET['id']);
                   }
                  break;
            case 'traiterModif' :
                      $ctrlPrd = new ControleurProduit();
                      $ctrlPrd->traiterModif();
                      break;

						case 'D' : 	// 'D' = Delete = suppression d'un étudiant à partir de son id
									if(isset($_GET['id'])){
										$ctrlPrd = new ControleurProduit();
										$ctrlPrd->deleteProduit($_GET['id']);
									}
									break;
						case 'traiterProd' :
									$ctrlPrd = new ControleurProduit();
									$ctrlPrd->traiterProd();
									break;
						default: 	// pour toutes les autres valeurs du parametre 'action', on affiche la liste des étudiants
									$ctrlPrd = new ControleurProduit();
									$ctrlPrd->getListeProduits();
									break;
					}
					break;

				case 'categorie' :
					switch($_GET['action']) {
						case 'C' :  // 'C' = Create = ajout d'un groupe...
									$ctrlCat = new ControleurCategorie();
									$ctrlCat->ajouterCategorie();
									break;
						case 'R' : 	// 'R' = Read = lecture des groupes ou d'un seul s'il y a un parametre id
									if (isset($_GET['id'])) {
										$ctrlCat = new ControleurCategorie();
										$ctrlCat->getListeProduitsByCategorie($_GET['id']);
									}
									else {
										$ctrlCat = new ControleurCategorie();
										$ctrlCat->getListeCategorie();
									}
									break;

						case 'U' : 	// 'U' = Update = modification d'un groupe à partir de son id
									if (isset($_GET['id'])){
										$ctrlCat = new ControleurCategorie();
										$ctrlCat->modifCat($_GET['id']);
									}
									break;

						case 'traiterModif' :
									$ctrlCat = new ControleurCategorie();
									$ctrlCat->traiterModifCat();
									break;

						case 'D' : 	// 'D' = Delete = suppression d'un groupe à partir de son id
									if(isset($_GET['id'])){
										$ctrlCat = new ControleurCategorie();
										$ctrlCat->deleteCat($_GET['id']);
									}
									break;

						case 'traiterCat' :
									$ctrlCat = new ControleurCategorie();
									$ctrlCat->traiterCat();
									break;
						default: 	// pour toutes les autres valeurs, on affiche la liste des groupes
									$ctrlCat = new ControleurCategorie();
									$ctrlCat->getListeCategorie();
									break;
					}
					break;

				case 'connexion' :
					switch($_GET['action']){
						case 'connexion':
							$connexion = new ControleurConnexion();
							$connexion->getFormConn();
							break;
						case 'traiterConnexion':
							$connexion = new ControleurConnexion();
							$connexion->traiterConnexion();
							break;
						case 'deconnexion':
							$connexion = new ControleurConnexion();
							$connexion->deconnexion();
							break;
						default :
							$connexion = new ControleurConnexion();
							$connexion->getFormConn();
							break;
					}
					break;

				case 'base' :
					switch($_GET['action']){
						case 'R' :
							$base = new ControleurBase();
							$base->getListeBase();
							break;
						case 'Raz' :
							$base = new ControleurBase();
							$base->razBase();
							break;
					}
					break;

				default: 	// pour toutes les autres valeurs du parametre 'entite', on affiche la liste des groupes
							$Idx = new ControleurIndex();
							$Idx->getIndex();
							break;
			}
		}
		// aucune paramètre 'entite' : on affiche la liste des groupes
        else {
			$Idx = new ControleurIndex();
			$Idx->getIndex();
        }
    }
}
