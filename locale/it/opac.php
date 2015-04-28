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
$trans["opac_Header"]        = "\$text='Catalogo Online ad Accesso Pubblico (OPAC)';";
$trans["opac_WelcomeMsg"]    = "\$text=
  'Benvenuti nel catalogo online della nostra biblioteca. Utilizza il motore di ricerca qui sotto per trovare ci� che ti interessa tra gli articoli a disposizione.';";
$trans["opac_SearchTitle"]   = "\$text='Ricerca per:';";
$trans["opac_Title"]         = "\$text='Titolo';";
$trans["opac_Author"]        = "\$text='Autore';";
$trans["opac_Subject"]       = "\$text='Argomento';";
$trans["opac_Search"]        = "\$text='Cerca';";

?>
