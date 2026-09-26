<?php

namespace App\DataFixtures;

use App\Entity\Region;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RegionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Regions = ['Auvergne-Rhône-Alpes','Bourgogne-Franche-Comté','Bretagne','Centre-Val de Loire',
            'Corse','Grand Est','Hauts de France','île de France','Normandie','Nouvelle-Aquitaine',
            'Occitanie','Pays de la Loire','Provence-Alpes-Côte d\'Azur','Guadeloupe','Martinique',
            'Guyane','La Réunion','Mayotte'];

        foreach ($Regions as $valeur){
            $region = new Region();
            $region->setName($valeur);
            $manager->persist($region);
        }

        $manager->flush();
    }
}
