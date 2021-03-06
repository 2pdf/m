<?php
/*
= LuxCal event calendar admin interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2016 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","4.3.0");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Brak",
"all" => "All",
"back" => "Back",
"close" => "Close",
"always" => "always",
"at_time" => "@", //date and time separator (e.g. 10-04-2016 @ 10:45)
"year" => "Year",
"month" => "Month",
"week_day" => "Week/Day",
"upcoming" => "Upcoming",
"rows" => "rows",
"columns" => "columns",
"user_group" => "user group",
"event_cat" => "event category",
"id" => "ID",

//settings.php - fieldset headers + general
"set_general_settings" => "Calendar General",
"set_navbar_settings" => "Navigation Bar",
"set_event_settings" => "Events",
"set_user_settings" => "User Accounts",
"set_email_settings" => "Email Settings",
"set_perfun_settings" => "Periodic Functions (only relevant if cron job defined)",
"set_minical_settings" => "Mini Calendar (only relevant if used)",
"set_sidebar_settings" => "Stand-Alone Sidebar (only relevant if in use)",
"set_view_settings" => "Views",
"set_dt_settings" => "Dates/Times",
"set_save_settings" => "Save Settings",
"set_test_mail" => "Test Mail",
"set_mail_sent_to" => "Test mail sent to",
"set_mail_sent_from" => "This test mail was sent from your calendar's Settings page",
"set_missing_invalid" => "missing or invalid settings (background highlighted)",
"set_settings_saved" => "Calendar settings saved",
"set_save_error" => "Database error - Saving calendar settings failed",
"hover_for_details" => "Hover descriptions for details",
"default" => "default",
"enabled" => "enabled",
"disabled" => "disabled",
"no" => "nie",
"yes" => "tak",
"or" => "lub",
"minutes" => "minutes",
"pixels" => "pixels",
"no_way" => "Nie masz uprawnień do wykonania tej operacji",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calVersionDb_label" => "Calendar version - Database",
"calVersionDb_text" => "Version of the installed calendar software and the folder/name of the currently used SQLite database file.",
"calTitle_label" => "Calendar title",
"calTitle_text" => "Displayed in the calendar\'s top bar and used in email notifications.",
"calUrl_label" => "Calendar URL",
"calUrl_text" => "The calendar\'s web site address.",
"calEmail_label" => "Calendar email address",
"calEmail_text" => "The email address used to send or receive notification emails.<br>Format: \'email\' or \'name&#8249;email&#8250;\'. \'name\' could be the calendar name.",
"backLinkUrl_label" => "Link to parent page",
"backLinkUrl_text" => "URL of parent page. If specified, a Back button will be displayed on the left side of the Navigation Bar which links to this URL.<br>For instance to link back to the parent page from which the calendar was started.",
"timeZone_label" => "Time zone",
"timeZone_text" => "The calendar\'s time zone, used to calculate the current time.",
"see" => "see",
"notifSender_label" => "Sender of notification emails",
"notifSender_text" => "When the calendar sends reminder emails, the sender field of the email can contain either the calendar email address, or the email address of the user who created the event.<br>In case of the user email address, the receiver can reply to the email.",
"rssFeed_label" => "RSS feed links",
"rssFeed_text" => "If enabled: For users with at least \'view\' rights an RSS feed link will be visible in the footer of the calendar and an RSS feed link will be added to the HTML head of the calendar pages.",
"calendar" => "calendar",
"user" => "user",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Navigation bar buttons with text",
"navButText_text" => "If enabled: On the navgation bar the buttons will be displayed with text. If disabled, the buttons are diplayed with icons.",
"sideLists_label" => "To Approve / Todo / Upcoming buttons",
"sideLists_text" => "If enabled: A Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Todo list / Upcoming list.",
"navToapList_label" => "To approve button",
"navTodoList_label" => "Todo button",
"navUpcoList_label" => "Upcoming button",
"optionsPanel_label" => "Options panel menus",
"optionsPanel_text" => "Enable/disable menus in the options panel.<br>• The calendar menu is available to the admin to switch calendars. (enabling only useful if several calendars are installed)<br>• The view menu can be used to select one of the calendar views.<br>• The groups menu can be used to display only events created by users in the selected groups.<br>• The users menu can be used to display only events created by the selected users.<br>• The categories menu can be used to display only events belonging to the selected event categories.<br>• The language menu can be used to select the user interface language. (enabling only useful if several languages are installed)<br>Note: If no menus are selected, the option panel button will not be displayed.",
"calMenu_label" => "calendar",
"viewMenu_label" => "view",
"groupMenu_label" => "groups",
"userMenu_label" => "users",
"catMenu_label" => "categories",
"langMenu_label" => "language",
"viewButtons_label" => "View buttons on navigation bar",
"viewButtons_text" => "View buttons to be displayed on the navigation bar can be specified by means of a sequence of numbers<br>If a number is specified in the sequence, the corresponding button will be displayed.<br>If no numbers are specified, no View buttons will be displayed.<br>Meaning of the numbers:<br>1: Year<br>2: Full Month<br>3: Work Month<br>4: Full Week<br>5: Work Week<br>6: Day<br>7: Upcoming<br>8: Changes<br>9: Matrix<br>The order of the numbers determine the order of the displayed buttons.<br>For example: \'24\' means: display \'Full Month\' and \'Full Week\' buttons.",
"defaultView_label" => "Default view on start-up",
"defaultView_text" => "Possible default views on calendar start-up are:<br>• Year<br>• Full Month<br>• Work Month *)<br>• Full Week<br>• Work Week *)<br>• Day<br>• Upcoming<br>• Changes<br>• Matrix<br>*) For work week days see on this page: Views - Work week days<br>Recommended choice: Month or Upcoming.",
"language_label" => "Default user interface language",
"language_text" => "The files ui-{language}.php, ai-{language}.php, ug-{language}.php and ug-layout.png must be present in the lang/ directory. {language} = selected user interface language. File names must be lower case!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"ownerTitle_label" => "Show event owner in front of event title",
"ownerTitle_text" => "In the various calendar views, show the event owner name in front of the event title.",
"privEvents_label" => "Posting of private events",
"privEvents_text" => "Private events are only visible to the user who entered the event.<br>Enabled: users can enter private events.<br>Default: when adding new events, the \'private\' checkbox in the Event window will be checked by default.<br>Always: when adding new events they will always be private, the \'private\' checkbox in the Event window will not be shown.",
"details4All_label" => "Show event details to users",
"details4All_text" => "Disabled: event details will only be visible to the owner of the event and to users with \'post all\' rights.<br>All: event details will be visible to the owner of the event and to all other users.<br>Logged in: event details will be visible to the owner of the event and to logged in users.",
"evtDelButton_label" => "Show delete button in Event window",
"evtDelButton_text" => "Disabled: the Delete button in the Event window will not be visible. So users with edit rights will not be able to delete events.<br>Enabled: the Delete button in the Event window will be visible to all users.<br>Manager: the Delete button in the Event window will only be visible to users with \'manager\' rights.",
"eventColor_label" => "Event colors based on",
"eventColor_text" => "Events in the various calendar views can be displayed in the color assigned to the group to which the user who created the event belongs or the color of the event category.",
"xField1_label" => "Extra field 1",
"xField2_label" => "Extra field 2",
"xFieldx_text" => "Optional text field. If this field is included in the event template hereafter, the field will be added as a free format text field to the Event window form and to the events displayed in all calendar views and pages.<br>• label: optional text label for the extra field (max. 15 characters). E.g. \'Email address\', \'Website\', \'Phone number\'<br>• public: when checked, the field will be visible to all users; otherwise the field will only be visible to logged in users.",
"xField_label" => "label",
"xField_public" => "public",
"logged_in" => 'logged in',
"manager_only" => 'manager',

//settings.php - user accounts settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Self registration",
"selfReg_text" => "Allow users to register themselves and get access to the calendar.<br>User group to which self-registered users will be assigned.",
"selfRegNot_label" => "Self registration notification",
"selfRegNot_text" => "Send a notification email to the calendar email address when a self-registration takes place.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user selections (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "'Remember me' cookie expiry days",
"cookieExp_text" => "Number of days before the cookie set by the \'Remember me\' option (during Log In) will expire.",
"view" => "view",
"post_own" => 'post own',
"post_all" => 'post all',
"manager" => 'post/manager',

//settings.php - view settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"templFields_text" => "Meaning of the numbers:<br>1: Venue field<br>2: Event category field<br>3: Description field<br>4: Extra field 1 (see below)<br>5: extra field 2 (see below)<br>6: Email notification data (only if a notification has been requested)<br>7: Date/time added/edited and the associated user(s)<br>8: Attached pdf, image or video files as hyperlinks.<br>The order of the numbers determine the order of the displayed fields.",
"evtTemplate_label" => "Event templates",
"evtTemplate_text" => "The event fields to be displayed in the general calendar views, the upcoming event views and in the hover box with event details can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"evtTemplGen" => "General view",
"evtTemplUpc" => "Upcoming view",
"evtTemplPop" => "Hover box",
"popBoxShow_label" => "Hover box with event details",
"popBoxShow_text" => "If enabled, a box with event details will be displayed when hovering an event in the selected views. The event details will not be displayed if no hover box event fields (see above) have been specified.",
"yearStart_label" => "Start month in Year view",
"yearStart_text" => "If a start month has been specified (1 - 12), in Year view the calendar will always start with this month and the year of this first month will only change as of the first day of the same month in the next year.<br>The value 0 has a special meaning: the start month is based on the current date and will fall in the first row of months.",
"YvRowsColumns_label" => "Rows and columns to show in Year view",
"YvRowsColumns_text" => "Number of rows of four months each to display in Year view.<br>Recommended choice: 4, which gives you 16 months to scroll through.<br>Number of months to display in each row in Year view.<br>Recommended choice: 3 or 4.",
"MvWeeksToShow_label" => "Weeks to show in Month view",
"MvWeeksToShow_text" => "Number of weeks to display in Month view.<br>Recommended choice: 10, which gives you 2.5 months to scroll through.<br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Work week days",
"workWeekDays_text" => "Days to be shown in each week in Work Month view and Work Week view.<br>Enter the number of each day that should be visible. Valid day numbers:<br>1 = Monday<br>2 = Tuesday<br>....<br>7 = Sunday<br>e.g. 12345 : Monday - Friday",
"XvWeeksToShow_label" => "Weeks to show in Matrix view",
"XvWeeksToShow_text" => "Number of calendar weeks to display in Matrix view.",
"lookaheadDays_label" => "Days to look ahead",
"lookaheadDays_text" => "Number of days to look ahead for events in the Upcoming Events view, the Todo List and the RSS feeds.",
"dwStartEndHour_label" => "Start and end hour in Day/Week view",
"dwStartEndHour_text" => "Hours at which a normal day of events starts and ends.<br>E.g. setting these values to 6 and 18 will avoid wasting space in Week/Day view for the quiet time between midnight and 6:00 and 18:00 and midnight.<br>The time picker, used to enter a time, will also start and end at these hours.",
"dwTimeSlot_label" => "Time slot in Day/Week view",
"dwTimeSlot_text" => "Day/Week view time slot in number of minutes.<br>This value, together with the Start hour and End hour (see above) will determine the number of rows in Day/Week view.",
"dwTsHeight_label" => "Time slot height",
"dwTsHeight_text" => "Day/Week view time slot display height in number of pixels.",
"showInMView_label" => "Show in month view",
"showInMView_text" => "Enabled/disable the display in Month view of the following items:<br>• URLs in one of the event description fields (will be displayed as hyperlink)<br>• images in one of the event description fields",
"urls" => "URL links",
"images" => "images",
"monthInDCell_label" => "Month in each day cell",
"monthInDCell_text" => "Display in month view the 3-letter month name for each day",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Event date format (dd mm yyyy)",
"dateFormat_text" => "Text string defining the format of event dates in the calendar views and input fields.<br>Possible characters: y = year, m = month and d = day.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "e.g. y.m.d: 2013.10.31",
"MdFormat_label" => "Date format (dd month)",
"MdFormat_text" => "Text string defining the format of dates consisting of month and day.<br>Possible characters: M = month in text, d = day in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>d M: 12 April<br>M, d: July, 14",
"MdFormat_expl" => "e.g. M, d: July, 14",
"MdyFormat_label" => "Date format (dd month yyyy)",
"MdyFormat_text" => "Text string defining the format of dates consisting of day, month and year.<br>Possible characters: d = day in digits, M = month in text, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>d M y: 12 April 2013<br>M d, y: July 8, 2013",
"MdyFormat_expl" => "e.g. M d, y: July 8, 2013",
"MyFormat_label" => "Date format (month yyyy)",
"MyFormat_text" => "Text string defining the format of dates consisting of month and year.<br>Possible characters: M = month in text, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>M y: April 2013<br>y - M: 2013 - July",
"MyFormat_expl" => "e.g. M y: April 2013",
"DMdFormat_label" => "Date format (weekday dd month)",
"DMdFormat_text" => "Text string defining the format of dates consisting of weekday, day and month.<br>Possible characters: WD = weekday in text, M = month in text, d = day in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>WD d M: Friday 12 April<br>WD, M d: Monday, July 14",
"DMdFormat_expl" => "e.g. WD - M d: Sunday - April 6",
"DMdyFormat_label" => "Date format (weekday dd month yyyy)",
"DMdyFormat_text" => "Text string defining the format of dates consisting of weekday, day, month and year.<br>Possible characters: WD = weekday in text, M = month in text, d = day in digits, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>WD d M y: Friday 13 April 2013<br>WD - M d, y: Monday - July 16, 2013",
"DMdyFormat_expl" => "e.g. WD, M d, y: Monday, July 16, 2013",
"timeFormat_label" => "Time format (hh mm)",
"timeFormat_text" => "Text string defining the format of event times in the calendar views and input fields.<br>Possible characters: h = hours, H = hours with leading zeros, m = minutes, a = am/pm (optional), A = AM/PM (optional).<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "e.g. h:m: 22:35 and h:mA: 10:35PM",
"weekStart_label" => "First day of the week",
"weekStart_text" => "First day of the week.",
"weekNumber_label" => "Display week numbers",
"weekNumber_text" => "The display of week numbers in Year, Month and Week view can be enabled/disabled",
"time_format_us" => "12-hour AM/PM",
"time_format_eu" => "24-hour",
"sunday" => "Sunday",
"monday" => "Monday",
"time_zones" => "TIME ZONES",
"dd_mm_yyyy" => "dd-mm-yyyy",
"mm_dd_yyyy" => "mm-dd-yyyy",
"yyyy_mm_dd" => "yyyy-mm-dd",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Mail server",
"mailServer_text" => "PHP mail is suitable for unauthenticated mail in small numbers. For greater numbers of mail or when authentication is required, SMTP mail should be used.<br>Using SMTP mail requires an SMTP mail server. The configuration parameters to be used for the SMTP server must be specified hereafter. If mail is disabled, the Send mail section in the Event window will be suppressed.",
"smtpServer_label" => "SMTP server name",
"smtpServer_text" => "If SMTP mail is selected, the SMTP server name should be specified here. For example gmail SMTP server: smtp.gmail.com.",
"smtpPort_label" => "SMTP port number",
"smtpPort_text" => "If SMTP mail is selected, the SMTP port number should be specified here. For example 25, 465 or 587. Gmail for example uses port number 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "If SMTP mail is selected, select here if the secure sockets layer (SSL) should be enabled. For gmail: enabled",
"smtpAuth_label" => "SMTP authentication",
"smtpAuth_text" => "If SMTP authentication is selected, the username and password specified hereafter will be used to authenticate the SMTP mail.",
"smtpUser_label" => "SMTP username",
"smtpUser_text" => "If SMTP mail is selected, specify here the SMTP user name. For gmail this is the part of your email address before the @.",
"smtpPass_label" => "SMTP password",
"smtpPass_text" => "If SMTP mail is selected, specify here the SMTP password.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronHost_label" => "Cron job host",
"cronHost_text" => "Specify where the cron job is hosted which periodically starts the script \'lcalcron.php\'.<br>• local: cron job runs on the same server<br>• remote: cron job runs on a remote server or lcalcron.php is started manually (testing)<br>• IP address: cron job runs on a remote server with the specified IP address.",
"cronSummary_label" => "Admin cron job summary",
"cronSummary_text" => "Send a cron job summary to the calendar administrator.<br>Enabling is only useful if a cron job has been activated for the calendar.",
"chgEmailList_label" => "Email recipients for changes",
"chgEmailList_text" => "Recipients email addresses periodically receiving an email with calendar changes.<br>Email addresses separated by semicolons.",
"chgNofDays_label" => "Days to look back for changes",
"chgNofDays_text" => "Number of days to look back for the summary of calendar changes.<br>If the number of days is set to 0 no summary of changes will be sent.",
"icsExport_label" => "Daily export of iCal events",
"icsExport_text" => "If enabled: All events in the date range -1 week until +1 year will be exported in iCalendar format in a .ics file in the \'files\' folder.<br>The file name will be the calendar name with blanks replaced by underscores. Old files will be overwritten by new files.",
"eventExp_label" => "Event expiry days",
"eventExp_text" => "Number of days after the event due date when the event expires and will be automatically deleted.<br>If 0 or if no cron job is running, no events will be automatically deleted.",
"maxNoLogin_label" => "Max. nr of days not logged in",
"maxNoLogin_text" => "If a user has not logged in during this number of days, his/her account will be automatically deleted.<br>If this value is set to 0, user accounts will never be deleted",
"local" => "local",
"remote" => "remote",
"ip_address" => "IP address",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini calendar view",
"miniCalView_text" => "Possible views for the mini calendar are:<br>• Full Month<br>• Work Month *)<br>• Full Week<br>• Work Week *)<br>*) For work week days see on this page: Views - Work week days",
"miniCalPost_label" => "Mini calendar event posting",
"miniCalPost_text" => "If enabled, users can:<br>• post new events in the mini calendar by clicking the top bar of a day cell<br>• edit/delete events by clicking an event square<br>Note: The access rights of the Public User will be applicable.",
"popFieldsMcal_label" => "Event fields - mini calendar hover box",
"popFieldsMcal_text" => "The event fields to be displayed in an overlay when the user hovers an event in the mini calendar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed.",
"mCalUrlFull_label" => "Mini cal URL to full calendar",
"mCalUrlFull_text" => "When clicking the month at the top of the mini calendar, to go to the full calendar, the user will be directed to this URL.<br>If not specified, the full calendar will open in a new window.<br>This URL is in particular useful when the full calendar is embedded in an existing user page.",
"popFieldsSbar_label" => "Event fields - sidebar hover box",
"popFieldsSbar_text" => "The event fields to be displayed in an overlay when the user hovers an event in the stand-alone sidebar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed.",
"showLinkInSB_label" => "Show links in sidebar",
"showLinkInSB_text" => "Display URLs from the event description as a hyperlink in the upcoming events sidebar",
"sideBarDays_label" => "Days to look ahead in sidebar",
"sideBarDays_text" => "Number of days to look ahead for events in the sidebar.",

//login.php
"log_log_in" => "Logowanie",
"log_remember_me" => "Remember me",
"log_register" => "Register",
"log_change_my_data" => "Change my data",
"log_change" => "Change",
"log_un_or_em" => "Nazwa użytkownika lub hasło",
"log_un" => "Username",
"log_em" => "Email",
"log_pw" => "Hasło",
"log_new_un" => "New Username",
"log_new_em" => "Nowy Email",
"log_new_pw" => "Nowe Hasło",
"log_pw_msg" => "Here are your log in details for calendar",
"log_pw_subject" => "Twoje %% Hasło", //%% will be replaced by calendar name
"log_npw_subject" => "Twoje Nowe %% Hasło", //%% will be replaced by calendar name
"log_npw_sent" => "Twoje Nowe Hasło zostało wysłane.",
"log_registered" => "Registration successful - Your password has been sent by email",
"log_un_exists" => "Username already exists",
"log_em_exists" => "Email address already exists",
"log_un_invalid" => "Invalid username (min length 2: A-Z, a-z, 0-9, and _-.) ",
"log_em_invalid" => "Invalid email address",
"log_un_em_invalid" => "The username/email is not valid",
"log_un_em_pw_invalid" => "Nazwa użytkownia/email lub hasło są nieprawidłowe.",
"log_no_un_em" => "Nie wprowadziłeś nazwy użytkownika/emaila.",
"log_no_un" => "Please enter your username",
"log_no_em" => "Please enter your email address",
"log_no_pw" => "Nie wprowadziłeś hasła.",
"log_no_rights" => "Login rejected: you have no view rights - Contact the administrator",
"log_send_new_pw" => "Wyślij nowe hasło",
"log_if_changing" => "Only if changing",
"log_no_new_data" => "No data to change",
"log_invalid_new_un" => "Invalid new username (min length 2: A-Z, a-z, 0-9, and _-.) ",
"log_new_un_exists" => "New username already exists",
"log_invalid_new_em" => "New email address invalid",
"log_new_em_exists" => "New email address already exists",
"log_ui_language" => "User interface language",
"log_new_reg" => "New user registration",
"log_date_time" => "Date / time",
"log_time_out" => "Time out",

//categories.php
"cat_list" => "Spis Kategorii",
"cat_edit" => "Edytuj",
"cat_delete" => "Usuń",
"cat_add_new" => "Dodaj Nową Kategorię",
"cat_add" => "Dodaj Kategorię",
"cat_edit_cat" => "Edytuj Kategorię",
"cat_sort" => "Sort On Name",
"cat_name" => "Nazwa Kategorii",
"cat_sequence" => "Kolejność",
"cat_in_menu" => "in menu",
"cat_text_color" => "Kolor Tekstu",
"cat_background" => "Tło",
"cat_select_color" => "Wybierz Kolor",
"cat_save" => "Uaktualnij Kategorię",
"cat_added" => "Kategoria Dodana",
"cat_updated" => "Kategoria Uaktualniona",
"cat_deleted" => "Kategoria Usunięta",
"cat_invalid_color" => "Color format invalid (#XXXXXX where X = HEX-value)",
"cat_not_added" => "Kategoria Nie Dodana",
"cat_not_updated" => "Kategoria Nie Uatualniona",
"cat_not_deleted" => "Kategoria Nie Usunięta",
"cat_nr" => "#",
"cat_repeat" => "Repeat",
"cat_every_day" => "every day",
"cat_every_week" => "every week",
"cat_every_month" => "every month",
"cat_every_year" => "every year",
"cat_overlap" => "Overlap allowed",
"cat_no_overlap" => "No overlap allowed",
"cat_ol_error_text" => "error text, if overlap",
"cat_no_ol_note" => "Note that already existing events are not checked and consequently may overlap",
"cat_ol_error_msg" => "event overlap; select an other time",
"cat_time_slot" => "Time slot",
"cat_def_slot" => "Default time slot (if no end time specified)",
"cat_ts_no_etime" => "minutes (0: none)",
"cat_tslot_missing" => "Default time slot is missing",
"cat_tslot_invalid" => "Invalid time slot",
"cat_day_color" => "Day color",
"cat_approve" => "Events need approval",
"cat_check_mark" => "Check mark",
"cat_label" => "label",
"cat_mark" => "mark",
"cat_name_missing" => "Category name is missing",
"cat_mark_label_missing" => "Check mark/label is missing",

//users.php
"usr_list_of_users" => "Spis Użytkowników",
"usr_name" => "Nazwa Użytkownika",
"usr_email" => "Email",
"usr_group" => "Group",
"usr_password" => "Hasło",
"usr_edit_user" => "Edytuj Profil Użytkownika",
"usr_add" => "Dodaj Użytkownika",
"usr_edit" => "Edytuj",
"usr_delete" => "Usuń",
"usr_login_0" => "Pierwszy login",
"usr_login_1" => "Ostatni login",
"usr_login_cnt" => "Logins",
"usr_add_profile" => "Dodaj Profil",
"usr_upd_profile" => "Uaktualnij Profil",
"usr_if_changing_pw" => "Tylko przy zmianie hasła",
"usr_pw_not_updated" => "Hasło Nie Zostało Uaktualnione",
"usr_added" => "Użytkownik dodany",
"usr_updated" => "Profil użytkownika został uaktualniony",
"usr_deleted" => "Użytkownik został usunięty",
"usr_not_deleted" => "Użytkownik nie został usunięty",
"usr_cred_required" => "Nazwa Użytkownika, Email oraz hasło są wymagane",
"usr_name_exists" => "Nazwa Użytkownika już istnieje",
"usr_email_exists" => "Adres email już istnieje",
"usr_un_invalid" => "Invalid username (min length 2: A-Z, a-z, 0-9, and _-.) ",
"usr_em_invalid" => "Invalid email address",
"usr_cant_delete_yourself" => "You cannot delete yourself",
"usr_go_to_groups" => "Go to Groups",

//groups.php
"grp_list_of_groups" => "List of User Grupa",
"grp_name" => "Nazwa Grupa",
"grp_privs" => "Prawa Dostępu",
"grp_categories" => "Kategorie",
"grp_all_cats" => "wszystkie Kategorie",
"grp_upload_files" => "Upload<br>files",
"grp_rep_events" => "Repeating<br>events",
"grp_m-d_events" => "Multi-day<br>events",
"grp_priv_events" => "Private<br>events",
"grp_may_upload_files" => "May upload files",
"grp_may_post_revents" => "May post repeating events",
"grp_may_post_mevents" => "May post multi-day events",
"grp_may_post_pevents" => "May post private events",
"grp_no_overlap" => "no overlap allowed",
"grp_edit_group" => "Edytuj Grupa",
"grp_edit" => "Edytuj",
"grp_delete" => "Usuń",
"grp_view" => "Podgląd Kalendarza",
"grp_post_own" => "Dodawanie/Edycja Własnych Wydarzeń",
"grp_post_all" => "Dodawanie/Edycja Wszystkich Wydarzeń",
"grp_manager" => "Dodawanie/Edycja + manager",
"grp_admin" => "Uprawnienia Administratora",
"grp_add_group" => "Dodaj Grupa",
"grp_upd_group" => "Uaktualnij Grupa",
"grp_no_rights" => "Brak praw",
"grp_added" => "Grupa został dodany",
"grp_updated" => "Grupa został zaktualizowany",
"grp_deleted" => "Grupa został usunięty",
"grp_not_deleted" => "Grupa nie został usunięty",
"grp_in_use" => "Grupa is in use",
"grp_cred_required" => "Nazwa Grupa, Prawa Dostępu i Kategorie są wymagane",
"grp_name_exists" => "Grupa name already exists",
"grp_name_invalid" => "Invalid Grupa name (min length 2: A-Z, a-z, 0-9, i _-.) ",
"grp_background" => "kolor tła",
"grp_select_color" => "Wybierz Kolor",
"grp_invalid_color" => "Color format invalid (#XXXXXX where X = HEX-value)",
"grp_go_to_users" => "Go to Users",

//database.php
"mdb_dbm_functions" => "Database Functions",
"mdb_noshow_tables" => "Cannot get table(s)",
"mdb_noshow_restore" => "No source backup file selected",
"mdb_file_not_sql" => "Source backup file should be an SQL file (extension '.sql')",
"mdb_compact" => "Compact database",
"mdb_compact_table" => "Compact table",
"mdb_compact_error" => "Error",
"mdb_compact_done" => "Done",
"mdb_purge_done" => "Deleted events definitively removed",
"mdb_backup" => "Backup database",
"mdb_backup_table" => "Backup table",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Done",
"mdb_records" => "records",
"mdb_restore" => "Restore database",
"mdb_restore_table" => "Restore table",
"mdb_inserted" => "records inserted",
"mdb_db_restored" => "Database restored.",
"mdb_no_bup_match" => "Backup file doesn't match calendar version.<br>Database not restored.",
"mdb_events" => "Events",
"mdb_delete" => "delete",
"mdb_undelete" => "undelete",
"mdb_between_dates" => "occurring between",
"mdb_deleted" => "Events deleted",
"mdb_undeleted" => "Events undeleted",
"mdb_file_saved" => "Backup file saved in 'files' folder on server.",
"mdb_file_name" => "File name:",
"mdb_start" => "Start",
"mdb_no_function_checked" => "No function(s) selected",
"mdb_write_error" => "Writing backup file failed<br>Check permissions of 'files/' directory",

//import/export.php
"iex_file" => "Selected file",
"iex_file_name" => "iCal file name",
"iex_file_description" => "iCal file description",
"iex_filters" => "Event Filters",
"iex_upload_ics" => "Upload iCal File",
"iex_create_ics" => "Create iCal File",
"iex_upload_csv" => "Upload CSV File",
"iex_upload_file" => "Upload File",
"iex_create_file" => "Create File",
"iex_download_file" => "Download File",
"iex_fields_sep_by" => "Fields separated by",
"iex_birthday_cat_id" => "Birthday category ID",
"iex_default_cat_id" => "Default category ID",
"iex_if_no_cat" => "if no category found",
"iex_import_events_from_date" => "Import events occurring as of",
"iex_see_insert" => "see instructions on the right",
"iex_no_file_name" => "File name missing",
"iex_inval_field_sep" => "invalid or no field separator",
"iex_no_begin_tag" => "invalid iCal file (BEGIN-tag missing)",
"iex_date_format" => "Event date format",
"iex_time_format" => "Event time format",
"iex_number_of_errors" => "Number of errors in list",
"iex_bgnd_highlighted" => "background highlighted",
"iex_verify_event_list" => "Verify Event List, correct possible errors and click",
"iex_add_events" => "Add Events to Database",
"iex_select_ignore_birthday" => "Select Ignore and Birthday check boxes as required",
"iex_select_ignore" => "Select Ignore check box to ignore event",
"iex_title" => "Title",
"iex_venue" => "Venue",
"iex_owner" => "Owner",
"iex_category" => "Kategoria",
"iex_date" => "Date",
"iex_end_date" => "End date",
"iex_start_time" => "Start time",
"iex_end_time" => "End time",
"iex_description" => "Description",
"iex_repeat" => "Repeat",
"iex_birthday" => "Birthday",
"iex_ignore" => "Ignore",
"iex_events_added" => "events added",
"iex_events_dropped" => "events dropped (already present)",
"iex_csv_file_error_on_line" => "CSV file error on line",
"iex_ics_file_error_on_line" => "iCal file error on line",
"iex_between_dates" => "occurring between",
"iex_changed_between" => "Added/modified between",
"iex_select_date" => "Select date",
"iex_select_start_date" => "Select start date",
"iex_select_end_date" => "Select end date",
"iex_all_cats" => "all categories",
"iex_all_users" => "all users",
"iex_no_events_found" => "No events found",
"iex_file_created" => "File created",
"iex_write error" => "Writing export file failed<br>Check permissions of 'files/' directory",

//lcalcron.php
"cro_sum_header" => "CRON JOB SUMMARY",
"cro_sum_trailer" => "END OF SUMMARY",
"cro_evc_sum_title" => "EVENTS EXPIRED",
"cro_nr_evts_deleted" => "Number of events deleted",
"cro_not_sum_title" => "EMAIL REMINDERS",
"cro_not_sent_to" => "Reminders sent to",
"cro_no_not_dates_due" => "No notification dates due",
"cro_all_day" => "Całodniowe",
"cro_mailer" => "mailer",
"cro_subject" => "Tematem",
"cro_event_due_in" => "Następujące wydarzenie odbędzie się w przeciągu",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "W przeciągu",
"cro_due_today" => "Due today",
"cro_days" => "dzień/dni",
"cro_date_time" => "Data / godzina",
"cro_title" => "Tytuł",
"cro_venue" => "Miejsce",
"cro_description" => "Opis",
"cro_category" => "Kategoria",
"cro_status" => "Status",
"cro_open_calendar" => "Otwórz kalendarz",
"cro_chg_sum_title" => "CALENDAR CHANGES",
"cro_nr_changes_last" => "Number of changes last",
"cro_report_sent_to" => "Report sent to",
"cro_no_report_sent" => "No report emailed",
"cro_usc_sum_title" => "USER ACCOUNTS EXPIRED",
"cro_nr_accounts_deleted" => "Number of accounts deleted",
"cro_no_accounts_deleted" => "No accounts deleted",
"cro_ice_sum_title" => "EXPORTED EVENTS",
"cro_nr_events_exported" => "Number of events exported in iCalendar format to file",

//explanations
"xpl_manage_db" =>
"<h4>Manage Database Instructions</h4>
<p>On this page the following functions can be selected:</p>
<h5>Compact database</h5>
<p>When a user deletes an event, the event will be marked as 'deleted', but will 
not be removed from the database. The Compact Database function will permanently 
remove events deleted more than 30 days ago from the database and free the space 
occupied by these events.</p>
<h5>Backup database</h5>
<p>This function wil create a backup of the full calendar database (tables 
structure and contents) in .sql format. The backup will be saved in the 
<strong>files/</strong> directory with file name: 
<kbd>cal-dump-yyyymmdd-hhmmss.sql</kbd> (where 'yyyymmdd' = year, month, and 
day, and hhmmss = hour, minutes and seconds.</p>
<p>The backup file can be used to recreate the calendar database (structure and 
data), via the restore function described below or by using for instance the 
<strong>phpMyAdmin</strong> tool, which is provided by most web hosts.</p>
<h5>Restore database</h5>
<p>This function will restore the calendar database with the contents of the 
uploaded backup file (file type .sql).</p>
<p>When restoring the database, ALL CURRENTLY PRESENT DATA WILL BE LOST!</p>
<h5>Events</h5>
<p>This function will delete or undelete events which are occurring between the 
specified dates. If a date is left blank, there is no date limit; so if both 
dates are left blank, ALL EVENTS WILL BE DELETED!</p><br>
<p>IMPORTANT: When the database is compacted (see above), the events which are 
permanently removed from the database cannot be undeleted anymore!</p>",

"xpl_import_csv" =>
"<h4>CSV Import Instructions</h4>
<p>This form is used to import a <strong>Comma Separated Values (CSV)</strong> text 
file with event data into the LuxCal Calendar.</p>
<p>The order of columns in the CSV file must be: title, venue, category id (see 
below), date, end date, start time, end time and description. The first row of the 
CSV file, used for column descriptions, is ignored.</p>
<h5>Sample CSV files</h5>
<p>Sample CSV files can be found in the 'files/' directory of your LuxCal download.</p>
<h5>Date and time format</h5>
<p>The selected event date format and event time format on the left must match the 
format of the dates and times in the uploaded CSV file.</p>
<h5>Table of Categories</h5>
<p>The calendar uses ID numbers to specify categories. The category IDs in the CSV 
file should correspond to the categories used in your calendar or be blank.</p>
<p>If in the next step you want to earmark events as 'birthday', the <strong>Birthday 
category ID</strong> must be set to the corresponding ID in the category list below.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>For your calendar, the following categories have currently been defined:</p>",

"xpl_import_ical" =>
"<h4>iCalendar Import Instructions</h4>
<p>This form is used to import an <strong>iCalendar</strong> file with events into 
the LuxCal Calendar.</p>
<p>The file contents must meet the [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>RFC5545 standard</a></u>] of the Internet Engineering Task Force.</p>
<p>Only events will be imported; other iCal components, like: To-Do, Jounal, Free / 
Busy, Time zone and Alarm, will be ignored.</p>
<p>Sample iCalendar files can be found in the 'files/' directory of your LuxCal 
download.</p>
<h5>Table of Categories</h5>
<p>The calendar uses ID numbers to specify categories. The category IDs in the 
iCalendar file should correspond to the categories used in your calendar or be 
blank.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>For your calendar, the following categories have currently been defined:</p>",

"xpl_export_ical" =>
"<h4>iCalendar Export Instructions</h4>
<p>This form is used to extract and export <strong>iCalendar</strong> events from 
the LuxCal Calendar.</p>
<p>The <b>iCal file name</b> (without extension) is optional. Created files will 
be stored in the \"files/\" directory on the server with the specified file name, 
or otherwise with the name of the calendar. The file extension will be <b>.ics</b>.
Existing files in the \"files/\" directory on the server with the same name will 
be overwritten by the new file.</p>
<p>The <b>iCal file description</b> (e.g. 'Meetings 2013') is optional. If 
entered, it will be added to the header of the exported iCal file.</p>
<p><b>Event filters</b>: The events to be extracted can be filtered by:</p>
<ul>
<li>event owner</li>
<li>event category</li>
<li>event start date</li>
<li>event added/last modified date</li>
</ul>
<p>Each filter is optional. A blank date means: no limit</p>
<br>
<p>The content of the file with extracted events will meet the 
[<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545 standard</a></u>] 
of the Internet Engineering Task Force.</p>
<p>When <b>downloading</b> the exported iCal file, the date and time will be 
added to the name of the downloaded file.</p>
<h5>Sample iCal files</h5>
<p>Sample iCalendar files (file extension .ics) can be found in the 'files/' 
directory of your LuxCal download.</p>"
);
?>
