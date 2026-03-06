# Sprint 2 - Qualite (Grille S3)

## 1) Tests Statiques (PHPStan)
- Installation:
  - `composer require --dev phpstan/phpstan`
- Lancement:
  - `composer analyse`
  - `vendor/bin/phpstan analyse`
- Cible:
  - `src/` et `tests/` avec `level: 6` via `phpstan.neon.dist`.

## 2) Tests Unitaires
- Service metier choisi:
  - `src/Service/TournamentRequestBusinessRules.php`
- Classe de tests:
  - `tests/Service/TournamentRequestBusinessRulesTest.php`
- Regles metier couvertes:
  - Titre entre 3 et 180 caracteres.
  - Date fin >= date debut.
  - Date limite inscription <= date debut.
  - Nombre max equipes entre 2 et 1024.
  - Format dans `BO1|BO3|BO5`.
  - Mode inscription dans `OPEN|APPROVAL`.
  - Prize pool numerique et >= 0.

## 3) Doctrine Doctor
- Installation:
  - `composer require --dev ahmed-bhs/doctrine-doctor:^1.0 webmozart/assert:^1.11 -W`
- Bundle active en `dev`:
  - `config/bundles.php`
  - `AhmedBhs\\DoctrineDoctor\\DoctrineDoctorBundle::class => ['dev' => true]`
- Verification:
  - Ouvrir une page en `dev`.
  - Ouvrir le profiler Symfony.
  - Onglet `Doctrine Doctor`.

## 4) Scenario de Test et Donnees
- Scenario:
  - Creation d'une demande de tournoi (organizer request).
  - Jeu selectionne, dates saisies, format/mode choisis, prize pool defini.
- Donnees valides:
  - `title=Spring Cup 2026`
  - `start=2026-06-10`
  - `end=2026-06-12`
  - `registration_deadline=2026-06-08`
  - `max_teams=16`
  - `format=BO3`
  - `registration_mode=OPEN`
  - `prize_pool=250.50`
- Donnees invalides:
  - `end < start`
  - `registration_deadline > start`
  - `max_teams=1`
  - `format=BO7`
  - `registration_mode=PRIVATE`
  - `prize_pool=-1`

## 5) Rapport de Performance (Avant/Apres)
Completer les mesures suivantes dans ton docx:

| Indicateur | Avant | Apres | Preuve |
|---|---:|---:|---|
| Nombre de problemes Doctrine Doctor | ... | ... | Capture profiler |
| Temps moyen page d'accueil (ms) | ... | ... | Capture profiler |
| Temps execution fonctionnalite principale (ms) | ... | ... | Capture profiler |
| Utilisation memoire (MB) | ... | ... | Capture profiler |

Commandes utiles:
- `php bin/console cache:clear`
- `php bin/phpunit`
- `composer analyse`
