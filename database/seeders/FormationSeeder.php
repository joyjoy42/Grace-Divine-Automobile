<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formations = [
            [
                'title' => 'Diagnostic Automobile Avancé',
                'description' => 'Maîtrisez les outils de diagnostic modernes et l\'analyse des codes d\'erreur pour toutes les marques de véhicules.',
                'duration' => '4 semaines',
                'price' => 250000,
                'image' => 'diag.jpg'
            ],
            [
                'title' => 'Mécanique Moteur Essence & Diesel',
                'description' => 'Réparation complète des moteurs, de la culasse au bas moteur. Inclus : calage de distribution et injection.',
                'duration' => '6 semaines',
                'price' => 350000,
                'image' => 'engine.jpg'
            ],
            [
                'title' => 'Électricité et Électronique Auto',
                'description' => 'Comprendre les circuits électriques, le multiplexage et les capteurs embarqués.',
                'duration' => '3 semaines',
                'price' => 180000,
                'image' => 'elec.jpg'
            ],
            [
                'title' => 'Maintenance Préventive et Vidange',
                'description' => 'Les bases de l\'entretien régulier pour prolonger la durée de vie des véhicules.',
                'duration' => '1 semaine',
                'price' => 75000,
                'image' => 'oil.jpg'
            ],
            [
                'title' => 'Systèmes de Freinage et Sécurité',
                'description' => 'Installation et maintenance des systèmes ABS, ESP et freinage conventionnel.',
                'duration' => '2 semaines',
                'price' => 120000,
                'image' => 'brakes.jpg'
            ],
            [
                'title' => 'Climatisation Automobile',
                'description' => 'Recharge, détection de fuites et réparation des circuits de climatisation.',
                'duration' => '2 semaines',
                'price' => 150000,
                'image' => 'ac.jpg'
            ],
            [
                'title' => 'Boîtes de Vitesses Automatiques',
                'description' => 'Spécialisation dans l\'entretien et la réparation des transmissions automatiques modernes.',
                'duration' => '4 semaines',
                'price' => 300000,
                'image' => 'gearbox.jpg'
            ],
            [
                'title' => 'Carrosserie et Peinture Expo',
                'description' => 'Techniques de débosselage, préparation de surface et application de peinture haute finition.',
                'duration' => '5 semaines',
                'price' => 280000,
                'image' => 'paint.jpg'
            ],
        ];

        foreach ($formations as $formation) {
            \App\Models\Formation::create($formation);
        }
    }
}
