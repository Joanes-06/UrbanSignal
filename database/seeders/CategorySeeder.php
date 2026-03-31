<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [

            // ─────────────────────────────────────
            // Urgence
            // ─────────────────────────────────────
            [
                'name'        => 'Accident de circulation',
                'slug'        => 'accident-de-circulation',
                'description' => 'Accident impliquant des véhicules ou des personnes sur la voie publique',
                'icon'        => 'accident',
                'color'       => '#DC2626',
            ],
            [
                'name'        => 'Incendie',
                'slug'        => 'incendie',
                'description' => 'Incendie déclaré (maison, marché, véhicule)',
                'icon'        => 'fire',
                'color'       => '#EF4444',
            ],
            [
                'name'        => 'Fil électrique dangereux',
                'slug'        => 'fil-electrique-dangereux',
                'description' => 'Fil électrique à terre ou poteau électrique en danger',
                'icon'        => 'electric',
                'color'       => '#F97316',
            ],
            [
                'name'        => 'Fuite de gaz',
                'slug'        => 'fuite-de-gaz',
                'description' => 'Fuite de gaz détectée sur la voie publique ou à proximité',
                'icon'        => 'gas',
                'color'       => '#EF4444',
            ],
            [
                'name'        => 'Effondrement',
                'slug'        => 'effondrement',
                'description' => 'Effondrement d\'une route, d\'un pont ou d\'un bâtiment',
                'icon'        => 'collapse',
                'color'       => '#991B1B',
            ],
            [
                'name'        => 'Inondation bloquant la route',
                'slug'        => 'inondation-bloquant-la-route',
                'description' => 'Route rendue impraticable suite à une inondation',
                'icon'        => 'flood',
                'color'       => '#2563EB',
            ],
            [
                'name'        => 'Arbre tombé ou glissement de terrain',
                'slug'        => 'arbre-tombe-glissement',
                'description' => 'Arbre tombé sur la route ou glissement de terrain bloquant la voie',
                'icon'        => 'landslide',
                'color'       => '#65A30D',
            ],
            [
                'name'        => 'Sirène d\'alerte en panne',
                'slug'        => 'sirene-alerte-en-panne',
                'description' => 'Dispositif d\'alerte public défaillant ou silencieux',
                'icon'        => 'siren',
                'color'       => '#DC2626',
            ],

            // ─────────────────────────────────────
            // Voirie (Routes & Trottoirs)
            // ─────────────────────────────────────
            [
                'name'        => 'Nid-de-poule',
                'slug'        => 'nid-de-poule',
                'description' => 'Gros trou ou cavité dans la chaussée pouvant endommager les véhicules',
                'icon'        => 'hole',
                'color'       => '#C96B35',
            ],
            [
                'name'        => 'Route dégradée ou fissurée',
                'slug'        => 'route-degradee',
                'description' => 'Route en mauvais état général : fissures, affaissements, ornières',
                'icon'        => 'broken-road',
                'color'       => '#92400E',
            ],
            [
                'name'        => 'Trottoir cassé ou impraticable',
                'slug'        => 'trottoir-casse',
                'description' => 'Trottoir dégradé rendant la marche dangereuse pour les piétons',
                'icon'        => 'sidewalk',
                'color'       => '#78716C',
            ],
            [
                'name'        => 'Chantier mal signalé ou abandonné',
                'slug'        => 'chantier-mal-signale',
                'description' => 'Travaux sans signalisation adéquate ou chantier laissé à l\'abandon',
                'icon'        => 'construction',
                'color'       => '#D97706',
            ],
            [
                'name'        => 'Matériaux gênants sur le passage',
                'slug'        => 'materiaux-genant',
                'description' => 'Gravats, sable ou matériaux de construction obstruant la voie',
                'icon'        => 'debris',
                'color'       => '#A8A29E',
            ],

            // ─────────────────────────────────────
            // Éclairage
            // ─────────────────────────────────────
            [
                'name'        => 'Quartier ou rue dans le noir',
                'slug'        => 'quartier-sans-eclairage',
                'description' => 'Absence totale d\'éclairage public dans une zone entière',
                'icon'        => 'light-off',
                'color'       => '#1E293B',
            ],
            [
                'name'        => 'Lampadaire en panne',
                'slug'        => 'lampadaire-en-panne',
                'description' => 'Un ou plusieurs lampadaires éteints sur la voie publique',
                'icon'        => 'streetlight',
                'color'       => '#475569',
            ],
            [
                'name'        => 'Lampadaire qui clignote',
                'slug'        => 'lampadaire-clignotant',
                'description' => 'Lampadaire instable ou clignotant créant une gêne',
                'icon'        => 'light-flicker',
                'color'       => '#EAB308',
            ],
            [
                'name'        => 'Éclairage allumé en plein jour',
                'slug'        => 'eclairage-jour',
                'description' => 'Lampadaires restant allumés en journée, gaspillage d\'énergie',
                'icon'        => 'light-day',
                'color'       => '#F59E0B',
            ],
            [
                'name'        => 'Éclairage décoratif éteint',
                'slug'        => 'eclairage-decoratif-eteint',
                'description' => 'Éclairage festif ou décoratif non fonctionnel',
                'icon'        => 'light-deco',
                'color'       => '#C084FC',
            ],

            // ─────────────────────────────────────
            // Eau & Égouts
            // ─────────────────────────────────────
            [
                'name'        => 'Coupure d\'eau ou baisse de pression',
                'slug'        => 'coupure-eau',
                'description' => 'Absence ou insuffisance d\'eau courante dans un quartier',
                'icon'        => 'water-cut',
                'color'       => '#0EA5E9',
            ],
            [
                'name'        => 'Fuite d\'eau sur la voie publique',
                'slug'        => 'fuite-eau',
                'description' => 'Conduite ou robinet qui fuit sur la voie publique',
                'icon'        => 'water-leak',
                'color'       => '#38BDF8',
            ],
            [
                'name'        => 'Eau de couleur anormale',
                'slug'        => 'eau-anormale',
                'description' => 'Eau trouble, marron ou présentant une couleur suspecte',
                'icon'        => 'water-dirty',
                'color'       => '#92400E',
            ],
            [
                'name'        => 'Égout bouché ou débordement',
                'slug'        => 'egout-bouche',
                'description' => 'Réseau d\'égout saturé causant des débordements sur la voie',
                'icon'        => 'sewer',
                'color'       => '#7C3AED',
            ],
            [
                'name'        => 'Plaque d\'égout manquante ou trou ouvert',
                'slug'        => 'plaque-egout-manquante',
                'description' => 'Regard ou plaque d\'égout absent, créant un danger grave',
                'icon'        => 'manhole',
                'color'       => '#DC2626',
            ],
            [
                'name'        => 'Caniveau bouché',
                'slug'        => 'caniveau-bouche',
                'description' => 'Caniveau obstrué par du sable, des feuilles ou des déchets',
                'icon'        => 'drain',
                'color'       => '#6D28D9',
            ],
            [
                'name'        => 'Mauvaise odeur d\'égout',
                'slug'        => 'mauvaise-odeur-egout',
                'description' => 'Émanations persistantes et nauséabondes provenant des égouts',
                'icon'        => 'smell',
                'color'       => '#5B21B6',
            ],

            // ─────────────────────────────────────
            // Déchets & Propreté
            // ─────────────────────────────────────
            [
                'name'        => 'Poubelles non ramassées',
                'slug'        => 'poubelles-non-ramassees',
                'description' => 'Ordures ménagères non collectées depuis plusieurs jours',
                'icon'        => 'trash',
                'color'       => '#84CC16',
            ],
            [
                'name'        => 'Bacs ou corbeilles qui débordent',
                'slug'        => 'bacs-debordants',
                'description' => 'Conteneurs à déchets pleins et débordant sur la voie',
                'icon'        => 'bin-full',
                'color'       => '#65A30D',
            ],
            [
                'name'        => 'Décharge sauvage',
                'slug'        => 'decharge-sauvage',
                'description' => 'Tas d\'ordures ou dépôt illégal de déchets dans un espace public',
                'icon'        => 'dump',
                'color'       => '#4D7C0F',
            ],
            [
                'name'        => 'Espace public sale',
                'slug'        => 'espace-public-sale',
                'description' => 'Marché, place publique ou espace commun en état de saleté',
                'icon'        => 'dirty',
                'color'       => '#713F12',
            ],
            [
                'name'        => 'Déjections ou animaux morts',
                'slug'        => 'dejections-animaux-morts',
                'description' => 'Présence de déjections animales ou de carcasses sur la voie publique',
                'icon'        => 'animal',
                'color'       => '#78350F',
            ],

            // ─────────────────────────────────────
            // Environnement & Nature
            // ─────────────────────────────────────
            [
                'name'        => 'Végétation envahissante',
                'slug'        => 'vegetation-envahissante',
                'description' => 'Herbes hautes ou buissons empiétant sur la voie ou cachant la signalisation',
                'icon'        => 'bush',
                'color'       => '#16A34A',
            ],
            [
                'name'        => 'Branches obstruant la visibilité',
                'slug'        => 'branches-visibilite',
                'description' => 'Branches d\'arbres masquant des panneaux ou la voie publique',
                'icon'        => 'branch',
                'color'       => '#15803D',
            ],
            [
                'name'        => 'Jardin public mal entretenu',
                'slug'        => 'jardin-public-mal-entretenu',
                'description' => 'Espace vert public à l\'abandon ou dégradé',
                'icon'        => 'park',
                'color'       => '#166534',
            ],
            [
                'name'        => 'Pollution de l\'air ou fumée',
                'slug'        => 'pollution-air',
                'description' => 'Fumée excessive ou odeurs polluantes affectant un quartier',
                'icon'        => 'smoke',
                'color'       => '#6B7280',
            ],
            [
                'name'        => 'Animaux errants',
                'slug'        => 'animaux-errants',
                'description' => 'Présence dangereuse d\'animaux en liberté sur la voie publique',
                'icon'        => 'stray-animal',
                'color'       => '#A16207',
            ],

            // ─────────────────────────────────────
            // Circulation & Panneaux
            // ─────────────────────────────────────
            [
                'name'        => 'Feux tricolores en panne',
                'slug'        => 'feux-tricolores-panne',
                'description' => 'Feux de signalisation éteints, cassés ou mal synchronisés',
                'icon'        => 'traffic-light',
                'color'       => '#EF4444',
            ],
            [
                'name'        => 'Panneau de signalisation absent ou endommagé',
                'slug'        => 'panneau-signalisation',
                'description' => 'Panneau routier tordu, arraché, illisible ou manquant',
                'icon'        => 'sign',
                'color'       => '#EAB308',
            ],
            [
                'name'        => 'Nom de rue manquant',
                'slug'        => 'nom-rue-manquant',
                'description' => 'Plaque de nom de rue absente ou illisible',
                'icon'        => 'street-name',
                'color'       => '#F59E0B',
            ],
            [
                'name'        => 'Marquage au sol effacé',
                'slug'        => 'marquage-sol-efface',
                'description' => 'Lignes, passages piétons ou autres marquages au sol invisibles',
                'icon'        => 'road-mark',
                'color'       => '#D97706',
            ],
            [
                'name'        => 'Stationnement gênant ou illégal',
                'slug'        => 'stationnement-genant',
                'description' => 'Véhicule mal garé ou épave obstruant la circulation',
                'icon'        => 'parking',
                'color'       => '#B45309',
            ],
            [
                'name'        => 'Occupation illégale de la voie',
                'slug'        => 'occupation-illegale-voie',
                'description' => 'Trottoir ou route occupé illégalement (commerce, matériaux)',
                'icon'        => 'obstruction',
                'color'       => '#92400E',
            ],

            // ─────────────────────────────────────
            // Équipements & Mobilier urbain
            // ─────────────────────────────────────
            [
                'name'        => 'Banc public cassé',
                'slug'        => 'banc-public-casse',
                'description' => 'Banc public dégradé, dangereux ou inutilisable',
                'icon'        => 'bench',
                'color'       => '#78716C',
            ],
            [
                'name'        => 'Aire de jeux dégradée',
                'slug'        => 'aire-de-jeux-degradee',
                'description' => 'Équipement de jeux pour enfants abîmé ou dangereux',
                'icon'        => 'playground',
                'color'       => '#EC4899',
            ],
            [
                'name'        => 'Arrêt de bus abîmé',
                'slug'        => 'arret-bus-abime',
                'description' => 'Abri ou mobilier d\'arrêt de transport en commun dégradé',
                'icon'        => 'bus-stop',
                'color'       => '#6366F1',
            ],
            [
                'name'        => 'Tags, graffitis ou affiches sauvages',
                'slug'        => 'tags-graffitis',
                'description' => 'Dégradations visuelles sur les murs ou équipements publics',
                'icon'        => 'graffiti',
                'color'       => '#8B5CF6',
            ],
            [
                'name'        => 'Horloge ou fontaine publique en panne',
                'slug'        => 'mobilier-urbain-panne',
                'description' => 'Équipement urbain décoratif ou fonctionnel hors service',
                'icon'        => 'urban-furniture',
                'color'       => '#7C3AED',
            ],

            // ─────────────────────────────────────
            // Nuisances & Services
            // ─────────────────────────────────────
            [
                'name'        => 'Bruit excessif',
                'slug'        => 'bruit-excessif',
                'description' => 'Nuisances sonores persistantes (musique, chantiers, activités)',
                'icon'        => 'noise',
                'color'       => '#F43F5E',
            ],
            [
                'name'        => 'Problème d\'accès aux services publics',
                'slug'        => 'probleme-service-public',
                'description' => 'Difficulté d\'accueil, d\'accès ou de fonctionnement d\'un service municipal',
                'icon'        => 'service',
                'color'       => '#0369A1',
            ],
            [
                'name'        => 'Non-respect des horaires municipaux',
                'slug'        => 'horaires-municipaux',
                'description' => 'Service municipal absent ou non conforme à ses horaires affichés',
                'icon'        => 'clock',
                'color'       => '#0284C7',
            ],

            // ─────────────────────────────────────
            // Autre
            // ─────────────────────────────────────
            [
                'name'        => 'Autre problème',
                'slug'        => 'autre',
                'description' => 'Problème ne correspondant à aucune des catégories ci-dessus',
                'icon'        => 'other',
                'color'       => '#6B7280',
            ],
        ];

        foreach ($categories as $data) {
            Category::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}