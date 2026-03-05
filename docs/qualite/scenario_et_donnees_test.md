# Scenario et Donnees de Test

## Scenario principal presente

**Theme:** securite d'acces equipe + gestion panier.

### Etape 1 - Normalisation utilisateur
- Entree: email avec espaces/majuscules, role invalide.
- Attendu: email nettoye en minuscule, role ramene a `PLAYER`.

### Etape 2 - Autorisation equipe
- Entrees:
  - admin (`ROLE_ADMIN`)
  - capitaine de l'equipe
  - utilisateur non capitaine
- Attendu:
  - admin autorise
  - capitaine autorise
  - non-capitaine refuse

### Etape 3 - Cycle panier
- Entrees:
  - panier existant vs panier absent
  - ajout produit avec quantite
  - mise a jour quantite a 0
  - panier `LOCKED`
- Attendu:
  - creation automatique du panier si absent
  - creation de ligne panier a l'ajout
  - suppression de ligne quand quantite = 0
  - exception si panier verrouille

## Donnees de test utilisees

| Objet | Donnee |
|---|---|
| Utilisateur admin | `id=1`, role `ADMIN` |
| Utilisateur capitaine | `id=42`, role `CAPTAIN` |
| Utilisateur membre | `id=200`, role `PLAYER` |
| Equipe test | capitaine = utilisateur `42` |
| Produit test | prix `19.99` |
| Panier test | statut `OPEN` puis `LOCKED` |

## Preuves automatises associees

- `tests/Unit/Entity/UserTest.php`
- `tests/Unit/Security/TeamVoterTest.php`
- `tests/Unit/Service/Shop/CartManagerTest.php`

Execution:

```bash
composer run test:unit
```

## Argumentaire (maitrise du sujet)

1. **Pourquoi ces tests ?**  
   Ils couvrent les regles metier a risque: controle d'acces, integrite des donnees utilisateur, et securisation des transitions panier.

2. **Pourquoi PHPStan + PHPUnit + Doctrine ?**  
   - PHPUnit valide le comportement runtime.
   - PHPStan valide la robustesse structurelle (types, contrats).
   - Doctrine/DoctrineDoctor valide la couche ORM et la qualite d'execution DB.

3. **Choix defendu**  
   Pipeline unique `test:quality` pour rendre la qualite reproductible en une commande, utile pour l'evaluation et la CI.
