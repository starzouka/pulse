# Actions Manuelles Restantes

## 1) Activer `ext-zip` en local (obligatoire)

Pendant l'installation, Composer a ete lance avec `--ignore-platform-req=ext-zip` car l'extension ZIP n'etait pas active.

Actions:
1. Ouvrir le `php.ini` utilise par le CLI (`php --ini`).
2. Decommenter/ajouter `extension=zip`.
3. Redemarrer le service PHP/Apache.
4. Verifier avec:
   ```bash
   php -m | findstr /i zip
   ```

## 2) Montrer DoctrineDoctor aux profs (interface)

1. Lancer l'application en environnement `dev`.
2. Ouvrir une page de l'app dans le navigateur.
3. Ouvrir la barre Symfony Web Profiler.
4. Cliquer le panel **Doctrine Doctor**.
5. Montrer:
   - liste des issues detectees (ou absence d'issues)
   - suggestions d'optimisation
   - traces/backtraces quand disponibles.

## 3) Commande unique de verification avant demo

```bash
composer run test:quality
```

Si cette commande passe, le package de qualite est pret pour la soutenance.
