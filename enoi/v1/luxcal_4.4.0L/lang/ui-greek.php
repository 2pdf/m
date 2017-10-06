<?php
/*
= LuxCal event calendar user interface language file =

This file has been produced by Icehockey. Please send comments to rb@luxsoft.eu.

The content of this file is put in the public domain. Use it any way you like.
This file is part of the LuxCal Web Calendar (www.LuxSoft.eu).
*/

//LuxCal ui language file version
define("LUI","4.3.0");
define("ISOCODE","el");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Ιανουάριος", "Φεβρουάριος", "Μάρτιος", "Απρίλιος", "Μάιος", "Ιούνιος", "Ιούλιος", "Αύγουστος", "Σεπτέμβριος", "Οκτώβριος", "Νοέμβριος", "Δεκέμβριος");
$months_m = array("Ιαν", "Φεβ", "Μαρ", "Απρ", "Μαϊ", "Ιουν", "Ιουλ", "Αυγ", "Σεπ", "Οκτ", "Νοε", "Δεκ");
$wkDays = array("Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο", "Κυριακή");
$wkDays_l = array("Κυρ", "Δευ", "Τρι", "Τετ", "Πεμ", "Παρ", "Σαβ","Κυρ");
$wkDays_m = array("Κυ", "Δε", "Τρ", "Τε", "Πε", "Πα", "Σα","Κυ");
$wkDays_s = array("Κ", "Δ", "Τ", "Τ", "Π", "Π", "Σ","Κ");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Υποβολή",
"none" => "Καμμία.",
"back" => "Επιστροφή",
"by" => "από",
"of" => "του",
"done" => "OK",
"at_time" => "", //date and time separator (e.g. 10-04-2016 @ 10:45)
"no_way" => "Δεν έχετε εξουσιοδότηση να εκτελέσετε αυτή την ενέργεια",

//index.php
"title_log_in" => "Σύνδεση",
"title_upcoming" => "Επερχόμενες εκδηλώσεις",
"title_event" => "Εκδήλωση",
"title_add_event" => "Προσθήκη εκδήλωσης",
"title_check_event" => "Έλεγχος εκδήλωσης",
"title_search" => "Αναζήτηση κειμένου",
"title_user_guide" => "Οδηγίες χρήσης LuxCal",
"title_settings" => "Διαχείριση ρυθμίσεων ημερολογίου",
"title_edit_cats" => "Επεξεργασία κατηγοριών",
"title_edit_users" => "Επεξεργασία χρηστών",
"title_edit_groups" => "Επεξεργασία ομάδων χρηστών",
"title_manage_db" => "Διαχείριση βάσης δεδομένων",
"title_changes" => "Προστεθείσες / Τροποποιηθείσες / Διαγραφείσες εκδηλώσεις",
"title_csv_import" => "Εισαγωγή αρχείου CSV",
"title_ics_import" => "Εισαγωγή αρχείου iCal",
"title_ics_export" => "Εξαγωγή αρχείου iCal",
"idx_public_name" => "Σε κοινή θέα",

//header.php
"hdr_button_back" => "Επιστροφή στην προηγούμενη σελίδα",
"hdr_button_options" => "Επιλογές",
"hdr_options_submit" => "Κάντε τις επιλογές σας και πατήστε 'OK'",
"hdr_options_panel" => "Μενού καρτέλας επιλογών",
"hdr_select_date" => "Μετάβαση στην ημερομηνία",
"hdr_calendar" => "Ημερολόγιο",
"hdr_view" => "Εικόνα",
"hdr_lang" => "Γλώσσα",
"hdr_all_cats" => "Όλες οι κατηγορίες",
"hdr_all_groups" => "All Groups",
"hdr_all_users" => "Όλοι οι χρήστες",
"hdr_go_to_view" => "Go to view",
"hdr_year" => "Έτους",
"hdr_month" => "Month",
"hdr_month_full" => "Πλήρους μήνα",
"hdr_month_work" => "Εργάσιμου μήνα",
"hdr_week" => "Week",
"hdr_week_full" => "Πλήρους εβδομάδας",
"hdr_week_work" => "Εργάσιμης εβδομάδας",
"hdr_day" => "Ημέρας",
"hdr_upcoming" => "Επερχόμενων εκδηλώσεων",
"hdr_changes" => "Μεταβολών",
"hdr_matrix" => "Matrix",
"hdr_select_admin_functions" => "Επιλογή λειτουργιών διαχειριστή",
"hdr_admin" => "Διαχείριση",
"hdr_settings" => "Ρυθμίσεις",
"hdr_categories" => "Κατηγορίες",
"hdr_users" => "Χρήστες",
"hdr_groups" => "Ομάδες χρηστών",
"hdr_database" => "Βάση δεδομένων",
"hdr_import_csv" => "Εισαγωγή CSV",
"hdr_import_ics" => "Εισαγωγή iCal",
"hdr_export_ics" => "Εξαγωγή iCal",
"hdr_back_to_cal" => "Επιστροφή στο ημερολόγιο",
"hdr_button_print" => "Εκτύπωση",
"hdr_print_page" => "Εκτύπωση αυτής της σελίδας",
"hdr_button_toap" => "Approve",
"hdr_toap_list" => "Events to be approved",
"hdr_button_todo" => "Εργασίες",
"hdr_todo_list" => "Λίστα εργασιών",
"hdr_button_upco" => "Επερχόμενα",
"hdr_upco_list" => "Επερχόμενες εκδηλώσεις",
"hdr_button_search" => "Αναζήτηση",
"hdr_search" => "Αναζήτηση κειμένου",
"hdr_button_add" => "Προσθήκη",
"hdr_add_event" => "Προσθήκη εκδήλωσης",
"hdr_button_help" => "Βοήθεια",
"hdr_help" => "Οδηγίες χρήσης",
"hdr_log_in" => "Σύνδεση",
"hdr_button_log_in" => "Σύνδεση",
"hdr_button_log_out" => "Αποσύνδεση",
"hdr_today" => "σήμερα", //dtpicker.js
"hdr_clear" => "εκκαθάριση", //dtpicker.js

//event.php
"evt_no_title" => "Χωρίς τίτλο",
"evt_no_start_date" => "Χωρίς ημερομηνία έναρξης",
"evt_bad_date" => "Λανθασμένη ημερομηνία",
"evt_bad_rdate" => "Λανθασμένη ημερομηνία λήξης επανάληψης",
"evt_no_start_time" => "Χωρίς ώρα έναρξης",
"evt_bad_time" => "Λανθασμένη ώρα",
"evt_end_before_start_time" => "Ώρα λήξης πριν την ώρα έναρξης",
"evt_end_before_start_date" => "Ημερομηνία λήξης πριν την ημερομηνία έναρξης",
"evt_until_before_start_date" => "Ημερομηνία επανάληψης πριν την ημερομηνία έναρξης",
"evt_no_recur_if_overlay" => "Categorie with overlap check; recurring events not allowed",
"evt_private_no_ovl_check" => "Categorie with overlap check; no check for private events",
"evt_approved" => "Εκδήλωση εγκεκριμένη",
"evt_apd_locked" => "Εκδήλωση εγκεκριμένη και κλειδωμένη",
"evt_title" => "Τίτλος",
"evt_venue" => "Τόπος",
"evt_category" => "Κατηγορία",
"evt_description" => "Περιγραφή",
"evt_attachments" => "Attachments",
"evt_attach_file" => "Attach file<br>(max. 4MB)",
"evt_click_to_remove" => "Click to remove",
"evt_no_pdf_img_vid" => "Attachment should be pdf, image or video",
"evt_error_file_upload" => "Error uploading file",
"evt_upload_too_large" => "Uploaded file too large",
"evt_date_time" => "Ημερομηνία / ώρα",
"evt_mailer" => "mailer",
"evt_private" => "Ιδιωτική εκδήλωση",
"evt_start_date" => "Έναρξη",
"evt_end_date" => "Λήξη",
"evt_select_date" => "Επιλέξτε ημερομηνία",
"evt_select_time" => "Επιλέξτε ώρα",
"evt_all_day" => "Ολοήμερη",
"evt_change" => "Μεταβολή",
"evt_set_repeat" => "Ρύθμιση επανάληψης",
"evt_set" => "OK",
"evt_help" => "βοήθεια",
"evt_repeat_not_supported" => "Η ορισθείσα επανάληψη δεν υποστηρίζεται",
"evt_no_repeat" => "Χωρίς επανάληψη",
"evt_repeat_on" => "Επανάληψη κάθε",
"evt_until" => "μέχρι",
"evt_blank_no_end" => "κενό: χωρίς λήξη",
"evt_each_month" => "κάθε μήνα",
"evt_interval2_1" => "πρώτο/η",
"evt_interval2_2" => "δεύτερο/η",
"evt_interval2_3" => "τρίτο/η",
"evt_interval2_4" => "τέταρτο/η",
"evt_interval2_5" => "τελευταίο/α",
"evt_period1_1" => "ημέρα/ες",
"evt_period1_2" => "εβδομάδα/ες",
"evt_period1_3" => "μήνα/ες",
"evt_period1_4" => "έτος/η",
"evt_rpt_value_invalid" => "Λανθασμένη τιμή επανάληψης",
"evt_notify" => "Αποστολή ηλ/κού μηνύματος",
"evt_now_and_or" => "τώρα και/ή",
"evt_event_added" => "Νέα εκδήλωση",
"evt_event_edited" => "Τροποποιηθείσα εκδήλωση",
"evt_event_deleted" => "Διαγραφείσα εκδήλωση",
"evt_days_before_event" => "ημέρα/ες πριν την εκδήλωση στον:",
"evt_mail_help" => "Υπομνήσεις μέσω ηλ/κού ταχυδρομείου μπορούν να σταλούν είτε άμεσα (τώρα) ή ορισμένες ημέρες πριν την έναρξη της εκδήλωσης. Στο παρακάτω πεδίο μπορείτε να ορίσετε διευθύνσεις ή/και αρχεία στα οποία περιέχονται διευθύνσεις των παραληπτών των υπομνήσεων. Διαχωρίστε μεταξύ τους τις διευθύνσεις/τα αρχεία διευθύνσεων με το χαρακτήρα \';\'. Το πεδίο μπορεί να περιέχει 255 χαρακτήρες το μέγιστο. Τα αρχεία με τις διευθύνσεις παραληπτών (μία ηλεκτρονική διεύθυνση ανά γραμμή του αρχείου) πρέπει να τοποθετηθούν στον κατάλογο \'emlists\'.<br>. Αν δεν ορισθεί διαφορετικά, η κατάληξη των αρχείων διευθύνσεων είναι .txt.",
"evt_eml_list_too_long" => "Η λίστα διευθύνσεων παραληπτών έχει πάρα πολλούς χαρακτήρες.",
"evt_eml_list_missing" => "Λείπουν οι διευθύνσεις αποστολής ειδοποιήσεων",
"evt_not_in_past" => "Η ημερομηνία ειδοποίησης είναι στο παρελθόν",
"evt_not_days_invalid" => "Λανθασμένες ημέρες ειδοποίησης",
"evt_status" => "Κατάσταση",
"evt_descr_help" => "Στο πεδίο περιγραφή μπορούν να χρησιμοποιηθούν τα παρακάτω στοιχεία ...<br>- ετικέτες HTML &lt;b&gt;, &lt;i&gt;, &lt;u&gt; και &lt;s&gt; για έντονο, πλάγιο, υπογραμμισμένο και διεγραμμένο κείμενο.<br>- μικρές εικόνες (μικρογραφίες) στην ακόλουθη μορφή: κατάλογος/όνομα_εικόνας.επέκταση ή όνομα_εικόνας.επέκταση. Αν δεν δηλωθεί διαφορετικά, ο προκαθορισμένος κατάλογος είναι ο \'thumbnails\'. O κατάλογος πρέπει να είναι υποκατάλογος του ημερολογίου και η επέκταση να είναι .gif, .jpg ή .png. Τα αρχεία μικρογραφιών (εικόνων) μπορούν να μεταφορτωθούν μέσω FTP.<br>- Υπερσύνδεσμοι URL στη μορφή: url ή  url [όνομα], όπου \'όνομα\' θα είναι ο τίτλος του υπερσυνδέσμου. Π.χ. https://www.google.com [εύρεση].<br>Υπερσύνδεσμοι URL μπορούν επίσης να χρησιμοποιηθούν και στα έξτρα πεδία 1 και 2",
"evt_confirm_added" => "η εκδήλωση προστέθηκε",
"evt_confirm_saved" => "η εκδήλωση αποθηκεύθηκε",
"evt_confirm_deleted" => "η εκδήλωση διαγράφηκε",
"evt_add_close" => "Προσθήκη και επιστροφή",
"evt_add" => "Προσθήκη",
"evt_edit" => "Επεξεργασία",
"evt_save_close" => "Αποθήκευση και επιστροφή",
"evt_save" => "Αποθήκευση",
"evt_clone" => "Αποθήκευση ως νέα",
"evt_delete" => "Διαγραφή",
"evt_close" => "Επιστροφή",
"evt_open_calendar" => "Άνοιγμα ημερολογίου",
"evt_added" => "Προστέθηκε",
"evt_edited" => "Τροποποιήθηκε",
"evt_is_repeating" => "είναι επαναλαμβανόμενη εκδήλωση.",
"evt_is_multiday" => "είναι πολυήμερη εκδήλωση.",
"evt_edit_series_or_occurrence" => "Επιθυμείτε να τροποποιήσετε την εκδήλωση για όλη τη χρονική διάρκειά της ή μόνο την συγκεκριμένη;",
"evt_edit_series" => "Επεξεργασία για όλη τη χρονική διάρκεια της εκδήλωσης",
"evt_edit_occurrence" => "Επεξεργασία μόνο για τη συγκεκριμένη εκδήλωση",

//views
"vws_add_event" => "Προσθήκη εκδήλωσης",
"vws_view_month" => "Εικόνα μήνα",
"vws_view_week" => "Εικόνα εβδομάδας",
"vws_view_day" => "Εικόνα ημέρας",
"vws_click_for_full" => "για πλήρες ημερολόγιο πατήστε στον μήνα",
"vws_view_full" => "Εικόνα πλήρους ημερολογίου",
"vws_prev_month" => "Προηγούμενος μήνας",
"vws_next_month" => "Επόμενος μήνας",
"vws_today" => "Σήμερα",
"vws_back_to_today" => "Επιστροφή στον σημερινό μήνα",
"vws_week" => "Εβδομάδα",
"vws_wk" => "εβδ",
"vws_time" => "Ώρα",
"vws_events" => "Εκδηλώσεις",
"vws_all_day" => "Ολοήμερη",
"vws_earlier" => "Νωρίτερα",
"vws_later" => "Αργότερα",
"vws_venue" => "Τόπος",
"vws_events_for_next" => "Επερχόμενες εκδηλώσεις επόμενης/ων",
"vws_days" => "ημέρας(ων)",
"vws_added" => "Προστέθηκε",
"vws_edited" => "Τροποποιήθηκε",
"vws_notify" => "Ειδοποίηση",
"vws_none_due_in" => "Καμμία εκδήλωση δεν λήγει τον/την επόμενο/η",
"vws_evt_cats" => "Event categories",
"vws_download" => "Μεταφόρτωση",
"vws_download_title" => "Μεταφόρτωση αρχείου κειμένου με αυτές τις εκδηλώσεις",

//changes.php
"chg_from_date" => "Ημερομηνία από",
"chg_select_date" => "Επιλογή αρχικής ημερομηνίας",
"chg_notify" => "Ειδοποίηση",
"chg_days" => "Ημέρα(ες)",
"chg_added" => "Προστέθηκε",
"chg_edited" => "Τροποποιήθηκε",
"chg_deleted" => "Διαγράφηκε",
"chg_changed_on" => "Μεταβολές για",
"chg_changes" => "Μεταβολές",
"chg_no_changes" => "Χωρίς μεταβολές.",

//search.php
"sch_define_search" => "Καθορισμός αναζήτησης",
"sch_search_text" => "Κείμενο αναζήτησης",
"sch_event_fields" => "Στα πεδία",
"sch_all_fields" => "Σε όλα τα πεδία",
"sch_title" => "Στον τίτλο",
"sch_description" => "Στην περιγραφή",
"sch_venue" => "Στον τόπο",
"sch_user_group" => "User group",
"sch_event_cat" => "Κατηγορία εκδήλωσης",
"sch_all_groups" => "All Groups",
"sch_all_cats" => "Όλες οι κατηγορίες",
"sch_occurring_between" => "Η εκδήλωση πραγματοποιείται μεταξύ",
"sch_select_start_date" => "Επιλέξτε ημερομηνία έναρξης",
"sch_select_end_date" => "Επιλέξτε ημερομηνία λήξης",
"sch_search" => "Αναζήτηση",
"sch_invalid_search_text" => "Το κείμενο αναζήτησης λείπει ή είναι πολύ βραχύ",
"sch_bad_start_date" => "Λανθασμένη ημερομηνία έναρξης",
"sch_bad_end_date" => "Λανθασμένη ημερομηνία λήξης",
"sch_no_results" => "Δεν βρέθηκαν αποτελέσματα που να ταιριάζουν",
"sch_new_search" => "Νέα αναζήτηση",
"sch_calendar" => "Επιστροφή στο ημερολόγιο",
"sch_extra_field1" => "Έξτρα πεδίο 1",
"sch_extra_field2" => "Έξτρα πεδίο 2",
"sch_instructions" =>
"<h4>Οδηγίες αναζήτησης κειμένου</h4>
<p>Στη βάση δεδομένων του ημερολογίου μπορεί να γίνει αναζήτηση εκδηλώσεων που ταιριάζουν με ορισμένο κείμενο.</p>
<br><p><b>Αναζήτηση κειμένου</b>: Τα επιλεγμένα πεδία (βλ. παρακάτω) κάθε εκδήλωσης θα ελεγχθούν. Η αναζήτηση δεν διακρίνει κεφαλαία και πεζά (τουλάχιστον στα λατινικά γράμματα, ίσως και στα ελληνικά ανάλογα με την εγκατάσταση PHP σας).</p>
<p>Μπορούν να χρησιμοποιηθούν δύο χαρακτήρες μπαλαντέρ:</p>
<ul>
<li>Η κάτω παύλα (_) στο κείμενο αναζήτησης ταιριάζει με οποιονδήποτε χαρακτήρα στο πεδίο.<br>Π.χ.: το '_έ_α' ταιριάζει στα 'δέμα', 'πέρα', 'βέρα'.</li>
<li>Το συμπλεκτικό σύμβολο (&amp;) στο κείμενο αναζήτησης ταιριάζει με οποιανδήποτε συμβολοσειρά, οποιουδήποτε μήκους (δηλαδή αποτελούμενη από 0 και άνω οποιουσδήποτε χαρακτήρες).<br>Π.χ.: το 'Δ&amp;' ταιριάζει στα 'Δ', 'Δ.', 'Δρ.', 'Δέμα', 'Δημόκριτος'.</li>
</ul>
<p>A blank search text field, or just an ampersand, will match any text and therefore all events.</p>
<br><p><b>Πεδία εκδήλωσης</b>: Η αναζήτηση θα γίνει μόνο στα καθοριζόμενα πεδία.</p>
<br><p><b>User group</b>: Events in the selected user group will be searched only.</p>
<br><p><b>Κατηγορία εκδήλωσης</b>: Η αναζήτηση θα γίνει μόνο στις εκδηλώσεις της καθοριζόμενης κατηγορίας.</p>
only.</p>
<br><p><b>Η εκδήλωση πραγματοποιείται μεταξύ</b>: Η ημερομηνία έναρξης και λήξης είναι προαιρετικές. Κενή ημερομηνία έναρξης σημαίνει ένα έτος από τώρα στο παρελθόν, ενώ κενή ημερομηνία λήξης σημαίνει ένα έτος από τώρα στο μέλλον.</p>
<br><p>Τα αποτελέσματα της αναζήτησης εμφανίζονται με χρονολογική σειρά.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Επερχόμενες εκδηλώσεις",
"ssb_all_day" => "ολοήμερο",
"ssb_none" => "Δεν υπάρχουν εκδηλώσεις."
);
?>
