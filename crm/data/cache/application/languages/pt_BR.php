<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Habilitado',
      'Disabled' => 'Desabilitado',
      'System' => 'Sistema',
      'Users' => 'Usuários',
      'Email' => 'E-mail',
      'Data' => 'Data',
      'Customization' => 'Customização',
      'Available Fields' => 'Campos Disponíveis',
      'Layout' => 'Layout',
      'Add Panel' => 'Adicionar Painel',
      'Add Field' => 'Adicionar Campo',
      'Settings' => 'Preferências',
      'Scheduled Jobs' => 'Atividades agendadas',
      'Upgrade' => 'Atualização',
      'Clear Cache' => 'Limpar Cache',
      'Rebuild' => 'Reconstruir',
      'Teams' => 'Times',
      'Roles' => 'Regras',
      'Outbound Emails' => 'E-mails de Saída',
      'Inbound Emails' => 'E-mails de Entrada',
      'Email Templates' => 'Templates dos E-mails',
      'Import' => 'Importar',
      'Layout Manager' => 'Gerenciar Layout',
      'Field Manager' => 'Gerenciar Campos',
      'User Interface' => 'Interface do Usuário',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalhe',
      'listSmall' => 'List (Pequeno)',
      'detailSmall' => 'Detalhe (Pequeno)',
      'filters' => 'Filtros de Busca',
      'massUpdate' => 'Atualização em massa',
      'relationships' => 'Relacionamentos',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Endereço',
      'array' => 'Array',
      'foreign' => 'Estrangeiro',
      'duration' => 'Duração',
      'password' => 'Password',
      'parsonName' => 'Nome da Pessoa',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bool',
      'currency' => 'Monetário',
      'date' => 'Data',
      'datetime' => 'Data/Hora',
      'email' => 'E-mail',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Telefone',
      'text' => 'Texto',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Arquivo',
      'image' => 'Imagem',
    ),
    'fields' => 
    array (
      'type' => 'Tipe',
      'name' => 'Nome',
      'label' => 'Rótulo',
      'required' => 'Obrigatório',
      'default' => 'Padrão',
      'maxLength' => 'Tamanho máximo',
      'options' => 'Opções (valores raw, não traduzíveis)',
      'after' => 'Antes (field)',
      'before' => 'Após (field)',
      'link' => 'Link',
      'field' => 'Campo',
      'min' => 'Mín',
      'max' => 'Máx',
      'translation' => 'Tradução',
      'previewSize' => 'Tamanho do Preview',
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
      'settings' => 'Configurações gerais do aplicativo.',
      'scheduledJob' => 'Tarefas agendadas que serão executadas pelo cron.',
      'upgrade' => 'Atualizar o EspoCRM.',
      'clearCache' => 'Limpar todo o cache do backend.',
      'rebuild' => 'Reconstruir o backend e limpar o cache.',
      'users' => 'Manutenção de usuários.',
      'teams' => 'Manutenção de Times.',
      'roles' => 'Manutenção de Regras.',
      'outboundEmails' => 'Configuração SMTP para envio de e-mails.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailTemplates' => 'Templates para envio de e-mails.',
      'import' => 'Importar dados de arquivo CSV.',
      'layoutManager' => 'Customizar layouts (listas, detalhes, edição, busca, atualização em massa).',
      'fieldManager' => 'Criar novos campos ou personalizar os existentes.',
      'userInterface' => 'Configurar UI.',
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
      'name' => 'Assunto',
      'parent' => 'Origem',
      'status' => 'Status',
      'dateSent' => 'Data do envio',
      'from' => 'De',
      'to' => 'Para',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Html',
      'body' => 'Corpo',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'selectTemplate' => 'Escolher Template',
      'fromEmailAddress' => 'E-mail do rementente',
      'toEmailAddresses' => 'E-mail do destinatário',
      'emailAddress' => 'Endereço de E-mail',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Rascunho',
      'Sending' => 'Enviando',
      'Sent' => 'Enviado',
      'Archived' => 'Arquivado',
    ),
    'labels' => 
    array (
      'Create Email' => 'Criar e-mail',
      'Compose' => 'Compor',
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
      'Primary' => 'Primário',
      'Opted Out' => 'Cancelado',
      'Invalid' => 'Inválido',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'isHtml' => 'Html',
      'body' => 'Conteúdo',
      'subject' => 'Assunto',
      'attachments' => 'Anexos',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Criar Template de E-mail',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-mail',
      'User' => 'Usuário',
      'Team' => 'Time',
      'Role' => 'Regra',
      'EmailTemplate' => 'Template de E-mail',
      'OutboundEmail' => 'E-mail de Saída',
      'ScheduledJob' => 'Atividade Agendada',
      'Account' => 'Conta',
      'Contact' => 'Contato',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Oportunidade',
      'Meeting' => 'Reunião',
      'Calendar' => 'Calendário',
      'Call' => 'Ligação',
      'Task' => 'Tarefa',
      'Case' => 'Atendimento',
      'InboundEmail' => 'E-mail de Entrada',
      'Prospect' => 'Prospecto',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-mails',
      'User' => 'Usuários',
      'Team' => 'Times',
      'Role' => 'Regras',
      'EmailTemplate' => 'Templates de E-mail',
      'OutboundEmail' => 'E-mails de Saída',
      'ScheduledJob' => 'Tarefas Agendadas',
      'Account' => 'Contas',
      'Contact' => 'Contatos',
      'Lead' => 'Leads',
      'Target' => 'Targets',
      'Opportunity' => 'Oportunidades',
      'Meeting' => 'Reuniões',
      'Calendar' => 'Calendário',
      'Call' => 'Ligações',
      'Task' => 'Tarefas',
      'Case' => 'Atendimentos',
      'InboundEmail' => 'E-mails de Entrada',
      'Prospect' => 'Prospectos',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Mesclar',
      'None' => 'Nenhum',
      'by' => 'por',
      'Saved' => 'Salvo',
      'Error' => 'Erro',
      'Select' => 'Selecionar',
      'Not valid' => 'Inválido',
      'Please wait...' => 'Aguarde...',
      'Please wait' => 'Aguarde',
      'Loading...' => 'carregando...',
      'Uploading...' => 'Enviando...',
      'Sending...' => 'Enviando...',
      'Removed' => 'Removed',
      'Posted' => 'Postado',
      'Linked' => 'Relacionado',
      'Unlinked' => 'Relacionamento removido',
      'Access denied' => 'Acesso negado',
      'Access' => 'Acesso',
      'Are you sure?' => 'Você confirma?',
      'Record has been removed' => 'Registro removido',
      'Wrong username/password' => 'Usuário/senha incorretos',
      'Post cannot be empty' => 'A postagem não pode estar vazia',
      'Removing...' => 'Removendo...',
      'Unlinking...' => 'Removendo relacionamento...',
      'Posting...' => 'Postando...',
      'Username can not be empty!' => 'O usuário não pode estar vazio!',
      'Cache is not enabled' => 'O cache não está habilitado',
      'Cache has been cleared' => 'Cache limpo',
      'Rebuild has been done' => 'Reconstrução concluída',
      'Saving...' => 'Salvando...',
      'Modified' => 'Modificado',
      'Created' => 'Criado',
      'Create' => 'Criar',
      'create' => 'criar',
      'Overview' => 'Visão Geral',
      'Details' => 'Detalhes',
      'Add Filter' => 'Adicionar filtro',
      'Add Dashlet' => 'Adicionar Dashlet',
      'Add' => 'Adicionar',
      'Reset' => 'Resetar',
      'Menu' => 'Menu',
      'More' => 'Mais',
      'Search' => 'Busca',
      'Only My' => 'Apenas meus',
      'Open' => 'Aberto',
      'Admin' => 'Admin',
      'About' => 'Sobre',
      'Refresh' => 'Recarregar',
      'Remove' => 'Remover',
      'Options' => 'Opções',
      'Username' => 'Usuário',
      'Password' => 'Senha',
      'Login' => 'Login',
      'Log Out' => 'Sair',
      'Preferences' => 'Preferências',
      'State' => 'Estado',
      'Street' => 'Logradouro',
      'Country' => 'País',
      'City' => 'Cidade',
      'PostalCode' => 'CEP',
      'Followed' => 'Seguido',
      'Follow' => 'Seguir',
      'Clear Local Cache' => 'Limpar Cache Local',
      'Actions' => 'Ações',
      'Delete' => 'Excluir',
      'Update' => 'Atualizar',
      'Save' => 'Salvar',
      'Edit' => 'Editar',
      'Cancel' => 'Cancelar',
      'Unlink' => 'Remover ligação',
      'Mass Update' => 'Atualização em Massa',
      'Export' => 'Exportar',
      'No Data' => 'Nenhum Dado',
      'All' => 'Tudo',
      'Active' => 'Ativo',
      'Inactive' => 'Inativo',
      'Write your comment here' => 'Escreva seu comentário aqui',
      'Post' => 'Postar',
      'Stream' => 'Fluxo',
      'Show more' => 'Exibir mais',
      'Dashlet Options' => 'Opções do Dashlet',
      'Full Form' => 'Formulári Completo',
      'Insert' => 'Inserir',
      'Person' => 'Pessoa',
      'First Name' => 'Nome',
      'Last Name' => 'Sobrenome',
      'Original' => 'Original',
      'You' => 'Você',
      'you' => 'você',
      'change' => 'modificar',
      'Primary' => 'Primary',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'Activities' => 'Atividades',
      'History' => 'Histórico',
      'Attendees' => 'participantes',
      'Schedule Meeting' => 'Agendar Reunião',
      'Schedule Call' => 'Agendar Ligação',
      'Compose Email' => 'Compor E-mail',
      'Log Meeting' => 'Logar Reunião',
      'Log Call' => 'Logar Ligação',
      'Archive Email' => 'Arquivar E-mail',
      'Create Task' => 'Criar Tarefa',
      'Tasks' => 'Tarefas',
    ),
    'messages' => 
    array (
      'notModified' => 'Você não modificou o registro',
      'duplicate' => 'O registro que você está criando parece estar duplicado',
      'fieldIsRequired' => '{field} é obrigatório',
      'fieldShouldBeEmail' => '{field} deve ser um e-mail válido',
      'fieldShouldBeFloat' => '{field} deve ser um float válido',
      'fieldShouldBeInt' => '{field} deve ser um valor inteiro',
      'fieldShouldBeDate' => '{field} deve ser uma data válida',
      'fieldShouldBeDatetime' => '{field} deve ser uma data/hora válida',
      'fieldShouldAfter' => '{field} deve ser depois de {otherField}',
      'fieldShouldBefore' => '{field} deve ser antes de {otherField}',
      'fieldShouldBeBetween' => '{field} deve estar entre {min} e {max}',
      'fieldShouldBeLess' => '{field} deve ser menos que {value}',
      'fieldShouldBeGreater' => '{field} deve ser maior que {value}',
      'fieldBadPasswordConfirm' => '{field} confirmado impropriamente',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Apenas meus',
      'open' => 'Abertos',
      'active' => 'Ativos',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'firstName' => 'Primeiro Nome',
      'lastName' => 'Sobrenome',
      'salutationName' => 'Saudação',
      'assignedUser' => 'Atribuido ao usuário',
      'emailAddress' => 'E-mail',
      'assignedUserName' => 'Nome de Usuário Designado',
      'teams' => 'Times',
      'createdAt' => 'Criado Em',
      'modifiedAt' => 'Modificado Em',
      'createdBy' => 'Criado Por',
      'modifiedBy' => 'Modificado Por',
      'title' => 'Títle',
      'dateFrom' => 'De',
      'dateTo' => 'Até',
      'autorefreshInterval' => 'Intervalo para auto-atualização',
      'displayRecords' => 'Exibir registros',
      'billingAddressCity' => 'Cidade',
      'billingAddressCountry' => 'País',
      'billingAddressPostalCode' => 'CEP',
      'billingAddressState' => 'Estado',
      'billingAddressStreet' => 'Endereço',
      'addressCity' => 'Cidade',
      'addressStreet' => 'Logradouro',
      'addressCountry' => 'País',
      'addressState' => 'Estado',
      'addressPostalCode' => 'CEP',
      'shippingAddressCity' => 'Cidade (Envio)',
      'shippingAddressStreet' => 'Logradouro (Envio)',
      'shippingAddressCountry' => 'País (Envio)',
      'shippingAddressState' => 'Estado (Envio)',
      'shippingAddressPostalCode' => 'CEP (Envio)',
    ),
    'links' => 
    array (
      'teams' => 'Times',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'leads' => 'Leads',
      'meetings' => 'Reuniões',
      'calls' => 'Ligações',
      'tasks' => 'Tarefas',
      'emails' => 'E-mails',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Fluxo',
      'Leads' => 'Meus Leads',
      'Opportunities' => 'Minhas Oportunidades',
      'Tasks' => 'Minhas Tarefas',
      'Cases' => 'Meus Atendimentos',
      'Calendar' => 'Calendário',
      'OpportunitiesByStage' => 'Oportunidades por Estágio',
      'OpportunitiesByLeadSource' => 'Oportunities por Origem do Lead',
      'SalesByMonth' => 'Vendas Por Mês',
      'SalesPipeline' => 'Funil de Vendas',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} criou {entityType} {entity}',
      'createAssigned' => '{user} criou {entityType} {entity} atribuído a {assignee}',
      'assign' => '{user} atribuiu {entityType} {entity} a {assignee}',
      'post' => '{user} postou em {entityType} {entity}',
      'attach' => '{user} anexou em {entityType} {entity}',
      'status' => '{user} atualizou {field} em {entityType} {entity}',
      'update' => '{user} atualizou {entityType} {entity}',
      'createRelated' => '{user} criou {relatedEntityType} {relatedEntity} atribuido a {entityType} {entity}',
      'emailReceived' => '{entity} foi recebido por {entityType} {entity}',
      'createThis' => '{user} criou {entityType}',
      'createAssignedThis' => '{user} criou {entityType} atribuído a {assignee}',
      'assignThis' => '{user} atribuiu {entityType} a {assignee}',
      'postThis' => '{user} postou',
      'attachThis' => '{user} anexou',
      'statusThis' => '{user} atualilou {field}',
      'updateThis' => '{user} atualizou {entityType}',
      'createRelatedThis' => '{user} criou {relatedEntityType} {relatedEntity} relacionado a {entityType}',
      'emailReceivedThis' => '{entity} foi recebido',
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
        12 => 'Janeiro',
        13 => 'Fevereiro',
        14 => 'Março',
        15 => 'Abril',
        16 => 'Maio',
        17 => 'Junho',
        18 => 'Julho',
        19 => 'Agosto',
        20 => 'Setembro',
        21 => 'Outubro',
        22 => 'Novembro',
        23 => 'Dezembro',
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
        12 => 'Fev',
        13 => 'Abr',
        14 => 'Mai',
        15 => 'Ago',
        16 => 'Set',
        17 => 'Out',
        18 => 'Dez',
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
        7 => 'Domingo',
        8 => 'Segunda',
        9 => 'Terça',
        10 => 'Quarta',
        11 => 'Quinta',
        12 => 'Sexta',
        13 => 'Sábado',
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
        7 => 'Dom',
        8 => 'Seg',
        9 => 'Ter',
        10 => 'Qua',
        11 => 'Qui',
        12 => 'Sex',
        13 => 'Sáb',
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
        7 => 'D',
        8 => 'S',
        9 => 'T',
        10 => 'Q',
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
        'on' => 'Em',
        'notOn' => 'Menos em',
        'after' => 'Anterior',
        'before' => 'Posterior',
        'between' => 'Entre',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Igual',
        'notEquals' => 'Diferente',
        'greaterThan' => 'Maior que',
        'lessThan' => 'Menor que',
        'greaterThanOrEquals' => 'Maior ou igual',
        'lessThanOrEquals' => 'Menor ou igual',
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
        11 => 'Nenhum',
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
      'post' => 'Postagem',
      'attachments' => 'Anexos',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de milhar',
      'decimalMark' => 'Separador decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticação',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Senha',
      'smtpEmailAddress' => 'Endereço de E-mail',
      'exportDelimiter' => 'Delimitador de Exportação',
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
        3 => 'Segunda',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Regras',
    ),
    'links' => 
    array (
      'users' => 'Usuários',
      'teams' => 'Times',
    ),
    'labels' => 
    array (
      'Access' => 'Acesso',
      'Create Role' => 'Criar Regra',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'indefinido',
        'enabled' => 'habilitado',
        'disabled' => 'desabilitado',
      ),
      'levelList' => 
      array (
        'all' => 'tudo',
        'team' => 'time',
        'own' => 'proprio',
        'no' => 'nenhum',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Ler',
      'edit' => 'Editar',
      'delete' => 'Excluir',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'status' => 'Status',
      'job' => 'Tarefa',
      'scheduling' => 'Agendando (notação do crontab)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Agendar Tarefa',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Checar Emails Recebidos',
        'Cleanup' => 'Limpar',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do Espo:',
        'mac' => 'Nota: Adicione esta linha ao arquivo de crontab para executar as tarefas agendadas do Espo:',
        'windows' => 'Nota: Crie um arquivo em lote pcom os seguintes comandos para executar as tarefas agendadas do Espo no agendador de tarefas do Windows:',
        'default' => 'Nota: Adicione este comando Cron Job (Tarefa agendada):',
      ),
      'status' => 
      array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Tempo de execução',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Usar Cache',
      'dateFormat' => 'Formato da Data',
      'timeFormat' => 'Formato da Hora',
      'timeZone' => 'Time Zone',
      'weekStart' => 'Primeiro dia da Semana',
      'thousandSeparator' => 'Separador de Milhar',
      'decimalMark' => 'Deparador Decimal',
      'defaultCurrency' => 'Moeda Padrão',
      'currencyList' => 'Moedas Disponíveis',
      'language' => 'Idioma',
      'companyLogo' => 'Logo da Empresa',
      'smtpServer' => 'Servidor',
      'smtpPort' => 'Porta',
      'smtpAuth' => 'Autenticação',
      'smtpSecurity' => 'Segurança',
      'smtpUsername' => 'Usuário',
      'emailAddress' => 'E-mail',
      'smtpPassword' => 'Senha',
      'outboundEmailFromName' => 'Nome do rementente',
      'outboundEmailFromAddress' => 'E-mail do rementente',
      'outboundEmailIsShared' => 'Compartilhado',
      'recordsPerPage' => 'Registros por Página',
      'recordsPerPageSmall' => 'Registros por Página (Menor)',
      'tabList' => 'Lista de abas',
      'quickCreateList' => 'Lista de Criação Rápida',
      'exportDelimiter' => 'Delimitador de exportação',
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
        3 => 'Segunda',
      ),
    ),
    'labels' => 
    array (
      'System' => 'Sistema',
      'Locale' => 'Idioma',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuração',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'roles' => 'Regras',
    ),
    'links' => 
    array (
      'users' => 'Usuários',
    ),
    'labels' => 
    array (
      'Create Team' => 'Criar Time',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'userName' => 'Usuário',
      'title' => 'Título',
      'isAdmin' => 'Administrador',
      'defaultTeam' => 'Time Padrão',
      'emailAddress' => 'E-mail',
      'phoneNumber' => 'Phone',
      'roles' => 'Regras',
      'password' => 'Senha',
      'passwordConfirm' => 'Confirmação da Senha',
      'newPassword' => 'Novo Password',
      'phone' => 'Telefone',
    ),
    'links' => 
    array (
      'teams' => 'Times',
      'roles' => 'Regras',
    ),
    'labels' => 
    array (
      'Create User' => 'Criar Usuário',
      'Generate' => 'Gerar',
      'Access' => 'Acesso',
      'Preferences' => 'Preferências',
      'Change Password' => 'Trocar Senha',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'A senha será enviada para o email do usuário.',
      'accountInfoEmailSubject' => 'Informações da Conta',
      'accountInfoEmailBody' => 'Informações da sua conta:

Usuário: {userName}
Senha: {password}

{siteUrl}',
      'passwordChanged' => 'A senha foi atualizada',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Endereço de Cobrança',
      'shippingAddress' => 'Endereço de Entrega',
      'description' => 'Descrição',
      'sicCode' => 'Código SIC',
      'industry' => 'Indústria',
      'type' => 'Tipo',
      'contactRole' => 'Role',
      'phone' => 'Telefone',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
      'contacts' => 'Contatos',
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimentos',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Cliente',
        'Investor' => 'Investidor',
        'Partner' => 'Parceiro',
        'Reseller' => 'Revendedor',
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
      'Create Account' => 'Criar Conta',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Mês',
      'week' => 'Semana',
      'day' => 'Dia',
      'agendaWeek' => 'Semana',
      'agendaDay' => 'Dia',
    ),
    'labels' => 
    array (
      'Today' => 'Hoje',
      'Create' => 'Criar',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data Final',
      'direction' => 'Direção',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planejado',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada',
      ),
      'direction' => 
      array (
        'Outbound' => 'Saída',
        'Inbound' => 'Entrada',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Criar Ligação',
      'Set Held' => 'Marcar como realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar Convites',
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
      'name' => 'Nome',
      'number' => 'Número',
      'status' => 'Status',
      'account' => 'Conta',
      'contact' => 'Contato',
      'priority' => 'Prioridade',
      'type' => 'Tipo',
      'description' => 'Descrição',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Designado',
        'Pending' => 'Pendente',
        'Closed' => 'Fechado',
        'Rejected' => 'Rejeitado',
        'Duplicate' => 'Duplicado',
      ),
      'priority' => 
      array (
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
      'type' => 
      array (
        'Question' => 'Questão',
        'Incident' => 'Incidente',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Criar Atendimento',
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
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'account' => 'Conta',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Tipo de Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Role',
      'description' => 'Descrição',
      'phone' => 'Telefone',
      'phoneOffice' => 'Telefone (Comercial)',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunidades',
      'cases' => 'Atendimento',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Criar Contato',
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
      'name' => 'Nome',
      'team' => 'Time',
      'status' => 'Status',
      'assignToUser' => 'Atribuído a',
      'host' => 'Host',
      'username' => 'Usuário',
      'password' => 'Senha',
      'port' => 'Porta',
      'monitoredFolders' => 'Pastas Monitoradas',
      'trashFolder' => 'Pasta da Lixeira',
      'ssl' => 'SSL',
      'createCase' => 'Criar Atendimento',
      'reply' => 'Responder',
      'caseDistribution' => 'Distribuição do Atendimento',
      'replyEmailTemplate' => 'Template do E-mail de Resposta',
      'replyFromAddress' => 'E-mail de Resposta (From)',
      'replyFromName' => 'Nome de Resposta (FromName)',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Ativo',
        'Inactive' => 'Inativo',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Atribuição Direta',
        'Round-Robin' => 'Rodízio',
        'Least-Busy' => 'Menos Ocupado',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Criar E-mail de Entrada',
      'IMAP' => 'IMAP',
      'Actions' => 'Ações',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Não foi possível conectar ao servidor IMAP',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertido Para',
      'Create Lead' => 'Criar Lead',
      'Convert' => 'Converter',
    ),
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'accountName' => 'Conta',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'status' => 'Status',
      'source' => 'Origem',
      'opportunityAmount' => 'Valor da Oportunidade',
      'description' => 'Descrição',
      'createdAccount' => 'Conta',
      'createdContact' => 'Contato',
      'createdOpportunity' => 'Oportunidade',
      'phone' => 'Telefone',
      'phoneOffice' => 'Telefone (Comercial)',
      'fax' => 'Fax',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Novo',
        'Assigned' => 'Atribuído',
        'In Process' => 'Em Processo',
        'Converted' => 'Convertido',
        'Recycled' => 'Reciclado',
        'Dead' => 'Morto',
      ),
      'source' => 
      array (
        'Call' => 'Ligação',
        'Email' => 'E-mail',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Parceiro',
        'Public Relations' => 'Relacionamento',
        'Web Site' => 'Website',
        'Campaign' => 'Campanha',
        'Other' => 'Outro',
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
      'name' => 'Nome',
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Data final',
      'duration' => 'Duração',
      'description' => 'Descrição',
      'users' => 'Usuários',
      'contacts' => 'Contatos',
      'leads' => 'Leads',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planejada',
        'Held' => 'Realizada',
        'Not Held' => 'Não Realizada',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Criar Reunião',
      'Set Held' => 'Marcar como realizada',
      'Set Not Held' => 'Marcar como não realizada',
      'Send Invitations' => 'Enviar Convites',
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
      'name' => 'Nome',
      'account' => 'Conta',
      'stage' => 'Estágio',
      'amount' => 'Valor',
      'probability' => 'Probabilidade, %',
      'leadSource' => 'Lead de Origem',
      'doNotCall' => 'Não ligar',
      'closeDate' => 'Data para Fechamento',
      'contacts' => 'Contacts',
      'description' => 'Descrição',
    ),
    'links' => 
    array (
      'contacts' => 'Contatos',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectando',
        'Qualification' => 'Qualificação',
        'Needs Analysis' => 'Necessita de Análise',
        'Value Proposition' => 'Proposta de Valor',
        'Id. Decision Makers' => 'Identificação dos Decisores',
        'Perception Analysis' => 'Análise da Percepção',
        'Proposal/Price Quote' => 'Proposta/Cotação',
        'Negotiation/Review' => 'Negociação/Revisão',
        'Closed Won' => 'Ganha',
        'Closed Lost' => 'Perdida',
      ),
      'leadSource' => 
      array (
        'Call' => 'Ligação',
        'Email' => 'E-mail',
        'Existing Customer' => 'Cliente Existente',
        'Partner' => 'Parceiro',
        'Public Relations' => 'Relacionamento',
        'Web Site' => 'Website',
        'Campaign' => 'Campanha',
        'Other' => 'Outros',
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
      'parent' => 'Relação',
      'status' => 'Status',
      'dateStart' => 'Data de Início',
      'dateEnd' => 'Até a Data',
      'priority' => 'Prioridade',
      'description' => 'Descrição',
      'isOverdue' => 'Atrasada',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Não Iniciada',
        'Started' => 'Iniciada',
        'Completed' => 'Completa',
        'Canceled' => 'Cancelada',
      ),
      'priority' => 
      array (
        'Low' => 'Baixa',
        'Normal' => 'Normal',
        'High' => 'Alta',
        'Urgent' => 'Urgente',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Criar Tarefa',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'completed' => 'Completed',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
    ),
  ),
  'Prospect' => 
  array (
    'fields' => 
    array (
      'name' => 'Nome',
      'emailAddress' => 'E-mail',
      'title' => 'Cargo',
      'website' => 'Website',
      'accountName' => 'Conta',
      'phone' => 'Telefone',
      'phoneOffice' => 'Telefone (Comercial)',
      'fax' => 'Fax',
      'doNotCall' => 'Não Ligar',
      'address' => 'Endereço',
      'description' => 'Descrição',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Prospect' => 'Criar Prospecto',
      'Convert to Lead' => 'Converter para Lead',
    ),
  ),
);

?>