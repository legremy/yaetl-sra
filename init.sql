CREATE DATABASE IF NOT EXISTS sra;

USE sra;

CREATE TABLE IF NOT EXISTS antidemarrages (
    code_antidemarrages char(3) NOT NULL,
    libelle varchar(25) NOT NULL,
    PRIMARY KEY (code_antidemarrages)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `carrosseries` (
    `code_carrosseries` char(3) NOT NULL,
    `libelle` varchar(25) NOT NULL,
    PRIMARY KEY (`code_carrosseries`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `classes_de_prix` (
   `code_classe_de_prix` char(2) NOT NULL,
   `libelle` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `classes_de_reparation` (
     `code_classe_de_reparation` char(2) NOT NULL,
     `libelle` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `energies` (
    `code_energie` char(2) NOT NULL,
    `libelle` varchar(25) NOT NULL,
    PRIMARY KEY (`code_energie`),
    KEY `libelle` (`libelle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `genres` (
    `code_genre` char(2) NOT NULL,
    `libelle` varchar(25) NOT NULL,
    PRIMARY KEY (`code_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `marques` (
    `code_marque` char(2) NOT NULL,
    `libelle` varchar(25) NOT NULL,
    PRIMARY KEY (`code_marque`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `modeles` (
    `code_marque` char(2) NOT NULL,
    `code_modele` char(2) NOT NULL,
    `libelle` varchar(25) NOT NULL,
    `code_segment` char(2) NOT NULL,
    PRIMARY KEY (`code_marque`,`code_modele`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `vehicules` (
    `id_vehicules` char(12) NOT NULL,
    `numero_ordre` int(11) NOT NULL,
    `code_marque` char(2) NOT NULL,
    `code_modele` char(2) NOT NULL,
    `version` varchar(53) NOT NULL,
    `code_carrosserie` char(3) NOT NULL,
    `code_energie` char(3) NOT NULL,
    `puissance_administrative` int(2) NOT NULL,
    `code_genre` char(2) NOT NULL,
    `nombre_de_places` int(2) NOT NULL,
    `serie_limitee` char(1) NOT NULL,
    `type_mines` varchar(27) NOT NULL,
    `numero_cnit` varchar(12) NOT NULL,
    `date_ou_annee_de_debut_de_commercialisation` date NOT NULL,
    `date_ou_annee_de_fin_de_commercialisation` date NOT NULL,
    `cylindree` char(4) NOT NULL,
    `vitesse_maximum` int(3) NOT NULL,
    `puissance_cee` int(3) NOT NULL,
    `puissance_din` int(3) NOT NULL,
    `regime_de_puissance_maximum` int(4) NOT NULL,
    `couple_moteur_maximum` float(4,1) NOT NULL,
    `regime_de_couple_moteur_maximum` int(4) NOT NULL,
    `transmission` char(2) NOT NULL,
    `boite_de_vitesse` char(1) NOT NULL,
    `nombre_de_rapports` int(1) NOT NULL,
    `suspension` char(1) NOT NULL,
    `type_de_freins` char(2) NOT NULL,
    `assistance_de_freinage` char(1) NOT NULL,
    `longueur` int(4) NOT NULL,
    `largeur` int(4) NOT NULL,
    `hauteur` int(4) NOT NULL,
    `empattement` int(4) NOT NULL,
    `voie_avant` int(4) NOT NULL,
    `voie_arriere` int(4) NOT NULL,
    `poids_a_vide` int(4) NOT NULL,
    `ptac` int(4) NOT NULL,
    `charge_utile` int(4) NOT NULL,
    `airbag_conducteur` char(1) NOT NULL,
    `airbag_passager_avant` char(1) NOT NULL,
    `airbags_lateraux_avant` char(1) NOT NULL,
    `airbags_lateraux_arriere` char(1) NOT NULL,
    `direction_assistee` char(1) NOT NULL,
    `assistance_de_freinage_durgence` char(1) NOT NULL,
    `antiblocage_des_roues` char(2) NOT NULL,
    `controle_dynamique_de_stabilite` char(1) NOT NULL,
    `dernier_tarif_euros` int(6) NOT NULL,
    `dernier_tarif_francs` int(8) NOT NULL,
    `date_du_dernier_tarif` date NOT NULL,
    `source_du_dernier_tarif` char(1) NOT NULL,
    `tarif_a_lorigine_euros` int(6) NOT NULL,
    `tarif_a_lorigine_francs` int(8) NOT NULL,
    `date_du_tarif_a_lorigine` date NOT NULL,
    `source_du_tarif_a_lorigine` char(1) NOT NULL,
    `dernier_cout_du_remplacement_des_pieces` int(6) NOT NULL,
    `dernier_cout_du_remplacement_dun_bloc_doptique` int(6) NOT NULL,
    `dernier_cout_du_remplacement_dun_pare_brise` int(6) NOT NULL,
    `date_des_derniers_couts` date NOT NULL,
    `cout_a_lorigine_de_remplacement_des_pieces` int(6) NOT NULL,
    `cout_a_lorigine_de_remplacement_dun_bloc_optique` int(6) NOT NULL,
    `cout_a_lorigine_de_remplacement_dun_pare_brise` int(6) NOT NULL,
    `date_des_couts_a_lorigine` date NOT NULL,
    `antidemarrage_actuel` char(3) NOT NULL,
    `date_dattribution_de_lantidemarrage_actuel` date NOT NULL,
    `antidemarrage_precedent` char(3) NOT NULL,
    `date_dattribution_de_lantidemarrage_precedent` date NOT NULL,
    `groupe_apsad` char(2) NOT NULL,
    `classe_apsad` char(2) NOT NULL,
    `code_gta` char(4) NOT NULL,
    `note_de_securite_passive` int(2) NOT NULL,
    `cout_de_choc_avant` int(6) NOT NULL,
    `cout_de_choc_arriere` int(6) NOT NULL,
    `groupe_sra_actuel` char(2) NOT NULL,
    `code_classe_de_prix_actuel` char(2) NOT NULL,
    `code_classe_de_reparation_actuelle` char(2) NOT NULL,

    PRIMARY KEY (`id_vehicules`),
    KEY `code_marque` (`code_marque`),
    KEY `code_modele` (`code_modele`),
    KEY `code_carrosserie` (`code_carrosserie`),
    KEY `code_energie` (`code_energie`),
    KEY `code_genre` (`code_genre`),
    KEY `code_classe_de_prix_actuel` (`code_classe_de_prix_actuel`),
    KEY `code_classe_de_reparation_actuelle` (`code_classe_de_reparation_actuelle`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*
- antidemarrages
- carrosseries
- classes_de_prix
- classes_de_reparation
- energies
- genres
- marques
- modeles
*/