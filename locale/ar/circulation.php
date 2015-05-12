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
$trans["circCancel"]              = "\$text = 'إلغ';";
$trans["circDelete"]              = "\$text = 'إحذف';";
$trans["circLogout"]              = "\$text = 'خروج';";
$trans["circAdd"]                 = "\$text = 'أضف';";
$trans["mbrDupBarcode"]           = "\$text = 'Barcode number, %barcode%, is currently in use.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='الإعارة';";
$trans["indexCardHdr"]            = "\$text='إبحث عن المستفيد برقم البطاقة:';";
$trans["indexCard"]               = "\$text='رقم البطاقة:';";
$trans["indexSearch"]             = "\$text='إبحث';";
$trans["indexNameHdr"]            = "\$text='بحث بالمستفيد أو بالإسم الأخير:';";
$trans["indexName"]               = "\$text='الإسم الأخير يبدأ ب:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='عنوان المراسلة:';";
$trans["mbrNewForm"]              = "\$text='أضف جديد';";
$trans["mbrEditForm"]             = "\$text='عدّل';";
$trans["mbrFldsHeader"]           = "\$text='عضو:';";
$trans["mbrFldsCardNmbr"]         = "\$text='رقم البطاقة:';";
$trans["mbrFldsLastName"]         = "\$text='الإسم الأخير:';";
$trans["mbrFldsFirstName"]        = "\$text='الإسم الأول:';";
$trans["mbrFldsAddr1"]            = "\$text='عنوان 1:';";
$trans["mbrFldsAddr2"]            = "\$text='عنوان 2:';";
$trans["mbrFldsCity"]             = "\$text='المدينة:';";
$trans["mbrFldsStateZip"]         = "\$text='ولاية, رمز بريدي:';";
$trans["mbrFldsHomePhone"]        = "\$text='هاتف المنزل:';";
$trans["mbrFldsWorkPhone"]        = "\$text='هاتف العمل:';";
$trans["mbrFldsEmail"]            = "\$text='البريد الإلكتروني:';";
$trans["mbrFldsClassify"]         = "\$text='تصنيف:';";
$trans["mbrFldsGrade"]            = "\$text='الدرجة العلمية:';";
$trans["mbrFldsTeacher"]          = "\$text='استاذ المدرسة:';";
$trans["mbrFldsSubmit"]           = "\$text='موافق';";
$trans["mbrFldsCancel"]           = "\$text='إلغ';";
$trans["mbrsearchResult"]         = "\$text='صفخات النتيجة,: ';";
$trans["mbrsearchprev"]           = "\$text='سابق';";
$trans["mbrsearchnext"]           = "\$text='تالي';";
$trans["mbrsearchNoResults"]      = "\$text='لانتائج وجدت.';";
$trans["mbrsearchFoundResults"]   = "\$text=' النتائج الموجودة.';";
$trans["mbrsearchSearchResults"]  = "\$text='نتائج البحث:';";
$trans["mbrsearchCardNumber"]     = "\$text='رقم البطاقة:';";
$trans["mbrsearchClassification"] = "\$text='تصنيف:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='تم إضافة العضو بنجاح.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Member has been successfully updated.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='معلومات العضو:';";
$trans["mbrViewName"]             = "\$text='إسم:';";
$trans["mbrViewAddr"]             = "\$text='عنوان:';";
$trans["mbrViewCardNmbr"]         = "\$text='رقم البطاقة:';";
$trans["mbrViewClassify"]         = "\$text='تصنيف:';";
$trans["mbrViewPhone"]            = "\$text='هاتف:';";
$trans["mbrViewPhoneHome"]        = "\$text='H:';";
$trans["mbrViewPhoneWork"]        = "\$text='W:';";
$trans["mbrViewEmail"]            = "\$text='البريد الإلكتروني:';";
$trans["mbrViewGrade"]            = "\$text='الدرجة العلمية:';";
$trans["mbrViewTeacher"]          = "\$text='استاذ المدرسية:';";
$trans["mbrViewHead2"]            = "\$text='حالة الإعارة:';";
$trans["mbrViewStatColHdr1"]      = "\$text='مادة';";
$trans["mbrViewStatColHdr2"]      = "\$text='عداد';";
$trans["mbrViewStatColHdr3"]      = "\$text='حدود';";
$trans["mbrViewStatColHdr4"]      = "\$text='إعارة';";
$trans["mbrViewStatColHdr5"]      = "\$text='تجديد';";
$trans["mbrViewHead3"]            = "\$text='إعارة المادة:';";
$trans["mbrViewBarcode"]          = "\$text='رقم الباركود:';";
$trans["mbrViewCheckOut"]         = "\$text='إعارة';";
$trans["mbrViewHead4"]            = "\$text='مواد معارة حاليا:';";
$trans["mbrViewOutHdr1"]          = "\$text='إعارة';";
$trans["mbrViewOutHdr2"]          = "\$text='مادة';";
$trans["mbrViewOutHdr3"]          = "\$text='باركود';";
$trans["mbrViewOutHdr4"]          = "\$text='عنوان';";
$trans["mbrViewOutHdr5"]          = "\$text='كاتب';";
$trans["mbrViewOutHdr6"]          = "\$text='وقت الإرجاع';";
$trans["mbrViewOutHdr7"]          = "\$text='التأخر بالأيام';";
$trans["mbrViewOutHdr8"]          = "\$text='تجديد';";
$trans["mbrViewOutHdr9"]          = "\$text='وقت';";
$trans["mbrViewNoCheckouts"]      = "\$text='لامواد مستعارة.';";
$trans["mbrViewHead5"]            = "\$text='وضع في الحجز:';";
$trans["mbrViewHead6"]            = "\$text='مواد للحجز حاليا:';";
$trans["mbrViewPlaceHold"]        = "\$text='وضع  في الحجز';";
$trans["mbrViewHoldHdr1"]         = "\$text='مهمة';";
$trans["mbrViewHoldHdr2"]         = "\$text='وضع في الحجز';";
$trans["mbrViewHoldHdr3"]         = "\$text='مادة';";
$trans["mbrViewHoldHdr4"]         = "\$text='باركود';";
$trans["mbrViewHoldHdr5"]         = "\$text='عنوان';";
$trans["mbrViewHoldHdr6"]         = "\$text='كاتب';";
$trans["mbrViewHoldHdr7"]         = "\$text='حالة';";
$trans["mbrViewHoldHdr8"]         = "\$text='وقت الإرجاع';";
$trans["mbrViewNoHolds"]          = "\$text='لامواد محجوزة.';";
$trans["mbrViewBalMsg"]           = "\$text='ملاحظة: Member has an outstanding account balance of %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='طباعة قائمة الإعارة';";
$trans["mbrViewDel"]              = "\$text='del';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Member must pay outstanding account balance before checking out.';";
$trans["checkoutErr1"]            = "\$text='Barcode number must be all alphanumeric.';";
$trans["checkoutErr2"]            = "\$text='No bibliography was found with that barcode number.';";
$trans["checkoutErr3"]            = "\$text='Bibliography with barcode number %barcode% is already checked out.';";
$trans["checkoutErr4"]            = "\$text='Bibliography with barcode number %barcode% is not available for checkout.';";
$trans["checkoutErr5"]            = "\$text='Bibliography with barcode number %barcode% is currently on hold for another member.';";
$trans["checkoutErr6"]            = "\$text='Member has reached the checkout limit for the specified bibliography\'s material type.';";
$trans["checkoutErr7"]            = "\$text='Bibliography with barcode number %barcode% has reached the member\'s renewal limit.';";
$trans["checkoutErr8"]            = "\$text='Bibliography with barcode number %barcode% can not be renew as it is already late.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Barcode number must be all alphanumeric.';";
$trans["shelvingCartErr2"]        = "\$text='No bibliography was found with that barcode number.';";
$trans["shelvingCartTrans"]       = "\$text='Late fee (barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='إرجاع  مادة:';";
$trans["checkinFormBarcode"]      = "\$text='باركود:';";
$trans["checkinFormShelveButton"] = "\$text='وضع في الرف';";
$trans["checkinFormCheckinLink1"] = "\$text='إرجاع المواد المختارة';";
$trans["checkinFormCheckinLink2"] = "\$text='إرجاع كل المواد';";
$trans["checkinFormHdr2"]         = "\$text='قائمة الترفيف الحالية:';";
$trans["checkinFormColHdr1"]      = "\$text='تاريخ المسح';";
$trans["checkinFormColHdr2"]      = "\$text='باركود';";
$trans["checkinFormColHdr3"]      = "\$text='عنوان';";
$trans["checkinFormColHdr4"]      = "\$text='مؤلف';";
$trans["checkinFormEmptyCart"]    = "\$text='No bibliographies are currently in shelving cart status.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='لا مواد مختارة.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Bibliography Has Been Placed On Hold!';";
$trans["holdMessageMsg1"]         = "\$text='The bibliography with barcode number %barcode% that you are attempting to check in has one or more hold requests placed on it.  <b>Please file this bibliography with your held items instead of placing it on your shelving cart.</b>  The status code for this bibliography has been set to hold.';";
$trans["holdMessageMsg2"]         = "\$text='Return to bibliography check in.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='باركود يجب أن يكون أرقام.';";
$trans["placeHoldErr2"]           = "\$text='باردود غير صحيح.';";
$trans["placeHoldErr3"]           = "\$text='This member already has that item checked out -- not placing hold.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Member, %name%, has %checkoutCount% checkout(s) and %holdCount% hold request(s).  All checked out materials must be checked in and all hold requests deleted before deleting this member.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'العودة لمعلومات المستفيد';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Are you sure you want to delete the member, %name%?  This will also delete all checkout history for this member.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='مستفيد, %name%, تم حذفه.';";
$trans["mbrDelReturn"]            = "\$text='العدودة للبحث عن مستفيد';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='سجل  الإعارة للمستفيد:';";
$trans["mbrHistoryNoHist"]        = "\$text='لا سجل بحث موجود.';";
$trans["mbrHistoryHdr1"]          = "\$text='باركود';";
$trans["mbrHistoryHdr2"]          = "\$text='العنوان';";
$trans["mbrHistoryHdr3"]          = "\$text='المؤلف';";
$trans["mbrHistoryHdr4"]          = "\$text='اضافة حالة';";
$trans["mbrHistoryHdr5"]          = "\$text='Date of Status Change';";
$trans["mbrHistoryHdr6"]          = "\$text='Due Back Date';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='إضافة معاملة:';";
$trans["mbrAccountTransTyp"]      = "\$text='نوع المعاملة:';";
$trans["mbrAccountAmount"]        = "\$text='مبلغ:';";
$trans["mbrAccountDesc"]          = "\$text='وصف:';";
$trans["mbrAccountHead1"]         = "\$text='حاب المستفيد للمعاملات:';";
$trans["mbrAccountNoTrans"]       = "\$text='لا معاملات وجدت.';";
$trans["mbrAccountOpenBal"]       = "\$text='فتح رصيد';";
$trans["mbrAccountDel"]           = "\$text='حذف';";
$trans["mbrAccountHdr1"]          = "\$text='مهمة';";
$trans["mbrAccountHdr2"]          = "\$text='تاريخ';";
$trans["mbrAccountHdr3"]          = "\$text='نوع المعاملة';";
$trans["mbrAccountHdr4"]          = "\$text='وصف';";
$trans["mbrAccountHdr5"]          = "\$text='مبلغ';";
$trans["mbrAccountHdr6"]          = "\$text='رصيد';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='معاملة منتهية بنجاح.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Are you sure you want to delete this transaction?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transaction successfully deleted.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Checkouts for %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='الوقت الحالي:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='مستفيد:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='رقم المستفيد:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='تصنيف:';";
$trans["mbrPrintCloseWindow"]     = "\$text='أغلق النافذة';";
#****************************************************************************
#*  Translation text for page offline.php
#****************************************************************************
$trans["Upload Offline Circulation"]     = "\$text='رفع ملف الإعارة بدون إتصال';";
$trans["Upload"]     = "\$text='رفع';";
$trans["Date:"]     = "\$text='تاريخ:';";
$trans["Command File:"]     = "\$text='ملف الأوامر:';";
$trans["Bad upload file: Expected a command code, but didn't get one"]     = "\$text='ملف غير صحيح: بسبب رمز الأوامر';";
$trans["Couldn't check out %item% to %member%: %error%"]     = "\$text='لا يمكن التحقق %item% an %member% nicht ausleihen: %error%';";
$trans["Couldn't check in %item%: %error%"]     = "\$text='لا يمكن التحقق %item% في: %error%';";
$trans["Unrecognized command code: %cmd%"]     = "\$text='رمز الأمر غير معروف: %cmd%';";
$trans["Command Sheet"]     = "\$text='صفحة الأوامر';";
$trans["Actions which did not produce an error have completed. Think carefully before uploading the same file again, or some circulations may be recorded twice."]     = "\$text='Aktionen die keinen Fehler produzieren wurden ausgeführt. Passen Sie auf, dass Sie keine Datei doppelt hochladen, da sonst einige Ausleihen doppelt erfasst werden.';";
$trans["Errors"]     = "\$text='أخطاء';";
$trans["Offline Upload Successful."]     = "\$text='رفع الملف بنجاح.';";

?>
