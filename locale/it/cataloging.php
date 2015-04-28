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
$trans["catalogSubmit"]            = "\$text = 'Invia';";
$trans["catalogCancel"]            = "\$text = 'Annulla';";
$trans["catalogRefresh"]           = "\$text = 'Aggiorna';";
$trans["catalogDelete"]            = "\$text = 'Elimina';";
$trans["catalogFootnote"]          = "\$text = 'I campi marcati con %symbol% sono obbligatori.';";
$trans["AnswerYes"]                = "\$text = 'Si';";
$trans["AnswerNo"]                 = "\$text = 'No';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Inventario';";
$trans["indexBarcodeHdr"]          = "\$text = 'Ricerca per Codice a Barre';";
$trans["indexBarcodeField"]        = "\$text = 'Codice a Barre';";
$trans["indexSearchHdr"]           = "\$text = 'Ricerca per Frase di ricerca';";
$trans["indexTitle"]               = "\$text = 'Titolo';";
$trans["indexAuthor"]              = "\$text = 'Autore';";
$trans["indexSubject"]             = "\$text = 'Argomento';";
$trans["indexButton"]              = "\$text = 'Cerca';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Bene';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Tipo di bene materiale';";
$trans["biblioFieldsCollection"]   = "\$text = 'Collezione';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Numero di inventario';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Campi USMarc';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Mostra nel Catalogo Online (OPAC)';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Aggiungi nuovo';";
$trans["biblioNewSuccess"]         = "\$text = 'E\' stata inserito questo nuovo elemento nel catalogo. Per aggiungere una copia, seleziona \"Nuova copia\" dalla barra di navigazione a sinistra o \"Aggiungi una nuova copia\" dalle informazioni di copia qui sotto.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'E aggiornata con successo.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'Aggiungi una nuova copia';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Codice a barre';";
$trans["biblioCopyNewDesc"]        = "\$text = 'Descrizione';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Autogenera';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Modifica copia';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Stato';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Copia creata con successo.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Copia aggiornata con successo.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'La copia non è stata cancellata probabilmente perchè è in prestito. Una copia deve essere acquisita (check in) prima di essere cancellata.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Sei sicuro di voler cancellare la copia con codice a barre %barcodeNmbr%?  Questo canceller&agrave; anche tutti i cambiamenti di stato per questa copia.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'La copia con codice a barre %barcode% è stata cancellata con successo.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Aggiungi un nuovo campo MARC';";
$trans["biblioMarcListHdr"]        = "\$text = 'Informazione campo MARC';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Funzione';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Descrizione Tag';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Indicatore 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Indicatore 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Sottocampo';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Descrizione Sottocampo';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Campo Dati';";
$trans["biblioMarcListNoRows"]     = "\$text = 'Nessun campo MARC trovato.';";
$trans["biblioMarcListEdit"]       = "\$text = 'modifica';";
$trans["biblioMarcListDel"]        = "\$text = 'cancella';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'Selettore campo MARC';";
$trans["usmarcSelectInst"]         = "\$text = 'Seleziona un tipo di campo';";
$trans["usmarcSelectNoTags"]       = "\$text = 'Nessun tag trovato.';";
$trans["usmarcSelectUse"]          = "\$text = 'usa';";
$trans["usmarcCloseWindow"]        = "\$text = 'Chiudi finestra';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Aggiungi nuovo campo Marc';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Sottocampo';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Campo Dati';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicatore 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicatore 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Seleziona';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Campo Marc aggiunto con successo.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Modifica campo Marc';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Campo Marc aggiornato con successo.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Sei sicuro di voler cancellare il campo Marc con il tag %tag% e il sottocampo %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Campo Marc cancellato con successo.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'Questo bene ha %copyCount% copia/e e %holdCount% richiesta/e pendenti. Prego cancellare queste copie e/o richieste pendenti prima di cancellarlo.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'ritorna alle informazioni sul bene';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Sei sicuro di voler cancellare l\'oggetto dal titolo %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'L\'oggetto \'%title%\' è stato cancellato.';";
$trans["biblioDelReturn"]          = "\$text = 'ritorna alla ricerca bibliografica';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Prenotazioni pendenti per l\'oggetto:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'Non ci sono prenotazioni per questo elemento.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Funzione';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Copia';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Messo in attesa';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Utente';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Stato';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Da restituire';";
$trans["biblioHoldListdel"]        = "\$text = 'Cancella';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'Non sei autorizzato/a a usare l\'inventario';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Test caricamento';";
$trans["MarcUploadTestTrue"]        = "\$text = 'Vero';";
$trans["MarcUploadTestFalse"]       = "\$text = 'Falso';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc Input File';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Records caricati';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Record';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Data';";
$trans["MarcUploadRawData"]         = "\$text = 'Raw Data:';";
$trans["UploadFile"]                = "\$text = 'Carica File';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Prodotto da OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'sotto la';";
$trans["GNU"]                 		  = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Risultati della ricerca';";
?>
