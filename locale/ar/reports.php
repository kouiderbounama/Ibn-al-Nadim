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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'إلغ';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'التقارير';";
$trans["indexDesc"]                = "\$text = 'Use the report or label list located in the left hand navigation area to produce reports or labels.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'قائمة التقارير';";
$trans["reportListDesc"]           = "\$text = 'إختر إحداها من الروابط التالية لتشغيلها.';";
$trans["reportListXmlErr"]         = "\$text = 'Error occurred parsing report definition xml.';";
$trans["reportListCannotRead"]     = "\$text = 'Cannot read label file: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Label List';";
$trans["labelListDesc"]            = "\$text = 'Choose from one of the following links to produce labels in pdf format.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Error occurred parsing report definition xml.  Error = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Letter List';";
$trans["letterListDesc"]           = "\$text = 'Choose from one of the following links to produce letters in pdf format.';";
$trans["displayLettersXmlErr"]      = "\$text = 'Error occurred parsing report definition xml.  Error = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Report Search Criteria (optional)';";
$trans["reportCriteriaHead2"]      = "\$text = 'Report Sort Order (optional)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Report Output Type';";
$trans["reportCriteriaCrit1"]      = "\$text = 'Criteria 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = 'Criteria 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = 'Criteria 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = 'Criteria 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'not =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt or =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt or =';";
$trans["reportCriteriaBT"]         = "\$text = 'between';";
$trans["reportCriteriaAnd"]        = "\$text = 'and';";
$trans["reportCriteriaRunReport"]  = "\$text = 'Run Report';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Sort 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Sort 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Sort 3:';";
$trans["reportCriteriaAscending"]  = "\$text = 'تصاعدي';";
$trans["reportCriteriaDescending"] = "\$text = 'تنازلي';";
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Start printing on label:';";
$trans["reportCriteriaOutput"]     = "\$text = 'صيغة الخرج:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'report selection criteria';";
$trans["runReportReturnLink2"]     = "\$text = 'قائمة التقارير';";
$trans["runReportTotal"]           = "\$text = 'Total Rows:';";
$trans["Result Pages: "]           = "\$text = 'Ergebnis-Seiten: ';";
$trans["&laquo;Prev"]              = "\$text = '&laquo;Zurück';";
$trans["Next&raquo;"]              = "\$text = 'Nächster&raquo;';";
$trans["&laquo;First"]             = "\$text = '&laquo;Anfang';";
$trans["Last&raquo;"]              = "\$text = 'Ende&raquo;';";
$trans["No results found."]        = "\$text = 'لا توجد نتائج.';";
$trans["Report Results:"]          = "\$text = 'نتائج التقرير:';";
$trans["results found."]           = "\$text = 'نتائج وجدت.';";
$trans["Print list"]               = "\$text = 'طباعة القائمة';";
#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'Field must be numeric.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Error occurred parsing report definition xml.  Error = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'Cannot read label file: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'لست مصرح له لاستخدام تبويب التقارير.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Hold Requests Containing Member Contact Info';";
$trans["reportCheckouts"]          = "\$text = 'Bibliography Checkout Listing';";
$trans["Over Due Letters"]           = "\$text = 'Over Due Letters';";
$trans["reportLabels"]             = "\$text = 'Label Printing Query (used by labels)';";
$trans["popularBiblios"]           = "\$text = 'Most Popular Bibliographies';";
$trans["overdueList"]              = "\$text = 'Over Due Member List';";
$trans["balanceDueList"]           = "\$text = 'Balance Due Member List';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'قائمة المواد المحجوزة';";
$trans["reportCheckouts"]          = "\$text = 'قائمة المواد المستعارة';";
$trans["Over Due Letters"]         = "\$text = 'Mahnungsbriefe';";
$trans["reportLabels"]             = "\$text = 'Etikettendruckanfrage (von den Etiketten genutzt)';";
$trans["popularBiblios"]           = "\$text = 'مواد لها شعبية';";
$trans["overdueList"]              = "\$text = 'قائمة مستخدمين لديهم مواد متأخرة';";
$trans["balanceDueList"]           = "\$text = 'قائمة الديون المستحقة';";
$trans["Acquisition"]              = "\$text = 'تزويد';";
$trans["Duplicate Titles"]         = "\$text = 'عنوان مكرر';";
$trans["Periodic Checkout Count"]  = "\$text = 'عداد الدوريات المستعارة';";
$trans["Copy Search"]              = "\$text = 'بحث النسخ';";
$trans["Inventory List"]           = "\$text = 'قائمة الجرد';";
$trans["Biblio List"]              = "\$text = 'قائمة المواد';";
$trans["Return"]    	           = "\$text = 'رجوع';";
$trans["Search for Number of Players"] = "\$text = 'Suche nach Spieleranzahl';";
$trans["Search for Age of Players"]    = "\$text = 'Suche nach Spieleralter';";
$trans["Search for Playtime"]      = "\$text = 'Suche nach Spielzeit';";
$trans["Search for Game"]          = "\$text = 'Spielesuche';";
$trans["Item Checkout History"]    = "\$text = 'تاريخ الإعارة';";
$trans["Member Search"]            = "\$text = 'بحث مستفيد';";
$trans["Most Popular Authors"]     = "\$text = 'مؤلفين لهم شعبية';";
$trans["Labels"]                   = "\$text = 'ملصقات';";
$trans["Call Num."]                = "\$text = 'رقم الطلب';";
$trans["Barcode"]                  = "\$text = 'باركود';";
$trans["Title"]                    = "\$text = 'عنوان';";
$trans["Number"]                   = "\$text = 'رقم';";
$trans["Age"]                      = "\$text = 'عمر';";
$trans["max. Time"]                = "\$text = 'الوقت الأقصى';";
$trans["time"]                     = "\$text = 'وقت';";
$trans["maxPlayer"]                = "\$text = 'max. Spieler';";
$trans["minPlayer"]                = "\$text = 'min. Spieler';";
$trans["maxAge"]                   = "\$text = 'max. Alter';";
$trans["minAge"]                   = "\$text = 'min. Alter';";
$trans["Author"]                   = "\$text = 'كاتب';";
$trans["Publisher"]                = "\$text = 'ناشر';";
$trans["Description"]              = "\$text = 'وصف';";
$trans["Quantity"]                 = "\$text = 'عدد';";
$trans["Member"]                   = "\$text = 'مستفيد';";
$trans["Checkout"]                 = "\$text = 'إرجاع';";
$trans["Due"]                      = "\$text = 'مستحق';";
$trans["Balance"]                  = "\$text = 'رصيد';";
$trans["Member Barcode"]           = "\$text = 'باركود عصو';";
$trans["Status Begin"]             = "\$text = 'حالة البدأ';";
$trans["Hold Begin"]               = "\$text = 'حجز يبدأ';";
$trans["Acq. Date"]                = "\$text = 'Erwerbungsdatum';";
$trans["Collection"]               = "\$text = 'مجموعة';";
$trans["Material"]                 = "\$text = 'مادة';";
$trans["After (Date or yesterday)"] = "\$text = 'بعد (تاريخ أو \'أمس\')';";
$trans["Before"]                   = "\$text = 'قبل';";
$trans["Minimum balance"]          = "\$text = 'الرصيد المطلوب';";
$trans["Remainder of title"]       = "\$text = 'عنوان فرعي';";
$trans["Record created on"]        = "\$text = 'مادة أنشئت في';";
$trans["Duplicate Criteria"]       = "\$text = 'معيار مكرر';";
$trans["Title, Title Remainder, Author"] = "\$text = 'عنوان, عنوان فرعيl, كاتب';";
$trans["Title, Author"]            = "\$text = 'عنوان, كاتب';";
$trans["Title, Title Remainder, Date Created"] = "\$text = 'عنوان, عنوان فرعي, تاريخ انشاء';";
$trans["Author, Title, Title Remainder, Date Created"] = "\$text = 'مؤلف, عنوان, عنوان فرعي, تاريخ الإنشاء';";
$trans["Title Remainder"]          = "\$text = 'تكملة عنوان';";
$trans["Date Created"]             = "\$text = 'تاريخ الإنشاء';";
$trans["Cycle"]                    = "\$text = 'دورية';";
$trans["# Checkouts"]              = "\$text = '# إعارات';";
$trans["Time Span"]                = "\$text = 'Zeitraum';";
$trans["Week"]                     = "\$text = 'أسبوع';";
$trans["Month"]                    = "\$text = 'شهر';";
$trans["Quarter"]                  = "\$text = 'Quartal';";
$trans["Due before"]               = "\$text = 'Zurück vor';";
$trans["Out since"]                = "\$text = 'ausgeliehen seit';";
$trans["Barcode Starts With"]      = "\$text = 'باركود يبدأ بــ';";
$trans["List of Barcodes (spaced)"] = "\$text = 'Liste der Barcodes (mit Leerzeichen)';";
$trans["Newer than (Date or today)"] = "\$text = 'Neuer als (Datum oder \'today\')';";
$trans["Placed before"]            = "\$text = 'محجوزة قبل';";
$trans["Placed since"]             = "\$text = 'محجوزة منذ';";
$trans["Call Number"]              = "\$text = 'رقم طلب';";
$trans["Cards"]                    = "\$text = 'بطاقات';";
$trans["ID Cards, self-laminating"] = "\$text = 'Visitenkarten, selbstlaminierend';";
$trans["Name"]                     = "\$text = 'إسم';";
$trans["Create Date"]              = "\$text = 'تاريخ الإنشاء';";
$trans["Date of Return"]           = "\$text = 'تاريخ الرجوع';";
$trans["Name Contains"]            = "\$text = 'Name enthält';";
$trans["Address or Phone or Email Contains"] = "\$text = 'Adresse, Telefonnummer oder Mail enthält';";
$trans["Newer than (Date or today)"] = "\$text = 'Neuer als (Datum oder today)';";
$trans["Overdue Letters"]          = "\$text = 'Mahnungsbriefe';";
$trans["As of"]                    = "\$text = 'من تاريخ';";
$trans["# Checkouts, Author"]      = "\$text = '# إعارة ،مؤلف';";
$trans["Most Checkouts, Author"]   = "\$text = 'الأكثر إعارة،مؤلف';";
$trans["Group By"]                 = "\$text = 'مجموعة حسب';";
$trans["Bibliography"]             = "\$text = 'وسائط';";
$trans["Bibliography Copy"]        = "\$text = 'نسخة';";
$trans["# Checkouts, Author, Title"] = "\$text = '# إعارة،مؤلف،عنوان';";
$trans["Most Checkouts, Author, Title"] = "\$text = 'Meisten Ausleihen pro Autor und Titel';";
$trans["HTML (page-by-page)"]      = "\$text = 'HTML (صفحة بصفحة)';";
$trans["Format"]                   = "\$text = 'شكل';";
$trans["HTML (one big page)"]      = "\$text = 'HTML (صفحة واحدة كبيرة)';";
$trans["CSV"]                      = "\$text = 'CSV';";
$trans["Sort By"]                  = "\$text = 'إظهار حسب';";
$trans["Cataloging"]               = "\$text = 'فهرسة';";
$trans["Circulation"]              = "\$text = 'تداول';";
$trans["Statistics"]               = "\$text = 'إحصائيات';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = 'Multi Label Example';";
$trans["labelsSimple"]             = "\$text = 'Simple Label Example';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = 'Biblio ID';";
$trans["biblio.create_dt"]         = "\$text = 'تاريخ الإضافة';";
$trans["biblio.last_change_dt"]    = "\$text = 'Last Changed';";
$trans["biblio.material_cd"]       = "\$text = 'Material Cd';";
$trans["biblio.collection_cd"]     = "\$text = 'المجموعة';";
$trans["biblio.call_nmbr1"]        = "\$text = 'Call 1';";
$trans["biblio.call_nmbr2"]        = "\$text = 'Call 2';";
$trans["biblio.call_nmbr3"]        = "\$text = 'Call 3';";
$trans["biblio.title_remainder"]   = "\$text = 'بقية العنوان';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Stmt of Resp';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC Flag';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Barcode';";
$trans["biblio.title"]             = "\$text = 'العنوان';";
$trans["biblio.author"]            = "\$text = 'المؤلف';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Status Begin Date';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'آخر تاريخ للإرجاع';";
$trans["member.mbrid"]             = "\$text = 'Member ID';";
$trans["member.barcode_nmbr"]      = "\$text = 'Member Barcode';";
$trans["member.last_name"]         = "\$text = 'إسم العائلة';";
$trans["member.first_name"]        = "\$text = 'Name First';";
$trans["member.address"]          = "\$text = 'العنوان';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Hold Begin Date';";
$trans["member.home_phone"]        = "\$text = 'هاتف البيت';";
$trans["member.work_phone"]        = "\$text = 'هاتف العمل';";
$trans["member.email"]             = "\$text = 'بريد إلكتروني';";
$trans["biblio_status_dm.description"] = "\$text = 'Status';";
$trans["settings.library_name"]    = "\$text = 'إسم المكتبة';";
$trans["settings.library_hours"]   = "\$text = 'الساعات المكتبية';";
$trans["settings.library_phone"]   = "\$text = 'هاتف المكتبة';";
$trans["days_late"]                = "\$text = 'Days Late';";
$trans["title"]                    = "\$text = 'العنوان';";
$trans["author"]                   = "\$text = 'المؤلف';";
$trans["due_back_dt"]              = "\$text = 'معاد الإرجاع';";
$trans["checkoutCount"]            = "\$text = 'عدد الإعارات';";

?>
