# Hackers-Poulette

## Objectif

L'objectif principal est de créer un formulaire de contact entièrement fonctionnel en ligne, avec des fonctionnalités telles que la validation côté client, la connexion à une base de données, et la prévention du spam.

## Fonctionnalités 

 **Formulaire de Contact :** Permet aux utilisateurs de soumettre leurs questions et demandes au support.
- **Validation Côté Client :** Utilisation de JavaScript pour une validation instantanée des données du formulaire.
- **Base de Données PDO :** Stockage des soumissions dans une base de données MySQL avec PDO.
- **Prévention du Spam :** Intégration d'un captcha pour éviter les soumissions indésirables.

## Comment Utiliser

### Utilisateur (En Ligne)

1. **Accès à l'Application en Ligne :**
   - Rendez-vous sur [Hackers_Poulette sur GitHub Pages](https://alice-becode.funquality.be/Hackers-Poulette/index.html).

2. **Soumission du Formulaire :**
   Entrez votre nom, prénom, adresse e-mail, sélectionnez un fichier (optionnel), et décrivez votre demande.
   - Utilisez le captcha pour prouver que vous n'êtes pas un robot.
   - Soumettez le formulaire.
   - Recevez une confirmation par e-mail (si toutes les saisies sont valides).

## Comment Utiliser

##  Administrateur (En Ligne)

1. **Accès au Tableau de Bord Admin :**
   - Connectez-vous à l'administration via [lien_admin](https://alice-becode.funquality.be/Hackers-Poulette/dashboard/index.html).

2. **Gestion des Messages :**
   - Visualisez les messages reçus.
   - Gérez les statuts des messages (traités, non traités, réponse, etc.).

### Développement Local

1. **Installation Localement :**
   - Clonez le dépôt : `git clone https://github.com/Ecila83/hackers-poulette.git`
   - Installez les dépendances nécessaires.

2. **Configuration Additionnelle :**
   - Configurez les paramètres locaux tels que la connexion à la base de données.
   - Personnalisez le formulaire en ajoutant des champs ou en modifiant le style avec Tailwind.

3. **Lancement de l'Application en Local :**
   - Démarrez le serveur local .
   - Accédez à l'application via `http://localhost:8000`.


   ### Configuration Additionnelle

- **Email de Confirmation :**
  - Pour recevoir une confirmation par e-mail, configurez les paramètres SMTP dans le fichier approprié.

## Sécurité

- Protégez votre application contre les attaques courantes (CSRF, XSS, injection SQL).
- Assurez-vous que le captcha et la validation côté serveur fonctionnent correctement.

![Form Screenshot](<Capture d'écran 2024-02-16 122330.png>)

![Admin Dashboard](url_vers_dashboard.png)


## collaborateurs

- Alice Marique
- Hanen Wechteti

## Ressources
- [Base de donnée] hackers_poulette.sql
- Message d'erreur
- Class mailer
- Formulaire accessible
- Sémantiquement valide

## Dépendances et Outils

- [Composer](https://getcomposer.org/): Gestionnaire de dépendances PHP utilisé pour installer des packages tels que PHPMailer.

- [Tailwind CSS](https://tailwindcss.com/): Cadre CSS utilisé pour styliser l'interface utilisateur du formulaire.

- [PHPMailer](https://github.com/PHPMailer/PHPMailer): Bibliothèque PHP pour envoyer des e-mails de manière facile et sécurisée.
