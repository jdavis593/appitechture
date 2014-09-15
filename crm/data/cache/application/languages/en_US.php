<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Enabled',
      'Disabled' => 'Disabled',
      'System' => 'System',
      'Users' => 'Users',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Customization',
      'Available Fields' => 'Available Fields',
      'Layout' => 'Layout',
      'Add Panel' => 'Add Panel',
      'Add Field' => 'Add Field',
      'Settings' => 'Settings',
      'Scheduled Jobs' => 'Scheduled Jobs',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Clear Cache',
      'Rebuild' => 'Rebuild',
      'Teams' => 'Teams',
      'Roles' => 'Roles',
      'Outbound Emails' => 'Outbound Emails',
      'Inbound Emails' => 'Inbound Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Import',
      'Layout Manager' => 'Layout Manager',
      'Field Manager' => 'Field Manager',
      'User Interface' => 'User Interface',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
    ),
    'layouts' => 
    array (
      'list' => 'List',
      'detail' => 'Detail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Search Filters',
      'massUpdate' => 'Mass Update',
      'relationships' => 'Relationships',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Address',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Password',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bool',
      'currency' => 'Currency',
      'date' => 'Date',
      'datetime' => 'DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Phone',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Image',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Name',
      'label' => 'Label',
      'required' => 'Required',
      'default' => 'Default',
      'maxLength' => 'Max Length',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Field',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Translation',
      'previewSize' => 'Preview Size',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Your EspoCRM will be upgraded to version <strong>{version}</strong>. This can take some time.',
      'upgradeDone' => 'Your EspoCRM has been upgraded to version <strong>{version}</strong>. Refresh your browser window.',
      'upgradeBackup' => 'We recommend you to make backup of your EspoCRM files and data before upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Thousand separator can not be same as decimal mark',
      'userHasNoEmailAddress' => 'User has not email address.',
      'selectEntityType' => 'Select entity type in the left menu.',
      'selectUpgradePackage' => 'Select uprade package',
      'selectLayout' => 'Select needed layout in the left menu and edit it.',
    ),
    'descriptions' => 
    array (
      'settings' => 'System settings of application.',
      'scheduledJob' => 'Jobs which are executed by cron.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Clear all backend cache.',
      'rebuild' => 'Rebuild backend and clear cache.',
      'users' => 'Users management.',
      'teams' => 'Teams management.',
      'roles' => 'Roles management.',
      'outboundEmails' => 'SMTP settings for outgoing emails.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailTemplates' => 'Templates for outbound emails.',
      'import' => 'Import data from CSV file.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Create new fields or customize existing ones.',
      'userInterface' => 'Configure UI.',
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
      'user' => 'User',
      'ipAddress' => 'IP Address',
      'lastAccess' => 'Last Access Date',
      'createdAt' => 'Login Date',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Subject',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateSent' => 'Date Sent',
      'from' => 'From',
      'to' => 'To',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Is Html',
      'body' => 'Body',
      'subject' => 'Subject',
      'attachments' => 'Attachments',
      'selectTemplate' => 'Select Template',
      'fromEmailAddress' => 'From Address',
      'toEmailAddresses' => 'To Address',
      'emailAddress' => 'Email Address',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Draft',
      'Sending' => 'Sending',
      'Sent' => 'Sent',
      'Archived' => 'Archived',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archive Email',
      'Compose' => 'Compose',
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
      'Primary' => 'Primary',
      'Opted Out' => 'Opted Out',
      'Invalid' => 'Invalid',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Is Html',
      'body' => 'Body',
      'subject' => 'Subject',
      'attachments' => 'Attachments',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Create Email Template',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'User',
      'Team' => 'Team',
      'Role' => 'Role',
      'EmailTemplate' => 'Email Template',
      'OutboundEmail' => 'Outbound Email',
      'ScheduledJob' => 'Scheduled Job',
      'Account' => 'Account',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Opportunity',
      'Meeting' => 'Meeting',
      'Calendar' => 'Calendar',
      'Call' => 'Call',
      'Task' => 'Task',
      'Case' => 'Case',
      'InboundEmail' => 'Inbound Email',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emails',
      'User' => 'Users',
      'Team' => 'Teams',
      'Role' => 'Roles',
      'EmailTemplate' => 'Email Templates',
      'OutboundEmail' => 'Outbound Emails',
      'ScheduledJob' => 'Scheduled Jobs',
      'Account' => 'Accounts',
      'Contact' => 'Contacts',
      'Lead' => 'Leads',
      'Target' => 'Targets',
      'Opportunity' => 'Opportunities',
      'Meeting' => 'Meetings',
      'Calendar' => 'Calendar',
      'Call' => 'Calls',
      'Task' => 'Tasks',
      'Case' => 'Cases',
      'InboundEmail' => 'Inbound Emails',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Merge',
      'None' => 'None',
      'by' => 'by',
      'Saved' => 'Saved',
      'Error' => 'Error',
      'Select' => 'Select',
      'Not valid' => 'Not valid',
      'Please wait...' => 'Please wait...',
      'Please wait' => 'Please wait',
      'Loading...' => 'Loading...',
      'Uploading...' => 'Uploading...',
      'Sending...' => 'Sending...',
      'Removed' => 'Removed',
      'Posted' => 'Posted',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Access denied' => 'Access denied',
      'Access' => 'Access',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Record has been removed',
      'Wrong username/password' => 'Wrong username/password',
      'Post cannot be empty' => 'Post cannot be empty',
      'Removing...' => 'Removing...',
      'Unlinking...' => 'Unlinking...',
      'Posting...' => 'Posting...',
      'Username can not be empty!' => 'Username can not be empty!',
      'Cache is not enabled' => 'Cache is not enabled',
      'Cache has been cleared' => 'Cache has been cleared',
      'Rebuild has been done' => 'Rebuild has been done',
      'Saving...' => 'Saving...',
      'Modified' => 'Modified',
      'Created' => 'Created',
      'Create' => 'Create',
      'create' => 'create',
      'Overview' => 'Overview',
      'Details' => 'Details',
      'Add Filter' => 'Add Filter',
      'Add Dashlet' => 'Add Dashlet',
      'Add' => 'Add',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'More',
      'Search' => 'Search',
      'Only My' => 'Only My',
      'Open' => 'Open',
      'Admin' => 'Admin',
      'About' => 'About',
      'Refresh' => 'Refresh',
      'Remove' => 'Remove',
      'Options' => 'Options',
      'Username' => 'Username',
      'Password' => 'Password',
      'Login' => 'Login',
      'Log Out' => 'Log Out',
      'Preferences' => 'Preferences',
      'State' => 'State',
      'Street' => 'Street',
      'Country' => 'Country',
      'City' => 'City',
      'PostalCode' => 'Postal Code',
      'Followed' => 'Followed',
      'Follow' => 'Follow',
      'Clear Local Cache' => 'Clear Local Cache',
      'Actions' => 'Actions',
      'Delete' => 'Delete',
      'Update' => 'Update',
      'Save' => 'Save',
      'Edit' => 'Edit',
      'Cancel' => 'Cancel',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Mass Update',
      'Export' => 'Export',
      'No Data' => 'No Data',
      'All' => 'All',
      'Active' => 'Active',
      'Inactive' => 'Inactive',
      'Write your comment here' => 'Write your comment here',
      'Post' => 'Post',
      'Stream' => 'Stream',
      'Show more' => 'Show more',
      'Dashlet Options' => 'Dashlet Options',
      'Full Form' => 'Full Form',
      'Insert' => 'Insert',
      'Person' => 'Person',
      'First Name' => 'First Name',
      'Last Name' => 'Last Name',
      'Original' => 'Original',
      'You' => 'You',
      'you' => 'you',
      'change' => 'change',
      'Primary' => 'Primary',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Create Inbound Email',
      'Activities' => 'Activities',
      'History' => 'History',
      'Attendees' => 'Attendees',
      'Schedule Meeting' => 'Schedule Meeting',
      'Schedule Call' => 'Schedule Call',
      'Compose Email' => 'Compose Email',
      'Log Meeting' => 'Log Meeting',
      'Log Call' => 'Log Call',
      'Archive Email' => 'Archive Email',
      'Create Task' => 'Create Task',
      'Tasks' => 'Tasks',
    ),
    'messages' => 
    array (
      'notModified' => 'You have not modified the record',
      'duplicate' => 'The record you are creating seems to be a duplicate',
      'fieldIsRequired' => '{field} is required',
      'fieldShouldBeEmail' => '{field} should be valid email',
      'fieldShouldBeFloat' => '{field} should be valid float',
      'fieldShouldBeInt' => '{field} should be valid integer',
      'fieldShouldBeDate' => '{field} should be valid date',
      'fieldShouldBeDatetime' => '{field} should be valid date/time',
      'fieldShouldAfter' => '{field} should be after {otherField}',
      'fieldShouldBefore' => '{field} should be before {otherField}',
      'fieldShouldBeBetween' => '{field} should be between {min} and {max}',
      'fieldShouldBeLess' => '{field} should be less then {value}',
      'fieldShouldBeGreater' => '{field} should be greater then {value}',
      'fieldBadPasswordConfirm' => '{field} confirmed improperly',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Only My',
      'open' => 'Open',
      'active' => 'Active',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'firstName' => 'First Name',
      'lastName' => 'Last Name',
      'salutationName' => 'Salutation',
      'assignedUser' => 'Assigned User',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Assigned User Name',
      'teams' => 'Teams',
      'createdAt' => 'Created At',
      'modifiedAt' => 'Modified At',
      'createdBy' => 'Created By',
      'modifiedBy' => 'Modified By',
      'title' => 'Title',
      'dateFrom' => 'Date From',
      'dateTo' => 'Date To',
      'autorefreshInterval' => 'Auto-refresh Interval',
      'displayRecords' => 'Display Records',
      'billingAddressCity' => 'City',
      'billingAddressCountry' => 'Country',
      'billingAddressPostalCode' => 'Postal Code',
      'billingAddressState' => 'State',
      'billingAddressStreet' => 'Street',
      'addressCity' => 'City',
      'addressStreet' => 'Street',
      'addressCountry' => 'Country',
      'addressState' => 'State',
      'addressPostalCode' => 'Postal Code',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'users' => 'Users',
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'leads' => 'Leads',
      'meetings' => 'Meetings',
      'calls' => 'Calls',
      'tasks' => 'Tasks',
      'emails' => 'Emails',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Leads' => 'My Leads',
      'Opportunities' => 'My Opportunities',
      'Tasks' => 'My Tasks',
      'Cases' => 'My Cases',
      'Calendar' => 'Calendar',
      'OpportunitiesByStage' => 'Opportunities by Stage',
      'OpportunitiesByLeadSource' => 'Opportunities by Lead Source',
      'SalesByMonth' => 'Sales by Month',
      'SalesPipeline' => 'Sales Pipeline',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} created {entityType} {entity}',
      'createAssigned' => '{user} created {entityType} {entity} assigned to {assignee}',
      'assign' => '{user} assigned {entityType} {entity} to {assignee}',
      'post' => '{user} posted on {entityType} {entity}',
      'attach' => '{user} attached on {entityType} {entity}',
      'status' => '{user} updated {field} on {entityType} {entity}',
      'update' => '{user} updated {entityType} {entity}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'emailReceived' => '{entity} has been received for {entityType} {entity}',
      'createThis' => '{user} created this {entityType}',
      'createAssignedThis' => '{user} created this {entityType} assigned to {assignee}',
      'assignThis' => '{user} assigned this {entityType} to {assignee}',
      'postThis' => '{user} posted',
      'attachThis' => '{user} attached',
      'statusThis' => '{user} updated {field}',
      'updateThis' => '{user} updated this {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'emailReceivedThis' => '{entity} has been received',
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
        'ro_RO' => 'Romanian',
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
        'on' => 'On',
        'notOn' => 'Not On',
        'after' => 'After',
        'before' => 'Before',
        'between' => 'Between',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than or Equals',
        'lessThanOrEquals' => 'Less Than or Equals',
        'between' => 'Between',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
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
          'bold' => 'Bold',
          'italic' => 'Italic',
          'underline' => 'Underline',
          'strike' => 'Strike',
          'clear' => 'Remove Font Style',
          'height' => 'Line Height',
          'name' => 'Font Family',
          'size' => 'Font Size',
        ),
        'image' => 
        array (
          'image' => 'Picture',
          'insert' => 'Insert Image',
          'resizeFull' => 'Resize Full',
          'resizeHalf' => 'Resize Half',
          'resizeQuarter' => 'Resize Quarter',
          'floatLeft' => 'Float Left',
          'floatRight' => 'Float Right',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Drag an image here',
          'selectFromFiles' => 'Select from files',
          'url' => 'Image URL',
          'remove' => 'Remove Image',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Insert Link',
          'unlink' => 'Unlink',
          'edit' => 'Edit',
          'textToDisplay' => 'Text to display',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Open in new window',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Insert Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Table',
        ),
        'hr' => 
        array (
          'insert' => 'Insert Horizontal Rule',
        ),
        'style' => 
        array (
          'style' => 'Style',
          'normal' => 'Normal',
          'blockquote' => 'Quote',
          'pre' => 'Code',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unordered list',
          'ordered' => 'Ordered list',
        ),
        'options' => 
        array (
          'help' => 'Help',
          'fullscreen' => 'Full Screen',
          'codeview' => 'Code View',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraph',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Align left',
          'center' => 'Align center',
          'right' => 'Align right',
          'justify' => 'Justify full',
        ),
        'color' => 
        array (
          'recent' => 'Recent Color',
          'more' => 'More Color',
          'background' => 'BackColor',
          'foreground' => 'FontColor',
          'transparent' => 'Transparent',
          'setTransparent' => 'Set transparent',
          'reset' => 'Reset',
          'resetToDefault' => 'Reset to default',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Keyboard shortcuts',
          'close' => 'Close',
          'textFormatting' => 'Text formatting',
          'action' => 'Action',
          'paragraphFormatting' => 'Paragraph formatting',
          'documentStyle' => 'Document Style',
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
      'post' => 'Post',
      'attachments' => 'Attachments',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Default Currency',
      'currencyList' => 'Currency List',
      'language' => 'Language',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Security',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'smtpEmailAddress' => 'Email Address',
      'exportDelimiter' => 'Export Delimiter',
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
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Roles',
    ),
    'links' => 
    array (
      'users' => 'Users',
      'teams' => 'Teams',
    ),
    'labels' => 
    array (
      'Access' => 'Access',
      'Create Role' => 'Create Role',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'not-set',
        'enabled' => 'enabled',
        'disabled' => 'disabled',
      ),
      'levelList' => 
      array (
        'all' => 'all',
        'team' => 'team',
        'own' => 'own',
        'no' => 'no',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Read',
      'edit' => 'Edit',
      'delete' => 'Delete',
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
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Create Scheduled Job',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Check Inbound Emails',
        'Cleanup' => 'Clean-up',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'mac' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'windows' => 'Note: Create a batch file with the following commands to run Espo Scheduled Jobs using Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Execution Time',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Use Cache',
      'dateFormat' => 'Date Format',
      'timeFormat' => 'Time Format',
      'timeZone' => 'Time Zone',
      'weekStart' => 'First Day of Week',
      'thousandSeparator' => 'Thousand Separator',
      'decimalMark' => 'Decimal Mark',
      'defaultCurrency' => 'Default Currency',
      'currencyList' => 'Currency List',
      'language' => 'Language',
      'companyLogo' => 'Company Logo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Security',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Password',
      'outboundEmailFromName' => 'From Name',
      'outboundEmailFromAddress' => 'From Address',
      'outboundEmailIsShared' => 'Is Shared',
      'recordsPerPage' => 'Records Per Page',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Quick Create List',
      'exportDelimiter' => 'Export Delimiter',
      'authenticationMethod' => 'Authentication Method',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Username',
      'ldapPassword' => 'Password',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Security',
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
      ),
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Locale',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuration',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Roles',
    ),
    'links' => 
    array (
      'users' => 'Users',
    ),
    'labels' => 
    array (
      'Create Team' => 'Create Team',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'User Name',
      'title' => 'Title',
      'isAdmin' => 'Is Admin',
      'defaultTeam' => 'Default Team',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Phone',
      'roles' => 'Roles',
      'password' => 'Password',
      'passwordConfirm' => 'Confirm Password',
      'newPassword' => 'New Password',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'roles' => 'Roles',
    ),
    'labels' => 
    array (
      'Create User' => 'Create User',
      'Generate' => 'Generate',
      'Access' => 'Access',
      'Preferences' => 'Preferences',
      'Change Password' => 'Change Password',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Password will be sent to user\'s email address.',
      'accountInfoEmailSubject' => 'Account info',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChanged' => 'Password has been changed',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Billing Address',
      'shippingAddress' => 'Shipping Address',
      'description' => 'Description',
      'sicCode' => 'Sic Code',
      'industry' => 'Industry',
      'type' => 'Type',
      'contactRole' => 'Role',
    ),
    'links' => 
    array (
      'contacts' => 'Contacts',
      'opportunities' => 'Opportunities',
      'cases' => 'Cases',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Customer',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Apparel' => 'Apparel',
        'Banking' => 'Banking',
        'Computer Software' => 'Computer Software',
        'Education' => 'Education',
        'Electronics' => 'Electronics',
        'Finance' => 'Finance',
        'Insurance' => 'Insurance',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Create Account',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Month',
      'week' => 'Week',
      'day' => 'Day',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Day',
    ),
    'labels' => 
    array (
      'Today' => 'Today',
      'Create' => 'Create',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'direction' => 'Direction',
      'duration' => 'Duration',
      'description' => 'Description',
      'users' => 'Users',
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
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
      'direction' => 
      array (
        'Outbound' => 'Outbound',
        'Inbound' => 'Inbound',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Create Call',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Send Invitations',
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
      'number' => 'Number',
      'status' => 'Status',
      'account' => 'Account',
      'contact' => 'Contact',
      'priority' => 'Priority',
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
        'New' => 'New',
        'Assigned' => 'Assigned',
        'Pending' => 'Pending',
        'Closed' => 'Closed',
        'Rejected' => 'Rejected',
        'Duplicate' => 'Duplicate',
      ),
      'priority' => 
      array (
        'Low' => 'Low',
        'Normal' => 'Normal',
        'High' => 'High',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Question',
        'Incident' => 'Incident',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Create Case',
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
      'emailAddress' => 'Email',
      'title' => 'Title',
      'account' => 'Account',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Account Type',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Role',
      'description' => 'Description',
    ),
    'links' => 
    array (
      'opportunities' => 'Opportunities',
      'cases' => 'Cases',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Create Contact',
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
      'assignToUser' => 'Assign to User',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Port',
      'monitoredFolders' => 'Monitored Folders',
      'trashFolder' => 'Trash Folder',
      'ssl' => 'SSL',
      'createCase' => 'Create Case',
      'reply' => 'Reply',
      'caseDistribution' => 'Case Distribution',
      'replyEmailTemplate' => 'Reply Email Template',
      'replyFromAddress' => 'Reply From Address',
      'replyFromName' => 'Reply From Name',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Create Inbound Email',
      'IMAP' => 'IMAP',
      'Actions' => 'Actions',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Converted To',
      'Create Lead' => 'Create Lead',
      'Convert' => 'Convert',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Title',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'accountName' => 'Account Name',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'status' => 'Status',
      'source' => 'Source',
      'opportunityAmount' => 'Opportunity Amount',
      'description' => 'Description',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Opportunity',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'New',
        'Assigned' => 'Assigned',
        'In Process' => 'In Process',
        'Converted' => 'Converted',
        'Recycled' => 'Recycled',
        'Dead' => 'Dead',
      ),
      'source' => 
      array (
        'Call' => 'Call',
        'Email' => 'Email',
        'Existing Customer' => 'Existing Customer',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Site',
        'Campaign' => 'Campaign',
        'Other' => 'Other',
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
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'duration' => 'Duration',
      'description' => 'Description',
      'users' => 'Users',
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
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Create Meeting',
      'Set Held' => 'Set Held',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Send Invitations',
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
      'account' => 'Account',
      'stage' => 'Stage',
      'amount' => 'Amount',
      'probability' => 'Probability, %',
      'leadSource' => 'Lead Source',
      'doNotCall' => 'Do Not Call',
      'closeDate' => 'Close Date',
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
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Needs Analysis',
        'Value Proposition' => 'Value Proposition',
        'Id. Decision Makers' => 'Id. Decision Makers',
        'Perception Analysis' => 'Perception Analysis',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Negotiation/Review',
        'Closed Won' => 'Closed Won',
        'Closed Lost' => 'Closed Lost',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Create Opportunity',
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
      'emailAddress' => 'Email',
      'title' => 'Title',
      'website' => 'Website',
      'accountName' => 'Account Name',
      'phoneNumber' => 'Phone',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'description' => 'Description',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Create Target',
      'Convert to Lead' => 'Convert to Lead',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Parent',
      'status' => 'Status',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date Due',
      'priority' => 'Priority',
      'description' => 'Description',
      'isOverdue' => 'Is Overdue',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Not Started',
        'Started' => 'Started',
        'Completed' => 'Completed',
        'Canceled' => 'Canceled',
      ),
      'priority' => 
      array (
        'Low' => 'Low',
        'Normal' => 'Normal',
        'High' => 'High',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Create Task',
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