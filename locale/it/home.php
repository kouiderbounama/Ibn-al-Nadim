<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */


#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='Benvenuti nella Biblioteca del Liceo Scientifico Michelangelo di Cagliari';";
$trans["indexIntro"]         = "\$text='Usa i tasti di navigazione in alto per accedere alle seguenti sezioni di amministrazione.';";
$trans["indexTab"]           = "\$text='Tasto';";
$trans["indexDesc"]          = "\$text='Descrizione';";
$trans["indexCirc"]          = "\$text='Prestiti';";
$trans["indexCircDesc1"]     = "\$text='Usa questo tasto per gestire gli utenti che accedono alla biblioteca e i prestiti.';";
$trans["indexCircDesc2"]     = "\$text='Gestione utenti (nuovo utente, ricerca utente, modifica, cancella)';";
$trans["indexCircDesc3"]     = "\$text='Prestiti per l\'utente, prenotazioni, account, e storia';";
$trans["indexCircDesc4"]     = "\$text='Registrazione dei beni che rientranoi dopo il prestito e lista dei materiali da riporre negli scaffali';";
//$trans["indexCircDesc5"]     = "\$text='Member late fee payment';";
$trans["indexCat"]           = "\$text='Inventario';";
$trans["indexCatDesc1"]      = "\$text='Usa questo tasto per gestire l\'inventario.';";
$trans["indexCatDesc2"]      = "\$text='Gestione dei materiali bibliografici (nuovo, ricerca, modifica, cancella)';";
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';";
$trans["indexAdmin"]         = "\$text='Amministrazione';";
$trans["indexAdminDesc1"]    = "\$text='Usa questo tasto per amministrare la biblioteca.';";
$trans["indexAdminDesc2"]    = "\$text='Gestione Staff (nuovo, modifica, password, cancella)';";
$trans["indexAdminDesc3"]    = "\$text='Impostazioni generali della biblioteca';";
$trans["indexAdminDesc5"]    = "\$text='Lista tipo dei materiali';";
$trans["indexAdminDesc4"]    = "\$text='Lista delle collezioni';";
$trans["indexAdminDesc6"]    = "\$text='Editor tema';";
$trans["indexReports"]       = "\$text='Reports';";
$trans["indexReportsDesc1"]  = "\$text='Usa questo tasto per ottenere dei report sui dati della biblioteca.';";
$trans["indexReportsDesc2"]  = "\$text='Report.';";
$trans["indexReportsDesc3"]  = "\$text='Etichette.';";

?>
