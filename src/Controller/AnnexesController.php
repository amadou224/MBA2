<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\RoyalPalaceAller;
use App\Entity\RoyalPalaceAllerRetour;

class AnnexesController extends AbstractController
{
    /**
     * @Route("/royalpalace", name="royalpalace")
     */
    public function index()
    {
        return $this->render('royalpalace/royalpalace.html.twig', [
            'controller_name' => 'AnnexesController',
        ]);
    }

    /**
     * @Route("/royalpalacereservation", name="royalpalacereservation")
     */
    public function royalpalaceRouteReservation()
    {
        return $this->render('royalpalace/royalpalacereservation.html.twig', [
            'controller_name' => 'AnnexesController',
        ]);
    }

    // CONFIRMATION RESERVATION ALLER ROYAL PALACE   

    /**
     * @Route("/reservationAllerRoyalPalace", name="reservationAllerRoyalPalace")       
     */

    public function ConfirmationAllerRoyalRoute(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(RoyalPalaceAller::class);      
        $royalpalace = $repo->find($request->get('id'));           

     
        return   $this->render('royalpalace/reservationAllerRoyalPalace.html.twig', [
            
            'royalpalace'=>$royalpalace
            
        ]);   
    }

     // CONFIRMATION RESERVATION ALLER RETOUR ROYAL PALACE   

    /**
     * @Route("/reservationAllerRetourRoyalPalace", name="reservationAllerRetourRoyalPalace")       
     */

    public function ConfirmationAllerRetourRoyalRoute(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(RoyalPalaceAllerRetour::class);      
        $royalpalace = $repo->find($request->get('id'));           

     
        return   $this->render('royalpalace/reservationAllerRetourRoyalPalace.html.twig', [
            
            'royalpalace'=>$royalpalace
            
        ]);   
    }

    // CONFIRMATION RESERVATION ROYAL PALACE PRISE EN COMPLE 

    /**
     * @Route("/reservationEffectuee", name="reservationEffectuee")
     */
    public function terminusReservationRoute()
    {

        // fonction gestion de mail ici -->  
    
        return $this->render('royalpalace/reservationEffectuee.html.twig',[

        ]);

    }  


    // FONCTION QUI ENVOIE UNE RESERVATION ALLER SIMPLE  ROYAL PALACE BDD 

    
     /**
     * @Route("/envoieBddRoyalPalaceAller", name="envoieBddRoyalPalaceAller")
     */
    public function envoieBddRoyalPalaceAller(Request $req){                    
        $em = $this->getDoctrine()->getManager();
              $royal_aller =new RoyalPalaceAller();
                     
                  $depart = $req->get('depart_aller');             
                  $destination =$req->get('destination_aller');  
                  $nbrePassager = $req->get('nb_passager_aller');     
                  $email=$req->get('email');             
                  $tel=$req->get('phone');
                  $dateDepart= new \DateTime($req->get('date_depart_aller'));               
                  $heureDeDepart =$req->get('horraire_depart_aller');  // dump($heureDeDepart);die;
               
                      $royal_aller->setDepart($depart);
                      $royal_aller->setDestination($destination);
                      $royal_aller-> setNbreDePassager($nbrePassager);
                      $royal_aller->setEmail($email); 
                      $royal_aller->setTelephone($tel);
                      $royal_aller->setDateDepart($dateDepart);
                      $royal_aller->setHeureDepart($heureDeDepart);
                      
  
                          $em->persist($royal_aller);        
                          $em->flush();   
         
  
          return $this->redirectToRoute('reservationAllerRoyalPalace',['id'=>$royal_aller->getId()]);
      } 
      

   
    // FONCTION QUI ENVOIE UNE RESERVATION ALLER RETOUR ROYAL PALACE BDD 

    
     /**
     * @Route("/envoieBddRoyalPalaceAllerRetour", name="envoieBddRoyalPalaceAllerRetour")
     */
    public function envoieBddRoyalPalaceAllerRetour(Request $req)
    {                    
        $em = $this->getDoctrine()->getManager();
              $royal_aller_retour =new RoyalPalaceAllerRetour();
                     
                  $depart=$req->get('depart');             
                  $destination=$req->get('destinaton');                      
                  $email=$req->get('email');             
                  $tel=$req->get('phone');
                  $nbrePassagerAller=$req->get('nb_passager_1');
                  $nbrePassagerRetour = $req->get('nb_passager_2');
                  $dateDepart= new \DateTime($req->get('date_depart_aller'));  
                  $dateRetour= new \DateTime($req->get('date_retour')); 
                  $heureDepart=$req->get('horaire_depart'); 
                  $heureDeRetour=$req->get('horaire_retour');

                      $royal_aller_retour->setDepart($depart);
                      $royal_aller_retour->setDestination($destination);                    
                      $royal_aller_retour->setEmail($email); 
                      $royal_aller_retour->setTelephone($tel);
                      $royal_aller_retour-> setNbrePassagerAller($nbrePassagerAller);
                      $royal_aller_retour-> setNbrePassagerRetour($nbrePassagerRetour);
                      $royal_aller_retour->setDateDepart($dateDepart);
                      $royal_aller_retour-> setDateRetour($dateRetour);   
                      $royal_aller_retour-> setHoraireDepart($heureDepart);
                      $royal_aller_retour-> setHoraireRetour($heureDeRetour);
                      
  
                          $em->persist($royal_aller_retour);        
                          $em->flush();   
         
  
          return $this->redirectToRoute('reservationAllerRetourRoyalPalace',['id'=>$royal_aller_retour->getId()]);
    } 
      

}
