Examen TP Laravel :

1. Installer composer avec la commande : "composer install"
2. Mettez le à jour avec la commande : "composer update"
3. Renommer le ".env.example" en ".env" (si vous n'avez pas déjà le ".env")
4. Mettez à jour la base de donnée avec la commande : "php artisan migrate"
5. Si la migration n'était pas opérationnel, utiliser ensuite la commande : "php artisan db:seed"
6. Lancer ensuite le serveur avec la commande : "php artisan serve"

7. Dans l'index, pour vous authentifier cliquez sur "login", si vous souhaitez créer un compte pour tester cliquez sur "Register"
8. Dans l'interface admin il suffit de cliquer sur "membre" pour voir tout les comptes utilisateurs conçu et pour le modifier ou supprimer

Pour se connecter en admin et ainsi accéder au CRUD :

Identifiant : dnhalan0101@gmail.com
Pass : 123456789

- Nous avons utilisé BootStrap
- Lorsque qu'un compte utilisateur est crée il reçoit un mail sur son compte
- Nous n'avons pas réussi à trier nos instances
- Nous n'avons pas eu le temps de faire de relation OneToMany ou ManyToMany
- Nous n'avons pas réussi à faire fonctionner notre Cloudinary mais nous l'avons configurer
