<?php
/**
 * Module:      en-US_admin.lang.php
 * Description: This module houses all display text in the English language.
 *
 */

/*

--------------------------------------------------------------------------------------------------

To translate this file, first make a copy of it and rename it with the language name in the title.

==============================

Use ISO 169-2 Standards for and WWW3C Language Tag Standards for naming of language files. Use the
ALPHA-2 letter code whenever possible.

ISO 169-2:
https://www.loc.gov/standards/iso639-2/php/code_list.php

WWW3 Language Tags:
https://www.w3.org/International/articles/language-tags/

WWW3 Choosing a Language Tag:
https://www.w3.org/International/questions/qa-choosing-language-tags

According to the WWW3:

"Always bear in mind that the golden rule is to keep your language tag as short as possible. Only
add further subtags to your language tag *if they are needed to distinguish the language from
something else in the context where your content is used...*

"Unless you specifically need to highlight that you are talking about Italian as spoken in Italy
you should use it for Italian, and not it-IT. The same goes for any other possible combination."

To determine a subtag, go to the IANA Language Subtag Registry:
http://www.iana.org/assignments/language-subtag-registry

==============================

Items that need translation into other languages are housed here in PHP variables - each start with
a dollar sign ($). The words, phrases, etc. (called strings) that need to be translated are housed
between double-quotes ("). Please, ONLY alter the text between the double quotes!

For example, a translated PHP variable would look like this:

English (US) before translation:
$label_volunteer_info = "Volunteer Info";

Spanish translated:
$label_volunteer_info = "Información de Voluntarios";

Portuguese translated:
$label_volunteer_info = "Informações Voluntário";

==============================

Please note: the strings that need to be translated MAY contain HTML code. Please leave this code
intact! For example:

English (US):
$beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and select <em>Upload</em>.";

Spanish:
$beerxml_text_008 = "Buscar su archivo compatible BeerXML en su disco duro y haga clic en <em>Cargar</em>.";

Note that the <em>...</em> tags were not altered. Just the word "Upload" to "Cargar" betewen those tags.

==============================

*/

// -------------------- Archive --------------------

$archive_text_000 = "Debido a limitaciones de almacenamiento en el servidor, no está disponible el archivado de datos de cuentas alojadas en BCOE&amp;M. Para utilizar el software para una nuevo concurso o simplemente limpiar la base de datos, usa los botones a continuación.";
$archive_text_001 = "Los datos de categoría personalizada, tipo de estilo personalizado, ubicación de entrega, ubicación de jueces y patrocinadores <strong class=\"text-success\">no se eliminarán</strong>. Los administradores deberán actualizar estos datos para futuros concursos.";
$archive_text_002 = "Opción 1";
$archive_text_003 = "¿Estás seguro de que deseas borrar los datos del concurso actual? Esto NO se puede deshacer.";
$archive_text_004 = "Borrar Todos los Datos de Participantes, Inscripciones, Jueces y Puntuaciones";
$archive_text_005 = "Esta opción borra todas las cuentas de participantes no administradores, así como todos los datos de inscripciones, jueces y puntuaciones, incluyendo todas las hojas de puntuación subidas. Proporciona un nuevo inicio.";
$archive_text_006 = "Opción 2";
$archive_text_007 = "¿Estás seguro de que deseas borrar los datos del concurso actual? Esto NO se puede deshacer.";
$archive_text_008 = "Borrar Solo los Datos de Inscripciones, Jueces y Puntuaciones";
$archive_text_009 = "Esta opción borra todos los datos de inscripciones, jueces y puntuaciones, incluyendo todas las hojas de puntuación subidas, pero conserva los datos de los participantes. Útil si no quieres que los participantes creen nuevos perfiles de cuenta.";
$archive_text_010 = "Para archivar los datos actualmente almacenados en la base de datos, proporciona un nombre para el archivo. Se sugiere elegir un nombre único para este conjunto de datos. Por ejemplo, si realizas el concurso anualmente, el nombre podría ser el año en que se realizó. Si organizas concursos sucesivas en una sola instalación, el nombre del concurso y el año podrían servir como nombre.";
$archive_text_011 = "Solo caracteres alfanuméricos, los demás serán omitidos.";
$archive_text_012 = "Marca la información que te gustaría conservar para usar en futuros concursos.";
$archive_text_013 = "¿Estás seguro de que deseas archivar los datos actuales?";
$archive_text_014 = "Luego, elige qué datos te gustaría conservar.";
$archive_text_015 = "Esto eliminará el archivo llamado";
$archive_text_016 = "Todos los registros asociados también serán eliminados.";

/*
 * --------------------- v 2.2.0 -----------------------
 */
$archive_text_017 = "Edita tu información de archivo con precaución. Cambiar cualquiera de los siguientes elementos puede provocar un comportamiento inesperado al intentar acceder a los datos archivados.";
$archive_text_018 = "Los archivos se moverán a una subcarpeta con el mismo nombre de tu archivo en el directorio user_docs.";
$archive_text_019 = "Lista de ganadores archivada disponible para visualización pública.";
$archive_text_020 = "Generalmente, esto solo debe cambiarse si la lista de ganadores de este archivo se muestra incorrectamente.";
$archive_text_021 = "Las hojas de puntuación en PDF se han guardado para este archivo. Este es el formato de nombre de archivo utilizado por el sistema al acceder a ellas.";
$archive_text_022 = "Deshabilitado. No existen datos de resultados para este archivo.";
$archive_text_023 = "No se ha especificado un conjunto de estilos. Los datos archivados de inscripciones, puntuaciones y cajas pueden no mostrarse correctamente.";

$label_uploaded_scoresheets = "Hojas de Puntuación Subidas (Archivos PDF)";
$label_admin_comp_type = "Tipo de Concurso";
$label_admin_styleset = "Conjunto de Estilos";
$label_admin_winner_display = "Visualización de Ganadores";
$label_admin_enable = "Habilitar";
$label_admin_disable = "Deshabilitar";
$label_admin_winner_dist = "Método de Distribución de Ganadores";
$label_admin_archive = "Archivo";
$label_admin_scoresheet_names = "Nombres de Archivos de Hojas de Puntuación";
$label_six_char_judging = "Número de Evaluación de 6 Caracteres";
$label_six_digit_entry = "Número de Inscripción de 6 Dígitos";
$label_not_archived = "No Archivado";


// -------------------- Barcode Check-In --------------------



// -------------------- Navigation --------------------

?>