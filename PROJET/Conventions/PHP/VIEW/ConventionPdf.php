<?php
require "./FPDF/fpdf.php";
require "./QRCode/qrlib.php"; // Bibliotheque qr code
$idStage=$_POST['idStage'];
//$idStage="1";
$stage=StagesManager::findById($idStage);
$stagiaire=StagiairesManager::findById($stage->getIdStagiaire());
$infosSession=StagiaireFormationManager::getListByStagiaire($stagiaire->getIdStagiaire());
$anim=AnimationsManager::getByFormation($infosSession[0]->getIdFormation());
$formateur=UtilisateursManager::findById($anim[0]->getIdUtilisateur());
$tuteur=TuteursManager::findById($stage->getIdTuteur());
$entreprise=EntreprisesManager::findById($tuteur->getIdEntreprise());
$ville=VillesManager::findById($entreprise->getIdVille(),false);
$horaires=ValeursHorairesManager::getListByStage($idStage);
$villeStagiaire=VillesManager::findById($stagiaire->getIdVilleHabitation(),false);
$tablePae=PeriodesStagesManager::getListBySession($infosSession[0]->getIdSessionFormation());

//Récupère le numero de PAE
for($i=0;$i<count($tablePae);$i++)
{
    if($tablePae[$i]->getDateDebutPAE()==$stage->getDateDebut())
    {
        $numPae=$i+1;
    }
}

//Generation du QR code
QRcode :: png ($stagiaire->getNumBenefStagiaire()."|".$infosSession[0]->getNumOffreFormation()."|CONVENTION PAE|".$numPae."|59011|97015200336|335|", 'filename.png'); // crée le fichier
QRcode :: png ('some othertext 1234'); // crée une image de code et la sort directement dans le navigateur

class PDF extends FPDF
{
// En-tête
    function Header()
    {
        $this->SetFont('Arial','B',15);
        //Décalage à droite
        $this->Cell(80);
        $this->Cell(30,10,'Test Entete',1,0,'C');
        $this->Ln(20);
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
            $tabHeures[$i+1]="";  
            $tabHeures[$i+7]="";    
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
$pdf->Image("./filename.png",18,15,25,25);
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
$pdf->Cell(0,5,utf8_decode(" ".formatDate($stagiaire->getDateNaissanceStagiaire())." à ".$stagiaire->getVilleNaissance()),0,1,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,utf8_decode("Inscrit en formation "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,utf8_decode(" ".$infosSession[0]->getLibelleFormation()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Depuis le "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".formatDate($infosSession[0]->getDateDebut())),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode("Domiciliation pour la durée de la période en entreprise"),1,1,"L");
$pdf->SetFont('Arial',"",9);
$pdf->Cell(88,5,utf8_decode("Adresse "),"R",0,"R");
$pdf->Cell(0,5,$stagiaire->getAdresse(),0,1,"L");
$pdf->Cell(88,5," ".utf8_decode("Ville "),"R",0,"R");
$pdf->Cell(0,5,$villeStagiaire->getNomVille(),0,1,"L");
$pdf->Cell(88,5," ".utf8_decode("Code Postal "),"R",0,"R");
$pdf->Cell(0,5,$villeStagiaire->getCodePostal(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Téléphone "),"R",0,"R");
$pdf->Cell(0,5," ".$stagiaire->getTelStagiaire(),0,1,"L");
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
if($dureeJour[1]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[0]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[2]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[1]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[3]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[2]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[4]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[3]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[5]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[4]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[6]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[5]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
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
if($dureeJour[1]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[6]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[2]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[7]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[3]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[8]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[4]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[9]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[5]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[10]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
if($dureeJour[6]!=NULL){$pdf->Cell(20,5,FormatHeure($horaires[11]->getValeurHoraire()),1,0,"C");}else{$pdf->Cell(20,5,"",1,0,"C");}
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


$pdf->Write(5,utf8_decode("     Imposent une habilitation du Stagiaire par l'Entreprise d'accueil "));
 
$habilitation=0;
if($habilitation==1){$pdf->Image("./IMG/caseCocher.png",65,43,3,3);$pdf->Text(65,50,"Precision : ".$stage->getLibelleAttFormReg());}else{$pdf->Image("./IMG/caseVide.png",65,43,3,3);}
$pdf->Text(71,45.5,utf8_decode("OUI"));
if($habilitation==0){$pdf->Image("./IMG/caseCocher.png",130,43,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,43,3,3);}
$pdf->Text(136,45.5,utf8_decode("NON"));
if($habilitation==1){$pdf->Image("./IMG/caseCocher.png",65,63,3,3);$pdf->Text(65,50,"Precision : ".$stage->getLibelleAttFormReg());}else{$pdf->Image("./IMG/caseVide.png",65,63,3,3);}
$pdf->Text(71,65.5,utf8_decode("OUI"));
if($habilitation==0){$pdf->Image("./IMG/caseCocher.png",130,63,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,63,3,3);}
$pdf->Text(136,65.5,utf8_decode("NON"));

$pdf->Ln(20);
$pdf->Image("./IMG/puce.png",12,76.75,1,1);
$pdf->Write(5,utf8_decode("     Comportent des travaux dangereux "));

$tabIdTravauxD=ValeursTravauxDangereuxManager::getListByStage($idStage);

if(count($tabIdTravauxD)>0){$pdf->Image("./IMG/caseCocher.png",65,83,3,3);$pdf->Text(65,50,"Precision : ".$stage->getLibelleAttFormReg());}else{$pdf->Image("./IMG/caseVide.png",65,83,3,3);}
$pdf->Text(71,85.5,utf8_decode("OUI"));
if(count($tabIdTravauxD)==0){$pdf->Image("./IMG/caseCocher.png",130,83,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,83,3,3);}
$pdf->Text(136,85.5,utf8_decode("NON"));


if(in_array(1,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,93,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,93,3,3);}
$pdf->Text(71,95.5,utf8_decode("Agents chimiques et dangereux"));
if(in_array(2,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,93,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,93,3,3);}
$pdf->Text(136,95.5,utf8_decode("Milieu confiné"));
if(in_array(3,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,98,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,98,3,3);}
$pdf->Text(71,100.5,utf8_decode("Agents biologiques"));
if(in_array(4,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,98,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,98,3,3);}
$pdf->Text(136,100.5,utf8_decode("vibrations mécaniques"));
if(in_array(5,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,103,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,103,3,3);}
$pdf->Text(71,105.5,utf8_decode("Rayonnements"));
if(in_array(6,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,103,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,103,3,3);}
$pdf->Text(136,105.5,utf8_decode("Manutention manuelles"));
if(in_array(7,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,108,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,108,3,3);}
$pdf->Text(71,110.5,utf8_decode("Milieu Hyperbare"));
if(in_array(8,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,108,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,108,3,3);}
$pdf->Text(136,110.5,utf8_decode("Risques électriques"));
if(in_array(9,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,113,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,113,3,3);}
$pdf->Text(71,115.5,utf8_decode("Températures extrêmes"));
if(in_array(10,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,113,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,113,3,3);}
$pdf->Text(136,115.5,utf8_decode("Utilisation de machines"));
if(in_array(11,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,118,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,118,3,3);}
$pdf->Text(71,120.5,utf8_decode("Effondrement et ensevelissement"));
if(in_array(12,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,118,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,118,3,3);}
$pdf->Text(136,120.5,utf8_decode("Travaux en hauteur"));
if(in_array(13,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,123,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,123,3,3);}
$pdf->Text(71,125.5,utf8_decode("Appareils sous tension"));
if(in_array(14,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",130,123,3,3);}else{$pdf->Image("./IMG/caseVide.png",130,123,3,3);}
$pdf->Text(136,125.5,utf8_decode("Contact avec des animaux"));
if(in_array(15,$tabIdTravauxD)){$pdf->Image("./IMG/caseCocher.png",65,128,3,3);}else{$pdf->Image("./IMG/caseVide.png",65,128,3,3);}
$pdf->Text(71,130.5,utf8_decode("Travaux avec du verre ou du métal en fusion"));

$pdf->Ln(58);
$pdf->Cell(130,5,utf8_decode("Si le stagiaire est mineur, date de la déclaration de déroger éffectuée par l'entreprise "),"R",0,"R");
$pdf->Cell(130,5,$stage->getDateDeclarationDerog(),0,1,"L");
$pdf->Cell(130,5,utf8_decode("Auprès de l'inspection du travail de "),"R",0,"R"); 
$pdf->Cell(130,5,utf8_decode(" "),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode("Par convention, l'Entreprise d'accueil s'interdit d'affecter le Stagiaire à les activités soumises :"));
$pdf->SetFont('Arial','',9);
$pdf->Ln();
$pdf->Image("./IMG/puce.png",12,154.75,1,1);
$pdf->Write(5,utf8_decode("         à la délivrance d'une habilitation dont l'Afpa n'a pas été préalablement informée "));
$pdf->Ln();
$pdf->Image("./IMG/puce.png",12,159.75,1,1);
$pdf->Write(5,utf8_decode("         à des obligations spéciales de sécurité pour lesquelles le Tuteur affecté au Stagiaire n'a pas une formation,une qualification, "));
$pdf->Write(5,utf8_decode("         une attestion de capacité ou une habilitation à minima équivalente à celle qui devrait être délivrée au Stagiaire."));
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode("Toute activité au contact de l'amiante est interdite."));
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','BI',9);
$pdf->Cell(0,5,utf8_decode("Fait en 3 exemplaires originaux, dans le centre Afpa, à la date de signature par le directeur du centre"),1,1,"C");
$pdf->SetFont('Arial','',9);
$pdf->Ln(15);
$pdf->Cell(47.5,5,utf8_decode("L'AFPA"),"LTR",0,"L");
$pdf->Cell(47.5,5,utf8_decode("LE STAGIAIRE"),"LTR",0,"L");
$pdf->Cell(47.5,5,utf8_decode("L'ENTREPRISE"),"LTR",0,"L");
$pdf->Cell(47.5,5,utf8_decode("LE TUTEUR"),"LTR",1,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",0,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",0,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",0,"L");
$pdf->Cell(47.5,30,utf8_decode(""),"LBR",1,"L");

$pdf->AddPage();
//$pdf->SetMargins(17,10,10);
$pdf->Image("./IMG/logoAfpa.jpg",160,18,26.5,14);
$pdf->Write(5,utf8_decode("AFPA"));
$pdf->Ln();
$pdf->Write(5,utf8_decode("CENTRE DE FORMATION DE DUNKERQUE"));
$pdf->Ln(15);
$pdf->Cell(90,5,utf8_decode("407 Avenue de la Gironde"),0,0,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode(strtoupper($entreprise->getRaisonSociale())),0,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,5,utf8_decode("59640 DUNKERQUE"),0,0,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode(strtoupper($entreprise->getAdresseEnt())),0,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Ln(10);
$pdf->Cell(90,5,utf8_decode("Tel : 03 28 58 86 65"),0,0,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode(strtoupper($ville->getCodePostal()." ".$ville->getNomVille())),0,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(90,5,utf8_decode("Fax : 03 28 58 86 89"),0,1,"L");
$pdf->SetFont('Arial','U',9);
$pdf->Write(5,utf8_decode("www.afpa.fr"));
$pdf->SetFont('Arial','I',9);
$pdf->Ln(10);
$pdf->SetLeftMargin(10);
$pdf->Cell(90,5,utf8_decode("Affaire suivie par : Frédéric DELESCLUSE"),0,0,"L");
$pdf->SetFont('Arial','',9);
setlocale(LC_TIME,"fr_FR","French");
$date=date('d-m-Y');

$date1 = utf8_encode(strftime("%d %B %Y",strtotime($date)));

$pdf->Cell(0,5,utf8_decode("Dunkerque le, ".$date1),0,1,"L");
$pdf->Write(5,utf8_decode("Tél : 03 28 58 86 65"));
$pdf->Ln();
$pdf->Write(5,utf8_decode("Fax : 03 28 58 86 89"));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("OBJET : Conventions de stage en entreprise."));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Madame, Monsieur"));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Je vous prie de bien vouloir trouver ci-joint:"));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("     Une convention pour la période d'application en entreprise, en 3 exemplaires. Vous voudrez bien me retourner 2 des exemplaires, dûment signés et revêtus de votre cachet, avant le début du stage"));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode("     Des feuilles de présence en entreprise à remplir (suivant modèle joint) et à nous retourner "));
$pdf->SetFont('Arial','BI',9);
$pdf->Write(5,utf8_decode("impérativement "));
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode(" chaque vendredi au plus tard le lundi suivant, par fax (03.28.58.86.89) ou par mail (anne.distanti@afpa.fr), afin d'établir la paie du stagiaire."));
$pdf->SetFont('Arial','',9);
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Concernant"));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',9);
$pdf->Write(5,utf8_decode($stagiaire->getNomStagiaire()." ".$stagiaire->getPrenomStagiaire()));
$pdf->SetFont('Arial','',9);
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("qui effectue sa période d'application en entreprise, du ".formatDate($stage->getDateDebut())." au ".formatDate($stage->getDateFin())."."));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("     En lien avec la crise sanitaire, un arrêt de la PAE par l'entreprise est toujours possible en cas de confinement de l'entreprise ou d'accentuation des mesures sanitaires sans que cela ne contrevienne à la convention de stage. Par ailleurs, la mise en oeuvre de période en entreprise à distance reste possible pour les activités compatibles avec cette modalité, sous réserve de l'encadrement effectif des stagiaires et d'équipements adaptés."));
$pdf->Ln(10);
$pdf->Write(5,utf8_decode("Veuillez agréer, Madame, Monsieur, mes salutations les meilleures."));
$pdf->Ln(20);
$pdf->Cell(106,5,utf8_decode(""),0,0,"L");
$pdf->Cell(0,5,utf8_decode("Frédéric DELESCLUSE"),0,1,"L");
$pdf->Cell(106,5,utf8_decode(""),0,0,"L");
$pdf->Cell(0,5,utf8_decode("Manager de Formation"),0,1,"L");

$nomStagiaire=$stagiaire->getNomStagiaire().$stagiaire->getPrenomStagiaire();
$pdf->Output('F','convention'.$stagiaire->getNomStagiaire().$stagiaire->getPrenomStagiaire().'.pdf');
//header("location:./convention".$stagiaire->getNomStagiaire().$stagiaire->getPrenomStagiaire().".pdf");
header("Refresh:1; url=convention".$stagiaire->getNomStagiaire().$stagiaire->getPrenomStagiaire().".pdf");