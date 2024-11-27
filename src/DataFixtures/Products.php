<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\SousCategorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class Products extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat1 = new Categorie();
        $cat1->setNom("Guitares & Basses");
        $cat1->setImage("cat1.webp");
        $manager->persist($cat1);
        
        $cat1_1 = new SousCategorie();
        $cat1_1->setNom("Guitares Electriques");
        $cat1_1->setImage("cat1_1.webp");
        $cat1_1->setCategorie($cat1);
        $manager->persist($cat1_1);

        $pro111 = new Produit();
        $pro111->setNom("Fender AM Perf Tele RW HBST");
        $pro111->setDescription("
            Corps en aulne
            Manche en érable
            Profil du manche: Modern 'C'
            Touche en palissandre
            22 frettes Jumbo
            Largeur au sillet: 42 mm (1,65'')
            Diapason: 648 mm (25,5'')
            2 micros simple bobinage Yosemite Telecaster
            1 réglage de volume
            Circuit de tonalité Greasebucket
            Cordes Fender NPS 009-042
            Couleur: Honey Burst
            Livrée en housse Deluxe
            Fabriquée aux USA
        ");
        $pro111->setPrix(1199);
        $pro111->setImage("pro111.jpg");
        $pro111->setSousCategorie($cat1_1);
        $manager->persist($pro111);

        $pro112 = new Produit();
        $pro112->setNom("Gibson Les Paul Standard 50s GT");
        $pro112->setDescription("
            Corps en acajou
            Table en érable
            Manche en acajou
            Touche en palissandre
            Repères trapézoïdes
            Profil du manche: Vintage 50s
            Filets de corps et de touche couleur crème
            Sillet Graph Tech
            Largeur au sillet: 43 mm
            Diapason: 628 mm
            22 frettes Medium traitées à froid
            1 micro double bobinage Burstbucker #1 (manche)
            1 micro double bobinage Burstbucker #2 (chevalet)
            2 réglages de volume
            2 réglages de tonalité
            Condensateur Orange Drop
            Chevalet Tune-o-matic en aluminium
            Cordier Stop Bar en aluminium
            Couleur: Gold Top
            Livrée en étui
            Fabriquée aux USA
        ");
        $pro112->setPrix(2290);
        $pro112->setImage("pro112.jpg");
        $pro112->setSousCategorie($cat1_1);
        $manager->persist($pro112);

        $pro113 = new Produit();
        $pro113->setNom("Fender 56 Strat NOS FR GH");
        $pro113->setDescription("
            Custom Shop
            Corps léger en frêne
            Manche en érable moucheté AA teinté
            Touche en érable
            Profil du manche: 10/56 'V'
            Rayon de la touche: 241 mm
            21 frettes Medium Jumbo
            Sillet en os
            3 micros simple bobinage Fat 50's
            Câblage moderne Strat
            Mécaniques Vintage
            Pickguard 1 pli 'coquille d'œuf blanc'
            Vibrato US Vintage
            Accastillage doré
            Finition: NOS - New Old Stock
            Couleur: Fiesta Red
            Etui en tweed, câble et certificat d'authenticité incl.
        ");
        $pro113->setPrix(3799);
        $pro113->setImage("pro113.jpg");
        $pro113->setSousCategorie($cat1_1);
        $manager->persist($pro113);

        $pro114 = new Produit();
        $pro114->setNom("Gibson 1958 Mahogany Flying V VOS");
        $pro114->setDescription("
            Custom Shop
            Body: Mahogany
            Neck: Mahogany
            Fretboard: Rosewood
            Neck profile: Authentic chunky 'C'
            12' Radius
            Frets: 22 Authentic medium-jumbo
            Scale: 628 mm
            Fretboard inlays: Pearloid dots
            Pickups: 2 Custombucker alnico III (unpotted)
            Controls: 2 Volume, 1 Tone
            Bridge: ABR-1 with brass saddle and Chevron tailpiece
            Machine heads: Kluson tulips
            Hardware: Gold
            Finish: Walnut
            Includes a case and certificate
            Made in the USA
        ");
        $pro114->setPrix(4990);
        $pro114->setImage("pro114.jpg");
        $pro114->setSousCategorie($cat1_1);
        $manager->persist($pro114);

        $cat1_2 = new SousCategorie();
        $cat1_2->setNom("Gui­tares Clas­siques");
        $cat1_2->setImage("cat1_2.webp");
        $cat1_2->setCategorie($cat1);
        $manager->persist($cat1_2);

        $cat1_3 = new SousCategorie();
        $cat1_3->setNom("Basses Elec­triques");
        $cat1_3->setImage("cat1_3.webp");
        $cat1_3->setCategorie($cat1);
        $manager->persist($cat1_3);

        $cat1_4 = new SousCategorie();
        $cat1_4->setNom("Am­pli­fi­ca­teurs Gui­tares");
        $cat1_4->setImage("cat1_4.webp");
        $cat1_4->setCategorie($cat1);
        $manager->persist($cat1_4);

        $cat1_5 = new SousCategorie();
        $cat1_5->setNom("Am­pli­fi­ca­teurs Basses");
        $cat1_5->setImage("cat1_5.webp");
        $cat1_5->setCategorie($cat1);
        $manager->persist($cat1_5);

        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat2 = new Categorie();
        $cat2->setNom("Bat­te­ries & Per­cus­sions");
        $cat2->setImage("cat2.webp");
        $manager->persist($cat2);


        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat3 = new Categorie();
        $cat3->setNom("Stu­dio & En­re­gis­tre­ment");
        $cat3->setImage("cat3.webp");
        $manager->persist($cat3);


        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat4 = new Categorie();
        $cat4->setNom("So­no­ri­sa­tion");
        $cat4->setImage("cat4.webp");
        $manager->persist($cat4);



        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat5 = new Categorie();
        $cat5->setNom("Pianos & Claviers");
        $cat5->setImage("cat5.webp");
        $manager->persist($cat5);



        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat6 = new Categorie();
        $cat6->setNom("Matériel DJ");
        $cat6->setImage("cat6.webp");
        $manager->persist($cat6);

        
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat7 = new Categorie();
        $cat7->setNom("Logiciels musicaux");
        $cat7->setImage("cat7.webp");
        $manager->persist($cat7);


        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat8 = new Categorie();
        $cat8->setNom("Lumières & Scène");
        $cat8->setImage("cat8.webp");
        $manager->persist($cat8);



        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat9 = new Categorie();
        $cat9->setNom("Microphone");
        $cat9->setImage("cat9.webp");
        $manager->persist($cat9);


        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat10 = new Categorie();
        $cat10->setNom("Instruments à vent");
        $cat10->setImage("cat10.webp");
        $manager->persist($cat10);


        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat11 = new Categorie();
        $cat11->setNom("Instruments traditionnels");
        $cat11->setImage("cat11.webp");
        $manager->persist($cat11);



        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        ####################################################################################################
        $cat12 = new Categorie();
        $cat12->setNom("Câbles & Connectique");
        $cat12->setImage("cat12.webp");
        $manager->persist($cat12);


        $manager->flush();
    }
}
