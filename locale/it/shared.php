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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = 'Annulla';";
$trans["sharedDelete"]             = "\$text = 'Cancella';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Informazioni sul Bene materiale';";
$trans["biblioViewMaterialType"]   = "\$text = 'Tipo di materiale';";
$trans["biblioViewCollection"]     = "\$text = 'Collezione';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Numero di inventario';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Informazioni sulla copia del Bene materiale';";
$trans["biblioViewTble2Col1"]      = "\$text = '# codice a barre';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Descrizione';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Stato';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Modificato in data';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Da restituire entro';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Funzione';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'cancella';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'modifica';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Informazioni aggiuntive sul Bene';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Nessuna informazione aggiuntiva disponibile.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Nessuna copia creata.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Mostra in OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Aggiungi una nuova copia';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Aggiungi una nuova copia digitale';";
$trans["biblioViewYes"]            = "\$text = 'si';";
$trans["biblioViewNo"]             = "\$text = 'no';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Nessun risultato trovato.';";
$trans["biblioSearchResults"]      = "\$text = 'Risultati della ricerca';";
$trans["biblioSearchResultPages"]  = "\$text = 'Pagine risultanti';";
$trans["biblioSearchPrev"]         = "\$text = 'prec';";
$trans["biblioSearchNext"]         = "\$text = 'succ';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '%items% risultato trovato.';
                                      } else {
                                        \$text = '%items% risultati trovati';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' elencati per autore ';";
$trans["biblioSearchtitle"]        = "\$text = ' elencati per titolo ';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'elenca per autore';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'elenca per titolo';";
$trans["biblioSearchTitle"]        = "\$text = 'Titolo';";
$trans["biblioSearchAuthor"]       = "\$text = 'Autore';";
$trans["biblioSearchMaterial"]     = "\$text = 'Tipo di materiale';";
$trans["biblioSearchCollection"]   = "\$text = 'Collezione';";
$trans["biblioSearchCall"]         = "\$text = 'Numero di inventario';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Codice a barre';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Stato';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Nessuna copia disponibile.';";
$trans["biblioSearchHold"]         = "\$text = 'prenota';";
$trans["biblioSearchOutIn"]        = "\$text = 'Presta/restituisci';";
$trans["biblioSearchDetail"]       = "\$text = 'Mostra informazioni dettagliate sul Bene';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Modulo codice a barre per prestito/restituzione';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Modulo codice a barre per il prestito';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Accesso Staff';";
$trans["loginFormUsername"]        = "\$text = 'Nome utente';";
$trans["loginFormPassword"]        = "\$text = 'Password';";
$trans["loginFormLogin"]           = "\$text = 'Accedi';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Sei sicuro/a di voler cancellare questa richiesta di prenotazione?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='La richiesta di prenotazione è stata cancellata con successo.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Aiuto OpenBiblio';";
$trans["helpHeaderCloseWin"]       = "\$text='Chiudi Finestra';";
$trans["helpHeaderContents"]       = "\$text='Contenuti';";
$trans["helpHeaderPrint"]          = "\$text='Stampa';";

$trans["catalogResults"]           = "\$text='Risultati della ricerca';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Data di oggi:';";
$trans["headerDateFormat"]         = "\$text='g.m.A';";
$trans["headerLibraryHours"]       = "\$text='Orario della biblioteca:';";
$trans["headerLibraryPhone"]       = "\$text='telefono della biblioteca:';";
$trans["headerHome"]               = "\$text='Home';";
$trans["headerCirculation"]        = "\$text='Prestiti';";
$trans["headerCataloging"]         = "\$text='Inventario';";
$trans["headerAdmin"]              = "\$text='Amministrazione';";
$trans["headerReports"]            = "\$text='Report';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='Home Biblioteca';";
$trans["footerOPAC"]               = "\$text='Catalogo online (OPAC)';";
$trans["footerHelp"]               = "\$text='Aiuto';";
$trans["footerPoweredBy"]          = "\$text='Sviluppato da OpenBiblio versione';";
$trans["footerDatabaseVersion"]    = "\$text='versione database';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='sotto la';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>
