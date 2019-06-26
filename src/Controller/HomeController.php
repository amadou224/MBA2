<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;
use App\Entity\Lieux;
use App\Entity\Trajet;
use App\Entity\Reservation;
use App\Entity\DepartDestination;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\LieuxRepository;
use phpDocumentor\Reflection\Types\Integer;
use App\Repository\ReservationRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homeRoute()
    {

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/Administration", name="AdministrationContoller")
     */
    public function Administration(ObjectManager $manager, LieuxRepository $Lieux)
    {
        $Reser = $this->getDoctrine()->getRepository(Reservation::class);
        $Reservation = $Reser->findAll();
        dump($Reservation);

        return $this->render('aeroport/AdministrationAeroport.html.twig', [
            'Reservation' =>  $Reservation,
        ]);
    }
    /**
     * @Route("/horaires23/{id}", name="horairesDynamiques")
     */
    public function horairesdynamique(int $id, Request $Donneformulaire, ObjectManager $manager, LieuxRepository $Lieux): Response
    {
        // $id = $Donneformulaire->get("depart_aller");

        $lieux = $Lieux->find($id);


        return $this->json(["code" => 200, "message" => "voici votre liste heures", "lieux" => $lieux], 200);
    }

    /**
     * @Route("/aeroport", name="aeroport")
     */
    public function aeroportRoute()
    {
        $repositoryLieux = $this->getDoctrine()->getRepository(Lieux::class);
        $em = $this->getDoctrine()->getManager();

        $lieux = $repositoryLieux->findAll();
        $stras = $repositoryLieux->find(78);
        $table = array("ete" => array("05H15", "05H15", "05H15", "05H15", "05H15", "05H15"), "hiver" => array("05H00", "05H00", "05H00", "05H00", "05H00", "05H00"));
        $table1 = array("ete" => array("05H00", "05H00", "05H00", "05H00", "05H00", "05H00"), "hiver" => array("05H35", "05H35"));
        $stras->setHoraires($table);
        $em->persist($stras);
        $em->flush();







        $tableHoraire = array("38" => $table, "39" => $table1);
        dump($tableHoraire);
        return $this->render('aeroport/aeroport.html.twig', [
            'lieux' => $lieux,
            'heures' => $stras,
            'tableheure' => $tableHoraire,
        ]);
    }

    /**
     * @Route("/horairesTarifs", name="horairesTarifs")
     */
    public function aeroportRouteHorairesTarifs()
    {
        return $this->render('aeroport/horairesTarifs.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function Profile()
    {
        return $this->render('profile/profile.html.twig', [
            'user' => $this->getUser(),
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/infoDestination", name="infoDestination")
     */
    public function infoDestination()
    {
        return $this->json(['username' => 'amine']);
    }

    /**
     * @Route("/reservationAller", name="reservationAller")
     */
    public function reservationAller(Request $req, \Swift_Mailer $mailer): Response
    {
        $em = $this->getDoctrine()->getManager();





        $depart_destination = new DepartDestination();
        $reservation = new Reservation();
        $trajet = new Trajet();

        $dep = $req->get('depart_aller');
        $dest = $req->get('destination_aller');
        $repositoryLieux = $this->getDoctrine()->getRepository(Lieux::class);

        $lieuxDep = $repositoryLieux->Trajet_LieuxCourant($dep);
        $lieuxDest = $repositoryLieux->Trajet_LieuxCourant($dest);
        $H = $req->get('exampleRadios');


        $depart = $lieuxDep[0]->getLieux();
        $destination = $lieuxDest[0]->getLieux();
        $nb = $req->get('nb_passager_aller');
        $date_depart = new \DateTime($req->get('date_depart_aller'));
        $horraire_depart = $req->get('horaire_depart_aller');
        $horraire_depart_fixe = $req->get('horaire_depart_aller_fixe');
        $adresse = $req->get('adresse_aller');
        $pdp = $req->get('pdp_aller');
        $cp = $req->get('cp_aller');
        $ville = $req->get('ville_aller');
        $pays = $req->get('pays_aller_simple');

        $depart_destination->setDepart($depart);
        $depart_destination->setDestination($destination);
        dump($H);
        dump($horraire_depart);
        dump($horraire_depart_fixe);

        if ($H == "CheckHeurFixe") {
            $heure = $horraire_depart_fixe;
            $horairType = true;
        } else {
            $heure = $horraire_depart;
            $horairType = false;
        }
        $reservation->setHorairesType($horairType);
        $reservation->setNbPassager($nb);
        $reservation->setDateDepart($date_depart);
        $reservation->setHorraire($heure);
        $reservation->setPointDePrise($pdp);
        $reservation->setUser($this->getUser());
        $reservation->setDepartDestination($depart_destination);
        $reservation->setCodepostal($cp);
        $reservation->setVille($ville);
        $reservation->setPays($pays);
        $reservation->setAdresse($adresse);
        $reservation->setTrajetLieux($lieuxDest[0]);
        $trajet->addReservation($reservation);

        $em->persist($trajet);
        $em->persist($depart_destination);
        $em->persist($reservation);


        $em->flush();

        $NombreHeurDifferance = $reservation->getDateDepart()->diff($reservation->getDateReservation());
        dump($reservation);
        dump($reservation->SuplementHeurdeNuit());
        dump($NombreHeurDifferance);
        dump($reservation->TrajetNormale());
        dump($reservation->SuplementDomicile());
        dump($reservation->SuplementHeurdeReservation());
        dump($reservation->PrixTotal());
        $reservation_Retour = new reservation();
        $prix = $reservation->PrixTotal();
        $prix1 = 0;

        $mail = $reservation->getUser()->getEmail();
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('mbana1gm@gmail.com')
            ->setTo($mail)
            ->setBody(
                $this->renderView(
                    'aeroport/RecapitulatifClient.html.twig',
                    [
                        'Reservation1' => null,
                        'Reservation' => $reservation,
                        'Prix' => $prix,
                        'Prix1' => $prix1,
                    ]
                ),
                'text/html'

            );
        $mailer->send($message);


        return $this->render('home/DetailReservation.html.twig', [
            'user' => $this->getUser(),
            'Reservation' => $reservation,
            'ReservationRetour' => $reservation,
            'Type' => "Allez Simple",
            'Lieux_trajet' => $lieuxDep[0],
        ]);
    }
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(Request $req, \Swift_Mailer $mailer): Response
    {

        $em = $this->getDoctrine()->getManager();

        $dep = $req->get('depart-allerRetour');
        $dest = $req->get('destination-allerRetour');

        $repositoryLieux = $this->getDoctrine()->getRepository(Lieux::class);

        $lieuxDep = $repositoryLieux->Trajet_LieuxCourant($dep);

        $lieuxDest = $repositoryLieux->Trajet_LieuxCourant($dest);

        $HoraireFixeAller = $req->get('exampleRadios');
        $HoraireFixeRetour = $req->get('exampleRadios_AR');
        $HorairePersoAller = $req->get('exampleRadios');
        $HorairePersoRetour = $req->get('exampleRadios_AR');

        if ($HoraireFixeAller == "CheckHeurFixe_AR") {
            $HoraireTypeAller = true;
        } else {

            $HoraireTypeAller = false;
        }

        if ($HoraireFixeRetour == "CheckHeurFixe_AR1") {
            $horairTypeRetour = true;
        } else {

            $horairTypeRetour = false;
        }


        dump($HoraireFixeAller);
        dump($HoraireFixeRetour);
        $nb_aller = $req->get('nb_passager_1');
        $nb_retour = $req->get('nb_passager_2');

        if ($nb_retour == "undefined") {
            $nb_retour = $nb_aller;
        }

        $date_depart = new \DateTime($req->get('date_depart'));
        $date_retour = new \DateTime($req->get('date_retour'));

        $horaire_depart = $req->get('horaire_depart_AR');
        $horaire_retour = $req->get('horaire_retour_AR');
        dump($horaire_depart);
        dump($horaire_retour);
        $pdpAller = $req->get('pdp-allez');
        $pdpRetour = $req->get('pdp-Retour');

        $adresse = $req->get('adresse-Aller');
        $cp = $req->get('cp-Aller');
        $ville = $req->get('ville-Aller');
        $pays = $req->get('pays-Aller');

        $adresse_Retour = $req->get('adresse-Retour');
        $cp_Retour = $req->get('cp-Retour');
        $ville_Retour = $req->get('ville-Retour');
        $pays_Retour = $req->get('pays-Retour');
        $commentair_Retour = $req->get('commentaire');


        $depart_allez = new DepartDestination();
        $reservation_Allez = new Reservation();
        $trajet_Aller = new Trajet();

        $depart_Retour = new DepartDestination();
        $reservation_Retour = new Reservation();
        $trajet_Retour = new Trajet();







        // --------------------------------------------------------aller--------

        $depart_allez->setDepart($lieuxDep[0]->getLieux());
        $depart_allez->setDestination($lieuxDest[0]->getLieux());

        $reservation_Allez->setHorairesType($HoraireTypeAller);
        $reservation_Allez->setNbPassager($nb_aller);
        $reservation_Allez->setDateDepart($date_depart);
        $reservation_Allez->setHorraire($horaire_depart);
        $reservation_Allez->setPointDePrise($pdpAller);
        $reservation_Allez->setUser($this->getUser());
        $reservation_Allez->setDepartDestination($depart_allez);
        $reservation_Allez->setCodepostal($cp);
        $reservation_Allez->setVille($ville);
        $reservation_Allez->setPays($pays);
        $reservation_Allez->setAdresse($adresse);
        $reservation_Allez->setTrajetLieux($lieuxDest[0]);
        $trajet_Aller->addReservation($reservation_Allez);
        dump($reservation_Allez);
        $em->persist($trajet_Aller);
        $em->persist($depart_allez);
        $em->persist($reservation_Allez);
        dump($reservation_Allez->PrixTotal());

        // --------------------------------Retour--------
        $depart_Retour->setDepart($lieuxDest[0]->getLieux());
        $depart_Retour->setDestination($lieuxDep[0]->getLieux());

        $reservation_Retour->setHorairesType($horairTypeRetour);
        $reservation_Retour->setNbPassager($nb_retour);
        $reservation_Retour->setDateDepart($date_retour);
        $reservation_Retour->setHorraire($horaire_retour);
        $reservation_Retour->setPointDePrise($pdpRetour);
        $reservation_Retour->setUser($this->getUser());
        $reservation_Retour->setDepartDestination($depart_Retour);
        $reservation_Retour->setCodepostal($cp_Retour);
        $reservation_Retour->setVille($ville_Retour);
        $reservation_Retour->setPays($pays_Retour);
        $reservation_Retour->setAdresse($adresse_Retour);
        $reservation_Retour->setTrajetLieux($lieuxDep[0]);
        $trajet_Retour->addReservation($reservation_Retour);

        $em->persist($trajet_Retour);
        $em->persist($depart_Retour);
        $em->persist($reservation_Retour);
        dump($reservation_Retour->PrixTotal());
        $prix = $reservation_Allez->PrixTotal();
        $prix1 =  $reservation_Retour->PrixTotal();

        $mail = $reservation_Allez->getUser()->getEmail();
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('mbana1gm@gmail.com')
            ->setTo($mail)
            ->setBody(
                $this->renderView(
                    'aeroport/RecapitulatifClient.html.twig',
                    [
                        'Reservation1' => $reservation_Retour,
                        'Reservation' => $reservation_Allez,
                        'Prix' => $prix,
                        'Prix1' => $prix1,
                    ]
                ),
                'text/html'

            );
        $mailer->send($message);

        $em->flush();
        return $this->render('home/DetailReservation.html.twig', [
            'user' => $this->getUser(),
            'Reservation' => $reservation_Allez,
            'ReservationRetour' => $reservation_Retour,
            'Type' => "Allez retour",
            'Lieux_trajet' => $lieuxDep[0],
        ]);
    }

    /**
     * @Route("/facture", name="Facture")
     */
    public function Factures()
    {
        return $this->render('admistration_reservation_aeroport/Facture.html.twig');
    }
    /**
     * @Route("/payement", name="payement")
     */
    public function PayementStripe()
    {
        return $this->render('Payement/payement.html.twig', [
            'user' => $this->getUser(),
            'controller_name' => 'HomeController',
        ]);
    }
}
