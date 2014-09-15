<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Aktiv',
      'Disabled' => 'Inaktiv',
      'System' => 'System',
      'Users' => 'Benutzer',
      'Email' => 'E-Mail',
      'Data' => 'Daten',
      'Customization' => 'Anpassung',
      'Available Fields' => 'Verfügbare Felder',
      'Layout' => 'Aktuelles Layout',
      'Add Panel' => 'Panel hinzufügen',
      'Add Field' => 'Feld hinzufügen',
      'Settings' => 'Einstellungen',
      'Scheduled Jobs' => 'Geplante Jobs',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Cache leeren',
      'Rebuild' => 'Neu aufbauen',
      'Teams' => 'Teams',
      'Roles' => 'Rollen',
      'Outbound Emails' => 'Ausgehende E-Mails',
      'Inbound Emails' => 'Eingehende E-Mails',
      'Email Templates' => 'E-Mail Vorlagen',
      'Import' => 'Import',
      'Layout Manager' => 'Layouts anpassen',
      'Field Manager' => 'Felder anpassen',
      'User Interface' => 'Benutzeroberfläche',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Suchfilter',
      'massUpdate' => 'Massenänderung',
      'relationships' => 'Beziehungen',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Array',
      'foreign' => 'Fremd',
      'duration' => 'Dauer',
      'password' => 'Passwort',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Automatisch hochzählen',
      'bool' => 'Bool',
      'currency' => 'Währung',
      'date' => 'Datum',
      'datetime' => 'Datum/Zeit',
      'email' => 'E-Mail',
      'enum' => 'Einfachauswahl',
      'enumInt' => 'Einfachauswahl Ganzzahlwerte',
      'enumFloat' => 'Einfachauswahl Fließkommawerte',
      'float' => 'Fließkomma',
      'int' => 'Ganzzahl',
      'link' => 'Link',
      'linkMultiple' => 'Mehrfachlinks',
      'linkParent' => 'Mutterlink',
      'multienim' => 'Mehrfachauswahl',
      'phone' => 'Telefon',
      'text' => 'Textbox',
      'url' => 'URL',
      'varchar' => 'Text (max. 255)',
      'file' => 'Datei',
      'image' => 'Bild',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Name',
      'label' => 'Bezeichnung',
      'required' => 'Erforderlich',
      'default' => 'Standard',
      'maxLength' => 'Maximallänge',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Feld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Übersetzung',
      'previewSize' => 'Vorschau Größe',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Ihr EspoCRM wird nun auf Version <strong>{version}</strong> aktualisiert. Dies kann eine Weile dauern.',
      'upgradeDone' => 'Ihr EspoCRM wurde auf Version <strong>{version}</strong> aktualisiert.  Bitte aktualisieren Sie Ihren Browser.',
      'upgradeBackup' => 'Wir empfehlen, vor der Aktualisierung von EspoCRM Verzeichnis sowie Datenbank zu sichern.',
      'thousandSeparatorEqualsDecimalMark' => 'Das Tausendertrennzeichen kann nicht gleich dem Dezimaltrennzeichen sein',
      'userHasNoEmailAddress' => 'Der Benutzer hat keine E-Mail-Adresse.',
      'selectEntityType' => 'Modul links auswählen',
      'selectUpgradePackage' => 'Aktualisierungspaket auswählen',
      'selectLayout' => 'Layout zum Editieren links auswählen',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systemeinstellungen der Applikation.',
      'scheduledJob' => 'Aufgaben die durch einen Cronjob ausgeführt werden.',
      'upgrade' => 'EspoCRM aktualisieren.',
      'clearCache' => 'Alle Cache Dateien leeren.',
      'rebuild' => 'Wiederherstellung des Backends und Leeren des Cache.',
      'users' => 'Benutzerverwaltung.',
      'teams' => 'Teamverwaltung.',
      'roles' => 'Rollenverwaltung.',
      'outboundEmails' => 'SMTP Einstellungen für ausgehende E-Mails.',
      'inboundEmails' => 'IMAP Gruppen E-Mail Konten. E-Mail Import und E-Mail für Fälle.',
      'emailTemplates' => 'Vorlagen für ausgehende E-Mails.',
      'import' => 'Datenimport aus CSV Datei.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Neue Felder erstellen oder bestehende anpassen.',
      'userInterface' => 'Benutzeroberfläche anpassen.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
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
      'user' => 'Benutzer',
      'ipAddress' => 'IP Address',
      'lastAccess' => 'Last Access Date',
      'createdAt' => 'Login Date',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Betreff',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateSent' => 'Sendedatum',
      'from' => 'Von ',
      'to' => 'An',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'selectTemplate' => 'Vorlage wählen',
      'fromEmailAddress' => 'Von Adresse',
      'toEmailAddresses' => 'An Adresse',
      'emailAddress' => 'E-Mail Adresse',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Entwurf',
      'Sending' => 'wird gesendet',
      'Sent' => 'Gesendet',
      'Archived' => 'Archiviert',
    ),
    'labels' => 
    array (
      'Create Email' => 'E-Mail archivieren',
      'Compose' => 'Erstellen',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Sent',
      'archived' => 'Archived',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Primär',
      'Opted Out' => 'Keine E-Mails',
      'Invalid' => 'Ungültig',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Neue E-Mail Vorlage',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-Mail',
      'User' => 'Benutzer',
      'Team' => 'Team',
      'Role' => 'Rolle',
      'EmailTemplate' => 'E-Mail Vorlage',
      'OutboundEmail' => 'Ausgehende E-Mail',
      'ScheduledJob' => 'Geplante Aufgabe',
      'Account' => 'Firma',
      'Contact' => 'Kontakt',
      'Lead' => 'Interessent',
      'Target' => 'Zielkontakt',
      'Opportunity' => 'Verkaufschance',
      'Meeting' => 'Meeting',
      'Calendar' => 'Kalender',
      'Call' => 'Anruf',
      'Task' => 'Aufgabe',
      'Case' => 'Fall',
      'InboundEmail' => 'Eingehende E-Mails',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-Mails',
      'User' => 'Benutzer',
      'Team' => 'Teams',
      'Role' => 'Rollen',
      'EmailTemplate' => 'E-Mail Vorlagen',
      'OutboundEmail' => 'Ausgehende E-Mails',
      'ScheduledJob' => 'Geplante Jobs',
      'Account' => 'Firmen',
      'Contact' => 'Kontakte',
      'Lead' => 'Interessenten',
      'Target' => 'Targets',
      'Opportunity' => 'Verkaufschancen',
      'Meeting' => 'Meetings',
      'Calendar' => 'Kalender',
      'Call' => 'Anrufe',
      'Task' => 'Aufgaben',
      'Case' => 'Fälle',
      'InboundEmail' => 'Eingehende E-Mails',
    ),
    'labels' => 
    array (
      'Misc' => 'Verschiedenes',
      'Merge' => 'Zusammenführen',
      'None' => 'Kein(e)',
      'by' => 'von',
      'Saved' => 'Gespeichert.',
      'Error' => 'Fehler',
      'Select' => 'Auswählen',
      'Not valid' => 'Ungültig',
      'Please wait...' => 'Bitte warten...',
      'Please wait' => 'Bitte warten',
      'Loading...' => 'Lade...',
      'Uploading...' => 'Lade hoch...',
      'Sending...' => 'Wird gesendet...',
      'Removed' => 'Removed',
      'Posted' => 'Geposted',
      'Linked' => 'Verlinkt',
      'Unlinked' => 'Verknüpfung gelöscht',
      'Access denied' => 'Zugriff verweigert',
      'Access' => 'Zugang',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Datensatz wurde gelöscht',
      'Wrong username/password' => 'Falscher Benutzername/Passwort',
      'Post cannot be empty' => 'Notiz dard nicht leer sein',
      'Removing...' => 'Entferne...',
      'Unlinking...' => 'Lösche Verknüpfung...',
      'Posting...' => 'Poste...',
      'Username can not be empty!' => 'Der Benutzername darf nicht leer sein!',
      'Cache is not enabled' => 'Cache ist nicht aktiviert',
      'Cache has been cleared' => 'Der Cache wurde geleert',
      'Rebuild has been done' => 'Wiederherstellen wurde durchgeführt',
      'Saving...' => 'Speichere...',
      'Modified' => 'Verändert',
      'Created' => 'Erstellt',
      'Create' => 'Erstellen',
      'create' => 'Erstellen',
      'Overview' => 'Überblick',
      'Details' => 'Details',
      'Add Filter' => 'Filter hinzufügen',
      'Add Dashlet' => 'Dashlet hinzufügen',
      'Add' => 'Hinzufügen',
      'Reset' => 'Zurücksetzen',
      'Menu' => 'Menü',
      'More' => 'Mehr',
      'Search' => 'Suchen',
      'Only My' => 'Nur Meine',
      'Open' => 'Offen',
      'Admin' => 'Admin',
      'About' => 'Über',
      'Refresh' => 'Aktualisieren',
      'Remove' => 'Entfernen',
      'Options' => 'Optionen',
      'Username' => 'Benutzername',
      'Password' => 'Passwort',
      'Login' => 'Anmelden',
      'Log Out' => 'Abmelden',
      'Preferences' => 'Benutzereinstellungen',
      'State' => 'Bundesland',
      'Street' => 'Straße',
      'Country' => 'Land',
      'City' => 'Ort',
      'PostalCode' => 'PLZ',
      'Followed' => 'Beobachtet',
      'Follow' => 'Beobachten',
      'Clear Local Cache' => 'Lokalen Cache leeren',
      'Actions' => 'Aktionen',
      'Delete' => 'Löschen',
      'Update' => 'Aktualisieren',
      'Save' => 'Speichern',
      'Edit' => 'Bearbeiten',
      'Cancel' => 'Abbrechen',
      'Unlink' => 'Link entfernen',
      'Mass Update' => 'Massenänderung',
      'Export' => 'Exportieren',
      'No Data' => 'Keine Daten',
      'All' => 'Alle',
      'Active' => 'Aktiv',
      'Inactive' => 'Inaktiv',
      'Write your comment here' => 'Notiz hier einfügen',
      'Post' => 'Senden',
      'Stream' => 'Vorgänge',
      'Show more' => 'Mehr anzeigen',
      'Dashlet Options' => 'Dashlet Optionen',
      'Full Form' => 'Komplettes Formular',
      'Insert' => 'Einfügen',
      'Person' => 'Person',
      'First Name' => 'Vorname',
      'Last Name' => 'Nachname',
      'Original' => 'Original',
      'You' => 'Sie',
      'you' => 'Sie',
      'change' => 'ändern',
      'Primary' => 'Primär',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'Activities' => 'Aktivitäten',
      'History' => 'Verlauf',
      'Attendees' => 'Teilnehmer',
      'Schedule Meeting' => 'Meeting planen',
      'Schedule Call' => 'Anruf planen',
      'Compose Email' => 'E-Mail erstellen',
      'Log Meeting' => 'Meeting erfassen',
      'Log Call' => 'Anruf erfassen',
      'Archive Email' => 'E-Mail archivieren',
      'Create Task' => 'Neue Aufgabe',
      'Tasks' => 'Aufgaben',
    ),
    'messages' => 
    array (
      'notModified' => 'Sie haben den Datensatz nicht geändert',
      'duplicate' => 'Der Datensatz den Sie erstellen wollen, könnte eine Dublette sein',
      'fieldIsRequired' => '{field} wird benötigt',
      'fieldShouldBeEmail' => '{field} muss eine gültige E-Mail sein',
      'fieldShouldBeFloat' => '{field} muss eine gültige Fließkomma Zahl sein',
      'fieldShouldBeInt' => '{field} muss eine gültige Ganzzahl sein',
      'fieldShouldBeDate' => '{field} muss ein gültiges Datum sein',
      'fieldShouldBeDatetime' => '{field} muss ein gültiges Datum/Zeit Feld sein',
      'fieldShouldAfter' => '{field} muss nach {otherField} sein',
      'fieldShouldBefore' => '{field} muss vor {otherField} sein',
      'fieldShouldBeBetween' => '{field} muss zwischen {min} und {max} sein',
      'fieldShouldBeLess' => '{field} muss kleiner als {value} sein',
      'fieldShouldBeGreater' => '{field} muss größer als {value} sein',
      'fieldBadPasswordConfirm' => '{field} falsch bestätigt',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Nur Meine',
      'open' => 'Offen',
      'active' => 'Aktiv',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'firstName' => 'Vorname',
      'lastName' => 'Nachname',
      'salutationName' => 'Anrede',
      'assignedUser' => 'Zugewiesener Benutzer',
      'emailAddress' => 'E-Mail',
      'assignedUserName' => 'Zugewiesener Benutzername',
      'teams' => 'Teams',
      'createdAt' => 'Erstellt am',
      'modifiedAt' => 'Geändert am',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'title' => 'Funktion',
      'dateFrom' => 'Von Datum',
      'dateTo' => 'Bis Datum',
      'autorefreshInterval' => 'Aktualisierungsintervall ',
      'displayRecords' => 'Sätze anzeigen',
      'billingAddressCity' => 'Ort',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'PLZ',
      'billingAddressState' => 'Bundesland',
      'billingAddressStreet' => 'Straße',
      'addressCity' => 'Ort',
      'addressStreet' => 'Straße',
      'addressCountry' => 'Land',
      'addressState' => 'Bundesland',
      'addressPostalCode' => 'PLZ',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'leads' => 'Interessenten',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Vorgänge',
      'Leads' => 'Meine Interessenten',
      'Opportunities' => 'Meine Verkaufschancen',
      'Tasks' => 'Meine Aufgaben',
      'Cases' => 'Meine Fälle',
      'Calendar' => 'Kalender',
      'OpportunitiesByStage' => 'Verkaufschancen nach Verkaufsphase',
      'OpportunitiesByLeadSource' => 'Verkaufschancen nach Quelle',
      'SalesByMonth' => 'Umsätze nach Monat',
      'SalesPipeline' => 'Verkaufspipeline',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} hat {entityType} {entity} erstellt',
      'createAssigned' => '{user} hat {entityType} {entity} erstellt und an {assignee} zugewiesen',
      'assign' => '{user} hat {entityType} {entity} an {assignee} zugewiesen',
      'post' => '{user} hat zu {entityType} {entity} notiert',
      'attach' => '{user} hat zu {entityType} {entity} hinzugefügt',
      'status' => '{user} hat {field} von {entityType} {entity} aktualisiert',
      'update' => '{user} hat {entityType} {entity} aktualisiert',
      'createRelated' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit {entityType} {entity} erstellt',
      'emailReceived' => '{entity} wurde für {entityType} {entity} empfangen',
      'createThis' => '{user} hat {entityType} erstellt',
      'createAssignedThis' => '{user} hat {entityType} erstellt und an {assignee} zugewiesen',
      'assignThis' => '{user} hat {entityType} an {assignee} zugewiesen',
      'postThis' => '{user} hat notiert',
      'attachThis' => '{user} hat hinzugefügt',
      'statusThis' => '{user} hat {field} aktualiisiert',
      'updateThis' => '{user} hat diese(s/n) {entityType} aktualisiert',
      'createRelatedThis' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit diesem (r) {entityType} hinzugefügt',
      'emailReceivedThis' => '{entity} wurde empfangen',
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
        'Mr.' => 'Mr.',
        'Mrs.' => 'Mrs.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Aserbaidschanisch',
        'be_BY' => 'Weissrussisch',
        'bg_BG' => 'Bulgarisch',
        'bn_IN' => 'Benglaisch',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Katalanisch',
        'cs_CZ' => 'Tschechisch',
        'cy_GB' => 'Walisisch',
        'da_DK' => 'Dänisch',
        'de_DE' => 'Deutsch',
        'el_GR' => 'Griechisch',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estnisch',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Persisch',
        'fi_FI' => 'Finnisch',
        'fo_FO' => 'Färöisch',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irisch',
        'gl_ES' => 'Galizisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebräisch',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Ungarisch',
        'hy_AM' => 'Armenisch',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'Isländisch',
        'it_IT' => 'Italienisch',
        'ja_JP' => 'Japanisch',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreanisch',
        'ku_TR' => 'Kurdisch',
        'lt_LT' => 'Litauisch',
        'lv_LV' => 'Lettisch',
        'mk_MK' => 'Mazedonisch',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malaiisch',
        'nb_NO' => 'Norwegisch Bokmál',
        'nn_NO' => 'Norwegisch Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Niederländisch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polnisch',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Rumänisch',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowakisch',
        'sl_SI' => 'Slowenisch',
        'sq_AL' => 'Albanisch',
        'sr_RS' => 'Serbisch',
        'sv_SE' => 'Schwedisch',
        'sw_KE' => 'Suaheli',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thailändisch',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tükisch',
        'uk_UA' => 'Ukrainisch',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamesisch',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Am',
        'notOn' => 'Nicht am',
        'after' => 'Nach',
        'before' => 'Vor',
        'between' => 'Zwischen',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Gleich',
        'notEquals' => 'Nicht gleich',
        'greaterThan' => 'Größer als',
        'lessThan' => 'Weniger als',
        'greaterThanOrEquals' => 'Größer oder gleich als',
        'lessThanOrEquals' => 'Weniger oder gleich als',
        'between' => 'Zwischen',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
        11 => 'Kein(e)',
        12 => '30 Sekunden',
        13 => '1 Minute',
        14 => '2 Minuten',
        15 => '5 Minuten',
        16 => '10 Minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Other',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Sie finden die Übersetzung hier: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Fett',
          'italic' => 'Kursiv',
          'underline' => 'Unterstrichen',
          'strike' => 'Durchgestrichen',
          'clear' => 'Font Stil entfernen',
          'height' => 'Zeilenhöhe',
          'name' => 'Schriftfamilie',
          'size' => 'Schriftgröße',
        ),
        'image' => 
        array (
          'image' => 'Bild',
          'insert' => 'Bild einfügen',
          'resizeFull' => 'Originalgröße',
          'resizeHalf' => 'Größe 1/2',
          'resizeQuarter' => 'Größe 1/4',
          'floatLeft' => 'Linksbündig',
          'floatRight' => 'Rechtsbündig',
          'floatNone' => 'Kein Textfluss',
          'dragImageHere' => 'Ziehen Sie ein Bild mit der Maus hierher',
          'selectFromFiles' => 'Wählen Sie eine Datei aus',
          'url' => 'Grafik URL',
          'remove' => 'Grafik entfernen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link einfügen',
          'unlink' => 'Link entfernen',
          'edit' => 'Bearbeiten',
          'textToDisplay' => 'Anzeigetext',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'In einem neuen Fenster öffnen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video einfügen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabelle',
        ),
        'hr' => 
        array (
          'insert' => 'Eine horizontale Linie einfügen',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Zitat',
          'pre' => 'Quellcode',
          'h1' => 'Überschrift 1',
          'h2' => 'Überschrift 2',
          'h3' => 'Überschrift 3',
          'h4' => 'Überschrift 4',
          'h5' => 'Überschrift 5',
          'h6' => 'Überschrift 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unsortierte Liste',
          'ordered' => 'Nummerierte Liste',
        ),
        'options' => 
        array (
          'help' => 'Hilfe',
          'fullscreen' => 'Vollbild',
          'codeview' => 'HTML-Code anzeigen',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Absatz',
          'outdent' => 'Ausrückung',
          'indent' => 'Einrückung',
          'left' => 'Links ausrichten',
          'center' => 'Zentriert ausrichten',
          'right' => 'Rechts ausrichten',
          'justify' => 'Blocksatz',
        ),
        'color' => 
        array (
          'recent' => 'Letzte Farbe',
          'more' => 'Mehr Farben',
          'background' => 'Hintergrundfarbe',
          'foreground' => 'Schriftfarbe',
          'transparent' => 'Transparenz',
          'setTransparent' => 'Transparenz setzen',
          'reset' => 'Zurücksetzen',
          'resetToDefault' => 'Zurücksetzen auf Standard',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tastaturkürzel',
          'close' => 'Schließen',
          'textFormatting' => 'Textformatierung',
          'action' => 'Aktion',
          'paragraphFormatting' => 'Absatzformatierung',
          'documentStyle' => 'Dokumentenstil',
        ),
        'history' => 
        array (
          'undo' => 'Rückgängig',
          'redo' => 'Wiederholen',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Senden',
      'attachments' => 'Anhänge',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'smtpEmailAddress' => 'E-Mail Adresse',
      'exportDelimiter' => 'Export Trennzeichen',
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
        2 => 'Sonntag',
        3 => 'Montag',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'teams' => 'Teams',
    ),
    'labels' => 
    array (
      'Access' => 'Zugang',
      'Create Role' => 'Neue Rolle',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nicht gesetzt',
        'enabled' => 'Aktiv',
        'disabled' => 'Inaktiv',
      ),
      'levelList' => 
      array (
        'all' => 'Alle',
        'team' => 'Team',
        'own' => 'Eigene',
        'no' => 'Nein',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Lesen',
      'edit' => 'Bearbeiten',
      'delete' => 'Löschen',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Protokoll',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplante Aufgabe erstellen',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Eingehende E-Mail überprüfen',
        'Cleanup' => 'Aufräumen',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'mac' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'windows' => 'Hinweis: Erstellen Sie eine Stapeldatei mit den folgenden Kommandos um geplante Aufgaben mit dem Windows Aufgabenplaner durchzuführen:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Ausführungszeit',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Benutzer Cache',
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'companyLogo' => 'Firmenlogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'outboundEmailFromName' => 'Von Name',
      'outboundEmailFromAddress' => 'Von Adresse',
      'outboundEmailIsShared' => 'Kann von allen Benutzern verwendet werden',
      'recordsPerPage' => 'Datensätze pro Seite',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Reiter Liste',
      'quickCreateList' => 'Liste Schnellerstellung',
      'exportDelimiter' => 'Export Trennzeichen',
      'authenticationMethod' => 'Authentication Method',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorisierung',
      'ldapUsername' => 'Benutzername',
      'ldapPassword' => 'Passwort',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Sicherheit',
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
        2 => 'Sonntag',
        3 => 'Montag',
      ),
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Lokale Einstellungen',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguration',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
    ),
    'labels' => 
    array (
      'Create Team' => 'Neues Team',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'Benutzername',
      'title' => 'Funktion',
      'isAdmin' => 'Ist Admin',
      'defaultTeam' => 'Standard Team:',
      'emailAddress' => 'E-Mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rollen',
      'password' => 'Passwort',
      'passwordConfirm' => 'Passwort bestätigen',
      'newPassword' => 'Neues Passwort',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'roles' => 'Rollen',
    ),
    'labels' => 
    array (
      'Create User' => 'Neuer Benutzer',
      'Generate' => 'Erzeugen',
      'Access' => 'Zugang',
      'Preferences' => 'Benutzereinstellungen',
      'Change Password' => 'Passwort ändern',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Das Passwort wird an die E-Mail Adresse des Benutzers gesendet',
      'accountInfoEmailSubject' => 'Kontoinformation',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChanged' => 'Das Passwort wurde geändert',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Rechnungsadresse',
      'shippingAddress' => 'Lieferadresse',
      'description' => 'Beschreibung',
      'sicCode' => 'WKN Nummer',
      'industry' => 'Branche',
      'type' => 'Typ',
      'contactRole' => 'Rolle',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Kunde',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Wiederverkäufer',
      ),
      'industry' => 
      array (
        'Apparel' => 'Bekleidungsindustrie',
        'Banking' => 'Bankwesen',
        'Computer Software' => 'Computer Software',
        'Education' => 'Bildungswesen',
        'Electronics' => 'Elektronik',
        'Finance' => 'Finanzsektor',
        'Insurance' => 'Versicherung',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Neue Firma',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Monat',
      'week' => 'Woche',
      'day' => 'Tag',
      'agendaWeek' => 'Woche',
      'agendaDay' => 'Tag',
    ),
    'labels' => 
    array (
      'Today' => 'Heute',
      'Create' => 'Erstellen',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'direction' => 'Richtung',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ausgehend',
        'Inbound' => 'Eingehend',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Neuer Anruf',
      'Set Held' => 'Auf Gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Firma',
      'contact' => 'Kontakt',
      'priority' => 'Priorität',
      'type' => 'Typ',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'Pending' => 'Schwebend',
        'Closed' => 'Abgeschlossen',
        'Rejected' => 'Abgelehnt',
        'Duplicate' => 'Duplizieren',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
      'type' => 
      array (
        'Question' => 'Frage',
        'Incident' => 'Vorfall',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Neuer Fall',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Closed',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'account' => 'Firma',
      'accounts' => 'Firmen',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Firmentyp',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Rolle',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Neuer Kontakt',
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
      'name' => 'Name',
      'team' => 'Team',
      'status' => 'Status',
      'assignToUser' => 'Mit Benutzer verknüpfen',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachter Ordner',
      'trashFolder' => 'Papierkorb Ordner',
      'ssl' => 'SSL',
      'createCase' => 'Neuer Fall',
      'reply' => 'Antworten',
      'caseDistribution' => 'Fall Verteilung',
      'replyEmailTemplate' => 'Vorlage E-Mail Antwort',
      'replyFromAddress' => 'Von Adresse antworten',
      'replyFromName' => 'Von Name antworten',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direkte Zuordnung',
        'Round-Robin' => 'Umlauf-Verfahren',
        'Least-Busy' => 'geringste Auslastung',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'IMAP' => 'IMAP',
      'Actions' => 'Aktionen',
      'Main' => 'Wichtig',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Umgewandelt zu',
      'Create Lead' => 'Neuer Interessent',
      'Convert' => 'Umwandeln',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Firmenname',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Quelle',
      'opportunityAmount' => 'Verkaufschance Betrag',
      'description' => 'Beschreibung',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'In Process' => 'In Arbeit',
        'Converted' => 'Umgewandelt',
        'Recycled' => 'Wiedereröffnet',
        'Dead' => '\'Gestorben\'',
      ),
      'source' => 
      array (
        'Call' => 'Anruf',
        'Email' => 'E-Mail',
        'Existing Customer' => 'Bestehender Kunde',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Seite',
        'Campaign' => 'Kampagne',
        'Other' => 'Andere',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Neues Meeting',
      'Set Held' => 'Auf Gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
      'Saved as Held' => 'Saved as Held',
      'Saved as Not Held' => 'Saved as Not Held',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Firma',
      'stage' => 'Verkaufsphase',
      'amount' => 'Betrag',
      'probability' => 'Wahrscheinlichkeit (%)',
      'leadSource' => 'Quelle',
      'doNotCall' => 'Nicht anrufen',
      'closeDate' => 'Abschlussdatum',
      'contacts' => 'Kontakte',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualifikation',
        'Needs Analysis' => 'Bedarfserhebung',
        'Value Proposition' => 'Richtangebot',
        'Id. Decision Makers' => 'Entscheider ident.',
        'Perception Analysis' => 'Analyse Sichtweise',
        'Proposal/Price Quote' => 'Preisangebot',
        'Negotiation/Review' => 'Verhandlung/Überarbeitung',
        'Closed Won' => 'Gewonnen',
        'Closed Lost' => 'Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Neue Verkaufschance',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Won',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'accountName' => 'Firmenname',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Create Target',
      'Convert to Lead' => 'Zu Interessent umwandeln',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Fällig am',
      'priority' => 'Priorität',
      'description' => 'Beschreibung',
      'isOverdue' => 'Ist überfällig',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Nicht begonnen',
        'Started' => 'In Bearbeitung',
        'Completed' => 'Abgeschlossen',
        'Canceled' => 'Storniert',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Neue Aufgabe',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'completed' => 'Completed',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
    ),
  ),
);

?>