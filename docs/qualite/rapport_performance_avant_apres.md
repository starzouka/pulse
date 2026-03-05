# Rapport Performance Avant/Apres

Date de reference: **5 mars 2026**

## 1) Mesures Avant/Apres

| Mesure | Avant intervention | Apres intervention |
|---|---:|---:|
| Nombre de fichiers de tests unitaires | 0 | 3 |
| Nombre de tests unitaires | 0 | 13 |
| Nombre d'assertions unitaires | 0 | 41 |
| Nombre de scenarios statiques PHPStan | 0 | 6 |
| Erreurs PHPStan sur le perimetre controle | 4 | 0 |
| Verification Doctrine (mapping/schema) | non industrialisee | OK + script dedie |
| DoctrineDoctor | non installe | installe, configure, actif en `dev` |

## 2) Temps d'execution observes

| Commande | Temps observe |
|---|---:|
| `composer run test:unit` | ~0.05s (PHPUnit) |
| `composer run test:static:all` | ~44.2s |
| `composer run test:quality` | ~58.5s |

## 3) Commandes de preuve

```bash
composer run test:unit
composer run test:static:all
composer run doctrine:validate
composer run doctrine:doctor:config
composer run test:quality
```

## 4) Resultats valides

- PHPUnit: **OK (13 tests, 41 assertions)**
- PHPStan (6 scenarios): **0 erreur**
- Doctrine:
  - `doctrine:mapping:info` -> 27 entites mappees, OK
  - `doctrine:schema:validate` -> mapping OK, schema DB synchronise
- DoctrineDoctor:
  - Extension chargee
  - Configuration resolue et affichee par `debug:config doctrine_doctor`
