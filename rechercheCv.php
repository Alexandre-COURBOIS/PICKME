<?php

use Inc\Service\Form;

include_once 'Inc/Service/Form.php';



$form = new Form($errors, 'GET');
// require_once('Inc/header.php'); ?>


    <div class="wrap_section">
        <h1 class="title">Rechercher un CV</h1>
        <form id="searchCv">
            <?php $form->label('category_select','Choisir une catégorie : ') ?>
            <select name="category" id="category_select">
                <option value="">-Catégories-</option>
                <option value="">------------------A----------------------</option>
                <option value="aeroEtEspace">Aéronautique Et Espace</option>
                <option value="agri">Agriculture - Agroalimentaire</option>
                <option value="artisanat">Artisanat</option>
                <option value="audiovisuel">Audiovisuel, Cinéma</option>
                <option value="comptabilité">Audit, Comptabilité, Gestion</option>
                <option value="automobile">Automobile</option>
                <option value="">------------------B----------------------</option>
                <option value="banque">Banque, Assurance</option>
                <option value="batiment">Bâtiment, Travaux Publics</option>
                <option value="biologie">Biologie, Chimie, Pharmacie</option>
                <option value="">------------------C----------------------</option>
                <option value="commerce">Commerce, Distribution</option>
                <option value="communication">Communication</option>
                <option value="creation">Création, Métiers D'art</option>
                <option value="culture">Culture, Patrimoine</option>
                <option value="">------------------D----------------------</option>
                <option value="defense">Défense, Sécurité, Armée</option>
                <option value="documentation">Documentation, Bibliothèque</option>
                <option value="droit">Droit</option>
                <option value="">------------------E----------------------</option>
                <option value="edition">Edition, Livre</option>
                <option value="enseignement">Enseignement</option>
                <option value="environnement">Environnement</option>
                <option value="">------------------F----------------------</option>
                <option value="ferroviaire">Ferroviaire</option>
                <option value="foires">Foires, Salons Et Congrès</option>
                <option value="fonctionPublique">Fonction Publique</option>
                <option value="">------------------H----------------------</option>
                <option value="hotellerie">Hôtellerie, Restauration</option>
                <option value="humanitaire">Humanitaire</option>
                <option value="">------------------I----------------------</option>
                <option value="immobilier">Immobilier</option>
                <option value="industrie">Industrie</option>
                <option value="informatique">Informatique, Télécoms, Web</option>
                <option value="">------------------J----------------------</option>
                <option value="journalisme">Journalisme</option>
                <option value="">------------------L----------------------</option>
                <option value="langues">Langues</option>
                <option value="">------------------M----------------------</option>
                <option value="marketing">Marketing, Publicité</option>
                <option value="medical">Médical</option>
                <option value="mode">Mode-Textile</option>
                <option value="">------------------P----------------------</option>
                <option value="paramedical">Paramédical</option>
                <option value="proprete">Propreté Et Services Associés</option>
                <option value="psychologie">Psychologie</option>
                <option value="">------------------R----------------------</option>
                <option value="ressourcesHumaines">Ressources Humaines</option>
                <option value="">------------------S----------------------</option>
                <option value="siencesHumaines">Sciences Humaines Et Sociales</option>
                <option value="secretariat">Secrétariat</option>
                <option value="social">Social</option>
                <option value="spectacle">Spectacle - Métiers De La Scène</option>
                <option value="sport">Sport</option>
                <option value="">------------------T----------------------</option>
                <option value="tourisme">Tourisme</option>
                <option value="transport">Transport-Logistique</option>
            </select>

            <?php $form->label('niveau_select','Choisir un niveau : ') ?>
                <select name="niveau_select" id="niveau_select">
                    <option value="">-niveau-</option>
                    <option value="aucun">Aucun</option>
                    <option value="cap">CAP, BEP</option>
                    <option value="bac">Baccalauréat</option>
                    <option value="bac2">DEUG, BTS, DUT, DEUST</option>
                    <option value="bac3">Licence, licence professionnelle</option>
                    <option value="bac4">Maîtrise, master 1</option>
                    <option value="bac5">Master, diplôme d'études approfondies, diplôme d'études supérieures spécialisées, diplôme d'ingénieur</option>
                    <option value="bac8">Doctorat, habilitation à diriger des recherches</option>
                </select>


            <label for="rechercheMetier">Choisir un métier : </label>

            <?php $form->submit('submitted', 'Rechercher'); ?>
        </form>
    </div>







<?php //require_once('Inc/footer.php');


