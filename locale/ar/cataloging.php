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
 *     $trans["homeWelcome"]       = "\$text='مرحبا بكم في ابن النديم النسخة العربية من نظام openbiblio';";
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
$trans["catalogSubmit"]            = "\$text = 'أكد';";
$trans["catalogCancel"]            = "\$text = 'إلغ';";
$trans["catalogRefresh"]           = "\$text = 'تحديث';";
$trans["catalogDelete"]            = "\$text = 'إحذف';";
$trans["catalogFootnote"]          = "\$text = 'الحقول المعلمة ب %symbol% إجبارية.';";
$trans["AnswerYes"]                = "\$text = 'نعم';";
$trans["AnswerNo"]                 = "\$text = 'لا';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'الفهرسة';";
$trans["indexBarcodeHdr"]          = "\$text = 'البحث برقم الباركود';";
$trans["indexBarcodeField"]        = "\$text = 'رقم الباركود';";
$trans["indexSearchHdr"]           = "\$text = 'بحث متقدم';";
$trans["indexKeyword"]             = "\$text = 'كلمة مفتاحية';";
$trans["indexTitle"]               = "\$text = 'العنوان';";
$trans["indexAuthor"]              = "\$text = 'المؤلف';";
$trans["indexSubject"]             = "\$text = 'الموضوع';";
$trans["indexButton"]              = "\$text = 'إبحث';";

#****************************************************************************
#*  Translation text for page library_fields.php
#****************************************************************************
$trans["LibraryFieldsLabel"]	= "\$text = 'مكتبة';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'تسجيلة بيليوغرافية';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'نوع المادة';";
$trans["biblioFieldsLocation"]  = "\$text = 'مكتبة/مكان';";
$trans["biblioFieldsCollection"]   = "\$text = 'مجموعة';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'رقم الطلب';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'حقول مارك';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'أظهر في الأوباك';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'إدخال جديد';";
$trans["biblioNewSuccess"]         = "\$text = 'تم إنشاء البيبليوغرافيا الآتية. لإضافة نسخة، اختر \"نسخة جديدة\" من قائمة التصفح على اليسار أو \"أضف نسخة جديدة\" من بيانات النسخة أدناه.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'تم إنشاء النسخة بنجاح.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'أضف نسخة جديدة';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'رقم باركود';";
$trans["biblioCopyNewDesc"]        = "\$text = 'الوصف';";
$trans["biblioCopyNewAuto"]        = "\$text = 'ولّد تلقائيا';";
$trans["biblioCopyNewValidBarco"]  = "\$text = 'متاح للطباعة';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'عدّل النسخة';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'الحالة';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'تم إنشاء النسخة بنجاح.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'تم تحديث النسخة بنجاح.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Could not delete copy.  A copy must be checked in before it can be deleted.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the copy with barcode %barcodeNmbr%?  This will also delete all status change history for this copy.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Copy with barcode %barcode% was successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'أضف حقل مارك';";
$trans["biblioMarcListHdr"]        = "\$text = 'معلومات حقل مارك';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'وظيفة';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'وسم';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'وصف الوسم';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'حقل فرعي للوصف';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'حقل البيانات';";
$trans["biblioMarcListNoRows"]     = "\$text = 'لا يوجد حقول مارك.';";
$trans["biblioMarcListEdit"]       = "\$text = 'حرر';";
$trans["biblioMarcListDel"]        = "\$text = 'إمسح';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';";
$trans["usmarcSelectInst"]         = "\$text = 'إختر نوع الحقل';";
$trans["usmarcSelectNoTags"]       = "\$text = 'لا وسوم موجودة.';";
$trans["usmarcSelectUse"]          = "\$text = 'إستخدم';";
$trans["usmarcCloseWindow"]        = "\$text = 'أغلق النافذة';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'أضف حقل مارك';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'وسم';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'حقل فرعي';";
$trans["biblioMarcNewFormData"]    = "\$text = 'حقل البيانات';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'إختر';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc field successfully added.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Edit Marc Field';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc field successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the field with tag %tag% and subfield %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'تم حذف حقل مارك بنجاح.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'This bibliography has %copyCount% copy(ies) and %holdCount% hold request(s).  Please delete these copies and/or hold requests before deleting this bibliography.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'return to bibliography information';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Are you sure you want to delete the bibliography with title %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'مادة, %title%, تم حذفها.';";
$trans["biblioDelReturn"]          = "\$text = 'إرجع إلى بحث البيبليوغرافيا';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'طلبات حجز المواد:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'لانسخ للمواد محجوزة.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'مهمة';";
$trans["biblioHoldListHdr2"]       = "\$text = 'نسخ';";
$trans["biblioHoldListHdr3"]       = "\$text = 'وضع في الحجز';";
$trans["biblioHoldListHdr4"]       = "\$text = 'عضو';";
$trans["biblioHoldListHdr5"]       = "\$text = 'حالة';";
$trans["biblioHoldListHdr6"]       = "\$text = 'وقت الإسترجاع';";
$trans["biblioHoldListdel"]        = "\$text = 'حذف';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'You are not authorized to use the Cataloging tab';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'رفع تجريبي';";
$trans["MarcUploadTestTrue"]        = "\$text = 'نعم';";
$trans["MarcUploadTestFalse"]       = "\$text = 'لا';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'تحديد ملف مارك';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'رفع تسجيلات';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'تسجيلة مارك';";
$trans["MarcUploadTag"]             = "\$text = 'وسم';";
$trans["MarcUploadSubfield"]        = "\$text = 'حقل فرعي';";
$trans["MarcUploadData"]            = "\$text = 'بيانات';";
$trans["MarcUploadRawData"]         = "\$text = 'بيانات خام:';";
$trans["UploadFile"]                = "\$text = 'إرفع ملف';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'يستخدم OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'حقوق &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'تحت';";
$trans["GNU"]                 = "\$text = 'رخصة جنو العمومية';";

$trans["catalogResults"]                 = "\$text = 'نتائج البحث';";



?>
