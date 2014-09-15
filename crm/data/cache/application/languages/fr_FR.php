<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activé',
      'Disabled' => 'Désactivé',
      'System' => 'Système',
      'Users' => 'Utilisateurs',
      'Email' => 'Email',
      'Data' => 'Données',
      'Customization' => 'Personalisation',
      'Available Fields' => 'Champs Disponibles',
      'Layout' => 'Disposition',
      'Add Panel' => 'Ajouter un Panneau',
      'Add Field' => 'Ajouter un Champs',
      'Settings' => 'Paramètres',
      'Scheduled Jobs' => 'Tâches Planifiées',
      'Upgrade' => 'Mettre à Jour',
      'Clear Cache' => 'Vider le Cache',
      'Rebuild' => 'Reconstruire',
      'Teams' => 'Equipes',
      'Roles' => 'Rôles',
      'Outbound Emails' => 'Emails Sortants',
      'Inbound Emails' => 'Emails Entrants',
      'Email Templates' => 'Modèles d\'email',
      'Import' => 'Importer',
      'Layout Manager' => 'Gestionnaire de Dispositions',
      'Field Manager' => 'Gestionnaire de Colonnes',
      'User Interface' => 'Interface Utilisateur',
      'Auth Tokens' => 'Jetons d\'Identification',
      'Authentication' => 'Authentification',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Détail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Filtres de Recherche',
      'massUpdate' => 'Mise à Jour en Masse',
      'relationships' => 'Rapports',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Tableau',
      'foreign' => 'Etranger',
      'duration' => 'Durée',
      'password' => 'Mot de Passe',
      'parsonName' => 'Nom Personnel',
      'autoincrement' => 'Auto incrémenté',
      'bool' => 'Boléen',
      'currency' => 'Monnaie',
      'date' => 'Date',
      'datetime' => 'Heure et Date',
      'email' => 'Email',
      'enum' => 'Enumérateur',
      'enumInt' => 'Enumérateur Entier',
      'enumFloat' => 'Enumérateur Flottant',
      'float' => 'Flottant',
      'int' => 'Entier',
      'link' => 'Lien',
      'linkMultiple' => 'Lien Multiple',
      'linkParent' => 'Lien Parent',
      'multienim' => 'Enumérateur Multiple',
      'phone' => 'Téléphone',
      'text' => 'Texte',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Fichier',
      'image' => 'Image',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Nom',
      'label' => 'Label',
      'required' => 'Requis',
      'default' => 'Standard',
      'maxLength' => 'Taille Maximum',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Lien',
      'field' => 'Champs',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Traduction',
      'previewSize' => 'Taille de l\'Aperçu',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Your EspoCRM will be upgraded to version <strong>{version}</strong>. This can take some time.',
      'upgradeDone' => 'Your EspoCRM has been upgraded to version <strong>{version}</strong>. Refresh your browser window.',
      'upgradeBackup' => 'We recommend you to make backup of your EspoCRM files and data before upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Le séparateur de milliers ne peut être égal au marqueur décimal',
      'userHasNoEmailAddress' => 'L\'utilisateur n\'a pas d\'adresse email.',
      'selectEntityType' => 'Selectionner le type d\'entité dans le menu gauche',
      'selectUpgradePackage' => 'Sélectionnez le package de mise à niveau',
      'selectLayout' => '',
    ),
    'descriptions' => 
    array (
      'settings' => 'Paramètres système de l\'application',
      'scheduledJob' => 'Tâches ',
      'upgrade' => 'Mettre à niveau EspoCRM.',
      'clearCache' => 'Vider le Cache d\'arrière-plan.',
      'rebuild' => 'Reconstruire l\'arrière plan et vider le cache.',
      'users' => 'Gestion des utilisateurs.',
      'teams' => 'Gestion des équipes.',
      'roles' => 'Gestion des rôles.',
      'outboundEmails' => 'Paramètres SMTP des emails sortants.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailTemplates' => 'Modèles pour les emails sortants.',
      'import' => 'Importer des données depuis un fichier CSV.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Créer de nouveaux champs ou personnaliser ceux existants.',
      'userInterface' => 'Configurer l\'interface utilisateur.',
      'authTokens' => 'Sessions authorisées Activées. Adresse IP et dernière date d\'accès.',
      'authentication' => 'Paramètres d\'authentification.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Très petit',
        'small' => 'Petit',
        'medium' => 'Moyen',
        'large' => 'Grand',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Utilisateur',
      'ipAddress' => 'Adresse IP',
      'lastAccess' => 'Date du dernier accès',
      'createdAt' => 'Date de connexion',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Sujet',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateSent' => 'Date d\'envoi',
      'from' => 'De',
      'to' => 'Vers',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'En HTML',
      'body' => 'Corps',
      'subject' => 'Sujet',
      'attachments' => 'Fichiers Joints',
      'selectTemplate' => 'Selectionner le Modèle',
      'fromEmailAddress' => 'Adresse de l\'Emetteur',
      'toEmailAddresses' => 'Adresse du Destinataire',
      'emailAddress' => 'Adresse Email',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Brouillon',
      'Sending' => 'En Envoi',
      'Sent' => 'Envoyé',
      'Archived' => 'Archivé',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiver les Emails',
      'Compose' => 'Nouveau Message',
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
      'Primary' => 'Premier',
      'Opted Out' => 'Opted Out',
      'Invalid' => 'Invalide',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'isHtml' => 'En HTML',
      'body' => 'Corps',
      'subject' => 'Sujet',
      'attachments' => 'Fichiers Joints',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Créer un modèle d\'email',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Utilisateur',
      'Team' => 'Equipe',
      'Role' => 'Rôle',
      'EmailTemplate' => 'Modèle d\'Email',
      'OutboundEmail' => 'Email Sortant',
      'ScheduledJob' => 'Tâche Planifiée',
      'Account' => 'Compte',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Cible',
      'Opportunity' => 'Challenge',
      'Meeting' => 'Rendez-vous',
      'Calendar' => 'Calendrier',
      'Call' => 'Appel',
      'Task' => 'Tâche',
      'Case' => 'Ticket',
      'InboundEmail' => 'Email Entrant',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Courriers',
      'User' => 'Utilisateurs',
      'Team' => 'Equipes',
      'Role' => 'Rôles',
      'EmailTemplate' => 'Modèles d\'email',
      'OutboundEmail' => 'Emails Sortants',
      'ScheduledJob' => 'Tâches Planifiées',
      'Account' => 'Comptes',
      'Contact' => 'Contacts',
      'Lead' => 'Leads',
      'Target' => 'Cibles',
      'Opportunity' => 'Opportunités',
      'Meeting' => 'Rendez-vous',
      'Calendar' => 'Calendrier',
      'Call' => 'Appels',
      'Task' => 'Tâches',
      'Case' => 'Tickets',
      'InboundEmail' => 'Emails Entrants',
    ),
    'labels' => 
    array (
      'Misc' => 'Divers',
      'Merge' => 'Fusionner',
      'None' => 'Aucun',
      'by' => 'par',
      'Saved' => 'Sauvegardé',
      'Error' => 'Erreur',
      'Select' => 'Selectionner',
      'Not valid' => 'Invalide',
      'Please wait...' => 'Veuillez patienter...',
      'Please wait' => 'Veuillez patienter',
      'Loading...' => 'Chargement...',
      'Uploading...' => 'Téléchargement ...',
      'Sending...' => 'Envoi en cours ...',
      'Removed' => 'Supprimé',
      'Posted' => 'Posté',
      'Linked' => 'Associé',
      'Unlinked' => 'Dissocié',
      'Access denied' => 'Accès refusé',
      'Access' => 'Accès',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Enregistrement éffacé',
      'Wrong username/password' => 'Nom d\'utilisateur/mot de passe erroné',
      'Post cannot be empty' => 'Le poste ne peut être vide',
      'Removing...' => 'Effacement...',
      'Unlinking...' => 'Dissociation...',
      'Posting...' => 'Envoi...',
      'Username can not be empty!' => 'Le nom d\'utilisateur doit être renseigné !',
      'Cache is not enabled' => 'Le cache n\'est pas activé',
      'Cache has been cleared' => 'Le Cache a été vidé',
      'Rebuild has been done' => 'Refonte terminée',
      'Saving...' => 'Enregistrement...',
      'Modified' => 'Modifié',
      'Created' => 'Créé',
      'Create' => 'Créer',
      'create' => 'créer',
      'Overview' => 'vue d\'ensemble',
      'Details' => 'Informations',
      'Add Filter' => 'Ajouter un Filtre',
      'Add Dashlet' => 'Ajouter un Dashlet',
      'Add' => 'Ajouter',
      'Reset' => 'Remise à zéro',
      'Menu' => 'Menu',
      'More' => 'Plus',
      'Search' => 'Rechercher',
      'Only My' => 'Seulement Moi',
      'Open' => 'Ouvrir',
      'Admin' => 'Admin',
      'About' => 'A propos',
      'Refresh' => 'Actualiser',
      'Remove' => 'Supprimer',
      'Options' => 'Options',
      'Username' => 'Nom d\'utilisateur',
      'Password' => 'Mot de Passe',
      'Login' => 'Connexion',
      'Log Out' => 'Déconnexion',
      'Preferences' => 'Préférences',
      'State' => 'Département',
      'Street' => 'Rue',
      'Country' => 'Pays',
      'City' => 'Ville',
      'PostalCode' => 'Code Postal',
      'Followed' => 'Suivi',
      'Follow' => 'Suivre',
      'Clear Local Cache' => 'Vider le Cache Local',
      'Actions' => 'Actions',
      'Delete' => 'Effacer',
      'Update' => 'Mettre à jour',
      'Save' => 'Enregistrer',
      'Edit' => 'Edition',
      'Cancel' => 'Annuler',
      'Unlink' => 'Dissocier',
      'Mass Update' => 'Mise à Jour en Masse',
      'Export' => 'Exporter',
      'No Data' => 'Données vides',
      'All' => 'Tout',
      'Active' => 'Activer',
      'Inactive' => 'Désactiver',
      'Write your comment here' => 'Ecrire ici votre commentaire',
      'Post' => 'Poster',
      'Stream' => 'Flux',
      'Show more' => 'En savoir plus',
      'Dashlet Options' => 'Options du Dashlet',
      'Full Form' => 'Formulaire Complet',
      'Insert' => 'Insertion',
      'Person' => 'Personne',
      'First Name' => 'Prénom',
      'Last Name' => 'Nom de Famille',
      'Original' => 'Original',
      'You' => 'Vous',
      'you' => 'vous',
      'change' => 'Modifier',
      'Primary' => 'Premier',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Créer une boîte email',
      'Activities' => 'Activités',
      'History' => 'Historique',
      'Attendees' => 'Participants',
      'Schedule Meeting' => 'Rendez-vous Planifiés',
      'Schedule Call' => 'Appels Planifiés',
      'Compose Email' => 'Créer un Email',
      'Log Meeting' => 'Journal des Rendez-vous',
      'Log Call' => 'Journal d\'appels',
      'Archive Email' => 'Archiver les Emails',
      'Create Task' => 'Créer une tâche',
      'Tasks' => 'Tâches',
    ),
    'messages' => 
    array (
      'notModified' => 'Vous n\'avez pas modifié l\'enregistrement',
      'duplicate' => 'La création de l\'enregistrement ressemble à un doublon',
      'fieldIsRequired' => '{field} est requise',
      'fieldShouldBeEmail' => '{field} doit être une adresse email valide',
      'fieldShouldBeFloat' => '{field} doit être un flottant valide',
      'fieldShouldBeInt' => '{field} doit être un entier valide',
      'fieldShouldBeDate' => '{field} doit être une date valide',
      'fieldShouldBeDatetime' => '{field} doit être une date/heure valide',
      'fieldShouldAfter' => '{field} doit se situer après {otherField}',
      'fieldShouldBefore' => '{field} doit se situer avant {otherField}',
      'fieldShouldBeBetween' => '{field} doit se situer entre {min} et {max}',
      'fieldShouldBeLess' => '{field} doit être inférieur à  {value}',
      'fieldShouldBeGreater' => '{field} doit être supérieur à  {value}',
      'fieldBadPasswordConfirm' => '{field} confirmation inappropriée',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Seulement Moi',
      'open' => 'Ouvrir',
      'active' => 'Activer',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'firstName' => 'Prénom',
      'lastName' => 'Nom de Famille',
      'salutationName' => 'Salutation',
      'assignedUser' => 'Utilisateur Assigné',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Nom d\'Utilisateur Assigné',
      'teams' => 'Equipes',
      'createdAt' => 'Créé le',
      'modifiedAt' => 'Modifié le',
      'createdBy' => 'Créé par',
      'modifiedBy' => 'Modifié par',
      'title' => 'Titre',
      'dateFrom' => 'Date de Reception',
      'dateTo' => 'Date d\'Envoi',
      'autorefreshInterval' => 'Intervalle d\'Auto-actualisation',
      'displayRecords' => 'Afficher les Enregistrements',
      'billingAddressCity' => 'Ville',
      'billingAddressCountry' => 'Pays',
      'billingAddressPostalCode' => 'Code Postal',
      'billingAddressState' => 'Département',
      'billingAddressStreet' => 'Rue',
      'addressCity' => 'Ville',
      'addressStreet' => 'Rue',
      'addressCountry' => 'Pays',
      'addressState' => 'Département',
      'addressPostalCode' => 'Code Postal',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Equipes',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunités',
      'leads' => 'Leads',
      'meetings' => 'Rendez-vous',
      'calls' => 'Appels',
      'tasks' => 'Tâches',
      'emails' => 'Courriers',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Flux',
      'Leads' => 'My Leads',
      'Opportunities' => 'Mes Challenges',
      'Tasks' => 'Mes Tâches',
      'Cases' => 'Mes Tickets',
      'Calendar' => 'Calendrier',
      'OpportunitiesByStage' => '*Challenges par étages',
      'OpportunitiesByLeadSource' => 'Challenges par Lead Source',
      'SalesByMonth' => 'Ventes par Mois',
      'SalesPipeline' => 'Tuyaux des ventes',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} a créé {entityType} {entity}',
      'createAssigned' => '{user} a créé {entityType} {entity} assigné à {assignee}',
      'assign' => '{user} a assigné {entityType} {entity} à {assignee}',
      'post' => '{user} a posté sur {entityType} {entity}',
      'attach' => '{user} attaché à {entityType} {entity}',
      'status' => '{user} a mis à jour {field} sur {entityType} {entity}',
      'update' => '{user} a mis à jour {entityType} {entity}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'emailReceived' => '{entity} a été reçu pour {entityType} {entity}',
      'createThis' => '{user} a créé {entityType}',
      'createAssignedThis' => '{user} a créé {entityType} assigné à {assignee}',
      'assignThis' => '{user} a assigné {entityType} à {assignee}',
      'postThis' => '{user} a posté',
      'attachThis' => '{user} a attaché',
      'statusThis' => '{user} a mis à jour {field}',
      'updateThis' => '{user} a mis à jour {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'emailReceivedThis' => '{entity} a été reçu',
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
        'Mrs.' => 'Mme',
        'Dr.' => 'Dr.',
        'Drs.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaner',
        'az_AZ' => 'Azerbaïdjanais',
        'be_BY' => 'Biélorusse',
        'bg_BG' => 'Bulgare',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnien',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Tchèque',
        'cy_GB' => 'Gallois',
        'da_DK' => 'Danois',
        'de_DE' => 'Allemand',
        'el_GR' => 'Grec',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonien',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Farsi',
        'fi_FI' => 'Finlandais',
        'fo_FO' => 'féroïen',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irlandais',
        'gl_ES' => 'Galicien',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hébreu',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croate',
        'hu_HU' => 'Hongrois',
        'hy_AM' => 'Arménien',
        'id_ID' => 'Indonésien',
        'is_IS' => 'Islandais',
        'it_IT' => 'Italien',
        'ja_JP' => 'Japonais',
        'ka_GE' => 'Georgien',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Coréen',
        'ku_TR' => 'Kurde',
        'lt_LT' => 'Lithuanien',
        'lv_LV' => 'Lettonien',
        'mk_MK' => 'Macedonien',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malais',
        'nb_NO' => 'Norvegien Bokmål',
        'nn_NO' => 'Norvegien  Nynorsk',
        'ne_NP' => 'Népalais',
        'nl_NL' => 'Néerlandais',
        'pa_IN' => 'Pendjabi',
        'pl_PL' => 'Polonais',
        'ps_AF' => 'Pachtoune',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Roumain',
        'ru_RU' => 'Russe',
        'sk_SK' => 'Slovaque',
        'sl_SI' => 'Slovène',
        'sq_AL' => 'Albanais',
        'sr_RS' => 'Serbe',
        'sv_SE' => 'Suèdois',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamoul',
        'te_IN' => 'Télougou',
        'th_TH' => 'Thailandais',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turc',
        'uk_UA' => 'Ucrainien',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamien',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'En Marche',
        'notOn' => 'Arrêté',
        'after' => 'Après',
        'before' => 'Avant',
        'between' => 'Entre',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Egual',
        'notEquals' => 'Différent',
        'greaterThan' => 'Supérieur à',
        'lessThan' => 'Inférieur à',
        'greaterThanOrEquals' => 'Supérieur ou Egual à',
        'lessThanOrEquals' => 'Inférieur ou Egual à',
        'between' => 'Entre',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
        11 => 'Aucun',
        12 => '30 secondes',
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
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Gras',
          'italic' => 'Italique',
          'underline' => 'Souligné',
          'strike' => 'Touche',
          'clear' => 'Retirer le Style de Police',
          'height' => 'Hauteur de Ligne',
          'name' => 'Police de Caractère',
          'size' => 'Taille de Police',
        ),
        'image' => 
        array (
          'image' => 'Image',
          'insert' => 'Insérer une Image',
          'resizeFull' => 'Redimensioner à 100%',
          'resizeHalf' => 'Redimensioner à 50%',
          'resizeQuarter' => 'Redimensioner à 25%',
          'floatLeft' => 'Flottant Gauche',
          'floatRight' => 'Flottant Droit',
          'floatNone' => 'Aucun Flottant',
          'dragImageHere' => 'Glisser une Image ici',
          'selectFromFiles' => 'Parcourir',
          'url' => 'Url de l\'Image',
          'remove' => 'Supprimer l\'Image',
        ),
        'link' => 
        array (
          'link' => 'Lien',
          'insert' => 'Insérer un Lien',
          'unlink' => 'Dissocier',
          'edit' => 'Edition',
          'textToDisplay' => 'Texte à Afficher',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Ouvrir dans une Nouvelle Fenêtre',
        ),
        'video' => 
        array (
          'video' => 'Vidéo',
          'videoLink' => 'Lien Vidéo',
          'insert' => 'Insérer une Vidéo',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tableau',
        ),
        'hr' => 
        array (
          'insert' => 'Insérer une Régle Horizontale',
        ),
        'style' => 
        array (
          'style' => 'Style',
          'normal' => 'Normal',
          'blockquote' => 'Guillemet',
          'pre' => 'Code',
          'h1' => 'Entête 1',
          'h2' => 'Entête 2',
          'h3' => 'Entête 3',
          'h4' => 'Entête 4',
          'h5' => 'Entête 5',
          'h6' => 'Entête 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Liste non Ordonnée',
          'ordered' => 'Liste Ordonnée',
        ),
        'options' => 
        array (
          'help' => 'Aide',
          'fullscreen' => 'Plein Ecran',
          'codeview' => 'Visualiser le Code',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraphe',
          'outdent' => 'Désindenter',
          'indent' => 'Indenter',
          'left' => 'Aligné à Gauche',
          'center' => 'Centré',
          'right' => 'Aligné à Droite',
          'justify' => 'Justifié',
        ),
        'color' => 
        array (
          'recent' => 'Couleur Récente',
          'more' => 'Plus de Couleur',
          'background' => 'Couleur de Fond',
          'foreground' => 'Couleur de Police',
          'transparent' => 'Transparent',
          'setTransparent' => 'Réglage Transparent',
          'reset' => 'Remise à zéro',
          'resetToDefault' => 'Réglages par défaut',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Raccourcis Clavier',
          'close' => 'Fermer',
          'textFormatting' => 'Mise en forme du texte',
          'action' => 'Action',
          'paragraphFormatting' => 'Mise en forme du Paragraphe',
          'documentStyle' => 'Style du Document',
        ),
        'history' => 
        array (
          'undo' => 'Annuler',
          'redo' => 'Restaurer',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Poster',
      'attachments' => 'Fichiers Joints',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format de Date',
      'timeFormat' => 'Format de l\'Heure',
      'timeZone' => 'Fuseau Horaire',
      'weekStart' => 'Premier Jour de la Semaine',
      'thousandSeparator' => 'Séparateur de Milliers',
      'decimalMark' => 'Marqueur Décimal',
      'defaultCurrency' => 'Monnaie Courante',
      'currencyList' => 'Liste des Monnaies',
      'language' => 'Langue',
      'smtpServer' => 'Serveur',
      'smtpPort' => 'Porte',
      'smtpAuth' => 'Authorization',
      'smtpSecurity' => 'Sécurité',
      'smtpUsername' => 'Nom d\'utilisateur',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mot de Passe',
      'smtpEmailAddress' => 'Adresse Email',
      'exportDelimiter' => 'Délimiteur de champs (Export)',
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
        2 => 'Dimanche',
        3 => 'Lundi',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'roles' => 'Rôles',
    ),
    'links' => 
    array (
      'users' => 'Utilisateurs',
      'teams' => 'Equipes',
    ),
    'labels' => 
    array (
      'Access' => 'Accès',
      'Create Role' => 'Créer un rôle',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'Indéfini',
        'enabled' => 'activé',
        'disabled' => 'désactivé',
      ),
      'levelList' => 
      array (
        'all' => 'tous',
        'team' => 'équipe',
        'own' => 'Appartient',
        'no' => 'non',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Lire',
      'edit' => 'Edition',
      'delete' => 'Effacer',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'status' => 'Statut',
      'job' => 'Tâche',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Journal',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Créer une tâche planifiée',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Vérifier les Emails Entrants',
        'Cleanup' => 'Nettoyer',
      ),
      'cronSetup' => 
      array (
        'linux' => '',
        'mac' => '',
        'windows' => 'Note: Create a batch file with the following commands to run Espo Scheduled Jobs using Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Activer',
        'Inactive' => 'Désactiver',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Statut',
      'executionTime' => 'Temps d\'Exécution',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Utiliser le Cache',
      'dateFormat' => 'Format de Date',
      'timeFormat' => 'Format de l\'Heure',
      'timeZone' => 'Fuseau Horaire',
      'weekStart' => 'Premier Jour de la Semaine',
      'thousandSeparator' => 'Séparateur de Milliers',
      'decimalMark' => 'Marqueur Décimal',
      'defaultCurrency' => 'Monnaie Courante',
      'currencyList' => 'Liste des Monnaies',
      'language' => 'Langue',
      'companyLogo' => 'Logo de la Société',
      'smtpServer' => 'Serveur',
      'smtpPort' => 'Porte',
      'smtpAuth' => 'Authorization',
      'smtpSecurity' => 'Sécurité',
      'smtpUsername' => 'Nom d\'utilisateur',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mot de Passe',
      'outboundEmailFromName' => 'Nom de l\'Expéditeur',
      'outboundEmailFromAddress' => 'Adresse de l\'Emetteur',
      'outboundEmailIsShared' => 'Est partagé',
      'recordsPerPage' => 'Enregistrements par page',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Création Rapide de Liste',
      'exportDelimiter' => 'Délimiteur de champs (Export)',
      'authenticationMethod' => 'Methode d\'Authentification',
      'ldapHost' => 'Hôte',
      'ldapPort' => 'Porte',
      'ldapAuth' => 'Authorization',
      'ldapUsername' => 'Nom d\'utilisateur',
      'ldapPassword' => 'Mot de Passe',
      'ldapBindRequiresDn' => 'Bind Requert Nom de Domaine',
      'ldapBaseDn' => 'Base Nom de Domaine',
      'ldapAccountCanonicalForm' => 'Formulaire du Compte Canonique',
      'ldapAccountDomainName' => 'Compte du Nom de Domaine',
      'ldapTryUsernameSplit' => 'Essayer le Nom d\'utilisateur séparé',
      'ldapCreateEspoUser' => 'Créer un Utilisateur dans EspoCRM',
      'ldapSecurity' => 'Sécurité',
      'ldapUserLoginFilter' => 'Filtre de Connexion Utilisateur',
      'ldapAccountDomainNameShort' => 'Compte de Nom de Domaine Court',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Disable Export (only admin is allowed)',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Dimanche',
        3 => 'Lundi',
      ),
    ),
    'labels' => 
    array (
      'System' => 'Système',
      'Locale' => 'Local',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuration',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'roles' => 'Rôles',
    ),
    'links' => 
    array (
      'users' => 'Utilisateurs',
    ),
    'labels' => 
    array (
      'Create Team' => 'Créer une Equipe',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'userName' => 'Nom d\'utilisateur',
      'title' => 'Titre',
      'isAdmin' => 'Est Admin',
      'defaultTeam' => 'Equipe Standard',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Téléphone',
      'roles' => 'Rôles',
      'password' => 'Mot de Passe',
      'passwordConfirm' => 'Confirmer le Mot de Passe',
      'newPassword' => 'Nouveau Mot de Passe',
    ),
    'links' => 
    array (
      'teams' => 'Equipes',
      'roles' => 'Rôles',
    ),
    'labels' => 
    array (
      'Create User' => 'Créer un Utilisateur',
      'Generate' => 'Générer',
      'Access' => 'Accès',
      'Preferences' => 'Préférences',
      'Change Password' => 'Changer le Mot de Passe',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Le Mot de Passe sera envoyé à l\'adresse email de l\'utilisateur',
      'accountInfoEmailSubject' => 'Information du compte',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChanged' => 'Mot de passe changé',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'website' => 'Site Web',
      'phoneNumber' => 'Téléphone',
      'billingAddress' => 'Adresse de Facturation',
      'shippingAddress' => 'Adresse de Livraison',
      'description' => 'Description',
      'sicCode' => 'Code SIC',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Rôle',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunités',
      'cases' => 'Tickets',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Clients',
        'Investor' => 'Investisseur',
        'Partner' => 'Partenaire',
        'Reseller' => 'Revendeur',
      ),
      'industry' => 
      array (
        'Apparel' => 'Vêtements',
        'Banking' => 'Banque',
        'Computer Software' => 'Logiciel Informatique',
        'Education' => 'Education',
        'Electronics' => 'Electronique',
        'Finance' => 'Finance',
        'Insurance' => 'Assurance',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Nouveau Compte',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mois',
      'week' => 'Semaine',
      'day' => 'Jour',
      'agendaWeek' => 'Semaine',
      'agendaDay' => 'Jour',
    ),
    'labels' => 
    array (
      'Today' => 'Aujourd\'hui',
      'Create' => 'Créer',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de Début',
      'dateEnd' => 'Date de Fin',
      'direction' => 'Direction',
      'duration' => 'Durée',
      'description' => 'Description',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plannifié',
        'Held' => 'Fait',
        'Not Held' => 'Pas Fait',
      ),
      'direction' => 
      array (
        'Outbound' => 'Sortie',
        'Inbound' => 'Entrée',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Générer l\'appel',
      'Set Held' => 'Marquer Fait',
      'Set Not Held' => 'Marquer Pas Fait',
      'Send Invitations' => 'Envoi d\'Invitations',
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
      'name' => 'Nom',
      'number' => 'Numéro',
      'status' => 'Statut',
      'account' => 'Compte',
      'contact' => 'Contact',
      'priority' => 'Priorité',
      'type' => 'Type',
      'description' => 'Description',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'Pending' => 'En attente',
        'Closed' => 'Fermé',
        'Rejected' => 'Rejeté',
        'Duplicate' => 'Doublon',
      ),
      'priority' => 
      array (
        'Low' => 'Bas',
        'Normal' => 'Normal',
        'High' => 'Haut',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Question',
        'Incident' => 'Incident',
        'Problem' => 'Problème',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Créer un Ticket',
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
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre',
      'account' => 'Compte',
      'accounts' => 'Comptes',
      'phoneNumber' => 'Téléphone',
      'accountType' => 'Type de Compte',
      'doNotCall' => 'Ne Pas Appeler',
      'address' => 'Adresse',
      'opportunityRole' => 'Rôle de Challenge',
      'accountRole' => 'Rôle',
      'description' => 'Description',
    ),
    'links' => 
    array (
      'opportunities' => 'Opportunités',
      'cases' => 'Tickets',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Créer un contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Aucun--',
        'Decision Maker' => 'Décisionnaire',
        'Evaluator' => '*Evaluator',
        'Influencer' => 'Prescripteur',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'team' => 'Equipe',
      'status' => 'Statut',
      'assignToUser' => 'Assigné à l\'Utilisateur',
      'host' => 'Hôte',
      'username' => 'Nom d\'utilisateur',
      'password' => 'Mot de Passe',
      'port' => 'Porte',
      'monitoredFolders' => 'Dossiers Surveillés',
      'trashFolder' => 'Corbeille',
      'ssl' => 'SSL',
      'createCase' => 'Créer un Ticket',
      'reply' => 'Répondre',
      'caseDistribution' => 'Distribution de tickets',
      'replyEmailTemplate' => 'Modèle de Réponse par Email',
      'replyFromAddress' => 'Répondre Depuis l\'Adresse',
      'replyFromName' => 'Répondre Depuis le Nom',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activer',
        'Inactive' => 'Désactiver',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Assignation Directe',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Créer une boîte email',
      'IMAP' => 'IMAP',
      'Actions' => 'Actions',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Impossible de se connecter au serveur IMAP',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertir Vers',
      'Create Lead' => 'Créer Lead',
      'Convert' => 'Convertir',
    ),
    'fields' => 
    array (
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre',
      'website' => 'Site Web',
      'phoneNumber' => 'Téléphone',
      'accountName' => 'Nom du Compte',
      'doNotCall' => 'Ne Pas Appeler',
      'address' => 'Adresse',
      'status' => 'Statut',
      'source' => 'Source',
      'opportunityAmount' => 'Montant du Challenge',
      'description' => 'Description',
      'createdAccount' => 'Compte',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Challenge',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nouveau',
        'Assigned' => 'Assigné',
        'In Process' => 'En Cours de Traitement',
        'Converted' => 'Converti',
        'Recycled' => 'Supprimé',
        'Dead' => 'Mort',
      ),
      'source' => 
      array (
        'Call' => 'Appel',
        'Email' => 'Email',
        'Existing Customer' => 'Client Existant',
        'Partner' => 'Partenaire',
        'Public Relations' => 'Relations publiques',
        'Web Site' => 'Site Web',
        'Campaign' => 'Campagne',
        'Other' => 'Autre',
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
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de Début',
      'dateEnd' => 'Date de Fin',
      'duration' => 'Durée',
      'description' => 'Description',
      'users' => 'Utilisateurs',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Plannifié',
        'Held' => 'Fait',
        'Not Held' => 'Pas Fait',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Créer un Rendez-vous',
      'Set Held' => 'Marquer Fait',
      'Set Not Held' => 'Marquer Pas Fait',
      'Send Invitations' => 'Envoi d\'Invitations',
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
      'name' => 'Nom',
      'account' => 'Compte',
      'stage' => 'Etage',
      'amount' => 'Montant',
      'probability' => 'Probabilité, %',
      'leadSource' => 'Lead Source',
      'doNotCall' => 'Ne Pas Appeler',
      'closeDate' => 'Date de fermeture',
      'contacts' => 'Contacts',
      'description' => 'Description',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'En Prospection',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Montant de la Proposition',
        'Id. Decision Makers' => 'Id. Décisionnaire',
        'Perception Analysis' => 'Analyse de la perception',
        'Proposal/Price Quote' => 'Proposition/Devis',
        'Negotiation/Review' => 'Négociation/avis',
        'Closed Won' => 'Closed Won',
        'Closed Lost' => 'Closed Lost',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Créer un Challenge',
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
      'name' => 'Nom',
      'emailAddress' => 'Email',
      'title' => 'Titre',
      'website' => 'Site Web',
      'accountName' => 'Nom du Compte',
      'phoneNumber' => 'Téléphone',
      'doNotCall' => 'Ne Pas Appeler',
      'address' => 'Adresse',
      'description' => 'Description',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Créer une Cible',
      'Convert to Lead' => 'Convertir en Lead',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nom',
      'parent' => 'Parent',
      'status' => 'Statut',
      'dateStart' => 'Date de Début',
      'dateEnd' => 'Date d\'échéance',
      'priority' => 'Priorité',
      'description' => 'Description',
      'isOverdue' => 'Est en Retard',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Pas Commencé',
        'Started' => 'Commencé',
        'Completed' => 'Terminé',
        'Canceled' => 'Annulé',
      ),
      'priority' => 
      array (
        'Low' => 'Bas',
        'Normal' => 'Normal',
        'High' => 'Haut',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Créer une tâche',
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