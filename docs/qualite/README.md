# Dossier Qualite (Mise a jour du 5 mars 2026)

Ce dossier regroupe les preuves pour la soutenance selon les 7 criteres demandes.

## Commandes de demonstration

```bash
composer run test:unit
composer run test:static:all
composer run doctrine:validate
composer run doctrine:doctor:config
composer run test:quality
```

## Couverture des criteres

1. **Tests statiques (PHPStan >= 6)**  
   - 6 scenarios statiques sont automatises dans `composer.json`:
     - `test:static:user`
     - `test:static:team-voter`
     - `test:static:cart-manager`
     - `test:static:feed-assembler`
     - `test:static:profile-provider`
     - `test:static:post-image-uploader`

2. **Tests unitaires (>= 6)**  
   - 13 tests unitaires / 41 assertions.
   - Fichiers:
     - `tests/Unit/Entity/UserTest.php`
     - `tests/Unit/Security/TeamVoterTest.php`
     - `tests/Unit/Service/Shop/CartManagerTest.php`

3. **DoctrineDoctor**  
   - Bundle active en `dev` (`config/bundles.php`).
   - Configuration ajoutee (`config/packages/dev/doctrine_doctor.yaml`).
   - Verification: `composer run doctrine:doctor:config`.

4. **Rapport Avant/Apres**  
   - Voir `docs/qualite/rapport_performance_avant_apres.md`.

5. **Scenario et donnees de test**  
   - Voir `docs/qualite/scenario_et_donnees_test.md`.

6. **Maitrise du sujet / argumentation**  
   - Voir la section "Argumentaire" dans `docs/qualite/scenario_et_donnees_test.md`.

7. **Valeur ajoutee / quantite de travail**  
   - Pipeline qualite complet `test:quality` (unit + static + doctrine + doctrine doctor config).
   - Outillage et documentation de demonstration prete pour la soutenance.
