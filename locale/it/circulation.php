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
$trans["circCancel"]              = "\$text = 'Annulla';";
$trans["circDelete"]              = "\$text = 'Cancella';";
$trans["circLogout"]              = "\$text = 'Esci';";
$trans["circAdd"]                 = "\$text = 'Aggiungi';";
$trans["mbrDupBarcode"]           = "\$text = 'Il codice a barre %barcode% è attualmente in uso.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Presititi';";
$trans["indexCardHdr"]            = "\$text='Cerca membro per numero di tessera:';";
$trans["indexCard"]               = "\$text='Numero di tessera:';";
$trans["indexSearch"]             = "\$text='Cerca';";
$trans["indexNameHdr"]            = "\$text='Cerca membro per cognome:';";
$trans["indexName"]               = "\$text='Il cognome inizia per:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Indirizzo e-mail:';";
$trans["mbrNewForm"]              = "\$text='Aggiungi nuovo';";
$trans["mbrEditForm"]             = "\$text='Modifica';";
$trans["mbrFldsHeader"]           = "\$text='Utente:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Numero tessera:';";
$trans["mbrFldsLastName"]         = "\$text='Cognome:';";
$trans["mbrFldsFirstName"]        = "\$text='Nome:';";
$trans["mbrFldsAddr1"]            = "\$text='Indirizzo linea 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Indirizzo linea 2:';";
$trans["mbrFldsCity"]             = "\$text='Citt&agrave;:';";
$trans["mbrFldsStateZip"]         = "\$text='Stato:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefono casa:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Telefono cellulare:';";
$trans["mbrFldsEmail"]            = "\$text='Indirizzo Email:';";
$trans["mbrFldsClassify"]         = "\$text='Ruolo:';";
$trans["mbrFldsGrade"]            = "\$text='Grado di istruzione:';";
$trans["mbrFldsTeacher"]          = "\$text='Docente:';";
$trans["mbrFldsSubmit"]           = "\$text='Invia';";
$trans["mbrFldsCancel"]           = "\$text='Annulla';";
$trans["mbrsearchResult"]         = "\$text='Pagine risultanti: ';";
$trans["mbrsearchprev"]           = "\$text='prec';";
$trans["mbrsearchnext"]           = "\$text='succ';";
$trans["mbrsearchNoResults"]      = "\$text='Nessuna voce trovata.';";
$trans["mbrsearchFoundResults"]   = "\$text=' voci trovate.';";
$trans["mbrsearchSearchResults"]  = "\$text='Risultati della ricerca:';";
$trans["mbrsearchCardNumber"]     = "\$text='Numero tessera:';";
$trans["mbrsearchClassification"] = "\$text='Ruolo:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='L\'utente è stato creato con successo.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='L\'utente è stato modificato con successo.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Informazioni utente:';";
$trans["mbrViewName"]             = "\$text='Nome:';";
$trans["mbrViewAddr"]             = "\$text='Indirizzo:';";
$trans["mbrViewCardNmbr"]         = "\$text='Numero tessera:';";
$trans["mbrViewClassify"]         = "\$text='Ruolo:';";
$trans["mbrViewPhone"]            = "\$text='Telefono:';";
$trans["mbrViewPhoneHome"]        = "\$text='Casa:';";
$trans["mbrViewPhoneWork"]        = "\$text='Cell:';";
$trans["mbrViewEmail"]            = "\$text='Indirizzo Email:';";
$trans["mbrViewGrade"]            = "\$text='Grado di istruzione:';";
$trans["mbrViewTeacher"]          = "\$text='Docente:';";
$trans["mbrViewHead2"]            = "\$text='Statistiche sui prestiti:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Tipo di bene';";
$trans["mbrViewStatColHdr2"]      = "\$text='Totale';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limiti';";
$trans["mbrViewStatColHdr4"]      = "\$text='Controlla';";
$trans["mbrViewStatColHdr5"]      = "\$text='Rinnova';";
$trans["mbrViewHead3"]            = "\$text='Presta Bene:';";
$trans["mbrViewBarcode"]          = "\$text='Codice a barre:';";
$trans["mbrViewCheckOut"]         = "\$text='Seleziona';";
$trans["mbrViewHead4"]            = "\$text='Beni attualmente in prestito all\'utente:';";
$trans["mbrViewOutHdr1"]          = "\$text='Data prestito';";
$trans["mbrViewOutHdr2"]          = "\$text='Tipo di bene';";
$trans["mbrViewOutHdr3"]          = "\$text='Codice a barre';";
$trans["mbrViewOutHdr4"]          = "\$text='Titolo';";
$trans["mbrViewOutHdr5"]          = "\$text='Autore';";
$trans["mbrViewOutHdr6"]          = "\$text='Data di restituzione';";
$trans["mbrViewOutHdr7"]          = "\$text='Giorni di ritardo';";
$trans["mbrViewOutHdr8"]          = "\$text='Rinnova prestito';";
$trans["mbrViewOutRenewItemTxt"]  = "\$text = 'Rinnova prestito';";
$trans["mbrViewOutHdr9"]          = "\$text='volta/e';";
$trans["mbrViewNoCheckouts"]      = "\$text='Nessuna oggetto è stato ancora selezionata.';";
$trans["mbrViewHead5"]            = "\$text='Prenota:';";
$trans["mbrViewHead6"]            = "\$text='Oggetti attualmente prenotati:';";
$trans["mbrViewPlaceHold"]        = "\$text='Prenota';";
$trans["mbrViewHoldHdr1"]         = "\$text='Funzione';";
$trans["mbrViewHoldHdr2"]         = "\$text='Prenotato in data';";
$trans["mbrViewHoldHdr3"]         = "\$text='Tipo di bene';";
$trans["mbrViewHoldHdr4"]         = "\$text='Codice a barre';";
$trans["mbrViewHoldHdr5"]         = "\$text='Titolo';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autore';";
$trans["mbrViewHoldHdr7"]         = "\$text='Stato';";
$trans["mbrViewHoldHdr8"]         = "\$text='Data di rientro';";
$trans["mbrViewNoHolds"]          = "\$text='Nessun elemento del catalogo risulta attualmente prenotato.';";
$trans["mbrViewBalMsg"]           = "\$text='Nota: l\'utente ha un saldo non pagato di %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='stampa selezione';";
$trans["mbrViewDel"]              = "\$text='cancella';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='L\'utente deve pagare un saldo prima di ottenere un prestito.';";
$trans["checkoutErr1"]            = "\$text='Il codice a barre deve essere tutto alfanumerico.';";
$trans["checkoutErr2"]            = "\$text='Non è stato trovato alcun bene con questo codice a barre.';";
$trans["checkoutErr3"]            = "\$text='Un bene con questo codice a barre %barcode% esiste già.';";
$trans["checkoutErr4"]            = "\$text='Nessun bene con questo codice a barre %barcode% disponibile.';";
$trans["checkoutErr5"]            = "\$text='Il bene con codice a barre %barcode% è già stato consegnato a un altro utente.';";
$trans["checkoutErr6"]            = "\$text='L\'utente ha ricevuto il limite massimo consentito di prestiti per il tipo di bene materiale specificato.';";
$trans["checkoutErr7"]            = "\$text='Il bene con codice a barre numero %barcode% ha raggiunto il limite massimo consentito di rinnovi per l\'utente.';";
$trans["checkoutErr8"]            = "\$text='Il bene con codice a barre numero %barcode% non può essere rinnovato perchè troppo tardi.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Il codice a barre deve essere alfanumerico.';";
$trans["shelvingCartErr2"]        = "\$text='Nessun bene trovato con questo codice a barre.';";
$trans["shelvingCartTrans"]       = "\$text='Ammenda dovuta per ritardo (barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Registrazioni delle cose in ingresso:';";
$trans["checkinFormBarcode"]      = "\$text='Codice a barre:';";
$trans["checkinFormShelveButton"] = "\$text='Aggiungi a lista da riporre negli scaffali';";
$trans["checkinFormCheckinLink1"] = "\$text='Presta elementi selezionati';";
$trans["checkinFormCheckinLink2"] = "\$text='presta tutti gli elementi';";
$trans["checkinFormHdr2"]         = "\$text='Lista corrente da riporre negli scaffali:';";
$trans["checkinFormColHdr1"]      = "\$text='Data';";
$trans["checkinFormColHdr2"]      = "\$text='Codice a Barre';";
$trans["checkinFormColHdr3"]      = "\$text='Titolo';";
$trans["checkinFormColHdr4"]      = "\$text='Autore';";
$trans["checkinFormEmptyCart"]    = "\$text='Nessun oggetto è attualmente nella lista delle cose da riporre negli scaffali.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Nessun elemento selezionato.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='L\'elemento è stato prenotato!';";
$trans["holdMessageMsg1"]         = "\$text='il Bene con codice a barre %barcode% che stai cercando di archiviare negli scaffali ha una o più prenotazioni pendenti. <b>Si prega di soddisfare queste prenotazioni invece di porre il Bene nella lista delle cose da riporre negli scaffali.</b> Lo stato per questo oggetto è <i>prenotato</i>.';";
$trans["holdMessageMsg2"]         = "\$text='Ritorna al prestito.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Il codice a barre deve essere numerico.';";
$trans["placeHoldErr2"]           = "\$text='Il codice a barre non esiste.';";
$trans["placeHoldErr3"]           = "\$text='Questo utente ha già preso questo elemento -- L\'elemento non può essere prenotato.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'L\'utente, %name%, ha %checkoutCount% prestiti e %holdCount% prenotazioni (hold request(s).  Tutti i materiali prestati devono essere riacquisiti a tutte le prenotazioni cancellate prima di cancellare questo utente.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'ritorna alle informazioni sull'utente';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Sei sicuro di voler cancellare l\'utente, %name%? Questo canceller&agrave; anche tutta la storia dell\'utente.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='L\'utente, %name%, è stato cancellato.';";
$trans["mbrDelReturn"]            = "\$text='ritorna alla ricerca utenti';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Prestiti passati per l\'utente:';";
$trans["mbrHistoryNoHist"]        = "\$text='Trovato nulla nei prestiti precedenti.';";
$trans["mbrHistoryHdr1"]          = "\$text='Codice a barre';";
$trans["mbrHistoryHdr2"]          = "\$text='Titolo';";
$trans["mbrHistoryHdr3"]          = "\$text='Autore';";
$trans["mbrHistoryHdr4"]          = "\$text='Nuovo stato';";
$trans["mbrHistoryHdr5"]          = "\$text='Data del cambiamento di stato';";
$trans["mbrHistoryHdr6"]          = "\$text='Data di restituzione';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Aggiungi una transazione:';";
$trans["mbrAccountTransTyp"]      = "\$text='Tipo di transazione:';";
$trans["mbrAccountAmount"]        = "\$text='Quantit&agrave;:';";
$trans["mbrAccountDesc"]          = "\$text='Descrizione:';";
$trans["mbrAccountHead1"]         = "\$text='Transazioni account utente:';";
$trans["mbrAccountNoTrans"]       = "\$text='Nessuna transazione trovata.';";
$trans["mbrAccountOpenBal"]       = "\$text='Opening Balance';";
$trans["mbrAccountDel"]           = "\$text='cancella';";
$trans["mbrAccountHdr1"]          = "\$text='Funzione';";
$trans["mbrAccountHdr2"]          = "\$text='Data';";
$trans["mbrAccountHdr3"]          = "\$text='Tipo trans.';";
$trans["mbrAccountHdr4"]          = "\$text='Descrizione';";
$trans["mbrAccountHdr5"]          = "\$text='Quantit&agrave;';";
$trans["mbrAccountHdr6"]          = "\$text='Balance';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transazione completata con successo.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Sei sicuro di voler cancellare questa transazione?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transazione cancellata con successo.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Prestiti per %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Data corrente:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Utente:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Numero Carta:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Classificazione:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Chiudi finestra';";

?>
