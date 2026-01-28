# Projet de Blog avec Symfony

## Procédure de récupération du projet

### 1. Vérifier les outils dans votre terminal
- Une version de PHP >= 8.2 ```php -v```
- Composer, le gestionnaire de paquet ```composer -v```
- Symfont CLI, le client de symfony ```symfony -v```
- Symfont CLI, le client de symfony ```node -v```
- Symfont CLI, le client de symfony ```npm -v```

### 2. Clone le repository
- En local sur votre machine
    - ```git clone https://github.com/jc-aziaha/dwwm22-symfony-blog.git```

### 3. Installation des dépendances necessaires
- Installer les dépendances de php
    - ```composer install```
- Installer les dépendances de javascript
    - ```npm install```
    - ```npm run dev``` ou ```npm run watch```

### 4. Création du .env.dev.local
- ```symfony console app:generate-local-secret-key```
- Si vous souhaitez changer de fuseau horaire, 
    - Rajouter au .env.dev.local ```APP_TIME_ZONE="..."```
- Rajouter les autres variables d'environnement en s'inspirant du .env
- Configurer le ````MAILER_DSN=...``` pour l'envoi d'email

### 5. Préparer la base de données
- ```DATABASE_URL=...```
- ```symfony console doctrine:database:create```
- ```symfony console doctrine:migrations:migrate```


### 6. Démarrer le serveur
- ```symfony server:start```
