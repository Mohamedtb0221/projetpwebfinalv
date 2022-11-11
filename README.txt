


-d'abord et avant tout il faut etre connecté a un serveur soit wamp ou xamp

-placer ce dossier 'projetpweb' dans le dossier www si vous utilisez le wamp server sinon dans le dossier
 htdocs pour le xamp server.

-pour l'importation des tables de la base de donnees il faut connecter a phpmyadmin avec un serveur mysql (et pas mariadb)
ensuite créez une database avec le nom 'pweb' et entrer a cette database et cliquez sur importer , selectionnez le fichier
 events.sql que (j'ai envoiyé les fichiers sql dans le dossier de projet !) ensuite executer et refaire l'operation avec le fichier 
inscrits.sql

-pour la configuration des fichiers pour l'operation d'envoi d'un mail c'est comme suit :

   si vous avez un xamp serveur il faut entrer le fichier xamp dans le repertoire C (sauvegerder l'emplacement d'executable sendmail.exe)

   ensuite entrez le dossier sendmail et ouvriez le fichier 
	sendmail.ini et modifier les points suivants :

	  - smtp_server=mail.yourdomain.com => smtp_server=smtp.gmail.com  (ligne 14)

	  - smtp_port=25 => smtp_port=587  (ligne 18) 
 
	  - smtp_ssl=auto  =>  smtp_ssl=tls  (ligne 26)

	remplir ces 3 champ avec ces informations (email pour l'envoi de message)

	  - auth_username = mccontact10@gmail.com  (ligne 46)

	  - auth_password = microclub  (ligne 47)	

	  - force_sender=mccontact10@gmail.com  (ligne 60)

sauvgardez ces changements et fermez le fichier
  
  maintenant entrez le dossier xamp encore fois ensuite le dossier php et ouvrir le fichier php.ini et modifier les points suivants:
	 
	  chercher par la commande ctrl+f pour 'mail function' et etablit ces modification:

		- ajout ; avant les lignes suivants pour les mettres en commentaires : smtp=localhost (ligne 1076)

																    smtp_port=25 (ligne 1078)

																    sendmail_from = (ligne 1082)

		-mettre l'emplacement de l'exetutable ancien a la ligne (1086) comme suit sendmail_path =C:\xamp\sendmail\sendmail.exe

		sauvegardez les changements et redemarrer le serveur .
	
	si vous avez un serveur wamp il faut telecharger le dossier sendmail et le placer dans le dossier wamp64 et faire les meme modification
	
	pour les memes fichiers (y'a une deference dans l'emplacement des fichier donc il faut chercher ).

							### le mail pour verifier que les messages sont envoiyés ###
						  ##  (adresse : mccontact10@gmail.com // mot de passe :microclub) ##		


			###  contactez moi s'il y a une erreur ou une chose innormal car je pense que tout marchent bien ###






	