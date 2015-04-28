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
$trans["adminSubmit"]              = "\$text = 'Invia';";
$trans["adminCancel"]              = "\$text = 'Annulla';";
$trans["adminDelete"]              = "\$text = 'Elimina';";
$trans["adminUpdate"]              = "\$text = 'Aggiorna';";
$trans["adminFootnote"]            = "\$text = 'I campi marcati con %symbol% sono obbligatori.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Sezione di amministrazione';";
$trans["indexDesc"]                = "\$text = 'Usa le funzioni disponibili nell\'area di navigazione a sinistra per gestire le impostazioni riguardanti l\'amministrazione e lo staff della libreria.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'ritorna alla lista delle collezioni';";
$trans["adminCollections_delStart"]                 = "\$text = 'La collezione ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', è stato cancellata.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'Sei sicuro di voler cancellare la collezione, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ' è stata aggiornata.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Modifica la Collezione:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Descrizione:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'Giorni di prestito:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Tariffa giornaliera per ritardo:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'Impostando i \'giorni di prestito\' a zero causa la non disponibilit&agrave; della collezione per il controllo.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Aggiungi una nuova collezione';";
$trans["adminCollections_listCollections"]                 = "\$text = 'Collezioni:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'Funzione';";
$trans["adminCollections_listDescription"]                 = "\$text = 'Descrizione';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'Giorni dalla<br>restituzione';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'Tariffa<br>Ritardo';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Numeri in<br>elenco';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Modifica';";
$trans["adminCollections_listDel"]                 = "\$text = 'cancella';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 'La funzione cancella è disponibile solo sulle collezioni che hanno una numero nullo di volumi. Se proprio vuoi cancellare una collezione con un numero di libri non nullo devi prima modificare il \'Tipo di bene materiale\' di quegli elementi.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ' stato aggiunto.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Aggiungi una Collezione:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Descrizione:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'Giorni dalla restituzione:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Tariffa giornaliera dovuta per ritardo:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Impostando i giorni dalla restituzione a zero causa l\'indisponibilità della collezione per il prestito.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Tipo di bene materiale, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ' è stato cancellato.';";
$trans["admin_materials_Return"]                 = "\$text = 'ritorna alla lista delle \'Tipologie di beni materiali\'';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Sei sicuro di voler cancellare il Tipo di bene materiale, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Modifica il Tipo di bene materiale:';";
$trans["admin_materials_delDescription"]                 = "\$text = 'Descrizione:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(inserisci 0 per illimitato)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'File immagine:';";
$trans["admin_materials_delNote"]                 = "\$text = '*Nota:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'I file immagine devono essere salvati nella cartella openbiblio/images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ' è stato aggiornato.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Aggiungi un nuovo \'Tipo di bene materiale\'';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Tipo di bene materiale:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Funzione';";
$trans["admin_materials_listDescription"]                 = "\$text = 'Descrizione';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limiti';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'Selezione';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Rinnovo';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'File<br>Immagine';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Numeri nel<br>Catalogo';";
$trans["admin_materials_listEdit"]                 = "\$text = 'modifica';";
$trans["admin_materials_listDel"]                 = "\$text = 'cancella';";
$trans["admin_materials_listNote"]                 = "\$text = '*Nota:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'La funzione cancella è disponibile solo sulle collezioni che hanno una numero nullo di elementi. Se proprio vuoi cancellare una collezione con un numero di elementi non nullo devi prima modificare il \'Tipo di bene materiale\' attribuito a quegli elementi.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ' è stato aggiunto.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'I file immagine devono essere salvati nella cartella openbiblio/images.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'Non sei autorizzato a usare le funzioni di amministrazione.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = 'Le impostazioni sono state aggiornate.';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'Modifica le impostazione della Biblioteca:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Nome della Biblioteca:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'URL dell\'Immagine della Biblioteca:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Mostra l\'immagine solo nella testata:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'Orario di apertura della Biblioteca:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'Telefono della Biblioteca:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Indirizzo web della Biblioteca:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Tempo di scadenza della sessione:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'minuti';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'Risultati della Ricerca:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'elementi per pagina';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Ripulisci la Storia del bene materiale dopo:';";
$trans["admin_settingsmonths"]                 = "\$text = 'mesi';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Blocca la selezione se è dovuta un\'ammenda:';";
$trans["admin_settingsLocale"]                 = "\$text = 'Nazionalit&agrave;:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML Charset:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Il Membro dello Staff ';";
$trans["adminStaff_Return"]                 = "\$text = 'ritorna ai lista dello staff';";
$trans["adminStaff_Yes"]                 = "\$text = 'Sì';";
$trans["adminStaff_No"]                 = "\$text = 'No';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ' è stato cancellato.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Sei sicuro di voler cancellare il membro dello staff, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ' è stato aggiornato.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Modifica le informazioni del membro dello staff:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Cognome:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'Nome:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Nome utente:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Autorizzazione:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Prestiti';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Aggiorna utente';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Invent.';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Ammin.';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Reports';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Sospendi:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Aggiungi un nuovo membro dello staff';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Membri dello staff:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'Funzioni';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'modif.';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'pwd';";
$trans["adminStaff_list_Del"]                 = "\$text = 'canc.';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ' è stato aggiunto.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Aggiungi un nuovo membro dello staff:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Password:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Reinserisci la password:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'La password è stata resettata.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Resetta la password dello staff:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'ritorna alla lista dei temi';";
$trans["adminTheme_Theme"]                 = "\$text = 'Tema, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ' è stato cancellato.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Sei sicuro di voler cancellare il tema, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ' è stato cancellato.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Anteprima dei cambiamenti del tema';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Cambia il tema in uso:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Scegli un nuovo tema:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'Aggiungi un nuovo tema';";
$trans["adminTheme_themes"]                 = "\$text = 'Temi:';";
$trans["adminTheme_function"]                 = "\$text = 'Funzione';";
$trans["adminTheme_Themename"]                 = "\$text = 'Nome del tema';";
$trans["adminTheme_Usage"]                 = "\$text = 'Modalit&agrave; di utilizzo';";
$trans["adminTheme_Edit"]                 = "\$text = 'modifica';";
$trans["adminTheme_Copy"]                 = "\$text = 'copia';";
$trans["adminTheme_Del"]                 = "\$text = 'cancella';";
$trans["adminTheme_Inuse"]                 = "\$text = 'in uso';";
$trans["adminTheme_Note"]                 = "\$text = '*Nota:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'La funzione cancella non è disponibile sul tema correntemente in uso.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'Tema:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Table Border Color:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Error Color:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Table Border Width:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Table Cell Padding:';";
$trans["adminTheme_Title"]                 = "\$text = 'Title';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'Main Body';";
$trans["adminTheme_Navigation"]                 = "\$text = 'Navigation';";
$trans["adminTheme_Tabs"]                 = "\$text = 'Tabs';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Background Color:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Font Face:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'Font Size:';";
$trans["adminTheme_Bold"]                 = "\$text = 'bold';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Font Color:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Link Color:';";
$trans["adminTheme_Align"]                 = "\$text = 'Align:';";
$trans["adminTheme_Right"]                 = "\$text = 'Right';";
$trans["adminTheme_Left"]                 = "\$text = 'Left';";
$trans["adminTheme_Center"]                 = "\$text = 'Center';";

$trans["adminTheme_HeaderWording"]                 = "\$text = 'Edit';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ' è stato aggiunto.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Anteprima del tema';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Titolo della Biblioteca';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Chiudi finestra';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'Home';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Prestiti';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Catalogo';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Admin';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Esempio di ollegamento';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Questo &egrave; un\'anteprima del ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'tema.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Esempio di lista:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Table Heading';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Esempio di riga 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Esempio di riga 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Esempio di riga 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'esempio di collegamento';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'esempio di errore';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Esempio di Input';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Esempio di Bottone';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License<br>Installato e tradotto da Roberto Puzzanghera';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************
?>
