<?php
/*
 * Theme Name: 960Base Theme SIMPLE
 * Theme URI: http://960basetheme.kiuz.it
 * Description: Wordpress theme based on 960 Grid System
 * Author: Domenico Monaco
 * Author URI: http://www.kiuz.it
 * Version: 1.0.0 BETA
 */
?>

<?php get_header(); ?>
<p>
<h2>Pagina o contenuto inesistente!</h2>
Spiacenti, ma stai cercando qualcosa che non è raggiungibile attraverso il presente indirizzo, potrebbe essere stato eliminato o spostato in una nuova locazione.
<br />
Per maggiori informazioni contatta l'amministratore e/o prova ad utilizzare gli strumenti messi a disposizione in questa pagina. 
<br />
<br />
Scusateci per l'incoveniente.
<br /><br />
<h3>Prova ad effettuare una ricaerca:</h3>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/"><input type="text" name="s" id="s" value="Inserisci testo" onfocus="document.forms['searchform'].s.value='';" onblur="if (document.forms['searchform'].s.value == '') document.forms['searchform'].s.value='Search Keywords';" /><input type="submit" id="searchsubmit" value="Cerca" /></form><br />
<h3>Cerca tra le categorie:</h3>
<?php list_cats(); ?>
</p>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
