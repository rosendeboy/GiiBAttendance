<?php

require_once (dirname ( __FILE__ ) . '/../../config.php');

global $DB, $USER, $CFG;

require_login ();

$baseurl = new moodle_url ( '/local/ayudantia/index.php' );
$context = context_system::instance ();
$PAGE->set_context ( $context );
$PAGE->set_url ( $baseurl );
$PAGE->set_pagelayout ( 'standard' );
$PAGE->set_title ( get_string ( 'title', 'local_ayudantia' ));
$PAGE->set_heading ( get_string ( 'title', 'local_ayudantia' ));
$PAGE->navbar->add ( get_string ( 'ayudantia', 'local_ayudantia') );


echo $OUTPUT->header ();
echo $OUTPUT->heading ( 
'<html>
<link REL=StyleSheet href="estilos.css" TYPE="text/css" >
Foro Vistos Chat<br>
En el boton
<br>
<nav id="colorNav">
<ul>
<li class="green">
<a href="#" class="icon-home"></a>
<ul>
<li><iframe width="400" height="400" src="menu.php"></iframe></li>
<!-- More dropdown options -->
</ul>
</li>
<!-- More menu items -->
</ul>
</nav>
</html>' );

echo $OUTPUT->footer ('');
?>