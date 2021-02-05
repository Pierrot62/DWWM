<?php
require "./FPDF/fpdf.php";
$idStage=3;
$stage=StagesManager::findById($idStage);
$stagiaire=StagiairesManager::findById($stage->getIdStagiaire());
$infosSession=StagiaireFormationManager::getListByStagiaire($stagiaire->getIdStagiaire());
$anim=AnimationsManager::getByFormation($infosSession[0]->getIdFormation());
$formateur=UtilisateursManager::findById($anim[0]->getIdUtilisateur());
$tuteur=TuteursManager::findById($stage->getIdTuteur());
$entreprise=EntreprisesManager::findById($tuteur->getIdEntreprise());
$ville=VillesManager::findById($entreprise->getIdVille(),false);
$horaires=ValeursHorairesManager::getListByStage($idStage);

class PDF extends FPDF
{
// En-tête
    function Header()
    {
        $this->Cell(30,10,'Test Entete',1,0,'C');
    }

    // Pied de page
    function Footer()
    {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
        // Numéro de page
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}


function formatDate($date)
{    
    $annee = substr($date, 0, 4);
    $mois = substr($date, 5, 2);
    $jour = substr($date, 8, 2);
    return $jour.'/'.$mois.'/'.$annee;
}

function formatHeure($heure)
{    
    if($heure!=NULL)
    {
        $heures = substr($heure, 0, 2);
        $minutes = substr($heure, 3, 2);
        return $heures.'H'.$minutes;
    }
    return $heure;
}

function DiffDate($datea,$dateb)
{
    $date1=new DateTime ($datea);
    $date2= new DateTime ($dateb);
    $diff= date_diff($date1,$date2);
    $diff->format('%R%a days');
    $semaine=round(($diff->days)/7);
    return $semaine;
}

function HoraireSemaine($horaires)
{
    $tabHeures=[];
    $heure=0;
    for ($i=0;$i<6;$i++)
    {
        $hDebJour=strtotime($horaires[$i]->getValeurHoraire());
        $hFinJour=strtotime($horaires[$i+6]->getValeurHoraire());
        $hDebDej=strtotime($horaires[$i+12]->getValeurHoraire());
        $hFinDej=strtotime($horaires[$i+18]->getValeurHoraire());
        $pause=$hFinDej-$hDebDej;
        $heureJour= $hFinJour-$hDebJour-$pause;
        if($heureJour==0)
        {
            $tabHeures[$i+1]=NULL;  
            $tabHeures[$i+7]=NULL;    
        }
        else{
            $tabHeures[$i+1]=date("H:i",$heureJour);
            $tabHeures[$i+7]=date("H:i",$pause);
        }
        $heure+=$heureJour;
    }
    
    $nbHeures=date("d H:i",$heure);
    $valJours=intval(substr($nbHeures,0,2)-1);
    $valHeures=intval(substr($nbHeures,3,5));
    $tabHeures[0]=$valJours*24+$valHeures;
    return $tabHeures;
}
//var_dump(HoraireSemaine($horaires));
// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new FPDF('P','mm','A4');
$pdf->AliasNbPages();

// CONVENTION DE PERIODE EN ENTREPRISE
$pdf->AddPage();
$pdf->SetMargins(10,20,10);
$pdf->Image("./IMG/logoAfpa.jpg",160,25,26.5,14);
$pdf->SetFont('Arial','B',9);
$pdf->Text(55,27,utf8_decode("AFPA"));
$pdf->SetFont('Arial','',9);
$pdf->Text(55,31,utf8_decode("Centre de formation professionnelle des adultes de Dunkerque"),"");
$pdf->SetFont('Arial','B',8);
$pdf->Text(55,35,utf8_decode("www.afpa.fr"),"");
$pdf->Image("./IMG/HDF.jpg",40,45,20,12);
$pdf->Image("./IMG/UEFSE.jpg",65,45,20,15);
$pdf->Image("./IMG/leuropesengage.png",90,45,20,15);
$pdf->Image("./IMG/fondsParitaire.jpg",115,45,20,11);
$pdf->Image("./IMG/UEJeune.jpg",140,45,13,13);
$pdf->Ln(53);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,8,"CONVENTION DE PERIODE EN ENTREPRISE","LTR",1,"C");
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,4,"(Stage en entreprise hors statut scolaire ou universitaire)","LBR",1,"C");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************** Centre de formation  *************************/
$pdf->Cell(0,5,"Entre d'une part, l'Afpa",1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,4,utf8_decode("Domicilié en son établissement de "),"R",0,"R");
$pdf->Cell(0,4,utf8_decode(" Dunkerque"),0,1,"L");
$pdf->Cell(88,4,utf8_decode("Sis au "),"R",0,"R");
$pdf->Cell(0,4,utf8_decode(" 407 avenue de la Gironde, 59640, DUNKERQUE"),0,1,"L");
$pdf->Cell(88,4,utf8_decode("Représenté par "),"R",0,"R");
$pdf->Cell(0,4,utf8_decode(" FLORENCE MARTIN, en sa qualité de Directeur(trice) de centre"),0,1,"L");
$pdf->Ln();

/************* Le stagiaire ****************************/
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,"Le Stagiaire","LTB",0,"L");
$pdf->Cell(0,5,$stagiaire->getNumBenefStagiaire(),"RTB",1,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,5,utf8_decode("Identité "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$stagiaire->getPrenomStagiaire()." ".strtoupper($stagiaire->getNomStagiaire())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Nom d'usage "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($stagiaire->getNomStagiaire())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Né(e) le "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".formatDate($stagiaire->getDateNaissanceStagiaire())),0,1,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,utf8_decode("Inscrit en formation "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,utf8_decode(" ".$infosSession[0]->getLibelleFormation()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Depuis le "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".formatDate($infosSession[0]->getDateDebut())),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode("Domiciliation pour la durée de la période en entreprise"),1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,5,utf8_decode("Adresse "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Ville "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Code Postal "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Téléphone "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Mail "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$stagiaire->getEmailStagiaire()),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************ L'entreprise ***************/
$pdf->Cell(0,5,utf8_decode("Et d'autre part l'entreprise"),1,1,"L");
$pdf->Cell(88,5,utf8_decode("Raison sociale "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5," ".utf8_decode(strtoupper($entreprise->getRaisonSociale())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Forme sociale (Capital) "),"R",0,"R");
$pdf->Cell(0,5," ".$entreprise->getStatutJuridiqueEnt(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Domiciliée à l'effet des présentes en son établissement de "),"R",0,"R");
$pdf->Cell(0,5," ".$ville->getNomVille(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("SIRET "),"R",0,"R");
$pdf->Cell(0,5," ".$entreprise->getNumSiretEnt(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Adresse "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($entreprise->getAdresseEnt())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Ville "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($ville->getNomVille())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Code Postal "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$ville->getCodePostal()),0,1,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,utf8_decode("Représenté par "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($entreprise->getNomRepresentant())." ".strtoupper($entreprise->getPrenomRepresentant())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("En qualité de "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($entreprise->getFctRepresentant())),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************ Le tuteur ***************/
$pdf->Cell(0,5,utf8_decode("Engagé en la personne du Tuteur qu'elle désigne :"),1,1,"L");
$pdf->Cell(88,5,utf8_decode("Identité "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5," ".utf8_decode(strtoupper($tuteur->getPrenomTuteur())." ".strtoupper($tuteur->getNomTuteur())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Nom d'usage "),"R",0,"R");
$pdf->Cell(0,5," ".strtoupper($tuteur->getNomTuteur()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Salarié en qualité de "),"R",0,"R");
$pdf->Cell(0,5," ".strtoupper($tuteur->getFonctionTuteur()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Qualification (éventuellemnt)"),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Téléphone "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$tuteur->getTelTuteur()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Mail "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$tuteur->getEmailTuteur()),0,1,"L");
$pdf->SetFont('Arial','I',8);
$pdf->Write(5,utf8_decode("Etant précisé que le tuteur demeure sous le pouvoir de direction de l'Entreprise d'Accueil, il vise et signe la convention pour preuve qu'il en a connaissance."));
$pdf->AddPage();

/************ Le tuteur ***************/
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode("Etant préalablement rappelé que :"),1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Ln();
$pdf->Write(5,utf8_decode("Organisme de formation et membre du Service Public de l'emploi, l'AFPA accompagne les actifs, demandeurs d'emploi ou salariés tout au long de leur vie professionelle pour favoriser leur accès à un emploi durable à l'issue de formations."));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("La pédagogie de l'AFPA repose à la fois sur l'acquisition de conaissances et essentiellement sur l'apprentissage du geste professionnel, sue des plateaux pédagogiques qui reproduisent au plus près les conditions d'exercices d'une activité, en chantier simulé, ou en situation réelle de travail, notamment dans le cadre de périodes en entreprise prévues par les programmes de formation."));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Dans ce cadre, le Stagiaire a sollicité l'Entreprise d'Accueil pour la réalisationd'une période d'application en milieu professionnel sous la résponsabilité du Tuteur."));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Soucieuse de l'accès à l'emploi et de la qualification des actifs dans son dommaine d'activité, l'Entreprise d'Accueil s'engage à accueillir le Stagiaire, du ".formatDate($stage->getDateDebut())." au ".formatDate($stage->getDateDebut())));
$pdf->Ln(15);
$pdf->Cell(47.5,5,utf8_decode("L'AFPA"),"LTR",0,"L");
$pdf->Cell(47.5,5,utf8_decode("LE STAGIAIRE"),"LTR",0,"L");
$pdf->Cell(47.5,5,utf8_decode("L'ENTREPRISE"),"LTR",0,"L");
$pdf->Cell(47.5,5,utf8_decode("LE TUTEUR"),"LTR",1,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",0,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",0,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",0,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",1,"L");


// DOCUMENT OBJECTIFS ET ACTIVITE PARTICULIERES
$pdf->AddPage();
$pdf->SetMargins(10,20,10);
$pdf->Image("./IMG/logoAfpa.jpg",160,25,26.5,14);
$pdf->SetFont('Arial','B',9);
$pdf->Text(55,27,utf8_decode("AFPA"));
$pdf->SetFont('Arial','',9);
$pdf->Text(55,31,utf8_decode("Centre de formation professionnelle des adultes de Dunkerque"),"");
$pdf->SetFont('Arial','B',8);
$pdf->Text(55,35,utf8_decode("www.afpa.fr"),"");
$pdf->Image("./IMG/HDF.jpg",40,45,20,12);
$pdf->Image("./IMG/UEFSE.jpg",65,45,20,15);
$pdf->Image("./IMG/leuropesengage.png",90,45,20,15);
$pdf->Image("./IMG/fondsParitaire.jpg",115,45,20,11);
$pdf->Image("./IMG/UEJeune.jpg",140,45,13,13);
$pdf->Ln(43);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,8,"OBJECTIFS ET ACTIVITES PARTICULIERES","LTR",1,"C");
$pdf->Cell(0,5,"DE LA PERIODE EN ENTREPRISE","LR",1,"C");
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,4,"(Stage en entreprise hors statut scolaire ou universitaire)","LBR",1,"C");
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,utf8_decode("Les présentes dispositions particulières sont essentielles à la validité
de la convention et à la qualité de la relation Tuteur - Stagiaire"),0,1,"L");
$pdf->Cell(0,5,utf8_decode("Toute modification fait l'objet d'un avenant formel."),0,1,"L");
$pdf->Ln();
/*********** Le stagiaire **********/
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,"Le Stagiaire","LTB",0,"L");
$pdf->Cell(0,5,$stagiaire->getNumBenefStagiaire(),"RTB",1,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,5,utf8_decode("Identité "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$stagiaire->getPrenomStagiaire()." ".strtoupper($stagiaire->getNomStagiaire())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Nom d'usage "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($stagiaire->getNomStagiaire())),0,1,"L");
$pdf->Ln();
/******** Precisions contexte sanitaire *********/

$dureeJour=HoraireSemaine($horaires); //Retourne un tableau avec les durées quotidiennes et hebdomadaire

$pdf->SetFont('Arial','BI',9);
$pdf->Cell(0,5,"PRECISIONS DANS UN CONTEXTE DE CRISE SANITAIRE","LTBR",1,"L");
$pdf->SetFont('Arial','I',9);
$pdf->Ln();
$pdf->Write(5,utf8_decode("Dans le cadre des mesures règlementaires prises pour lutter contre la propagation du virus COVID-19, il est rappele aux parties à la conventions que les conventions de période en entreprise ne sont pas des contrats de travail. Les stagiaires ne font pas partie de la main d'oeuvre de l'entreprise et nepeuvent prendre part à un plan de continuité d'action en l'absence de leur Tuteur."));
$pdf->Ln();
$pdf->Write(5,utf8_decode("Le télétravail n'est plus la norme, mais peut-être une solution à privilégier en cas de circulation active du virus COVID-19. Lorsque le télétravail est privilégié pour la réalisation de la période en entreprise,le centre Afpa s'assure préalablement de la possibilité effective pour le Stagiaire de réaliser le stage à distance dans le respect des objectifs pédagogiques."));
$pdf->Ln();
$pdf->Write(5,utf8_decode("Lorsque l'atteinte des objectifs et la réalisation des activités par le Stagiaire impose sa présence dans les locaux ou sur les sites d'activités de l'Entreprise d'accueil, il appartient à l'Entreprise de fournir au Stagiaire un justificatif de déplacement dans les mêmes conditions que pour le Tuteur salarié"));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode("Article 16 - Organisation de la periode en entreprise"),1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Ln();
$pdf->Write(5,utf8_decode("Le premier jour de présence du (de la) Stagiaire est fixé au : ".formatDate($stage->getDateDebut())));
$pdf->Ln();
$pdf->Write(5,utf8_decode("Le dernier jour de présence du (de la) Stagiaire est fixé au : ".formatDate($stage->getDateFin())));
$pdf->Ln();
$nbSemaines=DiffDate($stage->getDateFin(),$stage->getDateDebut());
$pdf->Write(5,utf8_decode("En application du programme de formation conventionné, la période en entreprise objet de la présente a une durée de ".$nbSemaines." semaines, soit ".($nbSemaines*35)." heures."));
$pdf->Ln();
$pdf->Write(5,utf8_decode("La durée de présence du stagiaire est de : "));

//Coche les cases pour la durée de présence 30h 35h ou autre
if($dureeJour[0]==35){$pdf->Image("./IMG/caseCocher.png",85,210,3,3);}else{$pdf->Image("./IMG/caseVide.png",85,210,3,3);}
$pdf->Text(91,212.5,"35 Heures");
if($dureeJour[0]==30){$pdf->Image("./IMG/caseCocher.png",110,210,3,3);}else{$pdf->Image("./IMG/caseVide.png",110,210,3,3);}
$pdf->Text(116,212.5,"30 Heures");
if($dureeJour[0]<35 && $dureeJour[0]!=30){$pdf->Image("./IMG/caseCocher.png",135,210,3,3);$pdf->Text(141,212.5,"Autre ".$dureeJour[0]."H00");}else{$pdf->Image("./IMG/caseVide.png",135,210,3,3);$pdf->Text(141,212.5,"Autre");}


//Tableau contenant les horaires de stage
$pdf->Ln();
$pdf->Write(5,utf8_decode("Les horaires de présence du stagiaire est de :"));
$pdf->Ln();
$pdf->Cell(50,5,"",0,0,"L");
$pdf->Cell(20,5,"Lundi",1,0,"C");
$pdf->Cell(20,5,"Mardi",1,0,"C");
$pdf->Cell(20,5,"Mercredi",1,0,"C");
$pdf->Cell(20,5,"Jeudi",1,0,"C");
$pdf->Cell(20,5,"Vendredi",1,0,"C");
$pdf->Cell(20,5,"Samedi",1,0,"C");
$pdf->Cell(20,5,"Dimanche",1,1,"C");

$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,utf8_decode("Début de journée"),1,0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,5,FormatHeure($horaires[0]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[1]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[2]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[3]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[4]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[5]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,"","LTR",1,"C");

$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,5,utf8_decode("Modalités"),"TLB",0,"C");
$pdf->SetFont('Arial','I',9);
$pdf->Cell(33,5,utf8_decode("(présence / télétravail)"),"TRB",0,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,utf8_decode("Présence"),"LR",1,"C");

$pdf->Cell(50,5,utf8_decode("Durée de la pause déjeuner"),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[7]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[8]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[9]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[10]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[11]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[12]),1,0,"C");
$pdf->Cell(20,5,"","LR",1,"C");

$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,utf8_decode("Fin de journée"),1,0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,5,FormatHeure($horaires[6]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[7]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[8]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[9]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[10]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,FormatHeure($horaires[11]->getValeurHoraire()),1,0,"C");
$pdf->Cell(20,5,utf8_decode("interdite"),"LR",1,"C");

$pdf->SetFont('Arial','B',9);
$pdf->Cell(17,5,utf8_decode("Modalités"),"TLB",0,"C");
$pdf->SetFont('Arial','I',9);
$pdf->Cell(33,5,utf8_decode("(présence / télétravail)"),"TRB",0,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"",1,0,"C");
$pdf->Cell(20,5,"","LR",1,"C");

$pdf->Cell(50,5,utf8_decode("Durée quotidienne"),1,0,"R");
$pdf->Cell(20,5,FormatHeure($dureeJour[1]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[2]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[3]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[4]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[5]),1,0,"C");
$pdf->Cell(20,5,FormatHeure($dureeJour[6]),1,0,"C");
$pdf->Cell(20,5,utf8_decode("Infraction"),"LR",1,"C");

$pdf->Cell(110,5,"",0,0,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,utf8_decode("Durée hebdomadaire"),1,0,"C");
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,5,$dureeJour[0]."H00",1,0,"C");
$pdf->Cell(20,5,"","LBR",1,"C");

$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,"Article 17 - Moyens d'encadrement Afpa",1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Ln();
$pdf->Write(5,utf8_decode("La période en entreprise de déroule en lien avec l'équipe pédagogique qui comprend un(e) formateur(-trice) référent(e), un(e) assistant(e) technique, ainsi qu'un(e) manageur(e) de formation."));
$pdf->Ln();
$pdf->Cell(88,5,"Formateur ","R",0,"R");
$pdf->Cell(0,5," ".strtoupper($formateur->getNomUtilisateur())." ".strtoupper($formateur->getPrenomUtilisateur()),0,1,"L");
$pdf->Cell(88,5,"Tel ","R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,"Mail ","R",0,"R");
$pdf->Cell(0,5," ".strtoupper($formateur->getEmailUtilisateur()),0,1,"L");
$pdf->Cell(88,5,"Assistant ","R",0,"R");
$pdf->Cell(0,5," ANNE DISTANTI",0,1,"L");
$pdf->Cell(88,5,"Tel ","R",0,"R");
$pdf->Cell(0,5," 03 28 58 86 65",0,1,"L");
$pdf->Cell(88,5,"Mail ","R",0,"R");
$pdf->Cell(0,5," ANNE.DISTANTI@AFPA.FR",0,1,"L");
$pdf->Cell(88,5,"Manager de formation ","R",0,"R");
$pdf->Cell(0,5," FREDERIC DE LECLUSE",0,1,"L");
$pdf->Cell(88,5,"Tel ","R",0,"R");
$pdf->Cell(0,5," 06 08 75 45 93",0,1,"L");
$pdf->Cell(88,5,"Mail ","R",0,"R");
$pdf->Cell(0,5," FREDERIC.DELECLUSE@AFPA.FR",0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,"Article 18 - La Formation",1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Ln();
$pdf->Write(5,utf8_decode("Intitule ".$infosSession[0]->getLibelleFormation()));
$pdf->Write(5,utf8_decode("Les objectifs de la formation sont :"));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("- Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité- Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurité"));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("La finalite de la formation est :"));
$pdf->Ln();

/********************* FINALITE A COMPLETER *********************/
$finalite=1;
if($finalite==1){$pdf->Image("./IMG/caseCocher.png",15,130,3,3);}else{$pdf->Image("./IMG/caseVide.png",15,130,3,3);}
$pdf->Text(21,132.5,utf8_decode("Développement des compétences"));
if($finalite==2){$pdf->Image("./IMG/caseCocher.png",80,130,3,3);}else{$pdf->Image("./IMG/caseVide.png",80,130,3,3);}
$pdf->Text(86,132.5,utf8_decode("Qualification professionnelle"));
if($finalite==3){$pdf->Image("./IMG/caseCocher.png",136,130,3,3);}else{$pdf->Image("./IMG/caseVide.png",136,130,3,3);}
$pdf->Text(142,132.5,utf8_decode("Certificat ou Titre professionnel"));

$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode("Article 19 - Les objectifs et activités à réaliser pendant la période en entreprise"),1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Les objectifs et activités à réaliser pendant la période en entreprise sont définis par le Formateur en lien avec le programme de formation et la progression personnelle du Stagiaire"));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode("Informations portées à l'entreprise par le Formateur :"));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Sur la base de la progression de la formation et des acquis du Stagiaire, les objectifs de la période en entreprise sont les suivants :"));
$pdf->SetFont('Arial','',9);
$pdf->Ln();
$pdf->Write(5,utf8_decode("Le projet couvre obligatoirement les cométences suivantes:"));
$pdf->Ln();
$pdf->Write(5,utf8_decode($infosSession[0]->getObjectifPAE()));

$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode("En considération de quoi l'Entreprise d'Accueil fera réaliser au Stagiaire tout ou partie des activités et tâches suivantes :"));
$pdf->SetFont('Arial','',9);
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Ces activités :"));
$pdf->Ln();
$pdf->Image("./IMG/puce.png",12,36.75,1,1);
$pdf->Write(5,utf8_decode("     Demandent une attestation de formation règlementaire "));

$attestation=$stage->getAttFormReglement();
if($attestation==1){$pdf->Image("./IMG/caseCocher.png",65,43,3,3);$pdf->Text(65,50,"Precision : ".$stage->getLibelleAttFormReg());}else{$pdf->Image("./IMG/caseVide.png",65,43,3,3);}
$pdf->Text(71,45.5,utf8_decode("OUI"));
if($attestation==0){$pdf->Image("./IMG/caseCocher.png",130,43,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,43,3,3);}
$pdf->Text(136,45.5,utf8_decode("NON"));

$pdf->Ln(20);
$pdf->Image("./IMG/puce.png",12,56.75,1,1);
$pdf->Write(5,utf8_decode("     Imposent une habilitation du Stagiaire par l'Entreprise d'accueil "));

$habilitation=0;
if($habilitation==1){$pdf->Image("./IMG/caseCocher.png",65,43,3,3);$pdf->Text(65,50,"Precision : ".$stage->getLibelleAttFormReg());}else{$pdf->Image("./IMG/caseVide.png",65,43,3,3);}
$pdf->Text(71,45.5,utf8_decode("OUI"));
if($habilitation==0){$pdf->Image("./IMG/caseCocher.png",130,43,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,43,3,3);}
$pdf->Text(136,45.5,utf8_decode("NON"));
//Création du PDF
$pdf->Output('F', './convention.pdf');
header("location:convention.pdf");


