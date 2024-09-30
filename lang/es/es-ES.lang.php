<?php
/**
 * Module:      en-US.lang.php
 * Description: This module houses all display text in the English language.
 * Updated:     September 9, 2023
 *  
 * To translate this file, first make a copy of it and rename it with the 
 * language name in the title.
 * 
 * ==============================
 * 
 * Use ISO 169-2 Standards for and WWW3C Language Tag Standards for naming 
 * of language files. Use the ALPHA-2 letter code whenever possible.
 * 
 * ISO 169-2:
 * @see https://www.loc.gov/standards/iso639-2/php/code_list.php
 * 
 * WWW3 Language Tags:
 * @see https://www.w3.org/International/articles/language-tags/
 * 
 * WWW3 Choosing a Language Tag:
 * @see https://www.w3.org/International/questions/qa-choosing-language-tags
 * 
 * To determine a subtag, go to the IANA Language Subtag Registry:
 * @see http://www.iana.org/assignments/language-subtag-registry
 * 
 * According to the WWW3:
 * 
 * "Always bear in mind that the golden rule is to keep your language tag 
 * as short as possible. Only add further subtags to your language tag if 
 * they are needed to distinguish the language from something else in the 
 * context where your content is used..."
 * 
 * "Unless you specifically need to highlight that you are talking about 
 * Italian as spoken in Italy you should use it 'for Italian, and not 
 * it-IT. The same goes for any other possible combination."
 * 
 * "You should only use a region subtag if it contributes information 
 * needed in a particular context to distinguish this language tag from 
 * another one; otherwise leave it out."
 * 
 * ================ FORMAT =================
 * 
 * Always indicate the primary language subtag first, then a dash (-)
 * and then the region subtag. The region subtag is in all capital letters 
 * or a three digit number.
 * 
 * Examples:
 * en-US
 * English spoken in the United States
 * en is the PRIMARY language subtag
 * US is the REGION subtag (note the capitalization)
 * 
 * es-ES
 * Spanish spoken in Spain
 * 
 * es-419
 * Spanish spoken in Latin America
 * 
 * ========================================
 * 
 * Items that need translation into other languages are housed here in 
 * PHP variables - each start with a dollar sign ($). The words, phrases,
 * etc. (called strings) that need to be translated are housed between 
 * double-quotes ("). Please, ONLY alter the text between the double quotes!
 * 
 * For example, a translated PHP variable would look like this (encoding is utf8mb4; therefore, 
 * accented and other special characters are acceptable):
 * 
 * English (US) before translation:
 * $label_volunteer_info = "Volunteer Información";
 * 
 * Spanish translated:
 * $label_volunteer_info = "Informaciónrmación de Voluntarios";
 * 
 * Portuguese translated:
 * $label_volunteer_info = "Informaciónrmações Voluntário";
 * 
 * ========================================
 * 
 * Please note: the strings that need to be translated MAY contain HTML 
 * code. Please leave this code intact! For example:
 * 
 * English (US):
 * $beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and select <em>Upload</em>.";
 * 
 * Spanish:
 * $beerxml_text_008 = "Buscar su archivo compatible BeerXML en su disco duro y haga clic en <em>Cargar</em>.";
 * 
 * Note that the <em>...</em> tags were not altered. Just the word "Upload" 
 * to "Cargar" between those tags.
 * 
 * ==============================
 * 
 */

/**
 * Set up PHP variables. No translations in this section.
 */

include (INCLUDES.'url_variables.inc.php');

if (isset($entry_open)) $entry_open = $entry_open;
else $entry_open = "";

if (isset($judge_open)) $judge_open = $judge_open;
else $judge_open = "";

if (isset($judge_closed)) $judge_closed = $judge_closed;
else $judge_closed = "";

if (isset($reg_open)) $reg_open = $reg_open;
else $reg_open = "";

if (isset($total_entries)) $total_entries = $total_entries;
else $total_entries = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($row_limits['prefsEntryLimit'])) $row_limits['prefsEntryLimit'] = $row_limits['prefsEntryLimit'];
else $row_limits['prefsEntryLimit'] = "";

if (isset($row_limits['prefsEntryLimitPaid'])) $row_limits['prefsEntryLimitPaid'] = $row_limits['prefsEntryLimitPaid'];
else $row_limits['prefsEntryLimitPaid'] = "";

$php_version = phpversion();

/**
 * ------------------------------------------------------------------------
 * BEGIN TRANSLATIONS BELOW!
 * ------------------------------------------------------------------------
 */

$j_s_text = "";
if (strpos($section, "step") === FALSE) {
	if ((isset($judge_limit)) && (isset($steward_limit))) {
		if (($judge_limit) && (!$steward_limit)) $j_s_text = "Steward"; // missing punctuation intentional
		elseif ((!$judge_limit) && ($steward_limit)) $j_s_text = "Judge"; // missing punctuation intentional
		else $j_s_text = "Judge or steward"; // missing punctuation intentional
	}
}

/**
 * ------------------------------------------------------------------------
 * Global Labels
 * Mostly used for titles and navigation.
 * All labels are capitalized and without punctuation.
 * ------------------------------------------------------------------------
 */
$label_home = "Inicio";
$label_welcome = "Bienvenido";
$label_comps = "Directorio de Concursos";
$label_info = "Información";
$label_volunteers = "Voluntarios";
$label_register = "Registrar";
$label_help = "Ayuda";
$label_print = "Imprimir";
$label_my_account = "Mi Cuenta";
$label_yes = "Sí";
$label_no = "No";
$label_low_none = "Bajo/Ninguno";
$label_low = "Bajo";
$label_med = "Medio";
$label_high = "Alto";
$label_pay = "Pagar Tarifas de Inscripción";
$label_reset_password = "Restablecer Contraseña";
$label_log_in = "Iniciar Sesión";
$label_logged_in = "Sesión Iniciada";
$label_log_out = "Cerrar Sesión";
$label_logged_out = "Sesión Cerrada";
$label_sponsors = "Patrocinadores";
$label_rules = "Reglas";
$label_volunteer_info = "Información de Voluntarios";
$label_reg = $label_register;
$label_judge_reg = "Registro de Jueces";
$label_steward_reg = "Registro de Steward";
$label_past_winners = "Ganadores Anteriores";
$label_contact = "Contacto";
$label_style = "Estilo";
$label_entry = "Inscripción";
$label_add_entry = "Añadir Inscripción";
$label_edit_entry = "Editar Inscripción";
$label_upload = "Subir";
$label_bos = "Mejor de Show";
$label_brewer = "Cervecero";
$label_cobrewer = "Co-Cervecero";
$label_entry_name = "Nombre de la Inscripción";
$label_required_info = "Información Requerida";
$label_character_limit = "límite de caracteres - usa palabras clave y abreviaciones si el espacio es limitado.<br>Caracteres usados: ";
$label_carbonation = "Carbonatación";
$label_sweetness = "Dulzura";
$label_strength = "Fuerza";
$label_color = "Color";
$label_table = "Mesa";
$label_standard = "Estándar";
$label_super = "Súper";
$label_session = "Sesión";
$label_double = "Doble";
$label_blonde = "Rubia";
$label_amber = "Ámbar";
$label_brown = "Marrón";
$label_pale = "Pálido";
$label_dark = "Oscuro";
$label_hydromel = "Hidromiel";
$label_sack = "Saco";
$label_still = "Quieto";
$label_petillant = "Petillant";
$label_sparkling = "Espumoso";
$label_dry = "Seco";
$label_med_dry = "Medio Seco";
$label_med_sweet = "Medio Dulce";
$label_sweet = "Dulce";
$label_brewer_specifics = "Detalles del Cervecero";
$label_general = "General";
$label_amount_brewed = "Cantidad Elaborada";
$label_specific_gravity = "Gravedad Específica";
$label_fermentables = "Fermentables";
$label_malt_extract = "Extracto de Malta";
$label_grain = "Grano";
$label_hops = "Lúpulos";
$label_hop = "Lúpulo";
$label_mash = "Maceración";
$label_steep = "Empinado";
$label_other = "Otro";
$label_weight = "Peso";
$label_use = "Uso";
$label_time = "Tiempo";
$label_first_wort = "Primer Mosto";
$label_boil = "Hervir";
$label_aroma = "Aroma";
$label_dry_hop = "Lúpulo Seco";
$label_type = "Tipo";
$label_bittering = "Amargor";
$label_both = "Ambos";
$label_form = "Forma";
$label_whole = "Entero";
$label_pellets = "Pellets";
$label_plug = "Tapón";
$label_extract = "Extracto";
$label_date = "Fecha";
$label_bottled = "Embotellado";
$label_misc = "Misceláneos";
$label_minutes = "Minutos";
$label_hours = "Horas";
$label_step = "Paso";
$label_temperature = "Temperatura";
$label_water = "Agua";
$label_amount = "Cantidad";
$label_yeast = "Levadura";
$label_name = "Nombre";
$label_manufacturer = "Fabricante";
$label_nutrients = "Nutrientes";
$label_liquid = "Líquido";
$label_ale = "Ale";
$label_lager = "Lager";
$label_wine = "Vino";
$label_champagne = "Champán";
$label_boil = "Hervir";
$label_fermentation = "Fermentación";
$label_finishing = "Acabado";
$label_finings = "Clarificantes";
$label_primary = "Primario";
$label_secondary = "Secundario";
$label_days = "Días";
$label_forced = "CO2 Forzado";
$label_bottle_cond = "Condición de Botella";
$label_volume = "Volumen";
$label_og = "Gravedad Original";
$label_fg = "Gravedad Final";
$label_starter = "Iniciador";
$label_password = "Contraseña";
$label_judging_number = "Número de Cata";
$label_check_in = "Registro de Inscripción";
$label_box_number = "Número de Caja";
$label_first_name = "Nombre";
$label_last_name = "Apellido";
$label_secret_01 = "¿Cuál es tu cerveza favorita de todos los tiempos?";
$label_secret_02 = "¿Cuál fue el nombre de tu primera mascota?";
$label_secret_03 = "¿Cuál era el nombre de la calle donde creciste?";
$label_secret_04 = "¿Cuál fue la mascota de tu escuela secundaria?";
$label_security_answer = "Respuesta a la Pregunta de Seguridad";
$label_security_question = "Pregunta de Seguridad";
$label_judging = "Cata";
$label_judge = "Juez";
$label_steward = "Asistente";
$label_account_info = "Información de la Cuenta";
$label_street_address = "Dirección";
$label_address = "Dirección";
$label_city = "Ciudad";
$label_state_province = "Estado/Provincia";
$label_zip = "Código Postal";
$label_country = "País";
$label_phone = "Teléfono";
$label_phone_primary = "Teléfono Principal";
$label_phone_secondary = "Teléfono Secundario";
$label_drop_off = "Entrega de Inscripción";
$label_drop_offs = "Lugares de Entrega";
$label_club = "Club";
$label_aha_number = "Número de Miembro de la AHA";
$label_org_notes = "Notas para el Organizador";
$label_avail = "Disponibilidad";
$label_location = "Ubicación";
$label_judging_avail = "Disponibilidad para Cata";
$label_stewarding = "Asistente";
$label_stewarding_avail = "Disponibilidad para Asistencia";
$label_bjcp_id = "ID del BJCP";
$label_bjcp_mead = "Juez Certificado de Hidromiel";
$label_bjcp_rank = "Rango del BJCP";
$label_designations = "Designaciones";
$label_judge_sensory = "Juez con Entrenamiento Sensorial";
$label_judge_pro = "Cervecero Profesional";
$label_judge_comps = "Concursos Juzgados";
$label_judge_preferred = "Estilos Preferidos";
$label_judge_non_preferred = "Estilos No Preferidos";
$label_waiver = "Exención";
$label_add_admin = "Añadir Usuario Administrador";
$label_add_account = "Añadir Información de la Cuenta";
$label_edit_account = "Editar Información de la Cuenta";
$label_entries = "Inscripciones";
$label_confirmed = "Confirmado";
$label_paid = "Pagado";
$label_updated = "Actualizado";
$label_mini_bos = "Mini-BOS";
$label_actions = "Acciones";
$label_score = "Puntuación";
$label_winner = "¿Ganador?";
$label_change_email = "Cambiar Correo Electrónico";
$label_change_password = "Cambiar Contraseña";
$label_add_beerXML = "Añadir Inscripción Usando BeerXML";
$label_none_entered = "Ninguno ingresado";
$label_none = "Ninguno";
$label_discount = "Descuento";
$label_subject = "Asunto";
$label_message = "Mensaje";
$label_send_message = "Enviar Mensaje";
$label_email = "Dirección de Correo Electrónico";
$label_account_registration = "Registro de Cuenta";
$label_entry_registration = "Registro de Inscripción";
$label_entry_fees = "Tarifas de Inscripción";
$label_entry_limit = "Límite de Inscripción";
$label_entry_info = "Información de Inscripción";
$label_entry_per_entrant = "Límite por Participante";
$label_categories_accepted = "Categorías Aceptadas";
$label_judging_categories = "Categorías de Cata";
$label_entry_acceptance_rules = "Reglas de Aceptación de Inscripciones";
$label_shipping_info = "Información de Envío";
$label_packing_shipping = "Empaque y Envío";
$label_awards = "Premios";
$label_awards_ceremony = "Ceremonia de Premios";
$label_circuit = "Calificación de Circuito";
$label_hosted = "Edición Organizada";
$label_entry_check_in = "Registro de Inscripción";
$label_cash = "Efectivo";
$label_check = "Cheque";
$label_pay_online = "Pagar en Línea";
$label_cancel = "Cancelar";
$label_understand = "Entiendo";
$label_fee_discount = "Descuento en la Tarifa de Inscripción";
$label_discount_code = "Código de Descuento";
$label_register_judge = "¿Te estás registrando como Participante, Juez o Asistente?";
$label_register_judge_standard = "Registrar como Juez o Asistente (Estándar)";
$label_register_judge_quick = "Registrar como Juez o Asistente (Rápido)";
$label_all_participants = "Todos los Participantes";
$label_open = "Abierto";
$label_closed = "Cerrado";
$label_judging_loc = "Sesiones de Cata";
$label_new = "Nuevo";
$label_old = "Antiguo";
$label_sure = "¿Estás Seguro?";
$label_judges = "Jueces";
$label_stewards = "Asistentes";
$label_staff = "Personal";
$label_category = "Categoría";
$label_delete = "Eliminar";
$label_undone = "Esto No Se Puede Deshacer";
$label_bitterness = "Amargor";
$label_close = "Cerrar";
$label_custom_style = "Estilo Personalizado";
$label_custom_style_types = "Tipos de Estilos Personalizados";
$label_assigned_to_table = "Asignado a Mesa";
$label_organizer = "Organizador";
$label_by_table = "Por Mesa";
$label_by_category = "Por Categoría";
$label_by_subcategory = "Por Sub-Estilo";
$label_by_last_name = "Por Apellido";
$label_by_location = "Por Ubicación de Sesión";
$label_shipping_entries = "Envío de Inscripciones";
$label_no_availability = "No Se Ha Definido Disponibilidad";
$label_error = "Error";
$label_round = "Ronda";
$label_flight = "Vuelo";
$label_rounds = "Rondas";
$label_flights = "Vuelos";
$label_sign_in = "Iniciar Sesión";
$label_signature = "Firma";
$label_assignment = "Asignación";
$label_assignments = "Asignaciones";
$label_letter = "Letra";
$label_re_enter = "Volver a Ingresar";
$label_website = "Sitio Web";
$label_place = "Lugar";
$label_cheers = "Salud";
$label_count = "Cuenta";
$label_total = "Total";
$label_participant = "Participante";
$label_entrant = "Concursante";
$label_received = "Recibido";
$label_please_note = "Por Favor Nota";
$label_pull_order = "Orden de Extracción";
$label_box = "Caja";
$label_sorted = "Ordenado";
$label_subcategory = "Subcategoría";
$label_affixed = "¿Etiqueta Adherida?";
$label_points = "Puntos";
$label_comp_id = "ID del concurso BJCP";
$label_days = "Días";
$label_sessions = "Sesiones";
$label_number = "Número";
$label_more_info = "Más Información";
$label_entry_instructions = "Instrucciones de Inscripción";
$label_commercial_examples = "Ejemplos Comerciales";
$label_users = "Usuarios";
$label_participants = "Participantes";
$label_please_confirm = "Por Favor Confirma";
$label_data_retain = "Datos a Conservar";
$label_comp_portal = "Portal de Concursos";
$label_comp = "Concurso";
$label_continue = "Continuar";
$label_host = "Anfitrión";
$label_closing_soon = "Cierre Próximo";
$label_access = "Acceso";
$label_length = "Duración";
$label_admin = "Administración";
$label_admin_short = "Admin";
$label_admin_dashboard = "Tablero";
$label_admin_judging = $label_judging;
$label_admin_stewarding = "Asistencia";
$label_admin_participants = $label_participants;
$label_admin_entries = $label_entries;
$label_admin_comp_info = "Información de la Concurso";
$label_admin_web_prefs = "Preferencias del Sitio Web";
$label_admin_judge_prefs = "Preferencias de Cata/Organización de la Concurso";
$label_admin_archives = "Archivos";
$label_admin_style = $label_style;
$label_admin_styles = "Estilos";
$label_admin_dropoff = $label_drop_offs;
$label_admin_judging_loc = $label_judging_loc;
$label_admin_contacts = "Contactos";
$label_admin_tables = "Mesas";
$label_admin_scores = "Puntuaciones";
$label_admin_bos = $label_bos;
$label_admin_bos_acr = "BOS";
$label_admin_style_types = "Tipos de Estilos";
$label_admin_custom_cat = "Categorías Personalizadas";
$label_admin_custom_cat_data = "Inscripciones en Categorías Personalizadas";
$label_admin_sponsors = $label_sponsors;
$label_admin_entry_count = "Cantidad de Inscripciones por Estilo";
$label_admin_entry_count_sub = "Cantidad de Inscripciones por Sub-Estilo";
$label_admin_custom_mods = "Módulos Personalizados";
$label_admin_check_in = $label_entry_check_in;
$label_admin_make_admin = "Cambiar Nivel de Usuario";
$label_admin_register = "Registrar a Participante";
$label_admin_upload_img = "Subir Imágenes";
$label_admin_upload_doc = "Subir Hojas de Puntuación y Otros Documentos";
$label_admin_password = "Cambiar Contraseña de Usuario";
$label_admin_edit_account = "Editar Cuenta de Usuario";
$label_account_summary = "Resumen de Mi Cuenta";
$label_confirmed_entries = "Inscripciones Confirmadas";
$label_unpaid_confirmed_entries = "Inscripciones Confirmadas No Pagadas";
$label_total_entry_fees = "Total de Tarifas de Inscripción";
$label_entry_fees_to_pay = "Tarifas de Inscripción a Pagar";
$label_entry_drop_off = "Entrega de Inscripción";
$label_maintenance = "Mantenimiento";
$label_judge_info = "Información del Juez";
$label_cellar = "Mi Bodega";
$label_verify = "Verificar";
$label_entry_number = "Número de Inscripción";


/**
 * ------------------------------------------------------------------------
 * Headers
 * Missing punctuation intentional for all.
 * ------------------------------------------------------------------------
 */
$header_text_000 = "La configuración se realizó con éxito.";
$header_text_001 = "Ahora has iniciado sesión y estás listo para personalizar más el sitio de tu concurso.";
$header_text_002 = "Sin embargo, no se pudieron cambiar los permisos del archivo config.php.";
$header_text_003 = "Se recomienda encarecidamente que cambies los permisos del servidor (chmod) en el archivo config.php a 555. Para hacer esto, necesitarás acceder al archivo en tu servidor.";
$header_text_004 = "Además, la variable &#36;setup_free_access en config.php está actualmente configurada en TRUE. Por razones de seguridad, deberías cambiarla a FALSE. Tendrás que editar config.php directamente y volver a subirlo a tu servidor para realizar este cambio.";
$header_text_005 = "Información añadida con éxito.";
$header_text_006 = "Información editada con éxito.";
$header_text_007 = "Hubo un error.";
$header_text_008 = "Por favor, inténtalo de nuevo.";
$header_text_009 = "Debes ser administrador para acceder a cualquier función de administración.";
$header_text_010 = "Cambiar";
$header_text_011 = $label_email;
$header_text_012 = $label_password;
$header_text_013 = "La dirección de correo proporcionada ya está en uso, por favor proporciona otra dirección de correo.";
$header_text_014 = "Hubo un problema con la última solicitud, por favor inténtalo de nuevo.";
$header_text_015 = "Tu contraseña actual es incorrecta.";
$header_text_016 = "Por favor, proporciona una dirección de correo.";
$header_text_017 = "Lo siento, hubo un problema con tu último intento de inicio de sesión.";
$header_text_018 = "Lo siento, el nombre de usuario que ingresaste ya está en uso.";
$header_text_019 = "¿Quizás ya has creado una cuenta?";
$header_text_020 = "Si es así, inicia sesión aquí.";
$header_text_021 = "El nombre de usuario proporcionado no es una dirección de correo válida.";
$header_text_022 = "Por favor, introduce una dirección de correo válida.";
$header_text_023 = "El CAPTCHA no fue exitoso.";
$header_text_024 = "Las direcciones de correo que ingresaste no coinciden.";
$header_text_025 = "El número AHA que ingresaste ya está en el sistema.";
$header_text_026 = "Tu pago en línea ha sido recibido y la transacción se ha completado. Por favor, ten en cuenta que puede que necesites esperar unos minutos para que se actualice el estado del pago aquí; asegúrate de actualizar esta página o acceder a tu lista de inscripciones. Recibirás un recibo de pago por correo electrónico de PayPal.";
$header_text_027 = "Asegúrate de imprimir el recibo y adjuntarlo a una de tus inscripciones como prueba de pago.";
$header_text_028 = "Tu pago en línea ha sido cancelado.";
$header_text_029 = "El código ha sido verificado.";
$header_text_030 = "Lo siento, el código que ingresaste es incorrecto.";
$header_text_031 = "Debes iniciar sesión y tener privilegios de administrador para acceder a las funciones de administración.";
$header_text_032 = "Lo siento, hubo un problema con tu último intento de inicio de sesión.";
$header_text_033 = "Asegúrate de que tu dirección de correo y contraseña sean correctas.";
$header_text_034 = "Se ha generado un token de restablecimiento de contraseña y se ha enviado a la dirección asociada con tu cuenta.";
$header_text_035 = "- ahora puedes iniciar sesión utilizando tu nombre de usuario actual y la nueva contraseña.";
$header_text_036 = "Has cerrado sesión.";
$header_text_037 = "¿Iniciar sesión de nuevo?";
$header_text_038 = "Tu pregunta de verificación no coincide con la base de datos.";
$header_text_039 = "Tu información de verificación ha sido enviada a la dirección de correo asociada con tu cuenta.";
$header_text_040 = "Tu mensaje ha sido enviado a";
$header_text_041 = $header_text_023;
$header_text_042 = "Tu dirección de correo ha sido actualizada.";
$header_text_043 = "Tu contraseña ha sido actualizada.";
$header_text_044 = "Información eliminada con éxito.";
$header_text_045 = "Debes verificar todas tus inscripciones importadas usando BeerXML.";
$header_text_046 = "Te has registrado.";
$header_text_047 = "Has alcanzado el límite de inscripciones.";
$header_text_048 = "Tu inscripción no fue añadida.";
$header_text_049 = "Has alcanzado el límite de inscripciones para la subcategoría.";
$header_text_050 = "Configuración: Instalar Tablas y Datos de la BD";
$header_text_051 = "Configuración: Crear Usuario Administrador";
$header_text_052 = "Configuración: Añadir Información de Usuario Administrador";
$header_text_053 = "Configuración: Establecer Preferencias del Sitio Web";
$header_text_054 = "Configuración: Añadir Información del Concurso";
$header_text_055 = "Configuración: Añadir Sesiones de Evaluación";
$header_text_056 = "Configuración: Añadir Ubicaciones de Entrega";
$header_text_057 = "Configuración: Designar Estilos Aceptados";
$header_text_058 = "Configuración: Establecer Preferencias de Evaluación";
$header_text_059 = "Importar una Inscripción Usando BeerXML";
$header_text_060 = "Tu inscripción ha sido registrada.";
$header_text_061 = "Tu inscripción ha sido confirmada.";
$header_text_065 = "Todas las inscripciones recibidas han sido revisadas y aquellas no asignadas a mesas han sido asignadas.";
$header_text_066 = "Información actualizada con éxito.";
$header_text_067 = "El sufijo que ingresaste ya está en uso, por favor ingresa uno diferente.";
$header_text_068 = "Los datos del concurso especificado han sido eliminados.";
$header_text_069 = "Archivos creados con éxito.";
$header_text_070 = "Selecciona el nombre del archivo para ver.";
$header_text_071 = "Recuerda actualizar tu ".$label_admin_comp_info." y tu ".$label_admin_judging_loc." si estás comenzando un nuevo concurso.";
$header_text_072 = "Archivo \"".$filter."\" eliminado.";
$header_text_073 = "Los registros han sido actualizados.";
$header_text_074 = "El nombre de usuario que ingresaste ya está en uso.";
$header_text_075 = "¿Añadir otra ubicación de entrega?";
$header_text_076 = "¿Añadir otra ubicación, fecha o hora de evaluación?";
$header_text_077 = "La mesa que acabas de definir no tiene estilos asociados.";
$header_text_078 = "Falta uno o más datos requeridos - marcados en rojo a continuación.";
$header_text_079 = "Las direcciones de correo que ingresaste no coinciden.";
$header_text_080 = "El número AHA que ingresaste ya está en el sistema.";
$header_text_081 = "Todas las inscripciones han sido marcadas como pagadas.";
$header_text_082 = "Todas las inscripciones han sido marcadas como recibidas.";
$header_text_083 = "Todas las inscripciones no confirmadas ahora están marcadas como confirmadas.";
$header_text_084 = "Todas las asignaciones de participantes han sido eliminadas.";
$header_text_085 = "No se encontró en la base de datos un número de evaluación que ingresaste.";
$header_text_086 = "Todos los estilos de inscripción han sido convertidos de BJCP 2008 a BJCP 2015.";
$header_text_087 = "Datos eliminados con éxito.";
$header_text_088 = "El evaluador/asistente ha sido añadido con éxito. Recuerda asignar al usuario como evaluador o asistente antes de asignarlo a mesas.";
$header_text_089 = "El archivo ha sido subido con éxito. Verifica la lista para comprobar.";
$header_text_090 = "El archivo que se intentó subir no es de un tipo aceptado.";
$header_text_091 = "Archivo(s) eliminado(s) con éxito.";
$header_text_092 = "El correo de prueba ha sido generado. Asegúrate de revisar tu carpeta de spam.";
$header_text_093 = "La contraseña del usuario ha sido cambiada. ¡Asegúrate de informarle cuál es su nueva contraseña!";
$header_text_094 = "El cambio de permisos de la carpeta user_images a 755 ha fallado.";
$header_text_095 = "Tendrás que cambiar manualmente los permisos de la carpeta. Consulta la documentación de tu programa FTP o de tu ISP sobre chmod (permisos de carpetas).";
$header_text_096 = "Los números de evaluación han sido regenerados.";
$header_text_097 = "¡Tu instalación ha sido configurada con éxito!";
$header_text_098 = "POR RAZONES DE SEGURIDAD deberías inmediatamente configurar la variable &#36;setup_free_access en config.php a FALSE.";
$header_text_099 = "De lo contrario, tu instalación y servidor estarán vulnerables a brechas de seguridad.";
$header_text_100 = "Inicia sesión ahora para acceder al Tablero de Administración";
$header_text_101 = "¡Tu instalación ha sido actualizada con éxito!";
$header_text_102 = "Las direcciones de correo no coinciden.";
$header_text_103 = "Por favor, inicia sesión para acceder a tu cuenta.";
$header_text_104 = "No tienes suficientes privilegios para ver esta página.";
$header_text_105 = "Se requiere más información para que tu inscripción sea aceptada y confirmada.";
$header_text_106 = "Consulta las áreas resaltadas en ROJO a continuación.";
$header_text_107 = "Por favor, elige un estilo.";
$header_text_108 = "Esta inscripción no puede ser aceptada o confirmada hasta que se haya elegido un estilo. Las inscripciones no confirmadas pueden ser eliminadas del sistema sin previo aviso.";
$header_text_109 = "Te has registrado como asistente.";
$header_text_110 = "Todas las inscripciones han sido desmarcadas como pagadas.";
$header_text_111 = "Todas las inscripciones han sido desmarcadas como recibidas.";

/**
 * ------------------------------------------------------------------------
 * Alerts
 * ------------------------------------------------------------------------
 */
$alert_text_000 = "Concede a los usuarios acceso de administrador de nivel superior y administrador con precaución.";
$alert_text_001 = "Limpieza de datos completada.";
$alert_text_002 = "La variable &#36;setup_free_access en config.php está actualmente configurada en TRUE.";
$alert_text_003 = "Por razones de seguridad, deberías cambiar esta configuración a FALSE. Tendrás que editar config.php directamente y volver a subir el archivo a tu servidor.";
$alert_text_005 = "No se han especificado ubicaciones de entrega.";
$alert_text_006 = "¿Añadir una ubicación de entrega?";
$alert_text_008 = "No se han especificado sesiones de evaluación.";
$alert_text_009 = "¿Añadir una sesión de evaluación?";
$alert_text_011 = "No se han especificado contactos del concurso.";
$alert_text_012 = "¿Añadir un contacto del concurso?";
$alert_text_014 = "Tu conjunto de estilos actual es BJCP 2008.";
$alert_text_015 = "¿Quieres convertir todas las inscripciones a BJCP 2015?";
$alert_text_016 = "¿Estás seguro? Esta acción convertirá todas las inscripciones en la base de datos para que cumplan con las directrices de estilo BJCP 2015. Las categorías serán 1:1 donde sea posible, sin embargo, algunos estilos especiales deberán ser actualizados por el participante.";
$alert_text_017 = "Para mantener la funcionalidad, la conversión debe realizarse <em>antes</em> de definir las mesas.";
$alert_text_019 = "Todas las inscripciones no confirmadas han sido eliminadas de la base de datos.";
$alert_text_020 = "Las inscripciones no confirmadas están resaltadas y marcadas con un icono <span class=\"fa fa-sm fa-exclamation-triangle text-danger\"></span>.";
$alert_text_021 = "Se debe contactar a los participantes. Estas inscripciones no están incluidas en los cálculos de tarifas.";
$alert_text_023 = "¿Añadir una ubicación de entrega?";
$alert_text_024 = $label_yes;
$alert_text_025 = $label_no;
$alert_text_027 = "El registro de inscripciones aún no se ha abierto.";
$alert_text_028 = "El registro de inscripciones está cerrado.";
$alert_text_029 = "No está disponible añadir inscripciones.";
$alert_text_030 = "Se ha alcanzado el límite de inscripciones del concurso.";
$alert_text_031 = "Has alcanzado tu límite personal de inscripciones.";
$alert_text_032 = "Podrás añadir inscripciones a partir de ".$entry_open.".";
$alert_text_033 = "El registro de cuentas se abrirá el ".$reg_open.".";
$alert_text_034 = "Por favor, vuelve en ese momento para registrar tu cuenta.";
$alert_text_036 = "El registro de inscripciones se abrirá el ".$entry_open.".";
$alert_text_037 = "Por favor, vuelve en ese momento para añadir tus inscripciones al sistema.";
$alert_text_039 = "El registro de jueces y asistentes se abrirá el ".$judge_open.".";
$alert_text_040 = "Por favor, vuelve en ese momento para registrarte como juez o asistente.";
$alert_text_042 = "¡El registro de inscripciones está abierto!";
$alert_text_043 = "Un total de ".$total_entries." inscripciones se han añadido al sistema hasta las ".$current_time.".";
$alert_text_044 = "El registro se cerrará ";
$alert_text_046 = "¡El límite de inscripciones está casi alcanzado!";
$alert_text_047 = $total_entries." de ".$row_limits['prefsEntryLimit']." inscripciones máximas se han añadido al sistema hasta las ".$current_time.".";
$alert_text_049 = "Se ha alcanzado el límite de inscripciones.";
$alert_text_050 = "Se ha alcanzado el límite de ".$row_limits['prefsEntryLimit']." inscripciones. No se aceptarán más inscripciones.";
$alert_text_052 = "Se ha alcanzado el límite de inscripciones pagadas.";
$alert_text_053 = "Se ha alcanzado el límite de ".$row_limits['prefsEntryLimitPaid']." inscripciones <em>pagadas</em>. No se aceptarán más inscripciones.";
$alert_text_055 = "El registro está cerrado.";
$alert_text_056 = "Si ya has registrado una cuenta,";
$alert_text_057 = "inicia sesión aquí"; // sin mayúscula ni puntuación intencional
$alert_text_059 = "El registro de inscripciones está cerrado.";
$alert_text_060 = "Un total de ".$total_entries." inscripciones se añadieron al sistema.";
$alert_text_062 = "La entrega de inscripciones está cerrada.";
$alert_text_063 = "Ya no se aceptan botellas en los puntos de entrega.";
$alert_text_065 = "El envío de inscripciones está cerrado.";
$alert_text_066 = "Ya no se aceptan botellas en la ubicación de envío.";
$alert_text_068 = $j_s_text." registro abierto.";
$alert_text_069 = "Regístrate aquí"; // sin puntuación intencional
$alert_text_070 = $j_s_text." el registro se cerrará el ".$judge_closed.".";
$alert_text_072 = "Se ha alcanzado el límite de jueces registrados.";
$alert_text_073 = "No se aceptarán más registros de jueces.";
$alert_text_074 = "Todavía puedes registrarte como asistente.";
$alert_text_076 = "Se ha alcanzado el límite de asistentes registrados.";
$alert_text_077 = "No se aceptarán más registros de asistentes.";
$alert_text_078 = "Todavía puedes registrarte como juez.";
$alert_text_080 = "Contraseña incorrecta.";
$alert_text_081 = "Contraseña aceptada.";
$alert_email_valid = "El formato del correo electrónico es válido.";
$alert_email_not_valid = "El formato del correo electrónico no es válido.";
$alert_email_in_use = "La dirección de correo que ingresaste ya está en uso. Por favor, elige otra.";
$alert_email_not_in_use = "¡Felicidades! La dirección de correo que ingresaste no está en uso.";

/**
 * ------------------------------------------------------------------------
 * Public Pages
 * ------------------------------------------------------------------------
 */
$comps_text_000 = "Elige el concurso al que deseas acceder de la lista a continuación.";
$comps_text_001 = "Concurso actual:";
$comps_text_002 = "No hay concursos con ventanas de inscripción abiertas en este momento.";
$comps_text_003 = "No hay concursos con ventanas de inscripción cerrando en los próximos 7 días.";

/**
 * ------------------------------------------------------------------------
 * BeerXML
 * ------------------------------------------------------------------------
 */
$beerxml_text_000 = "No está disponible la importación de inscripciones.";
$beerxml_text_001 = "ha sido subido y la elaboración ha sido añadida a tu lista de inscripciones.";
$beerxml_text_002 = "Lo siento, ese tipo de archivo no está permitido. Solo se permiten archivos con la extensión .xml.";
$beerxml_text_003 = "El tamaño del archivo supera los 2MB. Por favor, ajusta el tamaño y vuelve a intentarlo.";
$beerxml_text_004 = "Archivo no válido especificado.";
$beerxml_text_005 = "Sin embargo, no ha sido confirmada. Para confirmar tu inscripción, accede a tu lista de inscripciones para obtener más instrucciones. O bien, puedes subir otra inscripción BeerXML a continuación.";
$beerxml_text_006 = "La versión de PHP de tu servidor no soporta la función de importación BeerXML.";
$beerxml_text_007 = "Se requiere PHP versión 5.x o superior &mdash; este servidor está ejecutando PHP versión ".$php_version.".";
$beerxml_text_008 = "Busca tu archivo compatible con BeerXML en tu disco duro y selecciona <em>Subir</em>.";
$beerxml_text_009 = "Elegir archivo BeerXML";
$beerxml_text_010 = "No se ha elegido archivo...";
$beerxml_text_011 = "inscripciones añadidas"; // sin mayúscula ni puntuación intencional
$beerxml_text_012 = "inscripción añadida"; // sin mayúscula ni puntuación intencional

/**
 * ------------------------------------------------------------------------
 * Add Entry
 * ------------------------------------------------------------------------
 */
$brew_text_000 = "Selecciona para detalles sobre el estilo"; // sin puntuación intencional
$brew_text_001 = "Los evaluadores no sabrán el nombre de tu inscripción.";
$brew_text_002 = "[deshabilitado - se ha alcanzado el límite de entradas por estilo o tipo de estilo]"; // sin puntuación intencional
$brew_text_003 = "[deshabilitado - se ha alcanzado el límite de inscripciones]"; // sin puntuación intencional
$brew_text_004 = "Se requiere tipo específico, ingredientes especiales, estilo clásico, fuerza (para estilos de cerveza) y/o color";
$brew_text_005 = "Se requiere fuerza"; // sin puntuación intencional
$brew_text_006 = "Se requiere nivel de carbonatación"; // sin puntuación intencional
$brew_text_007 = "Se requiere nivel de dulzura"; // sin puntuación intencional
$brew_text_008 = "Este estilo requiere que proporciones información específica para la inscripción.";
$brew_text_009 = "Requisitos para"; // sin puntuación intencional
$brew_text_010 = "Este estilo requiere más información. Por favor, introdúcela en el área proporcionada.";
$brew_text_011 = "Se requiere el nombre de la inscripción.";
$brew_text_012 = "***NO REQUERIDO*** Proporciona SÓLO si deseas que los evaluadores consideren completamente lo que escribas aquí al evaluar y puntuar tu inscripción. Úsalo para registrar detalles que te gustaría que los evaluadores consideren al evaluar tu inscripción que NO HAYAS ESPECIFICADO en otros campos (p. ej., técnica de maceración, variedad de lúpulo, variedad de miel, variedad de uva, variedad de pera, etc.).";
$brew_text_013 = "NO utilices este campo para especificar ingredientes especiales, estilo clásico, fuerza (para inscripciones de cerveza) o color.";
$brew_text_014 = "Proporciona solo si deseas que los evaluadores consideren completamente lo que especifiques al evaluar y puntuar tu inscripción.";
$brew_text_015 = "Tipo de extracto (p. ej., claro, oscuro) o marca.";
$brew_text_016 = "Tipo de grano (p. ej., pilsner, pale ale, etc.)";
$brew_text_017 = "Tipo de ingrediente o nombre.";
$brew_text_018 = "Nombre del lúpulo.";
$brew_text_019 = "Solo números, por favor.";
$brew_text_020 = "Nombre de la cepa (p. ej., 1056 American Ale).";
$brew_text_021 = "Wyeast, White Labs, etc.";
$brew_text_022 = "1 smackpack, 2 viales, 2000 ml, etc.";
$brew_text_023 = "Fermentación primaria en días.";
$brew_text_024 = "Reposo de sacarificación, etc.";
$brew_text_025 = "Fermentación secundaria en días.";
$brew_text_026 = "Otra fermentación en días.";

/**
 * ------------------------------------------------------------------------
 * Mi Cuenta
 * ------------------------------------------------------------------------
 */
$brewer_text_000 = "Por favor, introduce solo <em>un</em> nombre de persona.";
$brewer_text_001 = "Elige una. Esta pregunta se usará para verificar tu identidad en caso de que olvides tu contraseña.";
$brewer_text_003 = "La entrada solo acepta caracteres numéricos. Para ser considerado para una oportunidad de elaboración en GABF Pro-Am, debes ser miembro de la AHA.";
$brewer_text_004 = "Proporciona cualquier información que creas que el organizador del concurso, el coordinador de evaluadores o el personal del concurso deba saber (p. ej., alergias, restricciones dietéticas especiales, talla de camiseta, etc.).";
$brewer_text_005 = "No aplicable";
$brewer_text_006 = "¿Estás dispuesto y cualificado para actuar como evaluador en este concurso?";
$brewer_text_007 = "¿Has aprobado el examen de juez de hidromiel del BJCP?";
$brewer_text_008 = "* El rango <em>No-BJCP</em> es para aquellos que no han tomado el Examen de Acceso de Juez de Cerveza BJCP y <em>no</em> son cerveceros profesionales.";
$brewer_text_009 = "** El rango <em>Provisional</em> es para aquellos que han tomado y aprobado el Examen de Acceso de Juez de Cerveza BJCP, pero aún no han tomado el Examen de Evaluación de Cerveza del BJCP.";
$brewer_text_010 = "Solo las dos primeras designaciones aparecerán en las etiquetas impresas de la hoja de puntuación.";
$brewer_text_011 = "¿En cuántos concursos has servido previamente como <strong>".strtolower($label_judge)."</strong>?";
$brewer_text_012 = "Solo para preferencias. Dejar un estilo sin marcar indica que estás disponible para evaluarlo; no es necesario marcar todos los estilos que estás disponible para evaluar.";
$brewer_text_013 = "Selecciona o pulsa el botón de arriba para expandir la lista de estilos no preferidos para evaluar.";
$brewer_text_014 = "No es necesario marcar los estilos en los que tienes inscripciones; el sistema no te permitirá ser asignado a ninguna mesa donde tengas inscripciones.";
$brewer_text_015 = "¿Estás dispuesto a actuar como asistente en este concurso?";
$brewer_text_016 = "Mi participación en esta evaluación es completamente voluntaria. Sé que participar en esta evaluación implica el consumo de bebidas alcohólicas y que este consumo puede afectar mis percepciones y reacciones.";
$brewer_text_017 = "Selecciona o pulsa el botón de arriba para expandir la lista de estilos preferidos para evaluar.";
$brewer_text_018 = "Al marcar esta casilla, efectivamente estoy firmando un documento legal en el que acepto la responsabilidad por mi conducta, comportamiento y acciones, y libero completamente al concurso y a sus organizadores, individual o colectivamente, de la responsabilidad por mi conducta, comportamiento y acciones.";
$brewer_text_019 = "Si planeas servir como evaluador en algún concurso, selecciona o pulsa el botón de arriba para ingresar tu información relacionada con la evaluación.";
$brewer_text_020 = "¿Estás dispuesto a servir como miembro del personal en este concurso?";
$brewer_text_021 = "El personal del concurso son personas que desempeñan diversos roles para ayudar en la organización y ejecución del concurso antes, durante y después de la evaluación. Los evaluadores y asistentes también pueden servir como miembros del personal. Los miembros del personal pueden ganar puntos BJCP si el concurso está sancionado.";

/**
 * ------------------------------------------------------------------------
 * Contact
 * ------------------------------------------------------------------------
 */
$contact_text_000 = "Utiliza los enlaces a continuación para contactar a las personas involucradas en la coordinación de este concurso:";
$contact_text_001 = "Utiliza el formulario a continuación para contactar a un oficial del concurso. Todos los campos con una estrella son obligatorios.";
$contact_text_002 = "Además, se ha enviado una copia a la dirección de correo que proporcionaste.";
$contact_text_003 = "¿Te gustaría enviar otro mensaje?";

/**
 * ------------------------------------------------------------------------
 * Inicio Pages
 * ------------------------------------------------------------------------
 */
$default_page_text_000 = "No se han especificado ubicaciones de entrega.";
$default_page_text_001 = "¿Añadir una ubicación de entrega?";
$default_page_text_002 = "No se han especificado fechas/ubicaciones de evaluación.";
$default_page_text_003 = "¿Añadir una ubicación de evaluación?";
$default_page_text_004 = "Inscripciones Ganadoras";
$default_page_text_005 = "Los ganadores se publicarán el o después de";
$default_page_text_006 = "Bienvenido";
$default_page_text_007 = "Consulta los detalles de tu cuenta y la lista de inscripciones.";
$default_page_text_008 = "Consulta los detalles de tu cuenta aquí.";
$default_page_text_009 = "Ganadores del Mejor de Show";
$default_page_text_010 = "Inscripciones Ganadoras";
$default_page_text_011 = "Solo necesitas registrar tu información una vez y podrás regresar a este sitio para ingresar más elaboraciones o editar las que ya has ingresado.";
$default_page_text_012 = "Incluso puedes pagar tus tarifas de inscripción en línea si lo deseas.";
$default_page_text_013 = "Oficial del Concurso";
$default_page_text_014 = "Oficiales del Concurso";
$default_page_text_015 = "Puedes enviar un correo electrónico a cualquiera de las siguientes personas a través de";
$default_page_text_016 = "se enorgullece de contar con los siguientes";
$default_page_text_017 = "para el";
$default_page_text_018 = "Descarga los ganadores del Mejor de Show en formato PDF.";
$default_page_text_019 = "Descarga los ganadores del Mejor de Show en formato HTML.";
$default_page_text_020 = "Descarga las inscripciones ganadoras en formato PDF.";
$default_page_text_021 = "Descarga las inscripciones ganadoras en formato HTML.";
$default_page_text_022 = "Gracias por tu interés en el";
$default_page_text_023 = "organizado por";
$reg_open_text_000 = "El registro de jueces y asistentes está";
$reg_open_text_001 = "Abierto";
$reg_open_text_002 = "Si <em>no</em> te has registrado y estás dispuesto a ser voluntario,";
$reg_open_text_003 = "por favor regístrate";
$reg_open_text_004 = "Si ya te has registrado, inicia sesión y luego elige <em>Editar Cuenta</em> desde el menú Mi Cuenta indicado por el";
$reg_open_text_005 = "icono en el menú superior.";
$reg_open_text_006 = "Como ya te has registrado, puedes";
$reg_open_text_007 = "revisar la información de tu cuenta";
$reg_open_text_008 = "para ver si has indicado que estás dispuesto a evaluar y/o asistir.";
$reg_open_text_009 = "Si estás dispuesto a evaluar o asistir, por favor vuelve para registrarte el o después de";
$reg_open_text_010 = "El registro de inscripciones está";
$reg_open_text_011 = "Para añadir tus inscripciones al sistema";
$reg_open_text_012 = "por favor, sigue el proceso de registro";
$reg_open_text_013 = "si ya tienes una cuenta.";
$reg_open_text_014 = "usa el formulario para añadir una inscripción";
$reg_open_text_015 = "El registro de jueces está";
$reg_open_text_016 = "El registro de asistentes está";
$reg_closed_text_000 = "Gracias y buena suerte a todos los que participaron en el";
$reg_closed_text_001 = "Hay";
$reg_closed_text_002 = "participantes, jueces y asistentes registrados.";
$reg_closed_text_003 = "inscripciones registradas y";
$reg_closed_text_004 = "participantes, jueces y asistentes registrados.";
$reg_closed_text_005 = "A partir de";
$reg_closed_text_006 = "inscripciones recibidas y procesadas (este número se actualizará a medida que se recojan inscripciones de los puntos de entrega y se organicen para la evaluación).";
$reg_closed_text_007 = "Las fechas de evaluación del concurso aún están por determinarse. Por favor, vuelve más tarde.";
$reg_closed_text_008 = "Mapa hacia";
$judge_closed_000 = "Gracias a todos los que participaron en el";
$judge_closed_001 = "Se evaluaron";
$judge_closed_002 = "inscripciones y";
$judge_closed_003 = "participantes, jueces y asistentes registrados.";

/**
 * ------------------------------------------------------------------------
 * Entry Información
 * ------------------------------------------------------------------------
 */
$entry_info_text_000 = "Podrás crear tu cuenta a partir de";
$entry_info_text_001 = "hasta";
$entry_info_text_002 = "Los jueces y asistentes podrán registrarse a partir de";
$entry_info_text_003 = "por entrada";
$entry_info_text_004 = "Puedes crear tu cuenta hoy hasta";
$entry_info_text_005 = "Los jueces y asistentes pueden registrarse ahora hasta";
$entry_info_text_006 = "Registros para";
$entry_info_text_007 = "solo para jueces y asistentes";
$entry_info_text_008 = "aceptados hasta";
$entry_info_text_009 = "El registro está <strong class=\"text-danger\">cerrado</strong>.";
$entry_info_text_010 = "Bienvenido";
$entry_info_text_011 = "Consulta los detalles de tu cuenta y la lista de inscripciones.";
$entry_info_text_012 = "Consulta la información de tu cuenta aquí.";
$entry_info_text_013 = "por entrada después de";
$entry_info_text_014 = "Podrás añadir tus inscripciones al sistema a partir de";
$entry_info_text_015 = "Puedes añadir tus inscripciones al sistema hoy hasta";
$entry_info_text_016 = "El registro de inscripciones está <strong class=\"text-danger\">cerrado</strong>.";
$entry_info_text_017 = "para inscripciones ilimitadas.";
$entry_info_text_018 = "para miembros de la AHA.";
$entry_info_text_019 = "Hay un límite de";
$entry_info_text_020 = "inscripciones para este concurso.";
$entry_info_text_021 = "Cada participante tiene un límite de";
$entry_info_text_022 = strtolower($label_entry);
$entry_info_text_023 = strtolower($label_entries);
$entry_info_text_024 = "inscripción por subcategoría";
$entry_info_text_025 = "inscripciones por subcategoría";
$entry_info_text_026 = "las excepciones se detallan a continuación";
$entry_info_text_027 = strtolower($label_subcategory);
$entry_info_text_028 = "subcategorías";
$entry_info_text_029 = "inscripción para las siguientes";
$entry_info_text_030 = "inscripciones para las siguientes";
$entry_info_text_031 = "Después de crear tu cuenta y añadir tus inscripciones al sistema, debes pagar tus tarifas de inscripción. Los métodos de pago aceptados son:";
$entry_info_text_032 = $label_cash;
$entry_info_text_033 = $label_check.", a nombre de";
$entry_info_text_034 = "Tarjeta de crédito/débito y cheque electrónico, a través de PayPal";
$entry_info_text_035 = "Las fechas de evaluación del concurso aún no se han determinado. Por favor, vuelve más tarde.";
$entry_info_text_036 = "Se aceptan botellas de inscripción en nuestra ubicación de envío";
$entry_info_text_037 = "Envía las inscripciones a:";
$entry_info_text_038 = "Empaca cuidadosamente tus inscripciones en una caja resistente. Forra el interior de tu caja con una bolsa de basura de plástico. Separa y empaqueta cada botella con material de embalaje adecuado. ¡Por favor, no empaques en exceso!";
$entry_info_text_039 = "Escribe claramente: <em>Frágil. Este Lado Arriba.</em> en el paquete. Por favor, utiliza solo papel burbuja como material de embalaje.";
$entry_info_text_040 = "Coloca <em>cada</em> una de las etiquetas de tus botellas en una pequeña bolsa con cierre hermético antes de adjuntarlas a sus respectivas botellas. Esto permitirá que el organizador identifique específicamente qué inscripción se ha roto si hay daños durante el envío.";
$entry_info_text_041 = "Se harán todos los esfuerzos razonables para contactar a los participantes cuyas botellas se hayan roto para hacer arreglos para enviar botellas de reemplazo.";
$entry_info_text_042 = "Si vives en los Estados Unidos, ten en cuenta que es <strong>ilegal</strong> enviar tus inscripciones a través del Servicio Postal de los Estados Unidos (USPS). Las empresas de envío privadas tienen el derecho de rechazar tu envío si son informadas de que el paquete contiene vidrio y/o bebidas alcohólicas. Ten en cuenta que las inscripciones enviadas internacionalmente a menudo requieren la documentación adecuada en aduanas. Estas inscripciones podrían ser abiertas y/o devueltas al remitente por las autoridades aduaneras a su discreción. Es tu responsabilidad seguir todas las leyes y regulaciones aplicables.";
$entry_info_text_043 = "Se aceptan botellas de inscripción en nuestros puntos de entrega";
$entry_info_text_044 = "Mapa hacia";
$entry_info_text_045 = "Selecciona/Toca para la Información Requerida de Inscripción";
$entry_info_text_046 = "Si el nombre de un estilo está hipervinculado, tiene requisitos específicos de inscripción. Selecciona o toca el nombre para ver los requisitos de la subcategoría.";

/**
 * ------------------------------------------------------------------------
 * Mi Cuenta Entry List
 * ------------------------------------------------------------------------
 */
$brewer_entries_text_000 = "Hay un problema conocido al imprimir desde el navegador Firefox.";
$brewer_entries_text_001 = "Tienes inscripciones no confirmadas.";
$brewer_entries_text_002 = "Para cada inscripción a continuación con un icono <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, selecciona el icono <span class=\"fa fa-lg fa-pencil text-primary\"></span> para revisar y confirmar todos los datos de tu inscripción. Las inscripciones no confirmadas pueden ser eliminadas del sistema sin previo aviso.";
$brewer_entries_text_003 = "NO puedes pagar tus inscripciones hasta que todas estén confirmadas.";
$brewer_entries_text_004 = "Tienes inscripciones que requieren que definas un tipo específico, ingredientes especiales, estilo clásico, fuerza y/o color.";
$brewer_entries_text_005 = "Para cada inscripción a continuación con un icono <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, selecciona el icono <span class=\"fa fa-lg fa-pencil text-primary\"></span> para ingresar la información requerida. Las inscripciones sin un tipo específico, ingredientes especiales, estilo clásico, fuerza y/o color en las categorías que los requieren pueden ser eliminadas por el sistema sin previo aviso.";
$brewer_entries_text_006 = "Descargar las hojas de puntuación de los jueces para";
$brewer_entries_text_007 = "Estilo NO Ingresado";
$brewer_entries_text_008 = "Formulario de inscripción y";
$brewer_entries_text_009 = "Etiquetas de botellas";
$brewer_entries_text_010 = "Imprimir el formulario de receta para";
$brewer_entries_text_011 = "Además, no podrás añadir otra inscripción, ya que se ha alcanzado el límite de inscripciones para el concurso. Selecciona Cancelar en este cuadro y luego edita la inscripción si deseas conservarla.";
$brewer_entries_text_012 = "¿Estás seguro de que deseas eliminar la inscripción llamada";
$brewer_entries_text_013 = "Podrás añadir inscripciones a partir de";
$brewer_entries_text_014 = "No has añadido ninguna inscripción al sistema.";
$brewer_entries_text_015 = "No puedes eliminar tu inscripción en este momento.";

/**
 * ------------------------------------------------------------------------
 * Past Winners
 * ------------------------------------------------------------------------
 */
$past_winners_text_000 = "Ver ganadores anteriores:";

/**
 * ------------------------------------------------------------------------
 * Pay for Entries
 * ------------------------------------------------------------------------
 */
$pay_text_000 = "Dado que el registro de cuentas, registro de inscripciones, envíos y fechas límite de entrega han pasado, ya no se aceptan pagos.";
$pay_text_001 = "Contacta a un oficial del concurso si tienes alguna pregunta.";
$pay_text_002 = "A continuación, se presentan tus opciones para pagar las tarifas de inscripción.";
$pay_text_003 = "Las tarifas son";
$pay_text_004 = "por inscripción";
$pay_text_005 = "por inscripción después del";
$pay_text_006 = "para inscripciones ilimitadas";
$pay_text_007 = "Tus tarifas han sido descontadas a";
$pay_text_008 = "El total de tus tarifas de inscripción es";
$pay_text_009 = "Necesitas pagar";
$pay_text_010 = "Tus tarifas han sido marcadas como pagadas. ¡Gracias!";
$pay_text_011 = "Actualmente tienes";
$pay_text_012 = "inscripciones confirmadas no pagadas";
$pay_text_013 = "Adjunta un cheque por el monto total de la inscripción a una de tus botellas. Los cheques deben estar a nombre de";
$pay_text_014 = "El duplicado de tu cheque o el cheque cobrado es tu recibo de inscripción.";
$pay_text_015 = "Adjunta el pago en efectivo por el monto total de la inscripción en un <em>sobre sellado</em> a una de tus botellas.";
$pay_text_016 = "Las hojas de puntuación devueltas servirán como tu recibo de inscripción.";
$pay_text_017 = "El correo electrónico de confirmación de tu pago es tu recibo de inscripción. Incluye una copia con tus inscripciones como prueba de pago.";
$pay_text_018 = "Selecciona el botón <em>Pagar con PayPal</em> a continuación para pagar en línea.";
$pay_text_019 = "Ten en cuenta que se añadirá una tarifa de transacción de";
$pay_text_020 = "a tu total.";
$pay_text_021 = "Para asegurarte de que tu pago por PayPal se marque como <strong>pagado</strong> en <strong>este sitio</strong>, asegúrate de seleccionar el enlace <em>Volver a...</em> en la pantalla de confirmación de PayPal <strong>después</strong> de haber enviado tu pago. También, asegúrate de imprimir tu recibo de pago y adjuntarlo a una de tus botellas de inscripción.";
$pay_text_022 = "Asegúrate de seleccionar <em>Volver a...</em> después de pagar tus tarifas";
$pay_text_023 = "Introduce el código proporcionado por los organizadores del concurso para obtener una tarifa de inscripción con descuento.";
$pay_text_024 = $pay_text_010;
$pay_text_025 = "Aún no has registrado ninguna inscripción.";
$pay_text_026 = "No puedes pagar tus inscripciones porque una o más de tus inscripciones no están confirmadas.";
$pay_text_027 = "Selecciona <em>Mi Cuenta</em> arriba para revisar tus inscripciones no confirmadas.";
$pay_text_028 = "Tienes inscripciones no confirmadas que <em>no</em> se reflejan en el total de tus tarifas a continuación.";
$pay_text_029 = "Por favor, ve a tu lista de inscripciones para confirmar todos los datos de tu inscripción. Las inscripciones no confirmadas pueden ser eliminadas del sistema sin previo aviso.";

/**
 * ------------------------------------------------------------------------
 * QR Code Check-in
 * ------------------------------------------------------------------------
 */
// Ignore the next four lines
if (strpos($view, "^") !== FALSE) {
	$qr_text_019 = sprintf("%06d",$checked_in_numbers[0]);
	if (is_numeric($checked_in_numbers[1])) $qr_text_020 = sprintf("%06d",$checked_in_numbers[1]);
	else $qr_text_020 = $checked_in_numbers[1];
}

$qr_text_000 = $alert_text_080;
$qr_text_001 = $alert_text_081;

// Begin translations here
if (strpos($view, "^") !== FALSE) $qr_text_002 = sprintf("El número de inscripción <span class=\"text-danger\">%s</span> está registrado con el número de evaluación <span class=\"text-danger\">%s</span>.",$qr_text_019,$qr_text_020); else $qr_text_002 = "";
$qr_text_003 = "Si este número de evaluación <em>no</em> es correcto, <strong>escanea de nuevo el código y vuelve a ingresar el número de evaluación correcto.</strong>";
if (strpos($view, "^") !== FALSE) $qr_text_004 = sprintf("El número de inscripción %s está registrado.",$qr_text_019); else $qr_text_004 = "";
if (strpos($view, "^") !== FALSE) $qr_text_005 = sprintf("No se encontró el número de inscripción %s en la base de datos. Aparta la(s) botella(s) y alerta al organizador del concurso.",$qr_text_019); else $qr_text_005 = "";
if (strpos($view, "^") !== FALSE) $qr_text_006 = sprintf("El número de evaluación que ingresaste - %s - ya está asignado al número de inscripción %s.",$qr_text_020,$qr_text_019); else $qr_text_006 = "";
$qr_text_007 = "Registro de Inscripción por Código QR";
$qr_text_008 = "Para registrar inscripciones mediante código QR, por favor proporciona la contraseña correcta. Solo necesitarás ingresar la contraseña una vez por sesión; asegúrate de mantener la aplicación de escaneo de códigos QR abierta.";
$qr_text_009 = "Asignar un número de evaluación y/o número de caja a la inscripción";
$qr_text_010 = "Introduce SOLO un número de evaluación si tu concurso utiliza etiquetas con números de evaluación en la clasificación.";
$qr_text_011 = "Seis números con ceros al inicio - por ejemplo, 000021.";
$qr_text_012 = "Asegúrate de verificar dos veces tu entrada y colocar las etiquetas de número de evaluación apropiadas en cada botella y etiqueta de botella (si aplica).";
$qr_text_013 = "Los números de evaluación deben tener seis caracteres y no pueden incluir el carácter ^.";
$qr_text_014 = "Esperando la entrada del código QR escaneado.";
$qr_text_016 = "¿Necesitas una aplicación de escaneo de códigos QR? Busca en <a class=\"hide-loader\" href=\"https://play.google.com/store/search?q=qr%20code%20scanner&c=apps&hl=es\" target=\"_blank\">Google Play</a> (Android) o en <a class=\"hide-loader\" href=\"https://itunes.apple.com/store/\" target=\"_blank\">iTunes</a> (iOS).";

/**
 * ------------------------------------------------------------------------
 * Registration
 * ------------------------------------------------------------------------
 */
$register_text_000 = "¿Es el voluntario ";
$register_text_001 = "¿Eres ";
$register_text_002 = "El registro ha cerrado.";
$register_text_003 = "Gracias por tu interés.";
$register_text_004 = "La información que proporciones, más allá de tu nombre, apellido y club, es estrictamente para fines de registro y contacto.";
$register_text_005 = "Una condición para participar en el concurso es proporcionar esta información. Tu nombre y club pueden mostrarse si una de tus inscripciones obtiene un lugar, pero ninguna otra información será hecha pública.";
$register_text_006 = "Recordatorio: Solo se te permite inscribirte en una región, y una vez que te hayas registrado en una ubicación, NO podrás cambiarla.";
$register_text_007 = "Rápido";
$register_text_008 = "Registrar";
$register_text_009 = "un Juez";
$register_text_010 = "un Participante";
$register_text_011 = "Para registrarte, crea tu cuenta llenando los campos a continuación.";
$register_text_012 = "Añade rápidamente un participante a la lista de jueces/asistentes del concurso. Se utilizará una dirección y número de teléfono ficticios y se asignará una contraseña predeterminada de <em>bcoem</em> a cada participante añadido a través de esta pantalla.";
$register_text_013 = "La participación en este concurso se realiza completamente en línea.";
$register_text_014 = "Para añadir tus inscripciones y/o indicar que estás dispuesto a actuar como juez o asistente (los jueces y asistentes también pueden añadir inscripciones), deberás crear una cuenta en nuestro sistema.";
$register_text_015 = "Tu dirección de correo electrónico será tu nombre de usuario y será utilizada como medio de difusión de información por parte del personal del concurso. Asegúrate de que sea correcta.";
$register_text_016 = "Una vez que te hayas registrado, puedes proceder con el proceso de inscripción.";
$register_text_017 = "Cada inscripción que añadas será automáticamente asignada un número por el sistema.";
$register_text_018 = "Elige una. Esta pregunta se usará para verificar tu identidad en caso de que olvides tu contraseña.";
$register_text_019 = "Por favor, proporciona una dirección de correo.";
$register_text_020 = "Las direcciones de correo que ingresaste no coinciden.";
$register_text_021 = "Las direcciones de correo sirven como nombres de usuario.";
$register_text_022 = "Por favor, proporciona una contraseña.";
$register_text_023 = "Por favor, proporciona una respuesta a tu pregunta de seguridad.";
$register_text_024 = "¡Haz que tu respuesta de seguridad sea algo que solo tú recuerdes fácilmente!";
$register_text_025 = "Por favor, proporciona un nombre.";
$register_text_026 = "Por favor, proporciona un apellido.";
$register_text_027 = "un Asistente";
$register_text_028 = "Por favor, proporciona una dirección.";
$register_text_029 = "Por favor, proporciona una ciudad.";
$register_text_030 = "Por favor, proporciona un estado o provincia.";
$register_text_031 = "Por favor, proporciona un código postal.";
$register_text_032 = "Por favor, proporciona un número de teléfono principal.";
$register_text_033 = "Solo los miembros de la American Iniciobrewers Association son elegibles para una oportunidad en el Great American Beer Festival Pro-Am.";
$register_text_034 = "Para registrarte, debes marcar la casilla, indicando que aceptas la declaración de exención de responsabilidad.";

/**
 * ------------------------------------------------------------------------
 * Sidebar
 * ------------------------------------------------------------------------
 */
$sidebar_text_000 = "Se aceptan registros para jueces o asistentes";
$sidebar_text_001 = "Se aceptan registros para asistentes";
$sidebar_text_002 = "Se aceptan registros para jueces";
$sidebar_text_003 = "Ya no se aceptan registros. Se ha alcanzado el límite de jueces y asistentes.";
$sidebar_text_004 = "hasta";
$sidebar_text_005 = "Se aceptan registros de cuentas";
$sidebar_text_006 = "Está abierto solo para jueces o asistentes";
$sidebar_text_007 = "Está abierto solo para asistentes";
$sidebar_text_008 = "Está abierto solo para jueces";
$sidebar_text_009 = "Se aceptan registros de inscripciones";
$sidebar_text_010 = "Se ha alcanzado el límite de inscripciones pagadas para el concurso.";
$sidebar_text_011 = "Se ha alcanzado el límite de inscripciones para el concurso.";
$sidebar_text_012 = "Consulta tu lista de inscripciones.";
$sidebar_text_013 = "Selecciona aquí para pagar tus tarifas.";
$sidebar_text_014 = "Las tarifas de inscripción no incluyen inscripciones no confirmadas.";
$sidebar_text_015 = "Tienes inscripciones no confirmadas: es necesario confirmar.";
$sidebar_text_016 = "Consulta tu lista de inscripciones.";
$sidebar_text_017 = "Te quedan";
$sidebar_text_018 = "antes de alcanzar el límite de";
$sidebar_text_019 = "por participante";
$sidebar_text_020 = "Has alcanzado el límite de";
$sidebar_text_021 = "en este concurso";
$sidebar_text_022 = "Se aceptan botellas de inscripción en";
$sidebar_text_023 = "la ubicación de envío";
$sidebar_text_024 = "Las fechas de evaluación del concurso aún no se han determinado. Por favor, vuelve más tarde.";
$sidebar_text_025 = "se han añadido al sistema a partir de";

/**
 * ------------------------------------------------------------------------
 * Styles
 * ------------------------------------------------------------------------
 */
$styles_entry_text_07C = "El participante debe especificar si la inscripción es una Kellerbier de Múnich (pálida, basada en Helles) o una Kellerbier de Franconia (ámbar, basada en Märzen). El participante puede especificar otro tipo de Kellerbier basado en otros estilos base como Pils, Bock, Schwarzbier, pero debe proporcionar una descripción del estilo para los jueces.";
$styles_entry_text_09A = "El participante debe especificar si la inscripción es una variante pálida o oscura.";
$styles_entry_text_10C = "El participante debe especificar si la inscripción es una variante pálida o oscura.";
$styles_entry_text_21B = "El participante debe especificar una fuerza (session: 3.0-5.0%, estándar: 5.0-7.5%, doble: 7.5-9.5%); si no se especifica una fuerza, se asumirá la estándar. El participante debe especificar un tipo específico de IPA Especialidad de la lista de tipos conocidos enumerados en las Guías de Estilo, o como está enmendado en el sitio web del BJCP; o el participante debe describir el tipo de IPA Especialidad y sus características clave en el formulario de comentarios para que los jueces sepan qué esperar. Los participantes pueden especificar las variedades de lúpulo utilizadas, si creen que los jueces podrían no reconocer las características varietales de los lúpulos más nuevos. Los participantes pueden especificar una combinación de tipos definidos de IPA (por ejemplo, IPA Negra de Centeno) sin proporcionar descripciones adicionales. Los participantes pueden usar esta categoría para una versión de diferente fuerza de una IPA definida por su propia subcategoría del BJCP (por ejemplo, IPA Americana o Inglesa de session) - excepto donde ya exista una subcategoría del BJCP para ese estilo (por ejemplo, IPA Doble [Americana]). Tipos actualmente definidos: IPA Negra, IPA Marrón, IPA Blanca, IPA de Centeno, IPA Belga, IPA Roja.";
$styles_entry_text_23F = "Se debe especificar el tipo de fruta utilizada. El cervecero debe declarar un nivel de carbonatación (bajo, medio, alto) y un nivel de dulzura (bajo/ninguno, medio, alto).";
$styles_entry_text_24C = "El participante debe especificar si es una biere de garde rubia, ámbar o marrón. Si no se especifica un color, el juez debe intentar juzgar basándose en la observación inicial, esperando un sabor y equilibrio de malta que coincidan con el color.";
$styles_entry_text_25B = "El participante debe especificar la fuerza (table, estándar, super) y el color (pálido, oscuro).";
$styles_entry_text_27A = "El participante debe especificar un estilo con una descripción proporcionada por el BJCP o proporcionar una descripción similar para los jueces de un estilo diferente. Si se ingresa una cerveza solo con el nombre del estilo y sin descripción, es muy probable que los jueces no comprendan cómo evaluarla. Ejemplos actualmente definidos: Gose, Piwo Grodziskie, Lichtenhainer, Roggenbier, Sahti, Kentucky Common, Lager Pre-Prohibición, Porter Pre-Prohibición, London Brown Ale.";
$styles_entry_text_28A = "El participante debe especificar un estilo base de cerveza (estilo clásico del BJCP o una familia de estilos genéricos) o proporcionar una descripción de los ingredientes/especificaciones/características deseadas. El participante debe especificar si se realizó una fermentación 100% Brett. El participante puede especificar las cepas de Brettanomyces utilizadas, junto con una breve descripción de su carácter.";
$styles_entry_text_28B = "El participante debe especificar una descripción de la cerveza, identificando la levadura/bacterias utilizadas y un estilo base o los ingredientes/especificaciones/carácter objetivo de la cerveza.";
$styles_entry_text_28C = "El participante debe especificar el tipo de fruta, especia, hierba o madera utilizada. El participante debe especificar una descripción de la cerveza, identificando la levadura/bacterias utilizadas y un estilo base o los ingredientes/especificaciones/carácter objetivo de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
$styles_entry_text_29A = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de fruta utilizada. Las cervezas de frutas agrias que no son lambics deben inscribirse en la categoría de Cerveza Salvaje Americana.";
$styles_entry_text_29B = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de frutas y especias, hierbas o vegetales (SHV) utilizados; no es necesario especificar los ingredientes individuales de SHV si se utiliza una mezcla bien conocida de especias (por ejemplo, especias de pastel de manzana).";
$styles_entry_text_29C = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de fruta utilizada. El participante debe especificar el tipo de azúcar fermentable adicional o proceso especial empleado.";
$styles_entry_text_30A = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de especias, hierbas o vegetales utilizados; no es necesario especificar los ingredientes individuales si se utiliza una mezcla bien conocida de especias (por ejemplo, especias de pastel de manzana).";
$styles_entry_text_30B = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de especias, hierbas o vegetales utilizados; no es necesario especificar los ingredientes individuales si se utiliza una mezcla bien conocida de especias (por ejemplo, especias de pastel de calabaza). La cerveza debe contener especias y puede contener vegetales y/o azúcares.";
$styles_entry_text_30C = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de especias, azúcares, frutas o fermentables adicionales utilizados; no es necesario especificar los ingredientes individuales si se utiliza una mezcla bien conocida de especias (por ejemplo, especias para vino caliente).";
$styles_entry_text_31A = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de grano alternativo utilizado.";
$styles_entry_text_31B = "El participante debe especificar un estilo base; el estilo declarado no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de azúcar utilizado.";
$styles_entry_text_32A = "El participante debe especificar un estilo base de Estilo Clásico. El participante debe especificar el tipo de madera o humo si se nota un carácter varietal de humo.";
$styles_entry_text_32B = "El participante debe especificar un estilo base de cerveza; la cerveza base no tiene que ser un Estilo Clásico. El participante debe especificar el tipo de madera o humo si se nota un carácter varietal de humo. El participante debe especificar los ingredientes o procesos adicionales que hacen de esta una cerveza ahumada especial.";
$styles_entry_text_33A = "El participante debe especificar el tipo de madera utilizada y el nivel de carbón (si está carbonizada). El participante debe especificar el estilo base; el estilo base puede ser un estilo clásico del BJCP (es decir, una subcategoría con nombre) o puede ser un tipo genérico de cerveza (por ejemplo, porter, brown ale). Si se ha utilizado una madera inusual, el participante debe proporcionar una breve descripción de los aspectos sensoriales que la madera añade a la cerveza.";
$styles_entry_text_33B = "El participante debe especificar el carácter adicional del alcohol, con información sobre el barril si es relevante para el perfil de sabor final. El participante debe especificar el estilo base; el estilo base puede ser un estilo clásico del BJCP (es decir, una subcategoría con nombre) o puede ser un tipo genérico de cerveza (por ejemplo, porter, brown ale). Si se ha utilizado una madera o ingrediente inusual, el participante debe proporcionar una breve descripción de los aspectos sensoriales que los ingredientes añaden a la cerveza.";
$styles_entry_text_34A = "El participante debe especificar el nombre de la cerveza comercial que está clonando, las especificaciones (estadísticas vitales) de la cerveza y una breve descripción sensorial o una lista de ingredientes utilizados en la elaboración de la cerveza. Sin esta información, los jueces que no estén familiarizados con la cerveza no tendrán una base para compararla.";
$styles_entry_text_34B = "El participante debe especificar los estilos que se están mezclando. El participante puede proporcionar una descripción adicional del perfil sensorial de la cerveza o las estadísticas vitales de la cerveza resultante.";
$styles_entry_text_34C = "El participante debe especificar la naturaleza especial de la cerveza experimental, incluidos los ingredientes especiales o procesos que hacen que no encaje en otra parte de las guías. El participante debe proporcionar estadísticas vitales de la cerveza, y una breve descripción sensorial o una lista de ingredientes utilizados en la elaboración de la cerveza. Sin esta información, los jueces no tendrán una base para compararla.";
$styles_entry_text_M1A = "Instrucciones de Inscripción: Los participantes deben especificar el nivel de carbonatación y la fuerza. Se asume que la dulzura es SECA en esta categoría. Los participantes pueden especificar las variedades de miel.";
$styles_entry_text_M1B = "Los participantes deben especificar el nivel de carbonatación y la fuerza. Se asume que la dulzura es SEMI-DULCE en esta categoría. Los participantes PUEDEN especificar las variedades de miel.";
$styles_entry_text_M1C = "Los participantes DEBEN especificar el nivel de carbonatación y la fuerza. Se asume que la dulzura es DULCE en esta categoría. Los participantes PUEDEN especificar las variedades de miel.";
$styles_entry_text_M2A = "Los participantes deben especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes pueden especificar las variedades de miel. Los participantes pueden especificar las variedades de manzana utilizadas; si se especifica, se esperará un carácter varietal. Los productos con una proporción relativamente baja de miel deben inscribirse como una Sidra Especial. Un cyser especiado debe inscribirse como una Hidromiel de Frutas y Especias. Un cyser con otras frutas debe inscribirse como un Melomel. Un cyser con ingredientes adicionales debe inscribirse como una hidromiel experimental.";
$styles_entry_text_M2B = "Los participantes deben especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes pueden especificar las variedades de miel. Los participantes pueden especificar las variedades de uva utilizadas; si se especifica, se esperará un carácter varietal. Un pyment especiado (hippocras) debe inscribirse como una Hidromiel de Frutas y Especias. Un pyment hecho con otras frutas debe inscribirse como un Melomel. Un pyment con otros ingredientes debe inscribirse como una Hidromiel Experimental.";
$styles_entry_text_M2C = "Los participantes deben especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes pueden especificar las variedades de miel. Los participantes deben especificar las variedades de frutas utilizadas. Una hidromiel hecha con bayas y frutas que no sean bayas (incluidas manzanas y uvas) debe inscribirse como un Melomel. Una hidromiel de bayas que esté especiada debe inscribirse como una Hidromiel de Frutas y Especias. Una hidromiel de bayas que contenga otros ingredientes debe inscribirse como una Hidromiel Experimental.";
$styles_entry_text_M2D = "Los participantes deben especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes pueden especificar las variedades de miel. Los participantes deben especificar las variedades de frutas utilizadas. Una hidromiel de frutas con hueso que esté especiada debe inscribirse como una Hidromiel de Frutas y Especias. Una hidromiel de frutas con hueso que contenga frutas que no sean de hueso debe inscribirse como un Melomel. Una hidromiel de frutas con hueso que contenga otros ingredientes debe inscribirse como una Hidromiel Experimental.";
$styles_entry_text_M2E = "Los participantes deben especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes pueden especificar las variedades de miel. Los participantes deben especificar las variedades de frutas utilizadas. Un melomel especiado debe inscribirse como una Hidromiel de Frutas y Especias. Un melomel que contenga otros ingredientes debe inscribirse como una Hidromiel Experimental. Los melomels hechos con manzanas o uvas como la única fuente de frutas deben inscribirse como Cysers y Pyments, respectivamente. Los melomels con manzanas o uvas, además de otras frutas, deben inscribirse en esta categoría, no como Experimentales.";
$styles_entry_text_M3A = "Los participantes deben especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes pueden especificar las variedades de miel. Los participantes deben especificar los tipos de especias utilizadas (aunque las mezclas de especias bien conocidas pueden referirse por su nombre común, como las especias para pastel de manzana). Los participantes deben especificar los tipos de frutas utilizadas. Si solo se utilizan combinaciones de especias, inscríbela como una Hidromiel de Especias, Hierbas o Vegetales. Si solo se utilizan combinaciones de frutas, inscríbela como un Melomel. Si se utilizan otros tipos de ingredientes, inscríbela como una Hidromiel Experimental.";
$styles_entry_text_M3B = "Los participantes DEBEN especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes PUEDEN especificar las variedades de miel. Los participantes DEBEN especificar los tipos de especias utilizadas (aunque las mezclas de especias bien conocidas pueden referirse por su nombre común, como las especias para pastel de manzana).";
$styles_entry_text_M4A = "Los participantes DEBEN especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes PUEDEN especificar las variedades de miel. Los participantes PUEDEN especificar el estilo base o los tipos de malta utilizados. Los productos con una proporción relativamente baja de miel deben inscribirse en la categoría de Cervezas con Especias como una Cerveza con Miel.";
$styles_entry_text_M4B = "Los participantes DEBEN especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes PUEDEN especificar las variedades de miel. Los participantes DEBEN especificar la naturaleza especial de la hidromiel, proporcionando una descripción para los jueces si no hay una descripción disponible por parte del BJCP.";
$styles_entry_text_M4C = "Los participantes DEBEN especificar el nivel de carbonatación, la fuerza y la dulzura. Los participantes PUEDEN especificar las variedades de miel. Los participantes DEBEN especificar la naturaleza especial de la hidromiel, ya sea una combinación de estilos existentes, una hidromiel experimental o alguna otra creación. Cualquier ingrediente especial que imparta un carácter identificable PUEDE ser declarado.";
$styles_entry_text_C1E = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 categorías). Los participantes DEBEN indicar la variedad de pera(s) utilizada.";
$styles_entry_text_C2A = "Los participantes DEBEN especificar si la sidra fue fermentada en barrica o añejada. Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 niveles).";
$styles_entry_text_C2B = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 categorías). Los participantes DEBEN especificar todas las frutas y/o jugos de frutas añadidos.";
$styles_entry_text_C2C = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 niveles).";
$styles_entry_text_C2D = "Los participantes DEBEN especificar la gravedad inicial, la gravedad final o el azúcar residual, y el nivel de alcohol. Los participantes DEBEN especificar el nivel de carbonatación (3 niveles).";
$styles_entry_text_C2E = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 categorías). Los participantes DEBEN especificar todas las hierbas añadidas. Si se utilizan lúpulos, el participante debe especificar la(s) variedad(es) utilizada(s).";
$styles_entry_text_C2F = "Los participantes DEBEN especificar todos los ingredientes. Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 categorías).";

/**
 * ------------------------------------------------------------------------
 * User Edit Email
 * ------------------------------------------------------------------------
 */
$user_text_000 = "Se requiere una nueva dirección de correo electrónico y debe tener un formato válido.";
$user_text_001 = "Introduce la contraseña anterior.";
$user_text_002 = "Introduce la nueva contraseña.";
$user_text_003 = "Por favor, marca esta casilla si deseas continuar con el cambio de tu dirección de correo electrónico.";

/**
 * ------------------------------------------------------------------------
 * Voluntarios
 * ------------------------------------------------------------------------
 */
$volunteers_text_000 = "Si te has registrado,";
$volunteers_text_001 = "y luego elige <em>Editar Cuenta</em> en el menú Mi Cuenta indicado por el";
$volunteers_text_002 = "icono en el menú superior";
$volunteers_text_003 = "y";
$volunteers_text_004 = "Si <em>no</em> te has registrado y estás dispuesto a ser juez o asistente, por favor regístrate";
$volunteers_text_005 = "Como ya te has registrado,";
$volunteers_text_006 = "accede a tu cuenta";
$volunteers_text_007 = "para ver si te has ofrecido como voluntario para ser juez o asistente";
$volunteers_text_008 = "Si estás dispuesto a ser juez o asistente, por favor vuelve para registrarte a partir de";
$volunteers_text_009 = "Si deseas ser voluntario como miembro del personal del concurso, por favor regístrate o actualiza tu cuenta para indicar que deseas ser parte del personal del concurso.";
$volunteers_text_010 = "";

/**
 * ------------------------------------------------------------------------
 * Login
 * ------------------------------------------------------------------------
 */
$login_text_000 = "Ya has iniciado sesión.";
$login_text_001 = "No hay ninguna dirección de correo en el sistema que coincida con la que ingresaste.";
$login_text_002 = "¿Intentar de nuevo?";
$login_text_003 = "¿Has registrado tu cuenta?";
$login_text_004 = "¿Olvidaste tu contraseña?";
$login_text_005 = "Restablecerla";
$login_text_006 = "Para restablecer tu contraseña, introduce la dirección de correo electrónico que usaste al registrarte.";
$login_text_007 = "Verificar";
$login_text_008 = "Generado aleatoriamente.";
$login_text_009 = "<strong>No disponible.</strong> Tu cuenta fue creada por un administrador y tu &quot;respuesta secreta&quot; fue generada aleatoriamente. Por favor, contacta a un administrador del sitio web para recuperar o cambiar tu contraseña.";
$login_text_010 = "O, usa la opción de correo electrónico a continuación.";
$login_text_011 = "Tu pregunta de seguridad es...";
$login_text_012 = "Si no recibiste el correo electrónico,";
$login_text_013 = "Se te enviará un correo electrónico con tu pregunta y respuesta de verificación. Asegúrate de revisar tu carpeta de SPAM.";
$login_text_014 = "selecciona aquí para reenviarlo a";
$login_text_015 = "Si no puedes recordar la respuesta a tu pregunta de seguridad, contacta a un oficial del concurso o al administrador del sitio.";
$login_text_016 = "Haz que te lo envíen por correo a";

/**
 * ------------------------------------------------------------------------
 * Winners
 * ------------------------------------------------------------------------
 */
$winners_text_000 = "No se han ingresado ganadores para esta mesa. Por favor, vuelve más tarde.";
$winners_text_001 = "Aún no se han publicado las inscripciones ganadoras. Por favor, vuelve más tarde.";
$winners_text_002 = "La estructura de premios seleccionada es otorgar lugares por mesa. Selecciona los lugares de premiación para la mesa en su totalidad a continuación.";
$winners_text_003 = "La estructura de premios seleccionada es otorgar lugares por categoría. Selecciona los lugares de premiación para cada categoría general a continuación (puede haber más de una en esta mesa).";
$winners_text_004 = "La estructura de premios seleccionada es otorgar lugares por subcategoría. Selecciona los lugares de premiación para cada subcategoría a continuación (puede haber más de una en esta mesa).";

/**
 * ------------------------------------------------------------------------
 * Output
 * ------------------------------------------------------------------------
 */
$output_text_000 = "Gracias por participar en nuestro concurso";
$output_text_001 = "A continuación se muestra un resumen de tus inscripciones, puntuaciones y lugares.";
$output_text_002 = "Resumen para";
$output_text_003 = "inscripciones fueron evaluadas";
$output_text_004 = "Tus hojas de evaluación no pudieron generarse correctamente. Por favor, contacta a los organizadores del concurso.";
$output_text_005 = "No se han definido asignaciones de jueces/asistentes";
$output_text_006 = "para esta ubicación";
$output_text_007 = "Si deseas imprimir tarjetas de mesa en blanco, cierra esta ventana y selecciona <em>Imprimir Tarjetas de Mesa: Todas las Mesas</em> en el menú <em>Informes</em>.";
$output_text_008 = "Asegúrate de verificar si tu ID de Juez BJCP es correcto. Si no lo es, o si tienes uno y no está listado, por favor introdúcelo en el formulario.";
$output_text_009 = "Si tu nombre no aparece en la lista a continuación, firma en la(s) hoja(s) adjunta(s).";
$output_text_010 = "Para recibir crédito como juez, asegúrate de ingresar tu ID de Juez BJCP de manera correcta y legible.";
$output_text_011 = "No se han realizado asignaciones.";
$output_text_012 = "Total de inscripciones en esta ubicación";
$output_text_013 = "Ningún participante proporcionó notas para los organizadores.";
$output_text_014 = "A continuación se muestran las notas para los organizadores ingresadas por los jueces o asistentes.";
$output_text_015 = "Ningún participante proporcionó notas para los organizadores.";
$output_text_016 = "Inventario de Inscripciones Posterior a la Evaluación";
$output_text_017 = "Si no aparecen inscripciones a continuación, los vuelos en esta mesa no se han asignado a rondas.";
$output_text_018 = "Si faltan inscripciones, no se han asignado todas las inscripciones a un vuelo o ronda O se han asignado a una ronda diferente.";
$output_text_019 = "Si no hay inscripciones a continuación, esta mesa no ha sido asignada a una ronda.";
$output_text_020 = "No hay inscripciones elegibles.";
$output_text_021 = "Lista de Números de Inscripción / Números de Evaluación";
$output_text_022 = "Los puntos en este informe se derivan de los Requisitos Oficiales de Concursos Sancionados por el BJCP, disponibles en";
$output_text_023 = "incluye el Mejor de Show";
$output_text_024 = "Informe de Puntos BJCP";
$output_text_025 = "Total de Puntos de Personal Disponibles";
$output_text_026 = "Los estilos en esta categoría no son aceptados en este concurso.";
$output_text_027 = "enlace a las Guías de Estilo del Programa de Certificación de Jueces de Cerveza (BJCP)";

/**
 * ------------------------------------------------------------------------
 * Maintenance
 * ------------------------------------------------------------------------
 */
$maintenance_text_000 = "El administrador del sitio ha desconectado el sitio para realizar tareas de mantenimiento.";
$maintenance_text_001 = "Por favor, vuelve más tarde.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.10-2.1.13 Additions
 * ------------------------------------------------------------------------
 */
$label_entry_numbers = "Número(s) de Inscripción"; // Para correo de IPN de PayPal
$label_status = "Estado"; // Para correo de IPN de PayPal
$label_transaction_id = "ID de Transacción"; // Para correo de IPN de PayPal
$label_organization = "Organización";
$label_ttb = "Número de TTB";
$label_username = "Nombre de Usuario";
$label_from = "De"; // Para encabezados de correo
$label_to = "Para"; // Para encabezados de correo
$label_varies = "Varía";
$label_styles_accepted = "Estilos Aceptados";
$label_judging_styles = "Estilos de Evaluación";
$label_select_club = "Selecciona o Busca tu Club";
$label_select_style = "Selecciona o Busca el Estilo de tu Inscripción";
$label_select_country = "Selecciona o Busca tu País";
$label_select_dropoff = "Selecciona tu Método de Entrega de Inscripción";
$label_club_enter = "Ingresa el Nombre del Club";
$label_secret_05 = "¿Cuál es el apellido de soltera de tu abuela materna?";
$label_secret_06 = "¿Cuál era el primer nombre de tu primer novia o novio?";
$label_secret_07 = "¿Cuál era la marca y modelo de tu primer vehículo?";
$label_secret_08 = "¿Cuál era el apellido de tu profesor/a de tercer grado?";
$label_secret_09 = "¿En qué ciudad o pueblo conociste a tu pareja?";
$label_secret_10 = "¿Cuál era el primer nombre de tu mejor amigo/a en sexto grado?";
$label_secret_11 = "¿Cuál es el nombre de tu artista o grupo musical favorito?";
$label_secret_12 = "¿Cuál era tu apodo de la infancia?";
$label_secret_13 = "¿Cuál es el apellido del profesor que te dio tu primera calificación reprobatoria?";
$label_secret_14 = "¿Cuál es el nombre de tu amigo/a de la infancia favorito/a?";
$label_secret_15 = "¿En qué ciudad o pueblo se conocieron tu madre y tu padre?";
$label_secret_16 = "¿Cuál era el número de teléfono de tu infancia que recuerdas más, incluyendo el código de área?";
$label_secret_17 = "¿Cuál era tu lugar favorito para visitar cuando eras niño/a?";
$label_secret_18 = "¿Dónde estabas cuando diste tu primer beso?";
$label_secret_19 = "¿En qué ciudad o pueblo fue tu primer trabajo?";
$label_secret_20 = "¿En qué ciudad o pueblo estabas en el Año Nuevo de 2000?";
$label_secret_21 = "¿Cuál es el nombre de una universidad a la que aplicaste pero no asististe?";
$label_secret_22 = "¿Cuál era el primer nombre del chico o chica a quien besaste por primera vez?";
$label_secret_23 = "¿Cuál era el nombre de tu primer peluche, muñeca o figura de acción?";
$label_secret_24 = "¿En qué ciudad o pueblo conociste a tu esposo/a o pareja?";
$label_secret_25 = "¿En qué calle vivías en primer grado?";
$label_secret_26 = "¿Cuál es la velocidad del aire de una golondrina sin carga?";
$label_secret_27 = "¿Cuál es el nombre de tu programa de TV cancelado favorito?";
$label_pro = "Profesional";
$label_amateur = "Aficionado";
$label_hosted = "Organizado";
$label_edition = "Edición";
$label_pro_comp_edition = "Edición del Concurso Profesional";
$label_amateur_comp_edition = "Edición del Concurso Aficionado";
$label_optional_info = "Información Opcional";
$label_or = "O";
$label_admin_payments = "Pagos";
$label_payer = "Pagador";
$label_pay_with_paypal = "Pagar con PayPal";
$label_submit = "Enviar";
$label_id_verification_question = "Pregunta de Verificación de ID";
$label_id_verification_answer = "Respuesta de Verificación de ID";
$label_server = "Servidor";
$label_password_reset = "Restablecer Contraseña";
$label_id_verification_request = "Solicitud de Verificación de ID";
$label_new_password = "Nueva Contraseña";
$label_confirm_password = "Confirmar Contraseña";
$label_with_token = "Con Token";
$label_password_strength = "Fuerza de la Contraseña";
$label_entry_shipping = "Envío de Inscripción";
$label_jump_to = "Ir a...";
$label_top = "Parte Superior";
$label_bjcp_cider = "Juez Certificado de Sidra";
$header_text_112 = "No tienes suficientes privilegios de acceso para realizar esta acción.";
$header_text_113 = "Solo puedes editar la información de tu propia cuenta.";
$header_text_114 = "Como administrador, puedes cambiar la información de la cuenta de un usuario a través de Admin > Inscripciones y Participantes > Administrar Participantes.";
$header_text_115 = "Los resultados están publicados.";
$header_text_116 = "Si no recibes el correo electrónico en un tiempo razonable, revisa la carpeta de SPAM de tu cuenta de correo. Si no está allí, contacta a un oficial del concurso o administrador del sitio para restablecer tu contraseña.";
$alert_text_082 = "Dado que te inscribiste como juez o auxiliar, no se te permite añadir inscripciones a tu cuenta. Solo los representantes de una organización pueden añadir inscripciones a sus cuentas.";
$alert_text_083 = "No está disponible la adición y edición de inscripciones.";
$alert_text_084 = "Como Administrador, puedes añadir una inscripción a la cuenta de una organización usando el menú desplegable \"Añadir Inscripción Para...\" en Admin > Inscripciones y Participantes > Administrar Inscripciones.";
$alert_text_085 = "No podrás imprimir el papeleo de ninguna inscripción (etiquetas de botellas, etc.) hasta que el pago haya sido confirmado y esté marcado como \"pagado\" abajo.";
$brew_text_027 = "Este estilo de la Brewers Association requiere una declaración del cervecero sobre la naturaleza especial del producto. Consulta las <a href=\"https://www.brewersassociation.org/resources/brewers-association-beer-style-guidelines/\" target=\"_blank\">Guías de Estilo de la BA</a> para orientación específica.";
$brew_text_028 = "***NO REQUERIDO*** Añade información aquí que esté detallada en las guías de estilo como característica que PUEDES declarar.";
$brew_text_029 = "La edición por parte de administradores está deshabilitada. Tu perfil se considera un perfil personal y no de una organización, y por lo tanto, no es elegible para añadir inscripciones. Para añadir una inscripción para una organización, accede a la lista de Administrar Inscripciones y elige una organización desde el desplegable \"Añadir una Inscripción Para...\".";
$brew_text_030 = "leche / lactosa";
$brew_text_031 = "huevos";
$brew_text_032 = "pescado";
$brew_text_033 = "mariscos crustáceos";
$brew_text_034 = "frutos secos";
$brew_text_035 = "cacahuetes";
$brew_text_036 = "trigo";
$brew_text_037 = "soja";
$brew_text_038 = "¿Esta inscripción contiene posibles alérgenos alimentarios? Los alérgenos alimentarios comunes incluyen leche (incluyendo lactosa), huevos, pescado, mariscos, frutos secos, cacahuetes, trigo, soja, etc. Para estilos no cerveceros, especifica el gluten como alérgeno si algún fermentable puede contenerlo (por ejemplo, malta de cebada, trigo o centeno) o si se usó levadura cervecera.";
$brew_text_039 = "Por favor, especifica todos y cada uno de los posibles alérgenos.";
$brewer_text_022 = "Podrás identificar a un co-cervecero al agregar tus inscripciones.";
$brewer_text_023 = "Selecciona &quot;Ninguno&quot; si no estás afiliado a un club. Selecciona &quot;Otro&quot; si tu club no está en la lista - <strong>asegúrate de usar la barra de búsqueda</strong>.";
$brewer_text_024 = "Por favor, proporciona tu nombre.";
$brewer_text_025 = "Por favor, proporciona tu apellido.";
$brewer_text_026 = "Por favor, proporciona tu número de teléfono.";
$brewer_text_027 = "Por favor, proporciona tu dirección.";
$brewer_text_028 = "Por favor, proporciona tu ciudad.";
$brewer_text_029 = "Por favor, proporciona tu estado o provincia.";
$brewer_text_030 = "Por favor, proporciona tu código postal.";
$brewer_text_031 = "Por favor, selecciona tu país.";
$brewer_text_032 = "Por favor, proporciona el nombre de tu organización.";
$brewer_text_033 = "Por favor, elige una pregunta de seguridad.";
$brewer_text_034 = "Por favor, proporciona una respuesta a tu pregunta de seguridad.";
$brewer_text_035 = "¿Has aprobado el examen de Juez de Sidra del BJCP?";
$entry_info_text_047 = "Si el nombre de un estilo está enlazado, tiene requisitos de inscripción específicos. Selecciona o toca el nombre para acceder a los estilos de la Brewers Association listados en su sitio web.";
$brewer_entries_text_016 = "Estilo ingresado NO aceptado";
$brewer_entries_text_017 = "Las inscripciones no se mostrarán como recibidas hasta que el personal del concurso las haya marcado como tales en el sistema. Esto generalmente ocurre DESPUÉS de que todas las inscripciones hayan sido recolectadas de todas las ubicaciones de entrega y envío, y se hayan clasificado.";
$brewer_entries_text_018 = "No podrás imprimir el papeleo de esta inscripción (etiquetas de botellas, etc.) hasta que se haya marcado como pagada.";
$brewer_entries_text_019 = "La impresión del papeleo de la inscripción no está disponible en este momento.";
$brewer_entries_text_020 = "No está disponible la edición de esta inscripción. Esto puede deberse a varios factores (por ejemplo, la fecha límite para editar ha pasado o tu inscripción ya ha sido marcada como recibida, etc.). Si deseas editar esta inscripción, contacta con un oficial del concurso.";
if (SINGLE) $brewer_info_000 = "Hola";
else $brewer_info_000 = "Gracias por participar en el";
$brewer_info_001 = "Los detalles de tu cuenta fueron actualizados por última vez";
$brewer_info_002 = "Tómate un momento para <a href=\"#entries\">revisar tus inscripciones</a>";
$brewer_info_003 = "pagar tus tarifas de inscripción</a>";
$brewer_info_004 = "por inscripción";
$brewer_info_005 = "Se requiere una membresía de la American Iniciobrewers Association (AHA) si una de tus inscripciones es seleccionada para un Great American Beer Festival Pro-Am.";
$brewer_info_006 = "Imprime etiquetas de envío para adjuntar a tus cajas de botellas.";
$brewer_info_007 = "Imprimir Etiquetas de Envío";
$brewer_info_008 = "Ya has sido asignado a una mesa como";
$brewer_info_009 = "Si deseas cambiar tu disponibilidad o retirarte de tu rol, contacta al organizador del concurso o al coordinador de jueces.";
$brewer_info_010 = "Ya has sido asignado como";
$brewer_info_011 = "o";
$brewer_info_012 = "Imprimir tus etiquetas de hojas de puntuación de jueces";
$pay_text_030 = "Al seleccionar el botón &quot;Entiendo&quot; a continuación, serás dirigido a PayPal para realizar tu pago. Una vez que hayas <strong>completado</strong> tu pago, PayPal te redirigirá de nuevo a este sitio y te enviará un recibo de la transacción por correo electrónico. <strong>Si tu pago fue exitoso, tu estado de pago se actualizará automáticamente. Ten en cuenta que podrías necesitar esperar unos minutos para que el estado de pago se actualice.</strong> Asegúrate de refrescar la página de pago o acceder a tu lista de inscripciones.";
$pay_text_031 = "Estás a punto de salir de este sitio";
$pay_text_032 = "No es necesario realizar un pago. ¡Gracias!";
$pay_text_033 = "Tienes inscripciones no pagadas. Selecciona o toca para pagar tus inscripciones.";
$register_text_035 = "La información que proporciones más allá del nombre de tu organización es estrictamente para fines de mantenimiento de registros y contacto.";
$register_text_036 = "Una condición para inscribirte en el concurso es proporcionar esta información, incluida la dirección de correo electrónico y el número de teléfono de una persona de contacto. El nombre de tu organización puede mostrarse si una de tus inscripciones obtiene un lugar, pero no se hará pública ninguna otra información.";
$register_text_037 = "Confirmación de Registro";
$register_text_038 = "Un administrador ha registrado tu cuenta. A continuación se muestra la confirmación de la información ingresada:";
$register_text_039 = "Gracias por registrar una cuenta. A continuación se muestra la confirmación de la información que proporcionaste:";
$register_text_040 = "Si alguna de la información anterior es incorrecta,";
$register_text_041 = "inicia sesión en tu cuenta";
$register_text_042 = "y realiza los cambios necesarios. ¡Mucha suerte en el concurso!";
$register_text_043 = "Por favor, no respondas a este correo electrónico ya que se genera automáticamente. La cuenta de origen no está activa ni es monitoreada.";
$register_text_044 = "Por favor, proporciona un nombre de organización.";
$register_text_045 = "Proporciona un nombre de cervecería, brewpub, etc. Asegúrate de revisar la información del concurso para los tipos de bebidas aceptadas.";
$register_text_046 = "Solo para organizaciones en los EE. UU.";
$user_text_004 = "Asegúrate de usar letras mayúsculas y minúsculas, números y caracteres especiales para una contraseña más segura.";
$user_text_005 = "Tu dirección de correo electrónico actual es";
$login_text_017 = "Envíame la Respuesta a mi Pregunta de Seguridad por Correo Electrónico";
$login_text_018 = "Se requiere tu nombre de usuario (dirección de correo electrónico).";
$login_text_019 = "Se requiere tu contraseña.";
$login_text_020 = "El token proporcionado no es válido o ya ha sido utilizado. Usa nuevamente la función de olvido de contraseña para generar un nuevo token de restablecimiento de contraseña.";
$login_text_021 = "El token proporcionado ha caducado. Usa nuevamente la función de olvido de contraseña para generar un nuevo token de restablecimiento de contraseña.";
$login_text_022 = "El correo electrónico que ingresaste no está asociado con el token proporcionado. Inténtalo de nuevo.";
$login_text_023 = "Las contraseñas no coinciden. Inténtalo de nuevo.";
$login_text_024 = "Se requiere una contraseña de confirmación.";
$login_text_025 = "¿Olvidaste tu contraseña?";
$login_text_026 = "Ingresa la dirección de correo electrónico de tu cuenta y la nueva contraseña a continuación.";
$login_text_027 = "Tu contraseña ha sido restablecida exitosamente. Ahora puedes iniciar sesión con la nueva contraseña.";
$winners_text_005 = "El(los) ganador(es) de Mejor de Show aún no han sido publicados. Por favor, vuelve más tarde.";
$paypal_response_text_000 = "Tu pago ha sido completado. Los detalles de la transacción se proporcionan aquí para tu conveniencia.";
$paypal_response_text_001 = "Ten en cuenta que recibirás una comunicación oficial de PayPal en la dirección de correo electrónico que figura a continuación.";
$paypal_response_text_002 = "¡Mucha suerte en el concurso!";
$paypal_response_text_003 = "Por favor, no respondas a este correo electrónico ya que se genera automáticamente. La cuenta de origen no está activa ni es monitoreada.";
$paypal_response_text_004 = "PayPal ha procesado tu transacción.";
$paypal_response_text_005 = "El estado de tu pago con PayPal es:";
$paypal_response_text_006 = "La respuesta de PayPal fue &quot;inválida&quot;. Intenta realizar el pago de nuevo.";
$paypal_response_text_007 = "Contacta al organizador del concurso si tienes alguna pregunta.";
$paypal_response_text_008 = "Pago de PayPal no válido";
$paypal_response_text_009 = "Pago de PayPal";
$pwd_email_reset_text_000 = "Se hizo una solicitud para verificar la cuenta en el";
$pwd_email_reset_text_001 = "sitio web utilizando la función de verificación de correo electrónico de ID. Si no iniciaste esta solicitud, contacta al organizador del concurso.";
$pwd_email_reset_text_002 = "La respuesta de verificación de ID distingue entre mayúsculas y minúsculas.";
$pwd_email_reset_text_003 = "Se hizo una solicitud para cambiar tu contraseña en el";
$pwd_email_reset_text_004 = "sitio web. Si no iniciaste esto, no te preocupes. Tu contraseña no se puede restablecer sin el enlace a continuación.";
$pwd_email_reset_text_005 = "Para restablecer tu contraseña, selecciona el enlace a continuación o cópialo/pegalo en tu navegador.";
$best_brewer_text_000 = "cerveceros participantes";
$best_brewer_text_001 = "MH";
$best_brewer_text_002 = "Se han aplicado los puntajes y los desempates de acuerdo con la <a href=\"#\" data-toggle=\"modal\" data-target=\"#scoreMethod\">metodología de puntuación</a>. Los números reflejados están redondeados a la centésima. Pasa el cursor o toca el icono de signo de interrogación (<span class=\"fa fa-question-circle\"></span>) para ver el valor calculado real.";
$best_brewer_text_003 = "Metodología de Puntuación";
$best_brewer_text_004 = "Cada inscripción con lugar recibe los siguientes puntos:";
$best_brewer_text_005 = "Se han aplicado los siguientes desempates, en orden de prioridad:";
$best_brewer_text_006 = "El mayor número total de primeros, segundos y terceros lugares.";
$best_brewer_text_007 = "El mayor número total de primeros, segundos, terceros, cuartos (si corresponde), y menciones honoríficas.";
$best_brewer_text_008 = "El mayor número de primeros lugares.";
$best_brewer_text_009 = "El menor número de inscripciones.";
$best_brewer_text_010 = "La puntuación mínima más alta.";
$best_brewer_text_011 = "La puntuación máxima más alta.";
$best_brewer_text_012 = "El promedio de puntuación más alto.";
$best_brewer_text_013 = "No utilizado.";
$best_brewer_text_014 = "clubes participantes";
$dropoff_qualifier_text_001 = "Presta atención a las notas proporcionadas para cada ubicación de entrega. Podría haber fechas límite anteriores para algunas ubicaciones de entrega listadas, horas particulares en que se aceptan inscripciones, ciertas personas con las que dejar tus inscripciones, etc. <strong class=\"text-danger\">Todos los participantes son responsables de leer la información proporcionada por los organizadores para cada ubicación de entrega.</strong>";
$brewer_text_036 = "Dado que has elegido &quot;Otro&quot;, asegúrate de que el club que ingresaste no está en nuestra lista de alguna forma similar.";
$brewer_text_037 = "Por ejemplo, es posible que hayas ingresado el acrónimo de tu club en lugar del nombre completo.";
$brewer_text_038 = "Es esencial que los nombres de los clubes sean consistentes entre los usuarios para los cálculos de \"Mejor Club\" si se implementa en este concurso.";
$brewer_text_039 = "El club que ingresaste previamente no coincide con ninguno en nuestra lista.";
$brewer_text_040 = "Por favor, elige de la lista o elige &quot;Otro&quot; e ingresa el nombre de tu club.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.13 Additions
 * ------------------------------------------------------------------------
 */
$entry_info_text_048 = "Para asegurar una evaluación adecuada, el participante debe proporcionar información adicional sobre la bebida.";
$entry_info_text_049 = "Para asegurar una evaluación adecuada, el participante debe proporcionar el nivel de fuerza de la bebida.";
$entry_info_text_050 = "Para asegurar una evaluación adecuada, el participante debe proporcionar el nivel de carbonatación de la bebida.";
$entry_info_text_051 = "Para asegurar una evaluación adecuada, el participante debe proporcionar el nivel de dulzura de la bebida.";
$entry_info_text_052 = "Si se inscribe en esta categoría, el participante debe proporcionar más información para que la entrada sea evaluada con precisión. Cuanta más información, mejor.";
$output_text_028 = "Las siguientes inscripciones tienen posibles alérgenos, según lo ingresado por los participantes.";
$output_text_029 = "Ningún participante proporcionó información sobre alérgenos para sus inscripciones.";
$label_this_style = "Este Estilo";
$label_notes = "Notas";
$label_possible_allergens = "Posibles Alérgenos";
$label_please_choose = "Por Favor Elige";
$label_mead_cider_info = "Información de Hidromiel/Sidra";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.14 Additions
 * ------------------------------------------------------------------------
 */
$label_winners = "Ganadores";
$label_unconfirmed_entries = "Entradas no confirmadas";
$label_recipe = "Receta";
$label_view = "Ver";
$label_number_bottles = "Número de Botellas Requeridas por Entrada";
$label_pro_am = "Pro-Am";
$pay_text_034 = "Se ha alcanzado el límite de inscripciones pagadas; no se aceptan más pagos de inscripciones.";
$bottle_labels_000 = "No se pueden generar etiquetas en este momento.";
$bottle_labels_001 = "¡Asegúrate de revisar las reglas de aceptación de inscripciones del concurso para obtener pautas específicas sobre la colocación de etiquetas antes de enviar!";
$bottle_labels_002 = "Normalmente, se utiliza cinta de embalaje transparente para fijar la etiqueta al barril de cada entrada; cubre completamente la etiqueta.";
$bottle_labels_003 = "Normalmente, se utiliza una goma elástica para sujetar las etiquetas a cada entrada.";
if (isset($_SESSION['jPrefsBottleNum'])) $bottle_labels_004 = "Se proporcionan 4 etiquetas como cortesía. Este concurso requiere ".$_SESSION['jPrefsBottleNum']." botellas por entrada. Es posible que necesites imprimir varias páginas según el número de botellas requerido.";
else $bottle_labels_004 = "Se proporcionan 4 etiquetas como cortesía. Desecha cualquier etiqueta extra.";
$bottle_labels_005 = "Si faltan elementos, cierra esta ventana y edita la entrada. Es posible que necesites imprimir varias páginas según el número de botellas requerido.";
$bottle_labels_006 = "Espacio reservado para el uso del personal del concurso.";
$bottle_labels_007 = "ESTE FORMULARIO DE RECETA ES SOLO PARA TU REGISTRO - por favor NO incluyas una copia con tu envío.";
$brew_text_040 = "No es necesario especificar gluten como alérgeno para ningún estilo de cerveza; se asume que estará presente. Las cervezas sin gluten deben inscribirse en la categoría de Cerveza Sin Gluten (BA) o en la categoría de Cerveza de Grano Alternativo (BJCP).";
$brewer_text_041 = "¿Ya te han otorgado una oportunidad Pro-Am para competir en el próximo Great American Beer Festival Pro-Am Competition?";
$brewer_text_042 = "Si ya te han otorgado una Pro-Am o has formado parte del equipo de elaboración en alguna cervecería, indícalo aquí. Esto ayudará al personal del concurso y a los representantes de la cervecería Pro-Am (si aplica para este concurso) a seleccionar inscripciones Pro-Am de cerveceros que no hayan asegurado una.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.15 Additions
 * ------------------------------------------------------------------------
 */
$label_submitting = "Enviando";
$label_additional_info = "Entradas con Información Adicional";
$label_working = "Trabajando";
$output_text_030 = "Por favor, espera.";
$brewer_entries_text_021 = "Marca las entradas para imprimir sus etiquetas de botella/lata. Selecciona la casilla superior para marcar o desmarcar todas las casillas de la columna.";
$brewer_entries_text_022 = "Imprimir Etiquetas para Todas las Entradas Seleccionadas Arriba";
$brewer_entries_text_023 = "Las etiquetas se abrirán en una nueva pestaña o ventana.";
$brewer_entries_text_024 = "Imprimir Etiquetas de Entradas Seleccionadas";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.18 Additions
 * ------------------------------------------------------------------------
 */
$output_text_031 = "Presiona Esc para ocultar.";
$styles_entry_text_21X = "El participante DEBE especificar una intensidad (sesión: 3.0-5.0%, estándar: 5.0-7.5%, doble: 7.5-9.5%).";
$styles_entry_text_PRX4 = "El participante debe especificar los tipos de fruta(s) fresca(s) utilizadas.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.19 Additions
 * ------------------------------------------------------------------------
 */
$output_text_032 = "El conteo de entradas solo refleja los participantes que indicaron una ubicación en su perfil de cuenta. El número real de entradas puede ser mayor o menor.";
$brewer_text_043 = "O bien, ¿eres o has sido empleado en el personal de producción de alguna cervecería? Esto incluye puestos de cervecero, así como técnicos de laboratorio, equipo de bodegas, equipo de embotellado/enlatado, etc. Los empleados actuales y anteriores del personal de producción no son elegibles para participar en el concurso Pro-Am del Great American Beer Festival.";
$label_entrant_reg = "Registro de Participantes";
$sidebar_text_026 = "están en el sistema a partir de";
$label_paid_entries = "Entradas Pagadas";

/**
 * ------------------------------------------------------------------------
 * Version 2.2.0 Additions
 * ------------------------------------------------------------------------
 */
$alert_text_086 = "Internet Explorer no es compatible con BCOE&M. Las funciones y características no se mostrarán correctamente, y la experiencia no será óptima. Por favor, actualiza a un navegador más reciente.";
$alert_text_087 = "Para una experiencia óptima y para que todas las funciones y características se ejecuten correctamente, por favor habilita JavaScript para continuar usando este sitio. De lo contrario, podrían ocurrir comportamientos inesperados.";
$alert_text_088 = "La presentación de premios estará disponible públicamente después de que se publiquen los resultados.";
$alert_text_089 = "Los datos archivados no están disponibles.";
$brewer_entries_text_025 = "Ver o Imprimir hojas de puntuación de los jueces";
$brewer_info_013 = "Has sido asignado como juez.";
$brewer_info_014 = "Accede al Panel de Evaluación usando el botón de abajo para ingresar evaluaciones de las entradas que te han sido asignadas.";
$contact_text_004 = "Los organizadores del concurso no han especificado contactos.";
$label_thank_you = "Gracias";
$label_congrats_winners = "Felicitaciones a todos los ganadores de medallas";
$label_placing_entries = "Entradas premiadas";
$label_by_the_numbers = "Por los números";
$label_launch_pres = "Lanzar presentación de premios";
$label_entrants = "Participantes";
$label_judging_dashboard = "Panel de Evaluación";
$label_table_assignments = "Asignaciones de mesas";
$label_table = "Mesa";
$label_edit = "Editar";
$label_add = "Añadir";
$label_disabled = "Deshabilitado";
$label_judging_scoresheet = "Hoja de Evaluación";
$label_checklist_version = "Versión de Lista de Verificación";
$label_classic_version = "Versión Clásica";
$label_structured_version = "Versión Estructurada";
$label_submit_evaluation = "Enviar Evaluación";
$label_edit_evaluation = "Editar Evaluación";
$label_your_score = "Tu Puntuación";
$label_your_assigned_score = "Tu Puntuación Consensuada Ingresada";
$label_assigned_score = "Puntuación Consensuada";
$label_accepted_score = "Puntuación Oficial Aceptada";
$label_recorded_scores = "Puntuaciones Consensuadas Ingresadas";
$label_go = "Ir";
$label_go_back = "Regresar";
$label_na = "No Aplica";
$label_evals_submitted = "Evaluaciones Enviadas";
$label_evaluations = "Evaluaciones de Entradas";
$label_submitted_by = "Enviado Por";
$label_attention = "¡Atención!";
$label_unassigned_eval = "Evaluaciones No Asignadas";
$label_head_judge = "Juez Principal";
$label_lead_judge = "Juez Líder";
$label_mini_bos_judge = "Juez de Mini-BOS";
$label_view_my_eval = "Ver Mi Evaluación";
$label_view_other_judge_eval = "Ver la Evaluación de Otro Juez";
$label_place_awarded = "Lugar Otorgado";
$label_honorable_mention = "Mención Honorífica";
$label_places_awarded_table = "Lugares Otorgados en esta Mesa";
$label_places_awarded_duplicate = "Lugares Duplicados Otorgados en esta Mesa";

$evaluation_info_000 = "El conjunto de entradas para cada una de las mesas y vuelos que se te han asignado se detalla a continuación.";
$evaluation_info_001 = "Este concurso utiliza evaluación en cola. Si hay más de una pareja de jueces en tu mesa, evalúa la siguiente entrada en la cola establecida.";
$evaluation_info_002 = "Para garantizar una competición precisa y fluida, tú y tu(s) compañero(s) de juez SOLO deben evaluar las entradas en tu mesa que aún no hayan sido evaluadas. Consulta con tu organizador o coordinador de jueces si tienes alguna pregunta.";
$evaluation_info_003 = "En espera de la aceptación final por parte de un administrador del sitio.";
$evaluation_info_004 = "Tu puntuación consensuada ha sido ingresada.";
$evaluation_info_005 = "Esta entrada <strong>no</strong> forma parte de tu vuelo asignado.";
$evaluation_info_006 = "Edita según sea necesario.";
$evaluation_info_007 = "Para registrar una evaluación, selecciona entre las siguientes entradas con un botón azul de &quot;Agregar&quot;.";
$evaluation_info_008 = "Para registrar tu evaluación, selecciona el botón de Agregar correspondiente a la entrada. Solo están disponibles las mesas para las sesiones de evaluación pasadas y actuales.";
$evaluation_info_009 = "Has sido asignado como juez, pero no has sido asignado a ninguna mesa o vuelo en el sistema. Consulta con el organizador o coordinador de jueces.";
$evaluation_info_010 = "Esta entrada forma parte de tu vuelo asignado.";
$evaluation_info_011 = "Agregar una evaluación para una entrada no asignada a ti.";
$evaluation_info_012 = "Usa solo cuando te pidan evaluar una entrada que no te ha sido asignada en el sistema.";
$evaluation_info_013 = "Entrada no encontrada.";
$evaluation_info_014 = "Por favor, verifica el número de entrada de seis caracteres e inténtalo de nuevo.";
$evaluation_info_015 = "Asegúrate de que el número tenga 6 dígitos de longitud.";
$evaluation_info_016 = "No se han enviado evaluaciones.";
$evaluation_info_017 = "Las puntuaciones consensuadas ingresadas por los jueces no coinciden.";
$evaluation_info_018 = "Se necesita verificación para las siguientes entradas:";
$evaluation_info_019 = "Las siguientes entradas solo tienen una evaluación enviada:";
$evaluation_info_020 = "Tu Panel de Evaluación estará disponible"; // Puntuación omitida intencionalmente
$evaluation_info_021 = "para agregar evaluaciones a las entradas asignadas a ti"; // Puntuación omitida intencionalmente
$evaluation_info_022 = "La evaluación y el envío de evaluaciones están cerrados.";
$evaluation_info_023 = "Si tienes alguna pregunta, contacta al organizador del concurso o al coordinador de jueces.";
$evaluation_info_024 = "Has sido asignado a las siguientes mesas. <strong>Las listas de entradas para cada mesa solo se mostrarán para sesiones de evaluación <u>pasadas</u> y <u>actuales</u>.</strong>";
$evaluation_info_025 = "Jueces asignados a esta mesa:";
$evaluation_info_026 = "Todas las puntuaciones consensuadas ingresadas por los jueces coinciden.";
$evaluation_info_027 = "Entradas que has completado, o que un administrador ha ingresado en tu nombre, que no fueron asignadas a ti en el sistema.";
$evaluation_info_028 = "La sesión de evaluación ha terminado.";
$evaluation_info_029 = "Se han otorgado lugares duplicados en las siguientes mesas:";
$evaluation_info_030 = "Los administradores deberán ingresar cualquier entrada ganadora que quede.";
$evaluation_info_031 = "evaluaciones han sido añadidas por los jueces";
$evaluation_info_032 = "Se han enviado múltiples evaluaciones para una sola entrada por parte de un juez.";
$evaluation_info_033 = "Aunque es una ocurrencia inusual, una evaluación duplicada puede ser enviada debido a problemas de conectividad, etc. Una sola evaluación registrada para cada juez debe ser aceptada oficialmente; todas las demás deben ser eliminadas para evitar confusión entre los participantes.";
$evaluation_info_034 = "Al evaluar estilos de tipo especialidad, utiliza esta línea para comentar sobre las características únicas, como fruta, especias, fermentable, acidez, etc.";
$evaluation_info_035 = "Proporciona comentarios sobre el estilo, la receta, el proceso y el placer de beber. Incluye sugerencias útiles para el cervecero.";
if (isset($_SESSION['jPrefsScoreDispMax'])) $evaluation_info_036 = "Una o más puntuaciones de los jueces están fuera del rango de puntuación aceptable. El rango aceptable es de ".$_SESSION['jPrefsScoreDispMax']." puntos o menos.";
$evaluation_info_037 = "Todos los vuelos en esta mesa parecen estar completos.";
$evaluation_info_038 = "Como Juez Principal, es tu responsabilidad verificar que las puntuaciones consensuadas de cada entrada coincidan, asegurarte de que todas las puntuaciones de los jueces para cada entrada estén dentro del rango apropiado, y otorgar lugares a las entradas designadas.";
$evaluation_info_039 = "Entradas en esta mesa:";
$evaluation_info_040 = "Entradas puntuadas en esta mesa:";
$evaluation_info_041 = "Entradas puntuadas en tu vuelo:";
$evaluation_info_042 = "Tus entradas puntuadas:";

$evaluation_info_043 = "Jueces con evaluaciones en esta mesa:";
$label_submitted = "Enviado";
$label_ordinal_position = "Posición ordinal en el vuelo";
$label_alcoholic = "Alcohólico";
$descr_alcoholic = "El aroma, sabor y efecto cálido del etanol y los alcoholes superiores. A veces descrito como &quot;caliente&quot;.";
$descr_alcoholic_mead = "El efecto del etanol. Cálido. Caliente.";
$label_metallic = "Metálico";
$descr_metallic = "Sabor a hojalata, moneda, cobre, hierro o similar a la sangre.";
$label_oxidized = "Oxidado";
$descr_oxidized = "Cualquiera de los siguientes o una combinación: rancio, aroma y sabor a vino, cartón, papel o jerez. Rancio.";
$descr_oxidized_cider = "Sabor rancio, aroma/sabor a jerez, pasas o fruta magullada.";
$label_phenolic = "Fenólico";
$descr_phenolic = "Especiado (clavo, pimienta), ahumado, plástico, cinta adhesiva o medicinal (clorofenólico).";
$label_vegetal = "Vegetal";
$descr_vegetal = "Aroma y sabor a verdura cocida, enlatada o podrida (col, cebolla, apio, espárragos, etc.).";
$label_astringent = "Astringente";
$descr_astringent = "Sensación de sequedad o aspereza que permanece en el final/postgusto; áspero, granulado o a cáscara.";
$descr_astringent_cider = "Una sensación de sequedad en la boca, similar a masticar una bolsita de té. Debe estar en equilibrio si está presente.";
$label_acetaldehyde = "Acetaldehído";
$descr_acetaldehyde = "Aroma y sabor a manzana verde.";
$label_diacetyl = "Diacetilo";
$descr_diacetyl = "Aroma y sabor a mantequilla artificial, caramelo o toffee. A veces percibido como una sensación resbaladiza en la lengua.";
$descr_diacetyl_cider = "Aroma o sabor a mantequilla o caramelo.";
$label_dms = "DMS (Sulfuro de Dimetilo)";
$descr_dms = "A niveles bajos, un aroma y sabor dulce a maíz cocido o enlatado.";
$label_estery = "Éster";
$descr_estery = "Aroma y/o sabor a cualquier éster (frutas, sabor a frutas o rosas).";
$label_grassy = "Herbáceo";
$descr_grassy = "Aroma/sabor a césped recién cortado o hojas verdes.";
$label_light_struck = "Luz-Impactado";
$descr_light_struck = "Similar al aroma de un zorrillo.";
$label_musty = "Mohoso";
$descr_musty = "Aromas/sabores rancios, mohosos o a humedad.";
$label_solvent = "Disolvente";
$descr_solvent = "Aromas y sabores de alcoholes superiores (alcoholes fusel). Similar a los aromas de acetona o diluyente de laca.";
$label_sour_acidic = "Agrio/Ácido";
$descr_sour_acidic = "Acidez en aroma y sabor. Puede ser agudo y limpio (ácido láctico) o similar al vinagre (ácido acético).";
$label_sulfur = "Azufre";
$descr_sulfur = "El aroma a huevos podridos o cerillas quemadas.";
$label_sulfury = "Azufrado";
$label_yeasty = "Alevadura";
$descr_yeasty = "Un aroma o sabor a pan, azufrado o de levadura.";
$label_acetified = "Acetificado (Acidez Volátil, VA)";
$descr_acetified = "Acetato de etilo (disolvente, quitaesmalte) o ácido acético (vinagre, áspero en la parte posterior de la garganta).";
$label_acidic = "Ácido";
$descr_acidic = "Sabor agrio-ácido. Típicamente de uno de varios ácidos: málico, láctico o cítrico. Debe estar en equilibrio.";
$descr_acidic_mead = "Sabor/aroma agrio y limpio debido a un pH bajo. Típicamente de uno de varios ácidos: málico, láctico, glucónico o cítrico.";
$label_bitter = "Amargo";
$descr_bitter = "Un sabor agudo que es desagradable a niveles altos.";
$label_farmyard = "De Granja";
$descr_farmyard = "Sabor a estiércol (vaca o cerdo) o a establo (caballo en un día caluroso).";
$label_fruity = "A Frutas";
$descr_fruity = "El aroma y sabor de frutas frescas que puede ser apropiado en algunos estilos y no en otros.";
$descr_fruity_mead = "Ésteres de sabor y aroma que a menudo provienen de frutas en un melomel. Plátano y piña a menudo son sabores no deseados.";
$label_mousy = "Ratón";
$descr_mousy = "Sabor evocador del olor de una guarida/caja de roedores.";
$label_oaky = "A Roble";
$descr_oaky = "Un sabor o aroma debido a un largo tiempo en barrica o con astillas de madera. &quot;Carácter de barrica&quot;.";
$label_oily_ropy = "Aceitoso/Viscoso";
$descr_oily_ropy = "Un brillo en apariencia visual, como un carácter viscoso desagradable que progresa a un carácter viscoso.";
$label_spicy_smoky = "Especiado/Ahumado";
$descr_spicy_smoky = "Especias, clavo, ahumado, jamón.";
$label_sulfide = "Sulfuro";
$descr_sulfide = "Huevos podridos, debido a problemas de fermentación.";
$label_sulfite = "Sulfito";
$descr_sulfite = "Cerillas quemadas, debido a un exceso de sulfitado reciente.";
$label_sweet = "Dulce";
$descr_sweet = "Sabor básico del azúcar. Debe estar en equilibrio si está presente.";
$label_thin = "Aguado";
$descr_thin = "Aguado. Falta de cuerpo o &quot;sustancia&quot;.";
$label_acetic = "Acético";
$descr_acetic = "Sabor a vinagre, ácido acético, agudo.";
$label_chemical = "Químico";
$descr_chemical = "Sabor a vitamina, nutriente o químico.";
$label_cloying = "Empalagoso";
$descr_cloying = "Almíbarado, excesivamente dulce, desequilibrado por el ácido/tanino.";
$label_floral = "Floral";
$descr_floral = "El aroma de flores o perfume.";
$label_moldy = "Mojoso";
$descr_moldy = "Aromas/sabores rancios, mohosos o de corcho.";
$label_tannic = "Tánico";
$descr_tannic = "Sensación astringente de sequedad que produce un sabor similar al de un té fuerte no endulzado o al masticar una piel de uva.";
$label_waxy = "Ceroso";
$descr_waxy = "Similar a cera, sebo, graso.";
$label_medicinal = "Medicinal";
$label_spicy = "Especiado";
$label_vinegary = "Avinagrado";
$label_plastic = "Plástico";
$label_smoky = "Ahumado";
$label_inappropriate = "Inapropiado";
$label_possible_points = "Puntos posibles";
$label_malt = "Malta";
$label_ferm_char = "Carácter de la Fermentación";
$label_body = "Cuerpo";
$label_creaminess = "Cremosidad";
$label_astringency = "Astringencia";
$label_warmth = "Calidez";
$label_appearance = "Apariencia";
$label_flavor = "Sabor";
$label_mouthfeel = "Sensación en Boca";
$label_overall_impression = "Impresión General";
$label_balance = "Equilibrio";
$label_finish_aftertaste = "Final/Postgusto";
$label_hoppy = "Lupulado";
$label_malty = "Maltoso";
$label_comments = "Comentarios";
$label_flaws = "Defectos del Estilo";
$label_flaw = "Defecto";
$label_flawless = "Sin Defectos";
$label_significant_flaws = "Defectos Significativos";
$label_classic_example = "Ejemplo Clásico";
$label_not_style = "Fuera de Estilo";
$label_tech_merit = "Mérito Técnico";
$label_style_accuracy = "Precisión Estilística";
$label_intangibles = "Intangibles";
$label_wonderful = "Maravilloso";
$label_lifeless = "Sin Vida";
$label_feedback = "Retroalimentación";
$label_honey = "Miel";
$label_alcohol = "Alcohol";
$label_complexity = "Complejidad";
$label_viscous = "Viscoso";
$label_legs = "Piernas"; // Se utiliza para describir el líquido que se adhiere al vaso
$label_clarity = "Claridad";
$label_brilliant = "Brillante";
$label_hazy = "Nublado";
$label_opaque = "Opaco";
$label_fruit = "Fruta";
$label_acidity = "Acidez";
$label_tannin = "Tanino";
$label_white = "Blanco";
$label_straw = "Paja";
$label_yellow = "Amarillo";
$label_gold = "Oro";
$label_copper = "Cobre";
$label_quick = "Rápido";
$label_long_lasting = "Duradero";
$label_ivory = "Marfil";
$label_beige = "Beige";
$label_tan = "Bronceado";
$label_lacing = "Encaje";
$label_particulate = "Partículas";
$label_black = "Negro";
$label_large = "Grande";
$label_small = "Pequeño";
$label_size = "Tamaño";
$label_retention = "Retención";
$label_head = "Espuma";
$label_head_size = "Tamaño de la Espuma";
$label_head_retention = "Retención de la Espuma";
$label_head_color = "Color de la Espuma";
$label_brettanomyces = "Brettanomyces";
$label_cardboard = "Cartón";
$label_cloudy = "Nublado";
$label_sherry = "Jerez";
$label_harsh = "Áspero";
$label_harshness = "Aspereza";
$label_full = "Completo";
$label_suggested = "Sugerido";
$label_lactic = "Láctico";
$label_smoke = "Humo";
$label_spice = "Especias";
$label_vinous = "Vinoso";
$label_wood = "Madera";
$label_cream = "Crema";
$label_flat = "Chato";
$label_descriptor_defs = "Definiciones de Descriptores";
$label_outstanding = "Sobresaliente";
$descr_outstanding = "Ejemplo de clase mundial del estilo.";
$label_excellent = "Excelente";
$descr_excellent = "Ejemplifica bien el estilo, requiere pequeños ajustes.";
$label_very_good = "Muy Bueno";
$descr_very_good = "Generalmente dentro de los parámetros del estilo, con algunos defectos menores.";
$label_good = "Bueno";
$descr_good = "Falla en algunos aspectos del estilo y/o tiene defectos menores.";
$label_fair = "Regular";
$descr_fair = "Sabores/aromas defectuosos o deficiencias importantes en el estilo. Desagradable.";
$label_problematic = "Problemático";
$descr_problematic = "Defectos importantes en sabores y aromas. Difícil de beber.";

/**
 * ------------------------------------------------------------------------
 * Version 2.3.0 Additions
 * ------------------------------------------------------------------------
 */
$winners_text_006 = "Nota: los resultados de esta mesa pueden estar incompletos debido a la falta de información de la entrada o del estilo.";
$label_elapsed_time = "Tiempo Transcurrido";
$label_judge_score = "Puntuación del Juez";
$label_judge_consensus_scores = "Puntuación de consenso del juez";
$label_your_consensus_score = "Tu puntuación de consenso";
$label_score_range_status = "Estado del Rango de Puntuación";
$label_consensus_caution = "Precaución de Consenso";
$label_consensus_match = "Coincidencia de Consenso";
$label_score_range_caution = "Precaución en el Rango de Puntuación de los Jueces";
$label_score_range_ok = "Rango de Puntuación de los Jueces Aceptable";
$label_auto_log_out = "Cierre de Sesión Automático en";
$label_place_previously_selected = "Lugar Seleccionado Previamente";
$label_entry_without_eval = "Entrada Sin Evaluación";
$label_entries_with_eval = "Entradas Con Evaluación";
$label_entries_without_eval = "Entradas Sin Evaluación";
$label_judging_close = "Cierre de Evaluación";
$label_session_expire = "La Sesión Está Por Expirar";
$label_refresh = "Actualizar Esta Página";
$label_stay_here = "Permanecer Aquí";
$label_bottle_inspection = "Inspección de Botellas";
$label_bottle_inspection_comments = "Comentarios de la Inspección de Botellas";
$label_consensus_no_match = "Las Puntuaciones de Consenso No Coinciden";
$label_score_below_courtesy = "La Puntuación Ingresada Está Por Debajo del Umbral de Cortesía";
$label_score_greater_50 = "La Puntuación Ingresada Es Mayor Que 50";
$label_score_out_range = "La Puntuación Está Fuera del Rango";
$label_score_range = "Rango de Puntuación";
$label_ok = "OK";
$label_esters = "Ésteres";
$label_phenols = "Fenoles";
$label_descriptors = "Descriptores";
$label_grainy = "Granuloso";
$label_caramel = "Caramelo";
$label_bready = "A Pan";
$label_rich = "Rico";
$label_dark_fruit = "Fruta Oscura";
$label_toasty = "Tostado";
$label_roasty = "Ahumado";
$label_burnt = "Quemado";
$label_citrusy = "Cítrico";
$label_earthy = "Terroso";
$label_herbal = "Herbal";
$label_piney = "A Pino";
$label_woody = "A Madera";
$label_apple_pear = "Manzana/Pera";
$label_banana = "Plátano";
$label_berry = "Frutos Rojos";
$label_citrus = "Cítrico";
$label_dried_fruit = "Fruta Seca";
$label_grape = "Uva";
$label_stone_fruit = "Fruta de Hueso";
$label_even = "Uniforme";
$label_gushed = "Gaseado";
$label_hot = "Caliente";
$label_slick = "Resbaladizo";
$label_finish = "Final";
$label_biting = "Picante";
$label_drinkability = "Bebestibilidad";
$label_bouquet = "Bouquet";
$label_of = "De";
$label_fault = "Fallo";
$label_weeks = "Semanas";
$label_days = "Días";
$label_scoresheet = "Hoja de Puntuación";
$label_beer_scoresheet = "Hoja de Puntuación de Cerveza";
$label_cider_scoresheet = "Hoja de Puntuación de Sidra";
$label_mead_scoresheet = "Hoja de Puntuación de Hidromiel";
$label_consensus_status = "Estado del Consenso";
$evaluation_info_044 = "Tu puntuación de consenso no coincide con la de los demás jueces.";
$evaluation_info_045 = "La puntuación de consenso ingresada coincide con la de los jueces anteriores.";
$evaluation_info_046 = "La diferencia de puntuación es mayor que";
$evaluation_info_047 = "La diferencia de puntuación está dentro del rango aceptable.";
$evaluation_info_048 = "El lugar que especificaste ya ha sido ingresado para la mesa. Por favor, elige otro lugar o ninguno (Ninguno).";
$evaluation_info_049 = "Estas entradas no tienen al menos una evaluación";
$evaluation_info_050 = "Por favor, proporciona la posición ordinal de la entrada en el vuelo.";
$evaluation_info_051 = "Por favor, proporciona el número total de entradas en el vuelo.";
$evaluation_info_052 = "Tamaño apropiado, tapa, nivel de llenado, remoción de la etiqueta, etc.";
$evaluation_info_053 = "La puntuación de consenso es la puntuación final acordada por todos los jueces que evaluaron la entrada. Si la puntuación de consenso es desconocida en este momento, ingresa tu propia puntuación. Si la puntuación de consenso ingresada aquí difiere de la de otros jueces, se te notificará.";
$evaluation_info_054 = "Esta entrada avanzó a una ronda mini-BOS.";
$evaluation_info_055 = "La puntuación de consenso que ingresaste no coincide con la de los jueces anteriores para esta entrada. Por favor, consulta con los demás jueces y ajusta tu puntuación de consenso según sea necesario.";
$evaluation_info_056 = "La puntuación que ingresaste está por debajo de 13, <a href=\"https://www.bjcp.org/cep/GreatBeerJudging.pdf\" target=\"_blank\">un umbral de cortesía comúnmente conocido para jueces BJCP</a>. Por favor, consulta con otros jueces y ajusta tu puntuación según sea necesario.";
$evaluation_info_057 = "Las puntuaciones no deben ser inferiores a 5 ni superiores a 50.";
$evaluation_info_058 = "La puntuación que ingresaste es mayor que 50, la puntuación máxima para cualquier entrada. Por favor, revisa y ajusta tu puntuación de consenso.";
$evaluation_info_059 = "La puntuación que proporcionaste para esta entrada está fuera del rango de diferencia de puntuaciones entre jueces.";
$evaluation_info_060 = "caracteres máximo";
$evaluation_info_061 = "Por favor, proporciona comentarios.";
$evaluation_info_062 = "Por favor, elige un descriptor.";
$evaluation_info_063 = "Terminaría esta muestra.";
$evaluation_info_064 = "Bebería una pinta de esta cerveza.";
$evaluation_info_065 = "Pagaría por esta cerveza.";
$evaluation_info_066 = "Recomendaría esta cerveza.";
$evaluation_info_067 = "Por favor, proporciona una calificación.";
$evaluation_info_068 = "Por favor, proporciona la puntuación de consenso - mínimo de 5, máximo de 50.";
$evaluation_info_069 = "Al menos dos jueces del vuelo en el que se ingresó tu muestra llegaron a un consenso sobre tu puntuación final asignada. No es necesariamente un promedio de las puntuaciones individuales.";
$evaluation_info_070 = "Basado en la hoja de puntuación del BJCP para";
$evaluation_info_071 = "Han pasado más de 15 minutos.";
$evaluation_info_072 = "Por defecto, el Cierre de Sesión Automático se extiende a 30 minutos para las evaluaciones de entradas.";
$alert_text_090 = "Tu sesión expirará en dos minutos. Puedes permanecer en la página actual para terminar tu trabajo antes de que el tiempo expire, actualizar esta página para continuar con tu sesión actual (es posible que se pierdan los datos no guardados del formulario) o cerrar sesión.";
$alert_text_091 = "Tu sesión expirará en 30 segundos. Puedes actualizar para continuar con tu sesión actual o cerrar sesión.";
$alert_text_092 = "Debe definirse al menos una sesión de evaluación para agregar una mesa.";

$brewer_entries_text_026 = "Las hojas de puntuación de los jueces para esta entrada están en varios formatos. Cada formato contiene una o más evaluaciones válidas de esta entrada.";

// Update QR text
$qr_text_008 = "Para registrar entradas mediante un código QR, proporciona la contraseña correcta. Solo necesitarás proporcionar la contraseña una vez por sesión; asegúrate de mantener el navegador o la aplicación de escaneo de códigos QR abiertos.";
$qr_text_015 = "Escanea el siguiente código QR. Cierra esta pestaña del navegador si lo deseas.<br><br>Para sistemas operativos más recientes, accede a la aplicación de cámara de tu dispositivo móvil. Para sistemas operativos más antiguos, inicia/regresa a la aplicación de escaneo.";
$qr_text_017 = "El escaneo de códigos QR está disponible de forma nativa en la mayoría de los sistemas operativos móviles modernos. Simplemente apunta la cámara hacia el código QR en la etiqueta de la botella y sigue las indicaciones. Para sistemas operativos móviles más antiguos, se requiere una aplicación de escaneo de códigos QR para utilizar esta función.";
$qr_text_018 = "Escanea un código QR ubicado en la etiqueta de una botella, ingresa la contraseña requerida y registra la entrada.";

/**
 * ------------------------------------------------------------------------
 * Version 2.3.2 Additions
 * ------------------------------------------------------------------------
 */

 $label_select_state = "Selecciona o busca tu estado";
 $label_select_below = "Selecciona abajo";
 $output_text_033 = "Al enviar tu informe al BJCP, es posible que no todos los de la lista del personal reciban puntos. Se sugiere que asignes puntos primero a aquellos con IDs del BJCP.";
 $styles_entry_text_PRX3 = "El participante debe especificar la variedad de uvas o mosto de uva utilizados.";
 $styles_entry_text_C1A = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (5 categorías). Si la OG está sustancialmente por encima del rango típico, el participante debe explicar, por ejemplo, si una variedad particular de manzana proporciona jugo de alta gravedad.";
 $styles_entry_text_C1B = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (de seco a medio-dulce, 4 niveles). Los participantes PUEDEN especificar la variedad de manzana para una sidra de una sola variedad; si se especifica, se esperará el carácter varietal.";
 $styles_entry_text_C1C = "Los participantes DEBEN especificar el nivel de carbonatación (3 niveles). Los participantes DEBEN especificar el nivel de dulzura (solo de medio a dulce, 3 niveles). Los participantes PUEDEN especificar la variedad de manzana para una sidra de una sola variedad; si se especifica, se esperará el carácter varietal.";
 $winners_text_007 = "No hay entradas ganadoras en esta mesa."; 

/**
 * ------------------------------------------------------------------------
 * Version 2.4.0 Additions
 * ------------------------------------------------------------------------
 */
$label_entries_to_judge = "Entradas a Evaluar";
$evaluation_info_073 = "Si has cambiado o agregado algún elemento o comentario en esta hoja de evaluación, los datos pueden perderse si sales de esta página.";
$evaluation_info_074 = "Si HAS realizado cambios, cierra este cuadro de diálogo, desplázate hasta el final de la hoja de evaluación y selecciona Enviar Evaluación.";
$evaluation_info_075 = "Si NO has realizado cambios, selecciona el botón azul del Panel de Evaluación de Jueces a continuación.";
$evaluation_info_076 = "Comenta sobre el malteado, lúpulo, ésteres y otros aromas.";
$evaluation_info_077 = "Comenta sobre el color, claridad y la espuma (retención, color y textura).";
$evaluation_info_078 = "Comenta sobre el malteado, lúpulo, características de fermentación, equilibrio, final/sabor residual y otras características de sabor.";
$evaluation_info_079 = "Comenta sobre el cuerpo, carbonatación, calidez, cremosidad, astringencia y otras sensaciones en el paladar.";
$evaluation_info_080 = "Comenta sobre el placer general de beber esta entrada, da sugerencias para mejorar.";
if ((isset($_SESSION['prefsStyleSet'])) && ($_SESSION['prefsStyleSet'] == "BJCP2021")) {
    $styles_entry_text_21B = "El participante DEBE especificar una fortaleza (sesión, estándar, doble); si no se especifica una fortaleza, se asumirá que es estándar. El participante DEBE especificar el tipo específico de IPA Especial del listado de Tipos Definidos Actuales identificados en las Guías de Estilo, o como lo indiquen los Estilos Provisionales en el sitio web del BJCP; O el participante DEBE describir el tipo de IPA Especial y sus características clave en el formulario de comentarios para que los jueces sepan qué esperar. Los participantes PUEDEN especificar las variedades de lúpulo utilizadas, si creen que los jueces no reconocerán las características varietales de los lúpulos más nuevos. Los participantes PUEDEN especificar una combinación de tipos de IPA definidos (por ejemplo, IPA Negra con Centeno) sin proporcionar descripciones adicionales.";
    $styles_entry_text_24C = "El participante DEBE especificar rubia, ámbar o marrón Bière de Garde.";
    $styles_entry_text_25B = "El participante DEBE especificar la fortaleza (mesa, estándar, súper) y el color (pálido, oscuro). El participante PUEDE identificar los granos característicos utilizados.";
    $styles_entry_text_27A = "Categoría para otras cervezas históricas que NO han sido definidas por el BJCP. El participante DEBE proporcionar una descripción para los jueces del estilo histórico que NO es uno de los ejemplos de estilo histórico actualmente definidos por el BJCP. Ejemplos actualmente definidos: Kellerbier, Kentucky Common, Lichtenhainer, London Brown Ale, Piwo Grodziskie, Lager Pre-Prohibición, Porter Pre-Prohibición, Roggenbier, Sahti. Si se ingresa una cerveza solo con el nombre del estilo y sin descripción, es muy poco probable que los jueces sepan cómo evaluarla.";
    $styles_entry_text_28A = "El participante DEBE especificar ya sea un Estilo Base o proporcionar una descripción de los ingredientes, especificaciones o carácter deseado. El participante PUEDE especificar las cepas de Brett utilizadas.";
    $styles_entry_text_28B = "El participante DEBE especificar una descripción de la cerveza, identificando la levadura o bacterias utilizadas y ya sea un Estilo Base, o los ingredientes, especificaciones o carácter deseado de la cerveza.";
    $styles_entry_text_28C = "El participante DEBE especificar cualquier Ingrediente de Tipo Especial (por ejemplo, fruta, especia, hierba o madera) utilizado. El participante DEBE especificar ya sea una descripción de la cerveza, identificando la levadura o bacterias utilizadas y ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_29A = "El participante DEBE especificar el tipo(s) de fruta utilizada. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos. Las cervezas con frutas basadas en un Estilo Clásico deben ingresarse en este estilo, excepto Lambic.";
    $styles_entry_text_29B = "El participante debe especificar el tipo de fruta, y el tipo de SHV utilizado; no es necesario especificar ingredientes individuales de SHV si se utiliza una mezcla de especias bien conocida (por ejemplo, especias de pastel de manzana). El participante debe especificar una descripción de la cerveza, ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_29C = "El participante DEBE especificar el tipo de fruta utilizada. El participante DEBE especificar el tipo de ingrediente adicional (según la introducción) o el proceso especial empleado. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_29D = "El participante DEBE especificar el tipo de uva utilizada. El participante PUEDE proporcionar información adicional sobre el estilo base o los ingredientes característicos.";
    $styles_entry_text_30A = "El participante DEBE especificar el tipo de especias, hierbas o vegetales utilizados, pero no es necesario especificar ingredientes individuales si se utiliza una mezcla de especias bien conocida (por ejemplo, especias de pastel de manzana, curry en polvo, chile en polvo). El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_30B = "El participante DEBE especificar el tipo de especias, hierbas o vegetales utilizados; no es necesario especificar ingredientes individuales si se utiliza una mezcla bien conocida de especias (por ejemplo, especias de pastel de calabaza). El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_30C = "El participante DEBE especificar el tipo de especias, azúcares, frutas o fermentables adicionales utilizados; no es necesario especificar ingredientes individuales si se utiliza una mezcla bien conocida de especias (por ejemplo, especias para vino caliente). El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_30D = "El participante DEBE especificar el tipo de SHVs utilizados, pero no es necesario especificar ingredientes individuales si se utiliza una mezcla de especias bien conocida (por ejemplo, especias de pastel de manzana, curry en polvo, chile en polvo). El participante DEBE especificar el tipo de ingrediente adicional (según la introducción) o el proceso especial empleado. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_31A = "El participante debe especificar el tipo de grano alternativo utilizado. El participante debe especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_31B = "El participante DEBE especificar el tipo de azúcar utilizado. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_32A = "El participante DEBE especificar un Estilo Base. El participante DEBE especificar el tipo de madera o humo si se nota un carácter ahumado varietal.";
    $styles_entry_text_32B = "El participante DEBE especificar el tipo de madera o humo si se nota un carácter ahumado varietal. El participante DEBE especificar los ingredientes o procesos adicionales que hacen que esta sea una cerveza ahumada especial. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un estilo base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_33A = "El participante DEBE especificar el tipo de madera utilizada y el nivel de tostado o carbonización (si se utiliza). Si se utiliza una madera varietal inusual, el participante DEBE proporcionar una breve descripción de los aspectos sensoriales que la madera aporta a la cerveza. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_33B = "El participante DEBE especificar el carácter adicional de alcohol, con información sobre el barril si es relevante para el perfil de sabor final. Si se ha utilizado una madera o ingrediente inusual, el participante DEBE proporcionar una breve descripción de los aspectos sensoriales que los ingredientes aportan a la cerveza. El participante DEBE especificar una descripción de la cerveza, identificando ya sea un Estilo Base o los ingredientes, especificaciones o carácter deseado de la cerveza. Una descripción general de la naturaleza especial de la cerveza puede cubrir todos los elementos requeridos.";
    $styles_entry_text_34A = "El participante DEBE especificar el nombre de la cerveza comercial, especificaciones (estadísticas vitales) para la cerveza, y ya sea una breve descripción sensorial o una lista de ingredientes utilizados en la elaboración de la cerveza. Sin esta información, los jueces que no estén familiarizados con la cerveza no tendrán una base para comparar.";
    $styles_entry_text_34B = "El participante DEBE especificar el Estilo Base o Estilos utilizados, y cualquier ingrediente, proceso o variación especial involucrado. El participante PUEDE proporcionar una descripción adicional del perfil sensorial de la cerveza o de las estadísticas vitales de la cerveza resultante.";
    $styles_entry_text_PRX3 = "El participante DEBE especificar el tipo de uva utilizada. El participante PUEDE proporcionar información adicional sobre el estilo base o ingredientes característicos.";
}

/**
 * ------------------------------------------------------------------------
 * Version 2.5.0 Additions
 * ------------------------------------------------------------------------
 */
$register_text_047 = "Tu pregunta y/o respuesta de seguridad ha cambiado.";
$register_text_048 = "Si no iniciaste este cambio, tu cuenta puede estar comprometida. Debes iniciar sesión en tu cuenta de inmediato y cambiar tu contraseña, además de actualizar tu pregunta y respuesta de seguridad.";
$register_text_049 = "Si no puedes iniciar sesión en tu cuenta, debes contactar de inmediato a un administrador del sitio para actualizar tu contraseña y otra información vital de la cuenta.";
$register_text_050 = "La respuesta a tu pregunta de seguridad está cifrada y no puede ser leída por los administradores del sitio. Debe ingresarse si decides cambiar tu pregunta y/o respuesta de seguridad.";
$register_text_051 = "Información de la cuenta actualizada";
$register_text_052 = "Se requiere una respuesta de 'Sí' o 'No' para cada ubicación a continuación.";

$brewer_text_044 = "¿Deseas cambiar tu pregunta y/o respuesta de seguridad?";
$brewer_text_045 = "No se han registrado resultados.";
$brewer_text_046 = "Para la entrada manual del nombre del club, no se permiten algunos símbolos, incluidos el ampersand (&), comillas simples ('), comillas dobles (\"), y el porcentaje (%).";
$brewer_text_047 = "Si no estás disponible para ninguna de las sesiones enumeradas a continuación, pero aún puedes servir como miembro del personal en otra capacidad, mantén seleccionado 'Sí' arriba.";
$brewer_text_048 = "Envío de entradas";
$brewer_text_049 = "Selecciona 'No aplica' si no planeas enviar ninguna entrada al concurso en este momento.";
$brewer_text_050 = "Selecciona 'Envío de entradas' si planeas empacar y enviar tus entradas a la ubicación de envío proporcionada.";

$label_change_security = "¿Cambiar pregunta/respuesta de seguridad?";
$label_semi_dry = "Semi-Seco";
$label_semi_sweet = "Semi-Dulce";
$label_shipping_location = "Ubicación de envío";
$label_allergens = "Alérgenos";

$volunteers_text_010 = "El personal puede indicar su disponibilidad para las siguientes sesiones sin evaluación:";

$evaluation_info_081 = "Comenta sobre la expresión de la miel, alcohol, ésteres, complejidad y otros aromas.";
$evaluation_info_082 = "Comenta sobre el color, claridad, piernas y carbonatación.";
$evaluation_info_083 = "Comenta sobre la miel, dulzor, acidez, tanino, alcohol, equilibrio, cuerpo, carbonatación, regusto y cualquier ingrediente especial o sabores específicos del estilo.";
$evaluation_info_084 = "Comenta sobre el placer general al beber esta entrada, da sugerencias para mejorar.";
$evaluation_info_085 = "Color (2), claridad (2), nivel de carbonatación (2).";
$evaluation_info_086 = "Expresión de otros ingredientes según corresponda.";
$evaluation_info_087 = "Equilibrio de acidez, dulzor, fuerza alcohólica, cuerpo, carbonatación (si corresponde) (14), Otros ingredientes según corresponda (5), Regusto (5).";
$evaluation_info_088 = "Comenta sobre el placer general al beber esta entrada, da sugerencias para mejorar.";
$evaluation_info_089 = "Número mínimo de palabras alcanzado o superado.";
$evaluation_info_090 = "Gracias por proporcionar la evaluación más completa posible. Total de palabras: ";
$evaluation_info_091 = "Palabras mínimas requeridas para tus comentarios: ";
$evaluation_info_092 = "Recuento de palabras hasta ahora: ";
$evaluation_info_093 = "No se ha alcanzado el requisito mínimo de palabras en el campo de comentarios de la Impresión General.";
$evaluation_info_094 = "No se ha alcanzado el requisito mínimo de palabras en uno o más campos de comentarios/retroalimentación arriba.";

/**
 * ------------------------------------------------------------------------
 * Version 2.6.0 Additions
 * ------------------------------------------------------------------------
 */
$label_regional_variation = "Variación Regional";
$label_characteristics = "Características";
$label_intensity = "Intensidad";
$label_quality = "Calidad";
$label_palate = "Paladar";
$label_medium = "Medio";
$label_medium_dry = "Medio Seco";
$label_medium_sweet = "Medio Dulce";
$label_your_score = "Tu Puntuación";
$label_summary_overall_impression = "Resumen de Evaluación e Impresión General";
$label_medal_count = "Cantidad de Medallas";
$label_best_brewer_place = "Mejor Lugar de Cervecero";
$label_industry_affiliations = "Afiliaciones a Organizaciones de la Industria";
$label_deep_gold = "Oro Intenso";
$label_chestnut = "Castaño";
$label_pink = "Rosa";
$label_red = "Rojo";
$label_purple = "Púrpura";
$label_garnet = "Granate";
$label_clear = "Claro";
$label_final_judging_date = "Fecha Final de Evaluación";
$label_entries_judged = "Entradas Evaluadas";
$label_results_export = "Exportar Resultados";
$label_results_export_personal = "Exportar Resultados Personales";

$brew_text_041 = "Opcional &ndash; especificar una variación regional (por ejemplo, Cerveza Lager Mexicana, Lager Holandesa, Lager de Arroz Japonesa, etc.).";

$evaluation_info_095 = "Siguiente sesión de evaluación asignada disponible:";
$evaluation_info_096 = "Para ayudar en la preparación, las mesas/vuelos asignados y las entradas asociadas estarán disponibles diez minutos antes del inicio de la sesión.";
$evaluation_info_097 = "Tu próxima sesión de evaluación está ahora disponible.";
$evaluation_info_098 = "Actualizar para ver.";
$evaluation_info_099 = "Sesiones de evaluación pasadas o actuales:";
$evaluation_info_100 = "Próximas sesiones de evaluación:";
$evaluation_info_101 = "Por favor, proporciona otro descriptor de color.";
$evaluation_info_102 = "Introduce tu puntuación total - máximo de 50. Utiliza la guía de puntuación a continuación si es necesario.";
$evaluation_info_103 = "Por favor, proporciona tu puntuación - mínimo de 5, máximo de 50.";

$brewer_text_051 = "Selecciona las organizaciones de la industria con las que estás afiliado como empleado, voluntario, etc. Esto es para asegurarse de que no haya conflictos de interés al asignar jueces y auxiliares para evaluar entradas.";
$brewer_text_052 = "<strong>Si alguna organización de la industria <u>no</u> está listada en el menú desplegable arriba, introdúcela aquí.</strong> Separa los nombres de cada organización con una coma (,) o un punto y coma (;). Algunos símbolos no están permitidos, incluidas las comillas dobles (&quot;) y el porcentaje (%).";

/**
 * ------------------------------------------------------------------------
 * Version 2.6.0 Additions
 * ------------------------------------------------------------------------
 */
$evaluation_info_104 = "No todos los jueces indicaron que esta entrada avanzó a la ronda Mini-BOS. Por favor, verifica y selecciona Sí o No arriba.";
$evaluation_info_105 = "Las siguientes entradas tienen indicaciones de Mini-BOS contradictorias entre los jueces:";
$label_non_judging = "Sesiones No Evaluativas";

/**
 * ------------------------------------------------------------------------
 * Version 2.6.2 Additions
 * ------------------------------------------------------------------------
 */

 $label_mhp_number = "Número de Membresía del Programa Master Iniciobrewer";
$brewer_text_053 = "El Programa Master Iniciobrewer es una organización sin fines de lucro establecida para promover el dominio de la elaboración de cerveza amateur.";
$best_brewer_text_015 = "Los puntos para cada entrada que coloca se calculan utilizando la siguiente fórmula, basada en la que usa el Programa Master Iniciobrewer para el <a href='https://www.masterhomebrewerprogram.com/circuit-of-america' target='_blank'>Circuito de América</a>:";

/**
 * ------------------------------------------------------------------------
 * Version 2.7.0 Additions
 * ------------------------------------------------------------------------
 */
$label_abv = "Alcohol Por Volumen (ABV)";
$label_final_gravity = "Gravedad Final";
$label_juice_source = "Fuente(s) de Fruta o Zumo";
$label_select_all_apply = "Seleccionar Todas las Que Apliquen";
$label_pouring = "Servido";
$label_pouring_notes = "Notas sobre el Servido";
$label_rouse_yeast = "Agitar la Levadura";
$label_fast = "Rápido";
$label_slow = "Lento";
$label_normal = "Normal";
$label_brewing_partners = "Socios de Elaboración";
$label_entry_edit_deadline = "Fecha Límite para Editar la Entrada";
$brew_text_042 = "Por favor, indica el alcohol por volumen hasta dos decimales.";
$brew_text_043 = "Solo números: se aceptan decimales hasta dos decimales (ejemplo, 5.2, 12.84, etc.).";
$brew_text_044 = "Por favor, proporciona la gravedad específica final hasta tres decimales (ejemplo, 0.991, 1.000, 1.007, etc.).";
$brew_text_045 = "Por favor, proporciona las fuentes aplicables.";
$brew_text_046 = "Especifica el origen de todas las adiciones de fruta en esta sidra. Las adiciones de fruta incluyen toda la fruta o jugo añadido que no forma parte de la base de manzana o pera.";
$brew_text_047 = "¿Cómo debe servirse tu entrada para los jueces?";
$brew_text_048 = "¿Se debe agitar alguna levadura antes de servir?";
$brew_text_049 = "Proporciona más información sobre cómo se debe servir tu entrada u otros aspectos relacionados (ejemplo, posible efervescencia, etc.).";
$brewer_text_055 = "Selecciona los socios de elaboración con los que estés afiliado. Esto es para asegurar que no haya conflictos de interés al asignar jueces y mayordomos para evaluar las entradas.";
$brewer_text_054 = "<strong>Si el nombre de una persona <u>no</u> aparece en la lista desplegable, ingresa su nombre COMPLETO aquí (ejemplo, John Doe, Wyatt Earp, Selina Kyle, etc.). También puedes agregar nombres de equipos de elaboración aquí.</strong> Separa cada nombre de equipo o persona con una coma (,) o un punto y coma (;). Algunos símbolos no están permitidos, incluidos las comillas dobles (&quot;) y el porcentaje (&#37;).";

$brew_text_050 = "Algunos estilos están deshabilitados ya que se ha alcanzado el límite para su tipo de estilo correspondiente (ejemplo, cerveza, hidromiel, sidra, etc.).";
$entry_info_text_053 = "Límites de entradas por tipo de estilo:";
$alert_text_093 = "¡Se alcanzaron algunos límites de entrada!";
$alert_text_094 = "No se aceptan más entradas para los siguientes tipos de estilo:";
$label_limit = "Límite";
$label_beer = "Cerveza";
$label_mead = "Hidromiel";
$label_cider = "Sidra";
$label_mead_cider = "Hidromiel/Sidra";
$label_wine = "Vino";
$label_rice_wine = "Vino de Arroz";
$label_spirits = "Licores";
$label_kombucha = "Kombucha";
$label_pulque = "Pulque";

$form_required_fields_00 = "No se han completado o seleccionado todos los campos obligatorios.";
$form_required_fields_01 = "Los campos obligatorios que faltan están marcados con una estrella <i class=\"fa fa-sm fa-star\"></i> y/o en <strong class=\"text-danger\">rojo</strong> más arriba. Desplázate hacia arriba según sea necesario.";
$form_required_fields_02 = "Este campo es obligatorio.";

$entry_info_text_054 = "Recuento actual de entradas por tipo de estilo y límites asociados:";

$maintenance_text_002 = "Solo los administradores de nivel superior pueden iniciar sesión cuando el sitio está en Modo de Mantenimiento.";

$brew_text_054 = "¿De dónde proviene la fruta o el jugo de manzana/pera? Selecciona todas las que apliquen para la bebida base.";
$label_packaging = "Empaque";
$label_bottle = "Botella";
$label_other_size = "Otro Tamaño";
$label_can = "Lata";
$label_fruit_add_source = "Fuente(s) de Adición de Fruta";
$label_yearly_volume = "Volumen Anual";
$label_gallons = "Galones";
$label_barrels = "Barriles";
$label_hectoliters = "Hectolitros";


/**
 * ------------------------------------------------------------------------
 * Version 2.7.1 Additions
 * ------------------------------------------------------------------------
 */
$sidebar_text_027 = "vigente hasta";
$entry_info_text_055 = "No se han especificado métodos de pago en el sistema en este momento. Revisa las reglas del concurso o contacta al organizador.";

/**
 * ----------------------------------------------------------------------------------
 * END TRANSLATIONS
 * ----------------------------------------------------------------------------------
 */

/**
 * ----------------------------------------------------------------------------------
 * Various conditionals
 * No translations below this line
 * ----------------------------------------------------------------------------------
 */

if (strpos($section, "step") === FALSE) $alert_text_032 = $alert_text_032; else $alert_text_032 = "";
if (strpos($section, "step") === FALSE) $alert_text_033 = $alert_text_033; else $alert_text_033 = "";
if (strpos($section, "step") === FALSE) $alert_text_036 = $alert_text_036; else $alert_text_036 = "";
if (strpos($section, "step") === FALSE) $alert_text_039 = $alert_text_039; else $alert_text_039 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_043 = $alert_text_043; else $alert_text_043 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_047 = $alert_text_047; else $alert_text_047 = "";
if (strpos($section, "step") === FALSE) $alert_text_050 = $alert_text_050; else $alert_text_050 = "";
if (strpos($section, "step") === FALSE) $alert_text_053 = $alert_text_053; else $alert_text_053 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_060 = $alert_text_060; else $alert_text_060 = "";
if (strpos($section, "step") === FALSE) $alert_text_068 = $alert_text_068; else $alert_text_068 = "";
if (strpos($section, "step") === FALSE) $alert_text_070 = $alert_text_070; else $alert_text_070 = "";
if (strpos($section, "step") === FALSE) $label_character_limit = $label_character_limit; else $label_character_limit = "";
if (strpos($section, "step") === FALSE) $header_text_031 = $header_text_031; else $header_text_031 = "";
if (strpos($section, "step") === FALSE) $beerxml_text_007 = $beerxml_text_007; else $beerxml_text_007 = "";

?>