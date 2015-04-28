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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Accedi';";
$trans["logout"]                   = "\$text = 'Esci';";
$trans["help"]                     = "\$text = 'Aiuto';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Home';";
$trans["homeLicenseLink"]          = "\$text = 'Licenza';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Amministrazione';";
$trans["adminStaff"]               = "\$text = 'Gestione Staff';";
$trans["adminSettings"]            = "\$text = 'Impostazioni Biblioteca';";
$trans["adminMaterialTypes"]       = "\$text = 'Tipi di Materiali';";
$trans["adminCollections"]         = "\$text = 'Collezioni';";
$trans["adminThemes"]              = "\$text = 'Temi';";
$trans["adminTranslation"]         = "\$text = 'Traduzioni';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Indice Inventario';";
$trans["catalogSearch1"]           = "\$text = 'Ricerca nella Biblioteca';";
$trans["catalogSearch2"]           = "\$text = 'Ricerca bibliografia';";
$trans["catalogResults"]           = "\$text = 'Risultati della ricerca';";
$trans["catalogBibInfo"]           = "\$text = 'Informazioni Biblioteca';";
$trans["catalogBibEdit"]           = "\$text = 'Modifica-Base';";
$trans["catalogBibEditMarc"]       = "\$text = 'Modifica-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Nuovo MARC';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Nuovo MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Modifica MARC';";
$trans["catalogCopyNew"]           = "\$text = 'Nuova copia';";
$trans["catalogCopyEdit"]          = "\$text = 'Modifica copia';";
$trans["catalogHolds"]             = "\$text = 'Prenotazioni';";
$trans["catalogDelete"]            = "\$text = 'Elimina';";
$trans["catalogBibNewLike"]        = "\$text = 'Nuovo come';";
$trans["catalogBibNew"]            = "\$text = 'Nuovo Bene';";
$trans["Upload Marc Data"]         = "\$text = 'Carica dati Marc';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'Indice Report';";
$trans["reportsReportListLink"]    = "\$text = 'Lista Report';";
$trans["reportsLabelsLink"]        = "\$text = 'Stampa etichette';";
$trans["reportsLettersLink"]        = "\$text = 'Stampa lettere';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Catalogo on-line';";
$trans["catalogSearch2"]           = "\$text = 'Catalogo on-line';";
$trans["catalogResults"]           = "\$text = 'Ricerca';";
$trans["catalogBibInfo"]           = "\$text = 'Info articolo';";

#Added

$trans["memberInfo"]="\$text = 'Info utente';";
$trans["memberSearch"]="\$text = 'Cerca utente';";
$trans["editInfo"]="\$text = 'Modifica utente';";
$trans["checkoutHistory"]= "\$text = 'Storia prestiti';";
$trans["account"]="\$text = 'Account';";
$trans["checkIn"]="\$text = 'Rientri';";
$trans["memberSearch"]= "\$text = 'Cerca utente';";
$trans["newMember"]= "\$text = 'Nuovo utente';";
//$trans["account"]        	= "\$text = 'Account';";
?>
