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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Codice richiesto.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Campo richiesto.';";
$trans["biblioFieldError2"]       = "\$text = 'Il tag deve essere numerico.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Errore nell\'accesso delle informazioni sul bene.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Errore nell\'accesso alle informazioni sul campo.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Errore nell\'inserimento delle informazioni.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Errore nell\'inserimento delle informazioni sul campo.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Errore nell\'aggiornamento delle informazioni.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Errore nella pulizia del campo per l'aggiornamento delle informazioni.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Errore nella cancellazione delle informazioni.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Errore nel conteggio dei risultati della ricerca.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Errore nella ricerca delle informazioni.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Errore di lettura delle informazioni.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Il codice a barre è richiesto.';";
$trans["biblioCopyError2"]        = "\$text = 'Il numero di codice a barre deve essere tutto con caratteri alfabetici e/o numerici.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Errore nella verifica di doppio codice a barre.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'Il codice a barre %barcodeNmbr% è già in uso.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Errore nell\'inserimento della copia.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Errore nell\'accesso alle informazioni sulla copia.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Errore nell\'aggiornamento delle informazioni della copia.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Errore nella cancellazione delle informazioni.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Errore nell\'accesso alle informazioni sull'\oggetto per ottenere il codice della collezione.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Errore nell\'accesso alle informazione sulla collezione per il controllo dei giorni dalla restituzione.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Errore nella verifica delle copie';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Errore nella verifica dei limiti nei prestiti';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Error fetching highest copyid.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Error reading for a bibliography field.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Error reading bibliography fields.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Error inserting new bibliography field.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Error updating bibliography field.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Error deleting bibliography field.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Error accessing the marc block data.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Error accessing the marc tag data.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Error accessing the marc subfield data.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Errore nell\'accesso dei dati per la prenotazione in base all\'id.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Errore nell\'accesso dei dati per la prenotazione in base al codice utente.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Non è stato possibile ottenere l\'id della bibilografia e l\'id della copia per fare la prenotazione.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Errore nell\'inserimento dei dati della prenotazione.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Errore nella cancellazione della prenotazione.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Errore nella richiesta del primo utente prenotato.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Errore nel lancio del report.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Valori non numerici non sono validi nella colonna numerica.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Formato data/ora non valido.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Formato data non valido.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Invalid font type specified in label definition xml.  Valid font types are Courier, Helvetica, and Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Invalid font size specified in label definition xml.  Font size must be numeric.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Invalid font size specified in label definition xml.  Font size must be greater than zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Invalid left margin specified in label definition xml.  Left margin must be numeric.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Invalid left margin specified in label definition xml.  Left margin must be greater than zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Invalid right margin specified in label definition xml.  Right margin must be numeric.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Invalid right margin specified in label definition xml.  Right margin must be greater than zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Invalid top margin specified in label definition xml.  Top margin must be numeric.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Invalid top margin specified in label definition xml.  Top margin must be greater than zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Invalid bottom margin specified in label definition xml.  Bottom margin must be numeric.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Invalid bottom margin specified in label definition xml.  Bottom margin must be greater than zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Invalid columns specified in label definition xml.  Columns must be numeric.';";
$trans["labelFormatColErr2"]      = "\$text = 'Invalid columns specified in label definition xml.  Columns must be greater than zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Invalid width specified in label definition xml.  Width must be numeric.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Invalid width specified in label definition xml.  Width must be greater than zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Invalid height specified in label definition xml.  Height must be numeric.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Invalid height specified in label definition xml.  Height must be greater than zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Invalid label lines specified in label definition xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Errore nella richiesta della storia dell stato del Bene per id.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Errore nella richiesta della storia dello stato del Bene per id utente';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Errore nell\'inserimento dello stato nella storia del Bene materiale';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Errore nella cancellazione dello stato nella storia del Bene materiale per id copia';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Errore nella cancellazione dello stato nella storia del Bene materiale per id utente';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'La quantità è richiesta.';";
$trans["memberAccountTransError2"]  = "\$text = 'La quantità deve essere numerica.';";
$trans["memberAccountTransError3"]  = "\$text = 'la descrizione è richiesta.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Errore nell\'accesso alle informazioni sull\'account utente.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Errore nell\'inserimento delle informazioni per l\'account utente.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Errore nella cancellazione delle informazioni per l\'account utente.';";

?>
