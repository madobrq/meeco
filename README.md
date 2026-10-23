# Meeco · Eco Challenge

> Le site qui part de ta vie réelle pour te proposer un premier pas écologique, un défi à la fois.

Projet de groupe réalisé à l'**ISFSC** (Gestion de projet).

## L'équipe et le concept

### Le concept

Meeco est un site web qui propose aux **18-30 ans de Bruxelles** des défis écologiques adaptés à leur quotidien, comme « 3 trajets sans voiture cette semaine ». Chaque défi réussi fait évoluer leur **avatar** et leur **ville virtuelle**.

Pas de conseils identiques pour tous, pas de culpabilisation : on part de la vie réelle de chacun, un geste à la fois.

Principe de fonctionnement : **profil → habitudes et objectifs → défi personnalisé → action → validation → récompense → évolution de l'avatar → nouveau défi.**

Notre personnage principal est Lucie, 21 ans : elle voudrait faire plus pour l'environnement mais ne sait pas par où commencer.

### L'équipe

| Membre | Profil | GitHub |
|---|---|---|
| **Mado Braquenier** | Direction de projet, UX/UI, identité visuelle et contenus | [@madobrq](https://github.com/madobrq) |
| **Iliya Grebenko** | Développement WordPress et qualité (tests, SEO, accessibilité) | [@pseudo](https://github.com/pseudo) |

## Outils utilisés

| Besoin | Outil |
|---|---|
| Site | WordPress (thème enfant), en local avec **Local WP** |
| Code | **Visual Studio Code**, PHP, HTML, CSS, JavaScript |
| Versionnage et collaboration | **Git** et **GitHub** (issues, Projects, pull requests) |
| Design et maquettes | **Figma** (design system, wireframes, moodboard) |
| Polices | Fredoka (titres) et Figtree (texte), via Google Fonts |
| Icônes | Phosphor Icons, graisse Regular |

## Structure du dépôt

Le dépôt est le **thème enfant** lui-même : il se clone directement dans `wp-content/themes/`.

```
meeco/
├── style.css          # En-tête du thème + variables de la charte visuelle
├── functions.php      # Chargement des styles, polices et scripts
├── assets/
│   ├── css/           # Styles des composants
│   ├── js/            # Scripts
│   └── images/        # Logo, illustrations, avatar
├── template-parts/    # Morceaux de pages réutilisables (en-tête, carte défi...)
├── inc/               # Fonctions PHP supplémentaires
├── .gitignore
└── README.md
```

## Charte visuelle (résumé)

- **Fond** crème `#EFE8D6`, **texte** vert nuit `#0A3323`. La couleur de marque (corail `#E89E91` et pétrole `#295562`) ne vit que dans le logo.
- **Titres** en Fredoka, **texte** en Figtree.
- Les valeurs sont centralisées en variables CSS dans `style.css` : on ne code jamais une couleur à la main.

## Conventions de travail

### Branches
- `main` : version stable. **On ne pousse jamais directement dessus.**
- `feature/nom-court` : nouvelle fonctionnalité (ex. `feature/header`)
- `fix/nom-court` : correction (ex. `fix/menu-mobile`)
- `docs/nom-court` : documentation

### Commits
Format : `type: description courte à l'impératif`

| Type | Quand l'utiliser |
|---|---|
| `feat` | nouvelle fonctionnalité |
| `fix` | correction de bug |
| `style` | CSS, mise en forme |
| `docs` | documentation |
| `refactor` | réorganisation du code sans changer le résultat |

Exemple : `feat: ajoute la barre de navigation du bas`

### Pull requests
1. Créer une branche à partir de `main` à jour.
2. Ouvrir la pull request en citant l'issue (`Closes #3`).
3. L'autre membre relit, puis on fusionne dans `main`.
4. Supprimer la branche après la fusion.

### Gestion des tâches
Une issue = une tâche. Elles sont rangées dans le tableau **Projects** en 4 colonnes : `À faire` → `En cours` → `À vérifier` → `Terminé`.

## Répartition des tâches

| Domaine | Responsable |
|---|---|
| Cadrage, planning, coordination, validation des livrables | Mado |
| UX/UI, wireframes, maquettes, design system | Mado |
| Identité visuelle, avatar, récompenses | Mado |
| Contenus : ton, missions, textes d'interface | Mado |
| Thème enfant, comptes et profils | Iliya |
| Moteur de défis, progression, récompenses | Iliya |
| Intégration front-end responsive des maquettes | Iliya |
| SEO, accessibilité, performances | Iliya |
| Tests et recette avant livraison | Iliya |

Le détail des tâches en cours est dans l'onglet **Issues** et **Projects** du dépôt.
