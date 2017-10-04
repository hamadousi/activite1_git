<?php
    // Tentative de connexion
    $ssl = true;
    $port = "imap";
    $imapLink = imap_open("{imap.mail.yahoo.com:993/imap/ssl}INBOX","adresse@yahoo.com","password");
     
    // Test sur le retour de la fonction imap_open()
    if(!$imapLink) // Échec
    {
        echo "La connexion a échoué.";
    }
    else // Connexion établie
    {
        echo "Connexion établie.";

        // On utilise imap_close() pour fermer la connexion avec en paramètre la ressource retournée par imap_open()
        $imapClose = imap_close($imapLink);
        
        if(!$imapClose) // Échec
        {
            echo "La fermeture a échoué.";
        }
        else
        {
            echo "Fermeture de la connexion réussie.";
        }
    }    
?>