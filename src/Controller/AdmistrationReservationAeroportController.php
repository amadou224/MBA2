<?php

namespace App\Controller;

use App\Entity\Lieux;
use App\Entity\Trajet;
use App\Entity\DepartDestination;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\LieuxRepository;
use phpDocumentor\Reflection\Types\Integer;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ChauffeurRepository;
use App\Repository\VehiculeRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class AdmistrationReservationAeroportController extends AbstractController
{
    /**
     * @Route("/admistration/reservation/aeroport/{id}", name="admistration_reservation_aeroport")
     */
    public function ModifierReservation(Reservation $reservation, ChauffeurRepository $Chauffeur, VehiculeRepository $Vehicule, LieuxRepository $Lieux, Request $Donneformulaire, ObjectManager $manager)
    {
        $lieux = $Lieux->findAll();
        $chauffeur = $Chauffeur->findAll();
        $vehicule = $Vehicule->findAll();
        return $this->render('admistration_reservation_aeroport/index.html.twig', [
            'Reservation' => $reservation,
            'lieux' => $lieux,
            'Chauffeur' => $chauffeur,
            'Vehicule' => $vehicule,
        ]);
    }



    /**
     * @Route("/admistration/reservation/{id}", name="modifie_reservation")
     */
    public function Modification(Reservation $reservation, ReservationRepository $repertoirReserv, \Swift_Mailer $mailer, ChauffeurRepository $Chauffeur, VehiculeRepository $Vehicule, Request $Donneformulaire, ObjectManager $manager, LieuxRepository $lieux)
    {


        dump($reservation);
        $commentaires = $Donneformulaire->get("commentaire_aller");
        $chauffeur = $Chauffeur->find($Donneformulaire->get("Chauffeur"));
        $vehicule = $Vehicule->find($Donneformulaire->get("Vehicule"));
        $trajet = new Trajet();
        $trajet->setChauffeur($chauffeur);
        $trajet->setVehicule($vehicule);

        $reservation->setTrajet($trajet);

        $reservation->setStatu("Confirmer");

        $reservation->setCommentaire($commentaires);
        $manager->persist($reservation);
        $manager->persist($trajet);
        $manager->flush();
        dump($reservation);
        $Res = $repertoirReserv->findAll();

        $mailChoffeur = $trajet->getChauffeur()->getEmail();
        $mail = $reservation->getUser()->getEmail();
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('mbana1gm@gmail.com')
            ->setTo($mail)
            ->setBody(
                $this->renderView(
                    'aeroport/ConfirmationReservation.html.twig',
                    [
                        'Reservation' => $reservation,
                        'Reservation1' => $reservation,
                        'Prix' => 0,
                        'Prix1' => 0,
                    ]
                ),
                'text/html'

            );
        $confiChoffeur = (new \Swift_Message('Hello Email'))
            ->setFrom('mbana1gm@gmail.com')
            ->setTo($mailChoffeur)
            ->setBody(
                $this->renderView(
                    'aeroport/confirmationtrajet.html.twig',
                    [
                        'Reservation' => $reservation,
                        'Reservation1' => $reservation,
                        'Prix' => 0,
                        'Prix1' => 0,
                    ]
                ),
                'text/html'

            );
        $mailer->send($message);
        $mailer->send($confiChoffeur);


        return $this->render('aeroport/AdministrationAeroport.html.twig', [
            'Reservation' =>  $Res,
        ]);
    }

    /**
     * @Route("/admistration/annulation/{id}", name="annulation_reservation")
     */
    public function Annulation(Reservation $reservation, ReservationRepository $repertoirReserv, ChauffeurRepository $Chauffeur, VehiculeRepository $Vehicule, Request $Donneformulaire, ObjectManager $manager, LieuxRepository $lieux)
    {
        $commentaires = $Donneformulaire->get("commentaire_aller");
        $reservation->setStatu("Annuler");
        $manager->persist($reservation);
        $manager->flush($reservation);
        $reservation->setCommentaire($commentaires);
        $Res = $repertoirReserv->findAll();

        return $this->render('aeroport/AdministrationAeroport.html.twig', [
            'Reservation' =>  $Res,
        ]);
    }
    /**
     * @Route("/Facture/{id}", name="facture")
     */
    public function pdf(Reservation $reservation, ReservationRepository $repertoirReserv, ChauffeurRepository $Chauffeur, VehiculeRepository $Vehicule, Request $Donneformulaire, ObjectManager $manager, LieuxRepository $lieux)
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('admistration_reservation_aeroport\Facture.html.twig', [
            'Reservation' => $reservation,
            'Trajet' => $reservation->TrajetNormale(),
            'HorairesALaDemande' => $reservation->horaireFixeAlademande(),
            'PriseenchargeDomicile' => $reservation->SuplementDomicile(),
            'TrajetDeNuit' => $reservation->SuplementHeurdeNuit(),
            'DerniereMinute' => $reservation->SuplementHeurdeReservation(),
            'Total' => $reservation->PrixTotal(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/ficheDeMission/{id}/", name="FicheDeMission")
     */
    public function FicheDeMission(Reservation $reservation, ReservationRepository $repertoirReserv, ChauffeurRepository $Chauffeur, VehiculeRepository $Vehicule, Request $Donneformulaire, ObjectManager $manager, LieuxRepository $lieux)
    {
        $Vehicule = $reservation->getTrajet();
        dump($Vehicule);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $Vehicule = $reservation->getTrajet()->getVehicule()->getTypeVehicule();

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('admistration_reservation_aeroport/FicheDeMission.html.twig', [
            'title' => "Welcome to our PDF Test",
            'Reservation' => $reservation,
            'Trajet' => $reservation->TrajetNormale(),
            'HorairesALaDemande' => $reservation->horaireFixeAlademande(),
            'PriseenchargeDomicile' => $reservation->SuplementDomicile(),
            'TrajetDeNuit' => $reservation->SuplementHeurdeNuit(),
            'Vehicule' => $reservation->getTrajet()->getVehicule()->getTypeVehicule(),
            'Total' => $reservation->PrixTotal(),

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
}
