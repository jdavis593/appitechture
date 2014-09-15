<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activat',
      'Disabled' => 'Dezactivat',
      'System' => 'Sistem',
      'Users' => 'Utilizatori',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Personalizare',
      'Available Fields' => 'Campuri valabile',
      'Layout' => 'Aspect',
      'Add Panel' => 'Adauga Panou',
      'Add Field' => 'Adauga Camp',
      'Settings' => 'Setari',
      'Scheduled Jobs' => 'Activitati Planificate',
      'Upgrade' => 'Actualizare',
      'Clear Cache' => 'Sterge Cache',
      'Rebuild' => 'Recontruire',
      'Teams' => 'Echipe',
      'Roles' => 'Roluri',
      'Outbound Emails' => 'Email-uri trimise',
      'Inbound Emails' => 'Email-uri intrate',
      'Email Templates' => 'Template-uri Email',
      'Import' => 'Importare',
      'Layout Manager' => 'Manager Aspect',
      'Field Manager' => 'Manager Campuri',
      'User Interface' => 'Interfata Utilizator',
      'Auth Tokens' => 'Token-uri Autentificare',
      'Authentication' => 'Authentication',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalii',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Filtre Cautare',
      'massUpdate' => 'Actualizeaza tot',
      'relationships' => 'Relatii',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresa',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Durata',
      'password' => 'Parola',
      'parsonName' => 'Numele Persoanei',
      'autoincrement' => 'Auto-incrementare',
      'bool' => 'Bool',
      'currency' => 'Valuta',
      'date' => 'Data',
      'datetime' => 'DataTimp',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplu',
      'linkParent' => 'Link Parinte',
      'multienim' => 'Multienum',
      'phone' => 'Telefon',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Fisier',
      'image' => 'Imagine',
    ),
    'fields' => 
    array (
      'type' => 'Tip',
      'name' => 'Nume',
      'label' => 'Eticheta',
      'required' => 'Obligatoriu',
      'default' => 'Initial',
      'maxLength' => 'Lungime Maxima',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Camp',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Tranducere',
      'previewSize' => 'Previzualizare Marime',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Aplicatia se va actualiza la versiunea <strong>{version}</strong>. S-ar putea sa dureze putin...',
      'upgradeDone' => 'Aplicatia a fost actualizata la versiunea <strong>{version}</strong>. Va rugam sa faceti Refresh.',
      'upgradeBackup' => 'Va rugam sa faceti backup bazei de date si aplicatiei inainte de a face actualizarea.',
      'thousandSeparatorEqualsDecimalMark' => 'Separatorul de mii nu poate fi acelasi cu separatorul de zecimale',
      'userHasNoEmailAddress' => 'Utilizatorul nu are adresa de email.',
      'selectEntityType' => 'Selectati tipul entitatii din meniul din stanga.',
      'selectUpgradePackage' => 'Selectati packetul de actualizare',
      'selectLayout' => 'Selectati aspectul dorit din meniul din stanga si editati-l.',
    ),
    'descriptions' => 
    array (
      'settings' => 'Setarile de sistem ale aplicatiei.',
      'scheduledJob' => 'Activitati care sunt executate de cron.',
      'upgrade' => 'Actualizare aplicatie.',
      'clearCache' => 'Stergeti tot cache-ul din backend.',
      'rebuild' => 'Reconstruire backend si stergere cache.',
      'users' => 'Management Utilizatori.',
      'teams' => 'Management Echipe.',
      'roles' => 'Management Roluri.',
      'outboundEmails' => 'Setari SMTP pentru trimitere email-uri.',
      'inboundEmails' => 'Grup conturi de email IMAP. Import email și email-la-caz.',
      'emailTemplates' => 'Template-uri pentru email-urile trimise.',
      'import' => 'Importare din fisier CSV.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Creaza campuri noi, sau personalizeaza-le pe cele existente.',
      'userInterface' => 'Configurare UI.',
      'authTokens' => 'Sesiuni Auth Active. Adresa IP si data ultimei accesari.',
      'authentication' => 'Authentication setttings.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Utilizator',
      'ipAddress' => 'Adresa IP',
      'lastAccess' => 'Data ultimei accesari',
      'createdAt' => 'Data conectarii',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Subiect',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateSent' => 'Data trimiterii',
      'from' => 'De la',
      'to' => 'Catre',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'In format Html',
      'body' => 'Corp',
      'subject' => 'Subiect',
      'attachments' => 'Atasamente',
      'selectTemplate' => 'Selecteaza Template',
      'fromEmailAddress' => 'De la adresa',
      'toEmailAddresses' => 'La adresa',
      'emailAddress' => 'Adresa Email',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Ciorna',
      'Sending' => 'Se trimite',
      'Sent' => 'Trimis',
      'Archived' => 'Arhivat',
    ),
    'labels' => 
    array (
      'Create Email' => 'Arhiveaza Email',
      'Compose' => 'Compune',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Trimis',
      'archived' => 'Arhivat',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primar',
      'Opted Out' => 'Optat',
      'Invalid' => 'Invalid',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Status',
      'isHtml' => 'In format Html',
      'body' => 'Corp',
      'subject' => 'Subiect',
      'attachments' => 'Atasamente',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Creare Template Email',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Utilizator',
      'Team' => 'Echipa',
      'Role' => 'Rol',
      'EmailTemplate' => 'Template Email',
      'OutboundEmail' => 'Email iesit ',
      'ScheduledJob' => 'Activitati programate',
      'Account' => 'Cont',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Tinta',
      'Opportunity' => 'Oportunitate',
      'Meeting' => 'Intalnire',
      'Calendar' => 'Calendar',
      'Call' => 'Apel',
      'Task' => 'Activitate',
      'Case' => 'Caz',
      'InboundEmail' => 'Intrari Email',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Email-uri',
      'User' => 'Utilizatori',
      'Team' => 'Echipe',
      'Role' => 'Roluri',
      'EmailTemplate' => 'Template-uri Email',
      'OutboundEmail' => 'Email-uri trimise',
      'ScheduledJob' => 'Activitati Planificate',
      'Account' => 'Conturi',
      'Contact' => 'Contacte',
      'Lead' => 'Lead-uri',
      'Target' => 'Tinte',
      'Opportunity' => 'Oportunitati',
      'Meeting' => 'Intalniri',
      'Calendar' => 'Calendar',
      'Call' => 'Apeluri',
      'Task' => 'Activitati',
      'Case' => 'Cazuri',
      'InboundEmail' => 'Email-uri intrate',
    ),
    'labels' => 
    array (
      'Misc' => 'Miscibil',
      'Merge' => 'Imbina',
      'None' => 'Nici unul',
      'by' => 'de',
      'Saved' => 'Salvat',
      'Error' => 'Eroare',
      'Select' => 'Selecteaza',
      'Not valid' => 'Invalid',
      'Please wait...' => 'Va rugam asteptati...',
      'Please wait' => 'Va rugam asteptati',
      'Loading...' => 'Se incarca...',
      'Uploading...' => 'Se incarca...',
      'Sending...' => 'Se trimite...',
      'Removed' => 'Sters',
      'Posted' => 'Publicat',
      'Linked' => 'Conectat',
      'Unlinked' => 'Deconectat',
      'Access denied' => 'Acces refuzat',
      'Access' => 'Acces',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Inregistrarea a fost stearsa',
      'Wrong username/password' => 'Numele de utilizator, sau parola nu sunt corecte',
      'Post cannot be empty' => 'Aticolul nu poate fi gol',
      'Removing...' => 'Se sterge...',
      'Unlinking...' => 'Se deconecteaza...',
      'Posting...' => 'Se publica...',
      'Username can not be empty!' => 'Numele de utilizator nu poate fi gol!',
      'Cache is not enabled' => 'Cache-ul nu este activat',
      'Cache has been cleared' => 'Cache-ul a fost sters',
      'Rebuild has been done' => 'Reconstruit cu succes',
      'Saving...' => 'Se salveaza...',
      'Modified' => 'Modificat',
      'Created' => 'Creat',
      'Create' => 'Creaza',
      'create' => 'creaza',
      'Overview' => 'Prezentare generala',
      'Details' => 'Detalii',
      'Add Filter' => 'Adauga Filtru',
      'Add Dashlet' => 'Adauga Dashlet',
      'Add' => 'Adauga',
      'Reset' => 'Reset',
      'Menu' => 'Meniu',
      'More' => 'More',
      'Search' => 'Cautare',
      'Only My' => 'Doar eu',
      'Open' => 'Deschide',
      'Admin' => 'Admin',
      'About' => 'Despre',
      'Refresh' => 'Reimprospatare',
      'Remove' => 'Sterge',
      'Options' => 'Optiuni',
      'Username' => 'Nume Utilizator',
      'Password' => 'Parola',
      'Login' => 'Conectare',
      'Log Out' => 'Deconectare',
      'Preferences' => 'Preferinte',
      'State' => 'Stat',
      'Street' => 'Strada',
      'Country' => 'Tara',
      'City' => 'Oras',
      'PostalCode' => 'Code Postal ',
      'Followed' => 'Urmarit',
      'Follow' => 'Urmareste',
      'Clear Local Cache' => 'Stergere Cache Local',
      'Actions' => 'Actiuni',
      'Delete' => 'Sterge',
      'Update' => 'Actualizare',
      'Save' => 'Salveaza',
      'Edit' => 'Editare',
      'Cancel' => 'Renunta',
      'Unlink' => 'Dezleaga',
      'Mass Update' => 'Actualizeaza tot',
      'Export' => 'Export',
      'No Data' => 'Nu sunt date',
      'All' => 'Toate',
      'Active' => 'Activ',
      'Inactive' => 'Inactiv',
      'Write your comment here' => 'Scrie comentariul aici',
      'Post' => 'Publica',
      'Stream' => 'Curent',
      'Show more' => 'Afiseaza mai mult',
      'Dashlet Options' => 'Optiuni Dashlet',
      'Full Form' => 'Forma intreaga',
      'Insert' => 'Inserare',
      'Person' => 'Persoana',
      'First Name' => 'Prenume',
      'Last Name' => 'Nume',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'schimba',
      'Primary' => 'Primar',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicat',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Creare Email intrare',
      'Activities' => 'Activitati',
      'History' => 'Istoric',
      'Attendees' => 'Participanti',
      'Schedule Meeting' => 'Programeaza Intalnire',
      'Schedule Call' => 'Programeaza Apel',
      'Compose Email' => 'Compune Email',
      'Log Meeting' => 'Log Intalnire',
      'Log Call' => 'Log Apel',
      'Archive Email' => 'Arhiveaza Email',
      'Create Task' => 'Creaza Activitate',
      'Tasks' => 'Activitati',
    ),
    'messages' => 
    array (
      'notModified' => 'Nu ai modificat inregistrarea',
      'duplicate' => 'Inregistrarea pe care o creezi pare sa fie duplicat',
      'fieldIsRequired' => '{field} este obligatoriu',
      'fieldShouldBeEmail' => '{field} trebuie sa fie o adresa de email valida',
      'fieldShouldBeFloat' => '{field} trebuie sa fie float valid',
      'fieldShouldBeInt' => '{field} trebuie sa fie intreg valid',
      'fieldShouldBeDate' => '{field} trebuie sa fie data valida',
      'fieldShouldBeDatetime' => '{field} trebuie sa fie data/timp valid',
      'fieldShouldAfter' => '{field} trebuie sa fie dupa {otherField}',
      'fieldShouldBefore' => '{field} trebuie sa fie inainte de {otherField}',
      'fieldShouldBeBetween' => '{field} trebuie sa fie intre {min} si  {max}',
      'fieldShouldBeLess' => '{field} trebuie sa fie mai putin de {value}',
      'fieldShouldBeGreater' => '{field} trebuie sa fie mai mare de {value}',
      'fieldBadPasswordConfirm' => '{field} confirmat in mod necorespunzator',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Doar eu',
      'open' => 'Deschide',
      'active' => 'Activ',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'firstName' => 'Prenume',
      'lastName' => 'Nume',
      'salutationName' => 'Salut',
      'assignedUser' => 'Utilizator alocat',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Nume utilizator alocat',
      'teams' => 'Echipe',
      'createdAt' => 'Creat la',
      'modifiedAt' => 'Modificat la',
      'createdBy' => 'Creat de',
      'modifiedBy' => 'Modificat de',
      'title' => 'Titlu',
      'dateFrom' => 'Data - de la',
      'dateTo' => 'Data - pana la',
      'autorefreshInterval' => 'Interval Auto-reinprospatare',
      'displayRecords' => 'Afisare inregistrari',
      'billingAddressCity' => 'Oras',
      'billingAddressCountry' => 'Tara',
      'billingAddressPostalCode' => 'Code Postal ',
      'billingAddressState' => 'Stat',
      'billingAddressStreet' => 'Strada',
      'addressCity' => 'Oras',
      'addressStreet' => 'Strada',
      'addressCountry' => 'Tara',
      'addressState' => 'Stat',
      'addressPostalCode' => 'Code Postal ',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Echipe',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunitati',
      'leads' => 'Lead-uri',
      'meetings' => 'Intalniri',
      'calls' => 'Apeluri',
      'tasks' => 'Activitati',
      'emails' => 'Email-uri',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Curent',
      'Leads' => 'Lead-urile mele',
      'Opportunities' => 'Oportunitatile mele',
      'Tasks' => 'Activitatile mele',
      'Cases' => 'Cazurile mele',
      'Calendar' => 'Calendar',
      'OpportunitiesByStage' => 'Oportunitati in functie de stadiu',
      'OpportunitiesByLeadSource' => 'Oportunitati in functie de Sursal Lead-ului',
      'SalesByMonth' => 'Vanzari pe luna',
      'SalesPipeline' => 'Flux Vanzari',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} creat {entityType} {entity}',
      'createAssigned' => '{user} creat {entityType} {entity} si alocat lui {assignee}',
      'assign' => '{user} alocat {entityType} {entity} lui {assignee}',
      'post' => '{user} publicat la {entityType} {entity}',
      'attach' => '{user} atasat la {entityType} {entity}',
      'status' => '{user} actualizat {field} pe {entityType} {entity}',
      'update' => '{user} actualizat {entityType} {entity}',
      'createRelated' => '{user} creat {relatedEntityType} {relatedEntity} si conectat cu {entityType} {entity}',
      'emailReceived' => '{entity} a fost primit pentru {entityType} {entity}',
      'createThis' => '{user} a creat acest {entityType}',
      'createAssignedThis' => '{user} a creat acest {entityType} alocat lui {assignee}',
      'assignThis' => '{user} a alocat acest {entityType} lui {assignee}',
      'postThis' => '{user} publicat',
      'attachThis' => '{user} atasat',
      'statusThis' => '{user} a actualizat {field}',
      'updateThis' => '{user} a actualizat acest {entityType}',
      'createRelatedThis' => '{user} a creat {relatedEntityType} {relatedEntity} si l-a conectat cu {entityType}',
      'emailReceivedThis' => '{entity} a fost primit',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'January',
        1 => 'February',
        2 => 'March',
        3 => 'April',
        4 => 'May',
        5 => 'June',
        6 => 'July',
        7 => 'August',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sun',
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Dl.',
        'Mrs.' => 'D-na.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romana',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Pornit',
        'notOn' => 'Oprit',
        'after' => 'Dupa',
        'before' => 'Inainte',
        'between' => 'Intre',
        'today' => 'Astazi',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Egal',
        'notEquals' => 'Inegal',
        'greaterThan' => 'Mai mare de',
        'lessThan' => 'Mai mic de',
        'greaterThanOrEquals' => 'Mai mare sau egal',
        'lessThanOrEquals' => 'Mai mic sau egal',
        'between' => 'Intre',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
        11 => 'Nici unul',
        12 => '30 secunde',
        13 => '1 minut',
        14 => '2 minute',
        15 => '5 minute',
        16 => '10 minute',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Altele',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Puteti gasi traducerea aici: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Bold',
          'italic' => 'Italic',
          'underline' => 'Subliniat',
          'strike' => 'Strike',
          'clear' => 'Sterge stil font',
          'height' => 'Inaltime linie',
          'name' => 'Familie Font ',
          'size' => 'Marime Font',
        ),
        'image' => 
        array (
          'image' => 'Imagine',
          'insert' => 'Inserare Imagine',
          'resizeFull' => 'Redimensionare completa',
          'resizeHalf' => 'Redimensionare la jumatate',
          'resizeQuarter' => 'Redimensionare la sfert',
          'floatLeft' => 'Aliniere la stanga',
          'floatRight' => 'Aliniere la dreapta',
          'floatNone' => 'Fara aliniere',
          'dragImageHere' => 'Trage imaginea aici',
          'selectFromFiles' => 'Selecteaza din fisiere',
          'url' => 'URL Imagine',
          'remove' => 'Stergere imagine',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserare Link',
          'unlink' => 'Dezleaga',
          'edit' => 'Editare',
          'textToDisplay' => 'Text de afisat',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Deschidere in fereastra noua',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Link Video ',
          'insert' => 'Inserare Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Inserare Linie Orizontala',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Citat',
          'pre' => 'Cod',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista neordonata',
          'ordered' => 'Lista ordonata',
        ),
        'options' => 
        array (
          'help' => 'Ajutor',
          'fullscreen' => 'Ecran complet',
          'codeview' => 'Vizualizare cod',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Neindentat',
          'indent' => 'Indentat',
          'left' => 'Aliniere stanga',
          'center' => 'Aliniere centru',
          'right' => 'Aliniere dreapta',
          'justify' => 'Justify complet',
        ),
        'color' => 
        array (
          'recent' => 'Culoarea recenta',
          'more' => 'Mai multe culori',
          'background' => 'Culoare fundal',
          'foreground' => 'Culoare font',
          'transparent' => 'Transparent',
          'setTransparent' => 'Setare transparenta',
          'reset' => 'Reset',
          'resetToDefault' => 'Reinitializare setari',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Scurtaturi taste',
          'close' => 'Inchide',
          'textFormatting' => 'Formatare Text',
          'action' => 'Actiune',
          'paragraphFormatting' => 'Formatare Paragraf',
          'documentStyle' => 'Stil Document ',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
          'redo' => 'Redo',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Publica',
      'attachments' => 'Atasamente',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format Data ',
      'timeFormat' => 'Format Timp',
      'timeZone' => 'Zone Timp',
      'weekStart' => 'Prima zi a saptamanii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Semn zecimal',
      'defaultCurrency' => 'Valuta initiala',
      'currencyList' => 'Lista valute',
      'language' => 'Limba',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parola',
      'smtpEmailAddress' => 'Adresa Email',
      'exportDelimiter' => 'Delimitator Export',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Duminica',
        3 => 'Luni',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'roles' => 'Roluri',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
      'teams' => 'Echipe',
    ),
    'labels' => 
    array (
      'Access' => 'Acces',
      'Create Role' => 'Creare Rol',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'ne setat',
        'enabled' => 'activat',
        'disabled' => 'dezactivat',
      ),
      'levelList' => 
      array (
        'all' => 'toate',
        'team' => 'echipa',
        'own' => 'personal',
        'no' => 'nu',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Citeste',
      'edit' => 'Editare',
      'delete' => 'Sterge',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Status',
      'job' => 'Activitate',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Creare activiate programata',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Verificare Intrari Email',
        'Cleanup' => 'Curatare',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Adauga acesta linie in fisierul crontab pentru a rula Activitatile programate:',
        'mac' => 'Nota: Adauga acesta linie in fisierul crontab pentru a rula Activitatile programate:',
        'windows' => 'Nota: Creaza un fisier batch care sa contina urmatoarele comenzi pentru a rula Activitatile programate, folosind Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Timp Executie',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Foloseste Cache',
      'dateFormat' => 'Format Data ',
      'timeFormat' => 'Format Timp',
      'timeZone' => 'Zone Timp',
      'weekStart' => 'Prima zi a saptamanii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Semn zecimal',
      'defaultCurrency' => 'Valuta initiala',
      'currencyList' => 'Lista valute',
      'language' => 'Limba',
      'companyLogo' => 'Logo Companie',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parola',
      'outboundEmailFromName' => 'De la',
      'outboundEmailFromAddress' => 'De la adresa',
      'outboundEmailIsShared' => 'Este Partajat',
      'recordsPerPage' => 'Inregistrari pe pagina',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Lista Tab-uri',
      'quickCreateList' => 'Creare lista rapida',
      'exportDelimiter' => 'Delimitator Export',
      'authenticationMethod' => 'Authentication Method',
      'ldapHost' => 'Gazda',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorizare',
      'ldapUsername' => 'Nume Utilizator',
      'ldapPassword' => 'Parola',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Securitate',
      'ldapUserLoginFilter' => 'User Login Filter',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Disable Export (only admin is allowed)',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Duminica',
        3 => 'Luni',
      ),
    ),
    'labels' => 
    array (
      'System' => 'Sistem',
      'Locale' => 'Localizare',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuratie',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'roles' => 'Roluri',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
    ),
    'labels' => 
    array (
      'Create Team' => 'Creare Echipa',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'userName' => 'Nume Utilizator',
      'title' => 'Titlu',
      'isAdmin' => 'Este Admin',
      'defaultTeam' => 'Echipa Initiala',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Roluri',
      'password' => 'Parola',
      'passwordConfirm' => 'Confirmare Parola',
      'newPassword' => 'Parola Noua',
    ),
    'links' => 
    array (
      'teams' => 'Echipe',
      'roles' => 'Roluri',
    ),
    'labels' => 
    array (
      'Create User' => 'Creare Utilizator',
      'Generate' => 'Generare',
      'Access' => 'Acces',
      'Preferences' => 'Preferinte',
      'Change Password' => 'Schimbare Parola',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Parola va fi trimisa in email-ul utilizatorului.',
      'accountInfoEmailSubject' => 'Informatii cont',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChanged' => 'Parola a fost schimbata',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adresa de Facturare',
      'shippingAddress' => 'Adresa de Transport',
      'description' => 'Descriere',
      'sicCode' => 'Cod Sic',
      'industry' => 'Industrie',
      'type' => 'Tip',
      'contactRole' => 'Rol',
    ),
    'links' => 
    array (
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunitati',
      'cases' => 'Cazuri',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Client',
        'Investor' => 'Investitor',
        'Partner' => 'Partener',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Apparel' => 'Haine',
        'Banking' => 'Banking',
        'Computer Software' => 'Software Computer',
        'Education' => 'Educatie',
        'Electronics' => 'Electronice',
        'Finance' => 'Finante',
        'Insurance' => 'Asigurari',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Creare cont',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Luna',
      'week' => 'Saptamana',
      'day' => 'Zi',
      'agendaWeek' => 'Saptamana',
      'agendaDay' => 'Zi',
    ),
    'labels' => 
    array (
      'Today' => 'Astazi',
      'Create' => 'Creaza',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateStart' => 'Data inceput',
      'dateEnd' => 'Data terminare',
      'direction' => 'Directie',
      'duration' => 'Durata',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planificat',
        'Held' => 'Detinut',
        'Not Held' => 'Nedetinut',
      ),
      'direction' => 
      array (
        'Outbound' => 'Iesire',
        'Inbound' => 'Intrare',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Creare Apelare',
      'Set Held' => 'Setare detinere',
      'Set Not Held' => 'Setare nedetinere',
      'Send Invitations' => 'Trimite invitatii',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planificat',
      'held' => 'Detinut',
      'todays' => 'Today\'s',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'number' => 'Numar',
      'status' => 'Status',
      'account' => 'Cont',
      'contact' => 'Contact',
      'priority' => 'Prioritate',
      'type' => 'Tip',
      'description' => 'Descriere',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nou',
        'Assigned' => 'Alocat',
        'Pending' => 'In asteptare',
        'Closed' => 'Inchis',
        'Rejected' => 'Respins',
        'Duplicate' => 'Duplicat',
      ),
      'priority' => 
      array (
        'Low' => 'Scazut',
        'Normal' => 'Normal',
        'High' => 'Inalt',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Intrebare',
        'Incident' => 'Incident',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Creare Caz',
    ),
    'presetFilters' => 
    array (
      'open' => 'Deschide',
      'closed' => 'Inchis',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'account' => 'Cont',
      'accounts' => 'Conturi',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Tip cont',
      'doNotCall' => 'Nu sunati',
      'address' => 'Adresa',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Rol',
      'description' => 'Descriere',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunitati',
      'cases' => 'Cazuri',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Creare Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--None--',
        'Decision Maker' => 'Decision Maker',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Influencer',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'team' => 'Echipa',
      'status' => 'Status',
      'assignToUser' => 'Atribuie utilizatorului',
      'host' => 'Gazda',
      'username' => 'Nume Utilizator',
      'password' => 'Parola',
      'port' => 'Port',
      'monitoredFolders' => 'Directoare Monitorizate',
      'trashFolder' => 'Gunoi',
      'ssl' => 'SSL',
      'createCase' => 'Creare Caz',
      'reply' => 'Raspunde',
      'caseDistribution' => 'Distribuire Caz',
      'replyEmailTemplate' => 'Template Raspuns Email ',
      'replyFromAddress' => 'Raspunde cu Adresa',
      'replyFromName' => 'Raspunde cu Numele',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Atribuire directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Cel putin, Ocupat',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Creare Email intrare',
      'IMAP' => 'IMAP',
      'Actions' => 'Actiuni',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could neconectat la server-ul IMAP',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertit la',
      'Create Lead' => 'Creare Lead',
      'Convert' => 'Converteste',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Nume Cont',
      'doNotCall' => 'Nu sunati',
      'address' => 'Adresa',
      'status' => 'Status',
      'source' => 'Sursa',
      'opportunityAmount' => 'Suma Oportunitate',
      'description' => 'Descriere',
      'createdAccount' => 'Cont',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Oportunitate',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nou',
        'Assigned' => 'Alocat',
        'In Process' => 'In Proces',
        'Converted' => 'Convertit',
        'Recycled' => 'Reciclat',
        'Dead' => 'Inactiv',
      ),
      'source' => 
      array (
        'Call' => 'Apel',
        'Email' => 'Email',
        'Existing Customer' => 'Client Existent',
        'Partner' => 'Partener',
        'Public Relations' => 'Relatii Publice',
        'Web Site' => 'Site Web',
        'Campaign' => 'Campanie',
        'Other' => 'Altele',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateStart' => 'Data inceput',
      'dateEnd' => 'Data terminare',
      'duration' => 'Durata',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planificat',
        'Held' => 'Detinut',
        'Not Held' => 'Nedetinut',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Creare Intalnire',
      'Set Held' => 'Setare detinere',
      'Set Not Held' => 'Setare nedetinere',
      'Send Invitations' => 'Trimite invitatii',
      'Saved as Held' => 'Saved as Held',
      'Saved as Not Held' => 'Saved as Not Held',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planificat',
      'held' => 'Detinut',
      'todays' => 'Today\'s',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'account' => 'Cont',
      'stage' => 'Stadiu',
      'amount' => 'Suma',
      'probability' => 'Probabilitate, %',
      'leadSource' => 'Sursa Lead',
      'doNotCall' => 'Nu sunati',
      'closeDate' => 'Data Inchiderii',
      'contacts' => 'Contacte',
      'description' => 'Descriere',
    ),
    'links' => 
    array (
      'contacts' => 'Contacte',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectare',
        'Qualification' => 'Calificari',
        'Needs Analysis' => 'Necesita Analiza',
        'Value Proposition' => 'Valoare Propunere',
        'Id. Decision Makers' => 'Id. Factori de Decizie',
        'Perception Analysis' => 'Analiza Perceptiei',
        'Proposal/Price Quote' => 'Propunere/Oferta Pret',
        'Negotiation/Review' => 'Negociere/Revizuire',
        'Closed Won' => 'Inchide ca Castigat',
        'Closed Lost' => 'Inchide ca Pierdut',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Creare Oportunitate',
    ),
    'presetFilters' => 
    array (
      'open' => 'Deschide',
      'won' => 'Won',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'website' => 'Site Web',
      'accountName' => 'Nume Cont',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nu sunati',
      'address' => 'Adresa',
      'description' => 'Descriere',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Creare Tinta',
      'Convert to Lead' => 'Converteste la Lead',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateStart' => 'Data inceput',
      'dateEnd' => 'Data scadenta',
      'priority' => 'Prioritate',
      'description' => 'Descriere',
      'isOverdue' => 'Este Restant',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Ne inceput',
        'Started' => 'Inceput',
        'Completed' => 'Completat',
        'Canceled' => 'Anulat',
      ),
      'priority' => 
      array (
        'Low' => 'Scazut',
        'Normal' => 'Normal',
        'High' => 'Inalt',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Creaza Activitate',
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
      'completed' => 'Completat',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
    ),
  ),
);

?>