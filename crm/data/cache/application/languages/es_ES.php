<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activado',
      'Disabled' => 'Desactivado',
      'System' => 'Sistema',
      'Users' => 'Usuarios',
      'Email' => 'Correo electrónico',
      'Data' => 'Datos',
      'Customization' => 'Personalizar',
      'Available Fields' => 'Campos Disponibles',
      'Layout' => 'Diseño',
      'Add Panel' => 'Añadir Panel',
      'Add Field' => 'Añadir Campo',
      'Settings' => 'Opciones',
      'Scheduled Jobs' => 'Tareas Programadas',
      'Upgrade' => 'Actualizar',
      'Clear Cache' => 'Limpiar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Equipos',
      'Roles' => 'Roles',
      'Outbound Emails' => 'Correos Salientes',
      'Inbound Emails' => 'Correos Entrantes',
      'Email Templates' => 'Platillas de Correo',
      'Import' => 'Importar',
      'Layout Manager' => 'Administrador de Diseño',
      'Field Manager' => 'Administrador de Campos',
      'User Interface' => 'Interfaz de Usuario',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalle',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Filtros de Búsqueda',
      'massUpdate' => 'Actualización Masiva',
      'relationships' => 'Relaciones',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Dirección',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duración',
      'password' => 'Contraseña',
      'parsonName' => 'Nombre',
      'autoincrement' => 'Auto incrementar',
      'bool' => 'Booleano',
      'currency' => 'Moneda',
      'date' => 'Fecha',
      'datetime' => 'Fecha/Hora',
      'email' => 'Correo electrónico',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Enlace',
      'linkMultiple' => 'Enlace Múltiple',
      'linkParent' => 'Enlace Padre',
      'multienim' => 'Multienum',
      'phone' => 'Teléfono',
      'text' => 'Texto',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Archivo',
      'image' => 'Imagen',
    ),
    'fields' => 
    array (
      'type' => 'Tipo',
      'name' => 'Nombre',
      'label' => 'Etiqueta',
      'required' => 'Requerido',
      'default' => 'Por Defecto',
      'maxLength' => 'Longitud máxima',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Enlace',
      'field' => 'Campo',
      'min' => 'Mínimo',
      'max' => 'Máximo',
      'translation' => 'Traducción',
      'previewSize' => 'Tamaño de vista previa',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Su EspoCRM será actualizado a la versión <strong>{version}</strong>. Tomará algún tiempo.',
      'upgradeDone' => 'Su EspoCRM ha sido actualizado a la versión <strong>{version}</strong>. Refresque su ventana del navegador.',
      'upgradeBackup' => 'Le recomendamos que haga copias de seguridad de sus archivos y datos EspoCRM antes de la actualización.',
      'thousandSeparatorEqualsDecimalMark' => 'El separador de miles no puede ser la misma que marca decimal',
      'userHasNoEmailAddress' => 'El usuario no tiene la dirección de correo electrónico.',
      'selectEntityType' => 'Seleccione el tipo de entidad en el menú de la izquierda.',
      'selectUpgradePackage' => 'Seleccione Actualizar Paquete',
      'selectLayout' => 'Seleccione el diseño necesario en el menú de la izquierda y editarlo.',
    ),
    'descriptions' => 
    array (
      'settings' => 'Configuración del sistema de aplicación.',
      'scheduledJob' => 'Trabajos que se ejecutan por cron.(cron Jobs)',
      'upgrade' => 'Actualiza EspoCRM.',
      'clearCache' => 'Limpiar cache de Administración.',
      'rebuild' => 'Reconstruir y limpiar el cache de Administración.',
      'users' => 'Gestión de usuarios.',
      'teams' => 'Gestión de Equipos',
      'roles' => 'Gestión de Roles',
      'outboundEmails' => 'Opciones SMTP para correo saliente.',
      'inboundEmails' => 'Cuentas de correo IMAP Grupo. Importación-correo y dirección de correo electrónico a la sentencia.',
      'emailTemplates' => 'Plantillas para mensajes de correo electrónico salientes.',
      'import' => 'Importar datos desde CSV.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Crear nuevos campos o personalizar los ya existentes.',
      'userInterface' => 'Configurar UI.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
      'authentication' => 'Authentication setttings.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Pequeño',
        'medium' => 'Mediano',
        'large' => 'Grande',
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
      'name' => 'Asunto',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateSent' => 'Enviado',
      'from' => 'De',
      'to' => 'a',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Es Html',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'selectTemplate' => 'Seleccione una Plantilla',
      'fromEmailAddress' => 'De la dirección',
      'toEmailAddresses' => 'a la Dirección',
      'emailAddress' => 'Correo Electrónico',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Borrador',
      'Sending' => 'Enviando',
      'Sent' => 'Enviado',
      'Archived' => 'Archivado',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archivar Correo',
      'Compose' => 'Componer',
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
      'Primary' => 'Primario',
      'Opted Out' => 'optado por no',
      'Invalid' => 'Inválido',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'isHtml' => 'Es Html',
      'body' => 'Cuerpo',
      'subject' => 'Asunto',
      'attachments' => 'Adjuntos',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Crear Plantilla de Correo',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Correo electrónico',
      'User' => 'Usuario',
      'Team' => 'Equipo',
      'Role' => 'Rol',
      'EmailTemplate' => 'Plantilla de Correo',
      'OutboundEmail' => 'Correo Saliente',
      'ScheduledJob' => 'Tarea Programada',
      'Account' => 'Cuenta',
      'Contact' => 'Contacto',
      'Lead' => 'Potenciales',
      'Target' => 'Prospecto',
      'Opportunity' => 'Opportunidad',
      'Meeting' => 'Reunión',
      'Calendar' => 'Calendario',
      'Call' => 'Llamada',
      'Task' => 'Tarea',
      'Case' => 'Caso',
      'InboundEmail' => 'Correo Entrante',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Correos',
      'User' => 'Usuarios',
      'Team' => 'Equipos',
      'Role' => 'Roles',
      'EmailTemplate' => 'Platillas de Correo',
      'OutboundEmail' => 'Correos Salientes',
      'ScheduledJob' => 'Tareas Programadas',
      'Account' => 'Cuentas',
      'Contact' => 'Contactos',
      'Lead' => 'Potenciales',
      'Target' => 'Targets',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniones',
      'Calendar' => 'Calendario',
      'Call' => 'Llamadas',
      'Task' => 'Tareas',
      'Case' => 'Casos',
      'InboundEmail' => 'Correos Entrantes',
      'Targets' => 'Prospectos',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Fundir',
      'None' => 'Ninguno',
      'by' => 'por',
      'Saved' => 'Guardado',
      'Error' => 'Error',
      'Select' => 'Seleccionar',
      'Not valid' => 'Inválido',
      'Please wait...' => 'Por favor espere...',
      'Please wait' => 'Por favor espere',
      'Loading...' => 'Cargando...',
      'Uploading...' => 'Subiendo...',
      'Sending...' => 'Enviando...',
      'Removed' => 'Removed',
      'Posted' => 'Publicado',
      'Linked' => 'Enlazado',
      'Unlinked' => 'Desenlazado',
      'Access denied' => 'Acceso denegado',
      'Access' => 'Acceso',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Registro Eliminado',
      'Wrong username/password' => 'Nombre de usuario/contraseña incorrectos',
      'Post cannot be empty' => 'La entrada no puede estar vacia',
      'Removing...' => 'Removiendo...',
      'Unlinking...' => 'Desenlazando...',
      'Posting...' => 'Publicando...',
      'Username can not be empty!' => 'Nombre de usuario no puede estar vacío!',
      'Cache is not enabled' => 'Cache no está habilitado',
      'Cache has been cleared' => 'Cache Limpiado Correctamente',
      'Rebuild has been done' => 'Se ha reconstruido',
      'Saving...' => 'Guardando...',
      'Modified' => 'Modificado',
      'Created' => 'Creado',
      'Create' => 'Crear',
      'create' => 'crear',
      'Overview' => 'Vista',
      'Details' => 'Detalles',
      'Add Filter' => 'Añadir Filtro',
      'Add Dashlet' => 'Añadir Dashlet',
      'Add' => 'Añadir',
      'Reset' => 'Resetear',
      'Menu' => 'Menú',
      'More' => 'Más',
      'Search' => 'Buscar',
      'Only My' => 'Solo Yo',
      'Open' => 'Abrir',
      'Admin' => 'Administrador',
      'About' => 'Acerca',
      'Refresh' => 'Refrescar',
      'Remove' => 'Remover',
      'Options' => 'Optiones',
      'Username' => 'Nombre de Usuario',
      'Password' => 'Contraseña',
      'Login' => 'Entrar',
      'Log Out' => 'Salir',
      'Preferences' => 'Preferencias',
      'State' => 'Estado/Distrito',
      'Street' => 'Calle',
      'Country' => 'país',
      'City' => 'Ciudad',
      'PostalCode' => 'Código Postal',
      'Followed' => 'Seguido',
      'Follow' => 'Seguir',
      'Clear Local Cache' => 'Borrar Cache Local',
      'Actions' => 'Acciones',
      'Delete' => 'Borrar',
      'Update' => 'Actualizar',
      'Save' => 'Guardar',
      'Edit' => 'Editar',
      'Cancel' => 'Cancelar',
      'Unlink' => 'Desenlazar',
      'Mass Update' => 'Actualización Masiva',
      'Export' => 'Exportar',
      'No Data' => 'Sin Datos',
      'All' => 'Todos',
      'Active' => 'Activo',
      'Inactive' => 'Inactivo',
      'Write your comment here' => 'Escriba su comentario aquí',
      'Post' => 'Entrada',
      'Stream' => 'Stream',
      'Show more' => 'Mostrar mas',
      'Dashlet Options' => 'Opciones Dashlet',
      'Full Form' => 'Formulario Completo',
      'Insert' => 'Insertar',
      'Person' => 'Persona',
      'First Name' => 'Primer Nombre',
      'Last Name' => 'Apellidos',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'cambiar',
      'Primary' => 'Primary',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Crear Correo Entrante',
      'Activities' => 'Actividades',
      'History' => 'Historia',
      'Attendees' => 'Los asistentes',
      'Schedule Meeting' => 'Reunión Programada',
      'Schedule Call' => 'Llamada Programada',
      'Compose Email' => 'Componer Correo',
      'Log Meeting' => 'Log de Reunión',
      'Log Call' => 'Log de Llamada',
      'Archive Email' => 'Archivar Correo',
      'Create Task' => 'Crear Tarea',
      'Tasks' => 'Tareas',
    ),
    'messages' => 
    array (
      'notModified' => 'Usted no ha modificado el registro',
      'duplicate' => 'El registro que está creando parece ser un duplicado',
      'fieldIsRequired' => '{field} es requerido',
      'fieldShouldBeEmail' => '{field} debe se un correo electrónico válido',
      'fieldShouldBeFloat' => '{field} debe se un decimal válido',
      'fieldShouldBeInt' => '{field} debe se un entero válido',
      'fieldShouldBeDate' => '{field} debe se una fecha válida',
      'fieldShouldBeDatetime' => '{field} debe se una fecha válida fecha/hora',
      'fieldShouldAfter' => '{field} debe estar después {otherField}',
      'fieldShouldBefore' => '{field} debe estar antes {otherField}',
      'fieldShouldBeBetween' => '{field} debe estar entre {min} and {max}',
      'fieldShouldBeLess' => '{field} debe ser menor que {value}',
      'fieldShouldBeGreater' => '{field} debe ser mayor que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado de forma incorrecta',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Solo Yo',
      'open' => 'Abrir',
      'active' => 'Activo',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'firstName' => 'Primer Nombre',
      'lastName' => 'Apellidos',
      'salutationName' => 'Saludo',
      'assignedUser' => 'Usuario Asignado',
      'emailAddress' => 'Correo electrónico',
      'assignedUserName' => 'Nombre de Usuario Asignado',
      'teams' => 'Equipos',
      'createdAt' => 'Creado el',
      'modifiedAt' => 'Modificado el',
      'createdBy' => 'Creado Por',
      'modifiedBy' => 'Modificado Por',
      'title' => 'Título',
      'dateFrom' => 'Fecha de',
      'dateTo' => 'Fecha Para',
      'autorefreshInterval' => 'Intervalo de Auto-Refrescar',
      'displayRecords' => 'Mostrar Registros',
      'billingAddressCity' => 'Ciudad',
      'billingAddressCountry' => 'país',
      'billingAddressPostalCode' => 'Código Postal',
      'billingAddressState' => 'Estado/Distrito',
      'billingAddressStreet' => 'Calle',
      'addressCity' => 'Ciudad',
      'addressStreet' => 'Calle',
      'addressCountry' => 'país',
      'addressState' => 'Estado/Distrito',
      'addressPostalCode' => 'Código Postal',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Equipos',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Potenciales',
      'meetings' => 'Reuniones',
      'calls' => 'Llamadas',
      'tasks' => 'Tareas',
      'emails' => 'Correos',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Stream',
      'Leads' => 'Mis potenciales',
      'Opportunities' => 'Mis Opportunidades',
      'Tasks' => 'Mis Tareas',
      'Cases' => 'Mis Casos',
      'Calendar' => 'Calendario',
      'OpportunitiesByStage' => 'Oportunidades por Etapa',
      'OpportunitiesByLeadSource' => 'Oportunidades de origen de cliente potencial',
      'SalesByMonth' => 'Ventas por Mes',
      'SalesPipeline' => 'Canalización de ventas',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} creado {entityType} {entity}',
      'createAssigned' => '{user} creado {entityType} {entity} asignado a {assignee}',
      'assign' => '{user} asignado {entityType} {entity} a {assignee}',
      'post' => '{user} publicado en {entityType} {entity}',
      'attach' => '{user} adjunto en {entityType} {entity}',
      'status' => '{user} actualizado {field} on {entityType} {entity}',
      'update' => '{user} actualizado {entityType} {entity}',
      'createRelated' => '{user} creado {relatedEntityType} {relatedEntity} enlazado a {entityType} {entity}',
      'emailReceived' => '{entity} ha sido recibido por {entityType} {entity}',
      'createThis' => '{user} crear este {entityType}',
      'createAssignedThis' => '{user} crear este {entityType} asignado a {assignee}',
      'assignThis' => '{user} asignar este {entityType} a {assignee}',
      'postThis' => '{user} publicado',
      'attachThis' => '{user} adjunto',
      'statusThis' => '{user} actualizado {field}',
      'updateThis' => '{user} actualizado a este {entityType}',
      'createRelatedThis' => '{user} creado {relatedEntityType} {relatedEntity} enlazado a este {entityType}',
      'emailReceivedThis' => '{entity} se ha recibido',
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
        'Mr.' => 'Sr.',
        'Mrs.' => 'Sra.',
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
        'on' => 'Está en',
        'notOn' => 'No está en',
        'after' => 'Después',
        'before' => 'Antes',
        'between' => 'Entre',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Iguales',
        'notEquals' => 'Diferentes',
        'greaterThan' => 'Mayor que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Mayor o igual que',
        'lessThanOrEquals' => 'Menor o igual que',
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
        11 => 'Ninguno',
        12 => '30 segundos',
        13 => '1 minuto',
        14 => '2 minutos',
        15 => '5 minutos',
        16 => '10 minutos',
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
        'NOTICE' => 'Usted puede encontrar aquí la traducción: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Negrita',
          'italic' => 'Itálico',
          'underline' => 'Subrayado',
          'strike' => 'Tachado',
          'clear' => 'Quitar Estilo de Fuente',
          'height' => 'Alto de línea',
          'name' => 'Familia de Fuente',
          'size' => 'Tamaño de Fuente',
        ),
        'image' => 
        array (
          'image' => 'Imagen',
          'insert' => 'Insertar Imagen',
          'resizeFull' => 'Cambiar el tamaño a completo',
          'resizeHalf' => 'Cambiar el tamaño a la mitad',
          'resizeQuarter' => 'Cambiar el tamaño a un cuarto',
          'floatLeft' => 'Flotar Izquierda',
          'floatRight' => 'Flotar Derecha',
          'floatNone' => 'Sin Flotar',
          'dragImageHere' => 'Arrastrar una imagen aquí',
          'selectFromFiles' => 'Seleccionar desde Archivo',
          'url' => 'Url de Imagen',
          'remove' => 'Remover Imagen',
        ),
        'link' => 
        array (
          'link' => 'Enlace',
          'insert' => 'Insertar Enlace',
          'unlink' => 'Desenlazar',
          'edit' => 'Editar',
          'textToDisplay' => 'TExto a mostrar',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Abrir en nueva ventana',
        ),
        'video' => 
        array (
          'video' => 'Vídeo',
          'videoLink' => 'Enlace al Vídeo',
          'insert' => 'Insertar Vídeo',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabla',
        ),
        'hr' => 
        array (
          'insert' => 'Insertar regla horizontal',
        ),
        'style' => 
        array (
          'style' => 'Estilo',
          'normal' => 'Normal',
          'blockquote' => 'Cita',
          'pre' => 'Código',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista sin Ordenar',
          'ordered' => 'Lista Ordenada',
        ),
        'options' => 
        array (
          'help' => 'Ayuda',
          'fullscreen' => 'Pantalla Completa',
          'codeview' => 'Ver Código',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Párrafo',
          'outdent' => 'Anular sangría',
          'indent' => 'Sangría',
          'left' => 'Alinear Izquierda',
          'center' => 'Alinear Centro',
          'right' => 'Alinear Derecha',
          'justify' => 'Justificado',
        ),
        'color' => 
        array (
          'recent' => 'Color Reciente',
          'more' => 'Mas Colores',
          'background' => 'Color de Fondo',
          'foreground' => 'Color de Fuente',
          'transparent' => 'Transparente',
          'setTransparent' => 'Establecer transparente',
          'reset' => 'Resetear',
          'resetToDefault' => 'Restablecer a (por defecto)',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Atajos de teclado',
          'close' => 'Cerrar',
          'textFormatting' => 'Formato de texto',
          'action' => 'Acción',
          'paragraphFormatting' => 'Formato de párrafo',
          'documentStyle' => 'Estilo de Documento',
        ),
        'history' => 
        array (
          'undo' => 'Deshacer',
          'redo' => 'Rehacer',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Entrada',
      'attachments' => 'Adjuntos',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por Defecto',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Lenguaje',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autenticación',
      'smtpSecurity' => 'Securidad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'smtpEmailAddress' => 'Correo Electrónico',
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
        2 => 'Domingo',
        3 => 'Lunes',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
      'teams' => 'Equipos',
    ),
    'labels' => 
    array (
      'Access' => 'Acceso',
      'Create Role' => 'Crear Rol',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'sin establecer',
        'enabled' => 'activado',
        'disabled' => 'desactivado',
      ),
      'levelList' => 
      array (
        'all' => 'todos',
        'team' => 'equipo',
        'own' => 'propio',
        'no' => 'no',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Leer',
      'edit' => 'Editar',
      'delete' => 'Borrar',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'status' => 'Estado',
      'job' => 'Trabajo',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Registro de Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Crear Tarea programado',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Comprobar Correos Entrantes',
        'Cleanup' => 'Limpiar',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Añada esta línea al archivo crontab para ejecutar trabajos Espo programadas:',
        'mac' => 'Nota: Añada esta línea al archivo crontab para ejecutar trabajos Espo programadas:',
        'windows' => 'Nota: Crear un archivo por lotes con los siguientes comandos para ejecutar tareas programadas usando Espo tareas programadas de Windows:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Estado',
      'executionTime' => 'Tiempo de Ejecución',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usar Cache',
      'dateFormat' => 'Formato de fecha',
      'timeFormat' => 'Formato de tiempo',
      'timeZone' => 'Zona Horaria',
      'weekStart' => 'Primer día de la semana',
      'thousandSeparator' => 'Separador de miles',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moneda por Defecto',
      'currencyList' => 'Lista de Moneda',
      'language' => 'Lenguaje',
      'companyLogo' => 'Company Logo',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Puerto',
      'smtpAuth' => 'Autenticación',
      'smtpSecurity' => 'Securidad',
      'smtpUsername' => 'Nombre de Usuario',
      'emailAddress' => 'Correo electrónico',
      'smtpPassword' => 'Contraseña',
      'outboundEmailFromName' => 'De Nombre',
      'outboundEmailFromAddress' => 'De la dirección',
      'outboundEmailIsShared' => 'Es Compartido',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Lista Pestaña',
      'quickCreateList' => 'Crear Lista Rápido',
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
        2 => 'Domingo',
        3 => 'Lunes',
      ),
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Localización',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuración',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'roles' => 'Roles',
    ),
    'links' => 
    array (
      'users' => 'Usuarios',
    ),
    'labels' => 
    array (
      'Create Team' => 'Crear Equipo',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'userName' => 'Nombre de Usuario',
      'title' => 'Título',
      'isAdmin' => 'Es Administrador',
      'defaultTeam' => 'Equipo por Defecto',
      'emailAddress' => 'Correo electrónico',
      'phoneNumber' => 'Phone',
      'roles' => 'Roles',
      'password' => 'Contraseña',
      'passwordConfirm' => 'Confirmar Contraseña',
      'newPassword' => 'New Password',
      'phone' => 'Teléfono',
    ),
    'links' => 
    array (
      'teams' => 'Equipos',
      'roles' => 'Roles',
    ),
    'labels' => 
    array (
      'Create User' => 'Crear Usuario',
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
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'website' => 'Sito Web',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Dirección de Facturación',
      'shippingAddress' => 'Dirección de Envío',
      'description' => 'Descripción',
      'sicCode' => 'Sic Code',
      'industry' => 'Industria',
      'type' => 'Tipo',
      'contactRole' => 'Role',
      'phone' => 'Teléfono',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
      'contacts' => 'Contactos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Inversor',
        'Partner' => 'Partner',
        'Reseller' => 'REvendedor',
      ),
      'industry' => 
      array (
        'Apparel' => 'Apparel',
        'Banking' => 'Banking',
        'Computer Software' => 'Software',
        'Education' => 'Educación',
        'Electronics' => 'Electrónicos',
        'Finance' => 'Finanzas',
        'Insurance' => 'Seguros',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Crear Cuenta',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mes',
      'week' => 'Semana',
      'day' => 'Día',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Día',
    ),
    'labels' => 
    array (
      'Today' => 'Hoy',
      'Create' => 'Crear',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'direction' => 'Dirección',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Potenciales',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planeada',
        'Held' => 'Celebrada',
        'Not Held' => 'Sin Celebrar',
      ),
      'direction' => 
      array (
        'Outbound' => 'Saliente',
        'Inbound' => 'Entrante',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Crear Llamada',
      'Set Held' => 'Establecer Celebrada',
      'Set Not Held' => 'Establecer no Celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
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
      'name' => 'Nombre',
      'number' => 'Número',
      'status' => 'Estado',
      'account' => 'Cuenta',
      'contact' => 'Contacto',
      'priority' => 'Prioridad',
      'type' => 'Tipo',
      'description' => 'Descripción',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'Pending' => 'Pendiente',
        'Closed' => 'Cerrado',
        'Rejected' => 'Rechazado',
        'Duplicate' => 'Duplicado',
      ),
      'priority' => 
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Pregunta',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Crear Caso',
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
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'account' => 'Cuenta',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Cuenta Tipo',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Role',
      'description' => 'Descripción',
      'phone' => 'Teléfono',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunidades',
      'cases' => 'Casos',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Crear Contacto',
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
      'name' => 'Nombre',
      'team' => 'Equipo',
      'status' => 'Estado',
      'assignToUser' => 'Asignado a Usuario',
      'host' => 'Host',
      'username' => 'Nombre de Usuario',
      'password' => 'Contraseña',
      'port' => 'Puerto',
      'monitoredFolders' => 'Carpetas supervisadas',
      'trashFolder' => 'Carpeta Basura',
      'ssl' => 'SSL',
      'createCase' => 'Crear Caso',
      'reply' => 'Responder',
      'caseDistribution' => 'Caso Distribución',
      'replyEmailTemplate' => 'Responder De Plantilla',
      'replyFromAddress' => 'Responder De Dirección',
      'replyFromName' => 'Responder De Nombre',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activo',
        'Inactive' => 'Inactivo',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Asignación-Directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Crear Correo Entrante',
      'IMAP' => 'IMAP',
      'Actions' => 'Acciones',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'No se pudo conectar con el servidor IMAP',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertido a',
      'Create Lead' => 'Crear Principal',
      'Convert' => 'Convertir',
    ),
    'fields' => 
    array (
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sito Web',
      'phoneNumber' => 'Phone',
      'accountName' => 'Nombre de Cuenta',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'status' => 'Estado',
      'source' => 'Fuente',
      'opportunityAmount' => 'Oportunidad Cantidad',
      'description' => 'Descripción',
      'createdAccount' => 'Cuenta',
      'createdContact' => 'Contacto',
      'createdOpportunity' => 'Opportunidad',
      'phone' => 'Teléfono',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nuevo',
        'Assigned' => 'Asignado',
        'In Process' => 'En Proceso',
        'Converted' => 'Convertido',
        'Recycled' => 'Reciclado',
        'Dead' => 'Muerto',
      ),
      'source' => 
      array (
        'Call' => 'Llamada',
        'Email' => 'Correo electrónico',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Partner',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio Web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro',
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
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de Finalización',
      'duration' => 'Duración',
      'description' => 'Descripción',
      'users' => 'Usuarios',
      'contacts' => 'Contactos',
      'leads' => 'Potenciales',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planeada',
        'Held' => 'Celebrada',
        'Not Held' => 'Sin Celebrar',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Crear Reunión',
      'Set Held' => 'Establecer Celebrada',
      'Set Not Held' => 'Establecer no Celebrada',
      'Send Invitations' => 'Enviar Invitaciones',
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
      'name' => 'Nombre',
      'account' => 'Cuenta',
      'stage' => 'Etapa',
      'amount' => 'Cantidad',
      'probability' => 'Probabilidad, %',
      'leadSource' => 'Fuente Principal',
      'doNotCall' => 'No Llamar',
      'closeDate' => 'Fecha de cierre',
      'contacts' => 'Contacts',
      'description' => 'Descripción',
    ),
    'links' => 
    array (
      'contacts' => 'Contactos',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospección',
        'Qualification' => 'Calificación',
        'Needs Analysis' => 'Análisis de Necesidades',
        'Value Proposition' => 'Valor de la Propuesta',
        'Id. Decision Makers' => 'Id. Tomadores de Decisiones',
        'Perception Analysis' => 'Análisis de la Percepción',
        'Proposal/Price Quote' => 'Propuesta/precio Presupuesto',
        'Negotiation/Review' => 'Negociación/Revisión',
        'Closed Won' => 'Cerrado Ganado',
        'Closed Lost' => 'Cerrado Perdido',
      ),
      'leadSource' => 
      array (
        'Call' => 'Llamada',
        'Email' => 'Correo electrónico',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Partner',
        'Public Relations' => 'Relaciones Públicas',
        'Web Site' => 'Sitio Web',
        'Campaign' => 'Campaña',
        'Other' => 'Otro',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Crear Oportunidad',
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
      'name' => 'Nombre',
      'emailAddress' => 'Correo electrónico',
      'title' => 'Título',
      'website' => 'Sito Web',
      'accountName' => 'Nombre de Cuenta',
      'phoneNumber' => 'Phone',
      'doNotCall' => 'No Llamar',
      'address' => 'Dirección',
      'description' => 'Descripción',
      'phone' => 'Teléfono',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Crear Prospecto',
      'Convert to Lead' => 'Convertir en Lider',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Nombre',
      'parent' => 'Padre',
      'status' => 'Estado',
      'dateStart' => 'Fecha de Comienzo',
      'dateEnd' => 'Fecha de vencimiento',
      'priority' => 'Prioridad',
      'description' => 'Descripción',
      'isOverdue' => 'Atrasado',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Sin Empezar',
        'Started' => 'Comenzado',
        'Completed' => 'Completado',
        'Canceled' => 'Cancelado',
      ),
      'priority' => 
      array (
        'Low' => 'Baja',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Crear Tarea',
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