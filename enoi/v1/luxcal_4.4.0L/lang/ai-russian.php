<?php
/*
= LuxCal event calendar admin interface language file =

Russian translation: iluhis.com. Update of Russian translation: 0x3.ru Please send comments to rb@luxsoft.eu.

© Copyright 2009-2016 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","4.3.0");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Нет.",
"all" => "Все",
"back" => "Назад",
"close" => "Закрыть",
"always" => "Всегда",
"at_time" => "@", //date and time separator (e.g. 10-04-2016 @ 10:45)
"year" => "Год",
"month" => "Месяц",
"week_day" => "Неделя/День",
"upcoming" => "Ближайшие",
"rows" => "rows",
"columns" => "columns",
"user_group" => "цвету владельца",
"event_cat" => "цвету категории",
"id" => "ID",

//settings.php - настройки заголовка поля + Основные
"set_general_settings" => "Основные настройки",
"set_navbar_settings" => "Навигация",
"set_event_settings" => "События",
"set_user_settings" => "Учетные записи",
"set_email_settings" => "Настройки Email",
"set_perfun_settings" => "Периодические функции (only relevant if cron job defined)",
"set_minical_settings" => "Мини-календарь (only relevant if used)",
"set_sidebar_settings" => "Отдальный сайдбар (only relevant if in use)",
"set_view_settings" => "Отображение",
"set_dt_settings" => "Дата/время",
"set_save_settings" => "Сохранить настройки",
"set_test_mail" => "Проверка почты",
"set_mail_sent_to" => "Куда отправить тестовое письмо",
"set_mail_sent_from" => "Это тестовое письмо из вашего календаря",
"set_missing_invalid" => "Недостаточны или некорректные настройки (background highlighted)",
"set_settings_saved" => "Настройки календаря сохранены",
"set_save_error" => "Ошибка БД - Не удалось сохранить настройки",
"hover_for_details" => "Наведите на описания для более подробной информации",
"default" => "по умолчанию",
"enabled" => "вкл.",
"disabled" => "выкл.",
"no" => "нет",
"yes" => "да",
"or" => "или",
"minutes" => "минуты",
"pixels" => "пикселей",
"no_way" => "Вы не авторизованы для совершения этих действий",

//settings.php - основные настройки. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. (e.g. \')
"calVersionDb_label" => "Версия календаря - База данных",
"calVersionDb_text" => "Версия установленного календаря и имя папки базы данных SQLite.",
"calTitle_label" => "Заголовок календаря",
"calTitle_text" => "Отображается в верхней строке календаря и используется в email отчетах.",
"calUrl_label" => "URL календаря.",
"calUrl_text" => "WEB-адрес календаря. Используется при ссылке из миникалендаря и в ссылке на календарь из email отчетов",
"calEmail_label" => "Email адрес календаря",
"calEmail_text" => "Email адрес отправителя при отправке отчетов.<br>Формат: \'email\' или \'имя&#8249;email&#8250;\'. \'имя\' в качестве имени календаря.",
"backLinkUrl_label" => "Ссылка на главную",
"backLinkUrl_text" => "URL главной страницы сайта, на которую будет ссылаться кнопка «Назад» в левой части навигационной панели календаря.",
"timeZone_label" => "Часовой пояс",
"timeZone_text" => "Часовой пояс календаря. Используется для подсчета текущего времени.",
"see" => "посмотреть",
"notifSender_label" => "Отправитель уведомлений",
"notifSender_text" => "Когда календаря отправляет напоминания, отправителем может быть адрес самого календаря или адрес создателя события.<br>Во втором случае получать может ответить на письмо.",
"rssFeed_label" => "ССылки RSS-фида",
"rssFeed_text" => "Если включено: для ползователей с правами хотя бы \'view\' ссылка на RSS-фид будет видна в футере календаря и будет добавлена в заголовок HTML страниц календаря.",
"calendar" => "Календарь",
"user" => "Пользователь",
"php_mail" => "Почта через PHP",
"smtp_mail" => "SMTP-протокол",

//settings.php - navigation bar settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"navButText_label" => "Кнопки навигации с текстом",
"navButText_text" => "Если включено: на кнопках навигации будет отображаться текст. Если выключено — только иконки.",
"sideLists_label" => "To approve / Кнопки «Запланировано / Ближайшие»",
"sideLists_text" => "If enabled: A To Approve / Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Events to be approved list / Todo list / Upcoming list.<br> The Events to be approved list will only be available to users with manager rights or higher.",
"navToapList_label" => "To approve button",
"navTodoList_label" => "«Запланировано»",
"navUpcoList_label" => "«Ближайшие»",
"optionsPanel_label" => "Панель опций",
"optionsPanel_text" => "Вкл/выкл меню в панели опций.<br>• Меню календаря доступно админу для переключения между календарями. (актуально при установке нескольких календарей)<br>• The view menu can be used to select one of the calendar views.<br>• The groups menu can be used to display only events created by users in the selected groups.<br>• Меню пользователя отображается только создателю.<br>• Меню категорий используется для отображения событий конкретной категории.<br>• Языковое меню служит для переключения между языками интерфейса. (актуально при использовании нескольких языков).<br>Note: If no menus are selected, the option panel button will not be displayed.",
"calMenu_label" => "Календарь",
"viewMenu_label" => "view",
"groupMenu_label" => "groups",
"userMenu_label" => "Пользователи",
"catMenu_label" => "Категории",
"langMenu_label" => "языки",
"viewButtons_label" => "View buttons on navigation bar",
"viewButtons_text" => "View buttons to be displayed on the navigation bar can be specified by means of a sequence of numbers<br>If a number is specified in the sequence, the corresponding button will be displayed.<br>If no numbers are specified, no View buttons will be displayed.<br>Meaning of the numbers:<br>1: Year<br>2: Full Month<br>3: Work Month<br>4: Full Week<br>5: Work Week<br>6: Day<br>7: Upcoming<br>8: Changes<br>9: Matrix<br>The order of the numbers determine the order of the displayed buttons.<br>For example: \'24\' means: display \'Full Month\' and \'Full Week\' buttons.",
"defaultView_label" => "Вид при открытии по умолчанию",
"defaultView_text" => "Возможные отображения по умолчанию:<br>• Год<br>• Месяц<br>• Неделя<br>• День<br>• Ближайшие<br>• Измененные<br>• Matrix<br>Рекомендуется: Месяц или Ближайшие.",
"language_label" => "Язык по умолчанию",
"language_text" => "В папке lang/ должны присутствовать файлы ui-{язык}.php, ai-{язык}.php, ug-{язык}.php и ug-layout.png. {язык} = выбранный пользователем язык. Название файла должно быть в нижнем регистре!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"ownerTitle_label" => "Show event owner in front of event title",
"ownerTitle_text" => "In the various calendar views, show the event owner name in front of the event title.",
"privEvents_label" => "Создание приватных событий",
"privEvents_text" => "Приватные события видны только из создателям.<br>Если включено: пользователи могут создавать приватные события.<br>По умолчанию: при создании нового события чекбокс \'private\' будет включён.<br>Всегда: все создаваемые события будут приватными, чекбокс \'private\' будет скрыт.",
"details4All_label" => "Показывать подробную информацию о событии пользователям",
"details4All_text" => "Отключено: детали события будут видны только создателю и пользователям с правами \'post all\'.<br>Все: детали события будут видны создателю и всем остальным.<br>Авторизованным: детали событий будут видны создателю и авторизованным пользователям.",
"evtDelButton_label" => "Показать кнопку «Удалить» в окне события.",
"evtDelButton_text" => "Отключено: кнопка удаления не будет видна пользователям. Пользователи с правами на редактирование не смогут удалять события.<br>Включено: кнопка будет включена для всех.<br>Manager: кнопка удаления видна только пользователям с правами \'manager\'.",
"eventColor_label" => "Окрашивать события по",
"eventColor_text" => "В различных режимах просмотра календаря, события могут отображаться различными цветами - или по цвету создавшего событие пользователя, или по цвету категории, к которой событие принадлежит.",
"xField1_label" => "Дополнительное поле 1",
"xField2_label" => "Дополнительное поле 2",
"xFieldx_text" => "Опциональные текстовые поля. Если включены, поля будут добавлены к форме ввода и событиям как свободные текстовые поля.<br>• ярлык: опциональный ярлык (до 15 знаков). Например: \'Email\', \'Вебсайт\', \'Телефон\'<br>• публичное: когда включено, они будут видны всем пользователям; иначе — только авторизованным.",
"xField_label" => "ярлык",
"xField_public" => "Публичное",
"logged_in" => 'авторизованным',
"manager_only" => 'только админам',

//settings.php - user account settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"selfReg_label" => "Самостоятельная регистрация",
"selfReg_text" => "Разрешить пользователям самостоятельно регистрироваться и получать доступ к календарю самостоятельно.<br>Пользовательская группа, к которой добавляется новый пользователь.",
"selfRegNot_label" => "Уведомление про новые регистрации",
"selfRegNot_text" => "Отправлять уведомление админу по email при новой самостоятельной регистрации.",
"restLastSel_label" => "Запоминать последний выбор пользователя",
"restLastSel_text" => "Последний выбор (на панели опций) будут сохранены и восстановлены при следующем входе.",
"cookieExp_label" => "Срок для «Запомнить меня»",
"cookieExp_text" => "Количество дней хранения cookie для Опции \'Remember me\'.",
"view" => "просмотр",
"post_own" => 'размещать свои',
"post_all" => 'размещать все',
"manager" => 'менеджер',

//settings.php - view settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"templFields_text" => "Meaning of the numbers:<br>1: Venue field<br>2: Event category field<br>3: Description field<br>4: Extra field 1 (see below)<br>5: extra field 2 (see below)<br>6: Email notification data (only if a notification has been requested)<br>7: Date/time added/edited and the associated user(s)<br>8: Attached pdf, image or video files as hyperlinks.<br>The order of the numbers determine the order of the displayed fields.",
"evtTemplate_label" => "Event templates",
"evtTemplate_text" => "The event fields to be displayed in the general calendar views, the upcoming event views and in the hover box with event details can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"evtTemplGen" => "General view",
"evtTemplUpc" => "Upcoming view",
"evtTemplPop" => "Hover box",
"popBoxShow_label" => "Hover box with event details",
"popBoxShow_text" => "If enabled, a box with event details will be displayed when hovering an event in the selected views. The event details will not be displayed if no hover box event fields (see above) have been specified.",
"yearStart_label" => "Начальный месяц при просмотре года",
"yearStart_text" => "Если указан начальный месяц (1 - 12), то в режиме просмотра года, календарь будет всегда начинаться именно с этого месяца. Номер года будет указываться тот, где начинается указанный месяц, будто с него начинается год (полезно, например, в школах, где началом учебного года является сентябрь).<br>Значение 0 имеет особое значение: начальный месяц основывается на текущей дате и текущая дата будет в первом ряду месяцев.",
"YvRowsColumns_label" => "Рядов и kолонок при просмотре года",
"YvRowsColumns_text" => "Количество рядов с 4-мя полными месяцами в режиме просмотра года.<br>Рекомендуется: 4, что дает вам 16 месяцев для просмотра.<br>Количество месяцев для отображения в каждом ряду при просмотре целого года.<br>Рекомендуется: 3 или 4.",
"MvWeeksToShow_label" => "Недель при просмотре месяца",
"MvWeeksToShow_text" => "Количество недель в режиме просмотра месяцев.<br>Рекомендуется: 10, что дает вам 2.5месяца для просмотра.<br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Рабочие дни в неделе",
"workWeekDays_text" => "Дни, которые будут отображаться в каждой неделе в режиме Рабочий Месяц и Рабочая Неделя.<br>Введите номера дней, которые должны быть видимы. Номера следующие:<br>1 = Понедельник<br>2 = Вторник<br>....<br>7 = Воскресенье<br>т.о. 12345 : Понедельник - Пятница",
"XvWeeksToShow_label" => "Weeks to show in Matrix view",
"XvWeeksToShow_text" => "Number of calendar weeks to display in Matrix view.",
"lookaheadDays_label" => "Просматривать вперед Х дней",
"lookaheadDays_text" => "Количество дней, при просмотре ближайших событий, Todo List и RSS каналов.",
"dwStartEndHour_label" => "Start and end hour in Day/Week view",
"dwStartEndHour_text" => "Hours at which a normal day of events starts and ends.<br>E.g. setting these values to 6 and 18 will avoid wasting space in Week/Day view for the quiet time between midnight and 6:00 and 18:00 and midnight.<br>The time picker, used to enter a time, will also start and end at these hours.",
"dwTimeSlot_label" => "Временной промежуток при просмотре дня/недели",
"dwTimeSlot_text" => "Временной слот в минутах при просмотре в режиме дня/недели<br>Это значение, совместно с начальным часом (см. выше), определяет количество рядов при просмотре в режиме дня/недели.",
"dwTsHeight_label" => "Высота слота времени",
"dwTsHeight_text" => "Высота временного слота в пикселях при просмотре в режиме дня/недели.",
"showInMView_label" => "Показывать при просмотре месяца",
"showInMView_text" => "Enabled/disable the display in Month view of the following items:<br>• URLs in one of the event description fields (will be displayed as hyperlink)<br>• images in one of the event description fields",
"urls" => "URL links",
"images" => "images",
"monthInDCell_label" => "Month in each day cell",
"monthInDCell_text" => "Display in month view the 3-letter month name for each day",

//settings.php - date/time settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"dateFormat_label" => "Формат даты события (дд мм гггг)",
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
"weekStart_label" => "Первый день недели",
"weekStart_text" => "Первый день недели.",
"weekNumber_label" => "Показывать номера недель",
"weekNumber_text" => "Отображение номеров недель в режиме просмотра года, месяца и недели может быть включено или выключено.",
"time_format_us" => "12 часов AM/PM",
"time_format_eu" => "24 часа",
"sunday" => "Воскресенье",
"monday" => "Понедельник",
"time_zones" => "Зоны времени",
"dd_mm_yyyy" => "дд-мм-гггг",
"mm_dd_yyyy" => "мм-дд-гггг",
"yyyy_mm_dd" => "гггг-мм-дд",

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
"cronSummary_label" => "Отправлять администратору результат работы cron",
"cronSummary_text" => "Отправлять отчет работы cron администратору календаря.<br>Включение функции полезно при следующем:<br>• cron активирован.",
"chgEmailList_label" => "Email адрес для отправки изменений",
"chgEmailList_text" => "Email адрес, на который будет периодически сбрасываться отчет с изменениями в календаре.<br>Адреса разделяются точкой с запятой (;).",
"chgNofDays_label" => "Просматривать изменения до X дней назад",
"chgNofDays_text" => "Количество дней назад, для проверки изменений в календаре.<br>Если количество дней равно 0, то отчеты отправляться не будут.",
"icsExport_label" => "Daily export of iCal events",
"icsExport_text" => "If enabled: All events in the date range -1 week until +1 year will be exported in iCalendar format in a .ics file in the \'files\' folder.<br>The file name will be the calendar name with blanks replaced by underscores. Old files will be overwritten by new files.",
"eventExp_label" => "Event expiry days",
"eventExp_text" => "Number of days after the event due date when the event expires and will be automatically deleted.<br>If 0 or if no cron job is running, no events will be automatically deleted.",
"maxNoLogin_label" => "Максимальное кол-во дней без входа",
"maxNoLogin_text" => "Если пользователь не произвел вход в свою учетную запись в течение определенного количества дней, то его/её учетная запись будет автоматчески удалена.<br>Если указано значение 0, то учетные записи удаляться не будут.",
"local" => "local",
"remote" => "remote",
"ip_address" => "IP address",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini calendar view",
"miniCalView_text" => "Possible views for the mini calendar are:<br>• Full Month<br>• Work Month *)<br>• Full Week<br>• Work Week *)<br>*) For work week days see on this page: Views - Work week days",
"miniCalPost_label" => "Разрешать создавать события из мини-календаря",
"miniCalPost_text" => "Относится толко к работе мини календаря!<br>Если активно, то пользователи могут:<br>• размещать новые события в мини календаре простым щелчком по верхней части ячейки дня. <br>• редактирование/удаление событий щелчком по квадрату события<br>Note: The access rights of the Public User will be applicable.",
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
"log_log_in" => "Войти",
"log_remember_me" => "Запомнить меня",
"log_register" => "Зарегистрироваться",
"log_change_my_data" => "Изменить мои данные",
"log_change" => "Изменить",
"log_un_or_em" => "Имя пользователя или Email",
"log_un" => "Имя пользователя",
"log_em" => "Email",
"log_pw" => "Пароль",
"log_new_un" => "Новое имя пользователя",
"log_new_em" => "Новый Email",
"log_new_pw" => "Новый пароль",
"log_pw_msg" => "Here are your log in details for calendar",
"log_pw_subject" => "Ваш %% пароль", //%% will be replaced by calendar name
"log_npw_subject" => "Ваш новый %% пароль", //%% will be replaced by calendar name
"log_npw_sent" => "Ваш новый пароль отправлен",
"log_registered" => "Регистрация успешна - ваш пароль отправлен по email",
"log_un_exists" => "Такой пользователь уже существует",
"log_em_exists" => "Такой Email адрес уже существует",
"log_un_invalid" => "Неверное имя (мин. длина 2: A-Z, a-z, 0-9, and _-.) ",
"log_em_invalid" => "Неверный адрес почты",
"log_un_em_invalid" => "Неверное имя/email",
"log_un_em_pw_invalid" => "Неверные имя/email или пароль",
"log_no_un_em" => "Пожалуйста, введите ваши имя пользователя/email",
"log_no_un" => "Пожалуйста, введите имя пользователя",
"log_no_em" => "Пожалуйста, введите ваш email",
"log_no_pw" => "Пожалуйста, введите your пароль",
"log_no_rights" => "Отказано: у вас нет прав просмотра, свяжитесь с администратором",
"log_send_new_pw" => "Отправить новый пароль",
"log_if_changing" => "Только при изменении",
"log_no_new_data" => "Нет данных для изменений",
"log_invalid_new_un" => "Неверное имя пользователя (min length 2: A-Z, a-z, 0-9, and _-.) ",
"log_new_un_exists" => "Новое имя пользователя уже существует",
"log_invalid_new_em" => "Неправильный новый адрес email ",
"log_new_em_exists" => "Новый адрес email уже существует",
"log_ui_language" => "Язык интерфейса",
"log_new_reg" => "Регистрация",
"log_date_time" => "Дата / время",
"log_time_out" => "Таймаут",

//categories.php
"cat_list" => "Список категорий",
"cat_edit" => "Редактировать",
"cat_delete" => "Удалить",
"cat_add_new" => "Добавить новую категорию",
"cat_add" => "Добавить категорию",
"cat_edit_cat" => "Редактировать категорию",
"cat_sort" => "Сортировать по имени",
"cat_name" => "Имя категории",
"cat_sequence" => "Последовательность",
"cat_in_menu" => "в меню",
"cat_text_color" => "Цвет текста",
"cat_background" => "Фон",
"cat_select_color" => "Выбрать цвет",
"cat_save" => "Обновить категорию",
"cat_added" => "Категория добавлена",
"cat_updated" => "Категория обновлена",
"cat_deleted" => "Категория удалена",
"cat_invalid_color" => "Неправильный формат цвета (#XXXXXX where X = HEX-value)",
"cat_not_added" => "Категория не добавлена",
"cat_not_updated" => "Категория не обновлена",
"cat_not_deleted" => "Категория не удалена",
"cat_nr" => "#",
"cat_repeat" => "Повтор",
"cat_every_day" => "каждый день",
"cat_every_week" => "каждую неделю",
"cat_every_month" => "каждый месяц",
"cat_every_year" => "каждый год",
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
"cat_day_color" => "Цвет дня",
"cat_approve" => "События требуют подтверждения",
"cat_name_missing" => "Такой категории нет",
"cat_mark_label_missing" => "Check mark/label is missing",

//users.php
"usr_list_of_users" => "Список пользователей",
"usr_name" => "Имя",
"usr_email" => "Email",
"usr_group" => "Группа",
"usr_password" => "Пароль",
"usr_edit_user" => "Редактировать профиль пользователя",
"usr_add" => "Добавить пользователя",
"usr_edit" => "Редактировать",
"usr_delete" => "Удалить",
"usr_login_0" => "Первый вход",
"usr_login_1" => "Последний вход",
"usr_login_cnt" => "Входов",
"usr_add_profile" => "Добавить профиль",
"usr_upd_profile" => "Обновить профиль",
"usr_if_changing_pw" => "Только при изменении пароля",
"usr_pw_not_updated" => "Пароль не обновлен",
"usr_added" => "Пользователь добавлен",
"usr_updated" => "Профиль пользователя обновлен",
"usr_deleted" => "Пользователь удален",
"usr_not_deleted" => "Пользователь не удален",
"usr_cred_required" => "Необходимы имя пользователя, email и пароль",
"usr_name_exists" => "Имя пользователя уже существует",
"usr_email_exists" => "Адрес email уже существует",
"usr_un_invalid" => "Неправильное имя пользователя (min length 2: A-Z, a-z, 0-9, and _-.) ",
"usr_em_invalid" => "Неправильный адрес email",
"usr_cant_delete_yourself" => "Вы не можете удалить сами себя",
"usr_go_to_groups" => "Перейти в Группы",

//groups.php
"grp_list_of_groups" => "Cписок групп",
"grp_name" => "имя группы",
"grp_privs" => "Права",
"grp_categories" => "Категории",
"grp_all_cats" => "все категории",
"grp_upload_files" => "Upload<br>files",
"grp_rep_events" => "Repeating<br>events",
"grp_m-d_events" => "Multi-day<br>events",
"grp_priv_events" => "Private<br>events",
"grp_may_upload_files" => "May upload files",
"grp_may_post_revents" => "May post repeating events",
"grp_may_post_mevents" => "May post multi-day events",
"grp_may_post_pevents" => "May post private events",
"grp_no_overlap" => "no overlap allowed",
"grp_edit_group" => "Редактировать Группу",
"grp_edit" => "Редактировать",
"grp_delete" => "Удалить",
"grp_view" => "Просмотр календаря",
"grp_post_own" => "Размещение/редактирование своих событий",
"grp_post_all" => "Размещение/редактирование всех событий",
"grp_manager" => "Размещение/редактирование + mенеджер",
"grp_admin" => "Функции администратора",
"grp_add_group" => "Добавить Группа",
"grp_upd_group" => "Обновить Группа",
"grp_no_rights" => "Нет прав доступа",
"grp_added" => "Группа добавлена",
"grp_updated" => "Группа обновлена",
"grp_deleted" => "Группа удалена",
"grp_not_deleted" => "Группа не удалена",
"grp_in_use" => "Группа используется",
"grp_cred_required" => "Имя группы, права и категория обязательны",
"grp_name_exists" => " Имя группы уже существует",
"grp_name_invalid" => "Неправильное имя группа (min length 2: A-Z, a-z, 0-9, and _-.) ",
"grp_background" => "Цвет фона",
"grp_select_color" => "Выбрать цвет",
"grp_invalid_color" => "Неправильный формат цвета (#XXXXXX where X = HEX-value)",
"grp_go_to_users" => "Перейти в Пользователи",

//database.php
"mdb_dbm_functions" => "Функции базы данных",
"mdb_noshow_tables" => "Не могу получить таблицу(-цы)",
"mdb_noshow_restore" => "Не найти файл бэкапа",
"mdb_file_not_sql" => "Тип файла бэкапа не '.sql'",
"mdb_compact" => "Сжать базу данных",
"mdb_compact_table" => "Сжать таблицы",
"mdb_compact_error" => "Ошибка",
"mdb_compact_done" => "Выполнено",
"mdb_purge_done" => "Удаленные события окончательно удалены",
"mdb_backup" => "Резервирование базы данных",
"mdb_backup_table" => "Резервирование таблицы",
"mdb_backup_file" => "Файл бэкапа",
"mdb_backup_done" => "Выполнено",
"mdb_records" => "Записи",
"mdb_restore" => "Восстановить базу данных",
"mdb_restore_table" => "Восстановить таблицу",
"mdb_inserted" => "записи добалвены",
"mdb_db_restored" => "База данных восстановлена.",
"mdb_no_bup_match" => "Файл бэкапа не соответствует версии календаря.<br>Database not restored.",
"mdb_events" => "События",
"mdb_delete" => "удалить",
"mdb_undelete" => "вернуть",
"mdb_between_dates" => "случилось между",
"mdb_deleted" => "Удалённые события",
"mdb_undeleted" => "Неудалённые события",
"mdb_file_saved" => "Резервный файл сохранен на сервере.",
"mdb_file_name" => "Имя файла:",
"mdb_start" => "Старт",
"mdb_no_function_checked" => "Функция(-ции) не выделены",
"mdb_write_error" => "Ошибка записи резервного файла.<br>Проверьте разрешения у папки /'files/' ",

//import/export.php
"iex_file" => "Выделенный файл",
"iex_file_name" => "Имя файла iCal",
"iex_file_description" => "Описание файла iCal",
"iex_filters" => "Фильтры событий",
"iex_upload_ics" => "Загрузить файл iCal",
"iex_create_ics" => "Создать файл iCal",
"iex_upload_csv" => "Загрузить файл CSV",
"iex_upload_file" => "Загрузить файл",
"iex_create_file" => "Создать файл",
"iex_download_file" => "Скачать файл",
"iex_fields_sep_by" => "Поля разделены символом",
"iex_birthday_cat_id" => "Birthday category ID",
"iex_default_cat_id" => " ID категории по умолчанию",
"iex_if_no_cat" => "если категории не найдены",
"iex_import_events_from_date" => "Импорт событий, начинающихся с:",
"iex_see_insert" => "см. инструкцию справа",
"iex_no_file_name" => "Отсутствует имя файла",
"iex_inval_field_sep" => "разделитель полей неправильный или отсутствует",
"iex_no_begin_tag" => "неправильный файл iCal (нет начального тега)",
"iex_date_format" => "Формат даты событий",
"iex_time_format" => "Формат времени событий",
"iex_number_of_errors" => "Ошибок в списке",
"iex_bgnd_highlighted" => "фон подсвечен",
"iex_verify_event_list" => "Проверьте список событий, исправьте ошибки и повторите",
"iex_add_events" => "Добавить события в базу данных",
"iex_select_ignore_birthday" => "Select Ignore and Birthday check boxes as required",
"iex_select_ignore" => "Выберите Ignore check box для пропуска события",
"iex_title" => "Заголовок",
"iex_venue" => "Место",
"iex_owner" => "Владелец",
"iex_category" => "Категория",
"iex_date" => "Дата",
"iex_end_date" => "Конечная дата",
"iex_start_time" => "Время начала",
"iex_end_time" => "Время окончания",
"iex_description" => "Описание",
"iex_repeat" => "Повторить",
"iex_birthday" => "День Рождения",
"iex_ignore" => "Удалить",
"iex_events_added" => "событий добавлено",
"iex_events_dropped" => "событий пропущено (уже существуют)",
"iex_csv_file_error_on_line" => "Ошибка файла CSV в строке",
"iex_ics_file_error_on_line" => "Ошибка файла iCal в строке",
"iex_between_dates" => "Происходит в промежутке",
"iex_changed_between" => "Добавлен/изменен в промежутке",
"iex_select_date" => "Выбрать дату",
"iex_select_start_date" => "Выбрать дату начала",
"iex_select_end_date" => "Выбрать дату окончания",
"iex_all_cats" => "все категории",
"iex_all_users" => "все пользователи",
"iex_no_events_found" => "Ниодного события не добавлено",
"iex_file_created" => "Файл создан",
"iex_write error" => "Ошибка записи файла экспорта<br>Проверьте права папки 'files/' ",

//lcalcron.php
"cro_sum_header" => "CRON JOB SUMMARY",
"cro_sum_trailer" => "END OF SUMMARY",
"cro_evc_sum_title" => "EVENTS EXPIRED",
"cro_nr_evts_deleted" => "Number of events deleted",
"cro_not_sum_title" => "EMAIL REMINDERS",
"cro_not_sent_to" => "Reminders sent to",
"cro_no_not_dates_due" => "No notification dates due",
"cro_all_day" => "All day",
"cro_mailer" => "mailer",
"cro_subject" => "Subject",
"cro_event_due_in" => "The following event is due in",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "Due in",
"cro_due_today" => "Due today",
"cro_days" => "day(s)",
"cro_date_time" => "Date / time",
"cro_title" => "Title",
"cro_venue" => "Venue",
"cro_description" => "Description",
"cro_category" => "Category",
"cro_status" => "Status",
"cro_open_calendar" => "Open calendar",

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
"<h4>Инструкции по управлению БД</h4>
<p>На этой странице могут быть выбраны следующие функции:</p>
<h5>Сжать БД</h5>
<p>Когда пользователь удаляет событие, событие помечается как 'удаленное', но не будет убрано из БД.
Функция полностью удаляет события, удаленные более 30 дней назад и освобождает место на диске, 
занимаемое этими событиями.</p>
<h5>Резервирование БД</h5>
<p>Эта функция создаст резервный файл полной БД календаря (структура таблиц и их содержание )
 в формате '.sql' . Резервный файл будет сохранен в папке
<strong>files/</strong> с именем файла file name: 
<kbd>cal-dump-ггггммдд-ччммсс.sql</kbd> (где 'ггггммдд' = год, месяц, и 
день, а ччммсс = час, минуты и секунды.</p>
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
"<h4>Инструкции по импорту CSV</h4>
<p>Эта форма используется для импорта в LuxCal текстовых файлов <strong>Comma Separated Values (CSV)</strong> 
с данными.</p>
<p>Последовательность колонок в файле CSV должна быть следующей: заголовок, место, id категории (см. ниже), 
дата, конечная дата, время начала, время окончания и описание. Первый ряд файла 
CSV, используемый для заголовков коонок, игнорируется.</p>
<h5>Файлы примеров CSV</h5>
<p>Файлы примеров CSV (расширение файла .cvs) могут быть найдены в папке 'files/' 
 где находится LuxCal.</p>
<h5>Формат даты и времени</h5>
<p>Выбранные форматы даты и времени событий должны соответствовать форматам в закачиваемом файле CSV.</p>
<h5>Таблицы категорий</h5>
<p>Календарь использует ID-номера для определения категорий. ID категорий в файле CSV 
должны соответствовать категорям в календаре или должны быть пустыми.</p>
<p>Если при следующем шаге вы хотите обозначить события как 'день рождения', то <strong>Birthday 
category ID</strong> должно соответствовать ID категории из списка ниже.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>В вашем календаре сейчас назначены следующие категории:</p>",

"xpl_import_ical" =>
"<h4>Инструкции по импорту iCalendar</h4>
<p>Эта форма используется для импорта в LuxCal текстовых файлов <strong>iCalendar</strong> 
с данными. </p>
<p>Содержимое файла должно соответствовать [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>стандарту RFC5545</a></u>] Инженерного совета Интернет (Internet Engineering Task Force).</p>
<p>Будут испортированы только события; другие компоненты iCal, такие как: To-Do (задачи), Jounal (журнал), Free / 
Busy (свободен / занят), Time zone (временная зона) и Alarm (будильник), будут игнорированы.</p>
<h5>Файлы примеров iCal</h5>
<p>Файлы примеров iCalendar (расширение файла .ics) могут быть найдены в папке 'files/' 
 где находится LuxCal.</p>
<h5>Таблица категорий</h5>
<p>Календарь использует ID-номера для определения категорий. ID категорий в файле CSV 
должны соответствовать категорям в календаре или должны быть пустыми.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>В вашем календаре сейчас назначены следующие категории:</p>",

"xpl_export_ical" =>
"<h4>Инструкции по экспорту iCalendar</h4>
<p>Эта форма используется для извлечения и экспортирования событий из LuxCal в формат <strong>iCalendar</strong>.</p>
<p><b>Имя файла iCal</b> (без расширения) не является обязательным. Созданный файл будет сохранен в в папке 'files/' 
на сервере с указанным именем, или с именем of the calendar. Расширение файла будет <b>.ics</b>.
Существующие файлы в папке \"files/\" на сервере будет перезаписаны новым файлом.</p>
<p><b>Описание файла iCal</b> (т.е. 'Встречи 2013') не является обязательным. Если это поле не пустое, 
то введенный текст будет добавлен в заголовок экспортируемого файла iCal.</p>
<p><b>Фильтры событий</b>. События могут быть отфильтованы по:</p>
<ul>
<li>владельцу события</li>
<li>категории события</li>
<li>начальной дате события</li>
<li>дате создания/изменения события</li>
</ul>
<p>Каждый из фильтров не является обязательным. Пустое поле означает: без ограничений</p>
<br>
<p>Содержимое файла с извлеченными событиями будет соответствовать [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>стандарту RFC5545</a></u>] Инженерного совета Интернет (Internet Engineering Task Force).</p>
<p>Когда экспортируемый файл iCal будет <b>скачиваться</b>, к имени скачиваемого файла будут добавлены дата и время.</p>
<h5>Файлы примеров iCal</h5>
<p>Файлы примеров iCalendar (расширение файла .ics) могут быть найдены в папке 'files/' 
 где находится LuxCal.</p>"
);
?>
