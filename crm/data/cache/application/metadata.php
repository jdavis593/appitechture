<?php

return array (
  'app' => 
  array (
    'adminPanel' => 
    array (
      'system' => 
      array (
        'label' => 'System',
        'items' => 
        array (
          0 => 
          array (
            'url' => '#Admin/settings',
            'label' => 'Settings',
            'description' => 'settings',
          ),
          1 => 
          array (
            'url' => '#Admin/authentication',
            'label' => 'Authentication',
            'description' => 'authentication',
          ),
          2 => 
          array (
            'url' => '#ScheduledJob',
            'label' => 'Scheduled Jobs',
            'description' => 'scheduledJob',
          ),
          3 => 
          array (
            'url' => '#Admin/upgrade',
            'label' => 'Upgrade',
            'description' => 'upgrade',
          ),
          4 => 
          array (
            'url' => '#Admin/clearCache',
            'label' => 'Clear Cache',
            'description' => 'clearCache',
          ),
          5 => 
          array (
            'url' => '#Admin/rebuild',
            'label' => 'Rebuild',
            'description' => 'rebuild',
          ),
        ),
      ),
      'users' => 
      array (
        'label' => 'Users',
        'items' => 
        array (
          0 => 
          array (
            'url' => '#User',
            'label' => 'Users',
            'description' => 'users',
          ),
          1 => 
          array (
            'url' => '#Team',
            'label' => 'Teams',
            'description' => 'teams',
          ),
          2 => 
          array (
            'url' => '#Role',
            'label' => 'Roles',
            'description' => 'roles',
          ),
          3 => 
          array (
            'url' => '#Admin/authTokens',
            'label' => 'Auth Tokens',
            'description' => 'authTokens',
          ),
        ),
      ),
      'email' => 
      array (
        'label' => 'Email',
        'items' => 
        array (
          0 => 
          array (
            'url' => '#Admin/outboundEmail',
            'label' => 'Outbound Emails',
            'description' => 'outboundEmails',
          ),
          1 => 
          array (
            'url' => '#InboundEmail',
            'label' => 'Inbound Emails',
            'description' => 'inboundEmails',
          ),
          2 => 
          array (
            'url' => '#EmailTemplate',
            'label' => 'Email Templates',
            'description' => 'emailTemplates',
          ),
        ),
      ),
      'data' => 
      array (
        'label' => 'Data',
        'items' => 
        array (
          0 => 
          array (
            'url' => '#Import',
            'label' => 'Import',
            'description' => 'import',
          ),
        ),
      ),
      'customization' => 
      array (
        'label' => 'Customization',
        'items' => 
        array (
          0 => 
          array (
            'url' => '#Admin/layouts',
            'label' => 'Layout Manager',
            'description' => 'layoutManager',
          ),
          1 => 
          array (
            'url' => '#Admin/fieldManager',
            'label' => 'Field Manager',
            'description' => 'fieldManager',
          ),
          2 => 
          array (
            'url' => '#Admin/userInterface',
            'label' => 'User Interface',
            'description' => 'userInterface',
          ),
        ),
      ),
    ),
    'defaultDashboardLayout' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'Stream',
          'id' => 'd4',
        ),
        1 => 
        array (
          'name' => 'Calendar',
          'id' => 'd1',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'Tasks',
          'id' => 'd3',
        ),
      ),
    ),
  ),
  'clientDefs' => 
  array (
    'AuthToken' => 
    array (
      'recordViews' => 
      array (
        'list' => 'Admin.AuthToken.Record.List',
      ),
    ),
    'Email' => 
    array (
      'controller' => 'Controllers.Record',
      'model' => 'Models.Email',
      'views' => 
      array (
        'list' => 'Email.List',
      ),
      'menu' => 
      array (
        'list' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'label' => 'Compose',
              'action' => 'composeEmail',
              'style' => 'danger',
              'acl' => 'edit',
            ),
          ),
        ),
      ),
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'archived',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Archived',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'sent',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Sent',
              ),
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'EmailTemplate' => 
    array (
      'controller' => 'Controllers.Record',
      'recordViews' => 
      array (
        'edit' => 'EmailTemplate.Record.Edit',
        'detail' => 'EmailTemplate.Record.Detail',
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Note' => 
    array (
      'collection' => 'Collections.Note',
      'recordViews' => 
      array (
        'edit' => 'Note.Record.Edit',
        'editQuick' => 'Note.Record.Edit',
      ),
    ),
    'Preferences' => 
    array (
      'recordViews' => 
      array (
        'edit' => 'Preferences.Record.Edit',
      ),
      'views' => 
      array (
        'edit' => 'Preferences.Edit',
      ),
    ),
    'Role' => 
    array (
      'recordViews' => 
      array (
        'detail' => 'Role.Record.Detail',
        'edit' => 'Role.Record.Edit',
        'editQuick' => 'Role.Record.Edit',
      ),
      'relationshipPanels' => 
      array (
        'users' => 
        array (
          'create' => false,
        ),
        'teams' => 
        array (
          'create' => false,
        ),
      ),
    ),
    'ScheduledJob' => 
    array (
      'controller' => 'Controllers.Record',
      'relationshipPanels' => 
      array (
        'log' => 
        array (
          'readOnly' => true,
        ),
      ),
      'views' => 
      array (
        'list' => 'ScheduledJob.List',
      ),
    ),
    'ScheduledJobLogRecord' => 
    array (
      'controller' => 'Controllers.Record',
    ),
    'Team' => 
    array (
      'relationshipPanels' => 
      array (
        'users' => 
        array (
          'create' => false,
        ),
      ),
      'recordViews' => 
      array (
        'detail' => 'Team.Detail',
        'edit' => 'Team.Edit',
      ),
    ),
    'User' => 
    array (
      'recordViews' => 
      array (
        'detail' => 'User.Record.Detail',
        'edit' => 'User.Record.Edit',
        'editQuick' => 'User.Record.Edit',
      ),
    ),
    'Account' => 
    array (
      'controller' => 'Controllers.Record',
      'views' => 
      array (
        'detail' => 'Crm:Account.Detail',
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'Crm:Record.Panels.Activities',
          ),
          1 => 
          array (
            'name' => 'history',
            'label' => 'History',
            'view' => 'Crm:Record.Panels.History',
          ),
          2 => 
          array (
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'Crm:Record.Panels.Tasks',
          ),
        ),
      ),
      'relationshipPanels' => 
      array (
        'contacts' => 
        array (
          'actions' => 
          array (
          ),
          'layout' => 'listForAccount',
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Call' => 
    array (
      'controller' => 'Controllers.Record',
      'views' => 
      array (
        'detail' => 'Crm:Call.Detail',
      ),
      'menu' => 
      array (
        'detail' => 
        array (
          'dropdown' => 
          array (
            0 => 
            array (
              'label' => 'Duplicate',
              'action' => 'duplicate',
              'acl' => 'edit',
            ),
          ),
        ),
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'Record.Panels.Side',
            'options' => 
            array (
              'fields' => 
              array (
                0 => 'users',
                1 => 'contacts',
                2 => 'leads',
              ),
              'mode' => 'detail',
            ),
          ),
        ),
        'edit' => 
        array (
          0 => 
          array (
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'Record.Panels.Side',
            'options' => 
            array (
              'fields' => 
              array (
                0 => 'users',
                1 => 'contacts',
                2 => 'leads',
              ),
              'mode' => 'edit',
            ),
          ),
        ),
      ),
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'planned',
          'style' => 'primary',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Planned',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'held',
          'style' => 'success',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Held',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'todays',
          'data' => 
          array (
            'dateStart' => 
            array (
              'type' => 'today',
              'dateTime' => true,
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Case' => 
    array (
      'controller' => 'Controllers.Record',
      'bottomPanels' => 
      array (
        'detail' => 
        array (
        ),
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'Crm:Record.Panels.Activities',
          ),
          1 => 
          array (
            'name' => 'history',
            'label' => 'History',
            'view' => 'Crm:Record.Panels.History',
          ),
          2 => 
          array (
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'Crm:Record.Panels.Tasks',
          ),
        ),
      ),
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'open',
          'style' => 'primary',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'New',
                1 => 'Assigned',
                2 => 'Pending',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'closed',
          'style' => 'success',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Closed',
              ),
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Contact' => 
    array (
      'controller' => 'Controllers.Record',
      'views' => 
      array (
        'detail' => 'Crm:Contact.Detail',
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'Crm:Record.Panels.Activities',
          ),
          1 => 
          array (
            'name' => 'history',
            'label' => 'History',
            'view' => 'Crm:Record.Panels.History',
          ),
          2 => 
          array (
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'Crm:Record.Panels.Tasks',
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'InboundEmail' => 
    array (
      'recordViews' => 
      array (
        'detail' => 'Crm:InboundEmail.Record.Detail',
        'edit' => 'Crm:InboundEmail.Record.Edit',
      ),
    ),
    'Lead' => 
    array (
      'controller' => 'Crm:Controllers.Lead',
      'views' => 
      array (
        'detail' => 'Crm:Lead.Detail',
      ),
      'recordViews' => 
      array (
        'detail' => 'Crm:Lead.Record.Detail',
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'Crm:Record.Panels.Activities',
          ),
          1 => 
          array (
            'name' => 'history',
            'label' => 'History',
            'view' => 'Crm:Record.Panels.History',
          ),
          2 => 
          array (
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'Crm:Record.Panels.Tasks',
          ),
        ),
      ),
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'active',
          'style' => 'primary',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'New',
                1 => 'Assigned',
                2 => 'In Process',
              ),
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Meeting' => 
    array (
      'controller' => 'Controllers.Record',
      'views' => 
      array (
        'detail' => 'Crm:Meeting.Detail',
      ),
      'menu' => 
      array (
        'detail' => 
        array (
          'dropdown' => 
          array (
            0 => 
            array (
              'label' => 'Duplicate',
              'action' => 'duplicate',
              'acl' => 'edit',
            ),
          ),
        ),
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'Record.Panels.Side',
            'options' => 
            array (
              'fields' => 
              array (
                0 => 'users',
                1 => 'contacts',
                2 => 'leads',
              ),
              'mode' => 'detail',
            ),
          ),
        ),
        'edit' => 
        array (
          0 => 
          array (
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'Record.Panels.Side',
            'options' => 
            array (
              'fields' => 
              array (
                0 => 'users',
                1 => 'contacts',
                2 => 'leads',
              ),
              'mode' => 'edit',
            ),
          ),
        ),
      ),
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'planned',
          'style' => 'primary',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Planned',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'held',
          'style' => 'success',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Held',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'todays',
          'data' => 
          array (
            'dateStart' => 
            array (
              'type' => 'today',
              'dateTime' => true,
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Opportunity' => 
    array (
      'controller' => 'Controllers.Record',
      'views' => 
      array (
        'detail' => 'Crm:Opportunity.Detail',
      ),
      'sidePanels' => 
      array (
        'detail' => 
        array (
          0 => 
          array (
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'Crm:Record.Panels.Activities',
          ),
          1 => 
          array (
            'name' => 'history',
            'label' => 'History',
            'view' => 'Crm:Record.Panels.History',
          ),
          2 => 
          array (
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'Crm:Record.Panels.Tasks',
          ),
        ),
      ),
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'open',
          'style' => 'primary',
          'data' => 
          array (
            'stage' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Prospecting',
                1 => 'Qualification',
                2 => 'Needs Analysis',
                3 => 'Value Proposition',
                4 => 'Id. Decision Makers',
                5 => 'Perception Analysis',
                6 => 'Proposal/Price Quote',
                7 => 'Negotiation/Review',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'won',
          'style' => 'success',
          'data' => 
          array (
            'stage' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Closed Won',
              ),
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Target' => 
    array (
      'controller' => 'Controllers.Record',
      'views' => 
      array (
        'detail' => 'Crm:Target.Detail',
      ),
      'menu' => 
      array (
        'detail' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'label' => 'Convert to Lead',
              'action' => 'convertToLead',
              'acl' => 'edit',
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
    'Task' => 
    array (
      'controller' => 'Controllers.Record',
      'presetFilters' => 
      array (
        0 => 
        array (
          'name' => 'active',
          'style' => 'primary',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Not Started',
                1 => 'Started',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'completed',
          'style' => 'success',
          'data' => 
          array (
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Completed',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'todays',
          'data' => 
          array (
            'dateEnd' => 
            array (
              'type' => 'today',
              'dateTime' => true,
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'overdue',
          'style' => 'danger',
          'data' => 
          array (
            'dateEnd' => 
            array (
              'type' => 'past',
              'dateTime' => true,
            ),
            'status' => 
            array (
              'type' => 'in',
              'value' => 
              array (
                0 => 'Not Started',
                1 => 'Started',
              ),
            ),
          ),
        ),
      ),
      'boolFilters' => 
      array (
        0 => 'onlyMy',
      ),
    ),
  ),
  'dashlets' => 
  array (
    'Stream' => 
    array (
      'module' => false,
    ),
    'Calendar' => 
    array (
      'module' => 'Crm',
    ),
    'Cases' => 
    array (
      'module' => 'Crm',
    ),
    'Leads' => 
    array (
      'module' => 'Crm',
    ),
    'Opportunities' => 
    array (
      'module' => 'Crm',
    ),
    'OpportunitiesByLeadSource' => 
    array (
      'module' => 'Crm',
    ),
    'OpportunitiesByStage' => 
    array (
      'module' => 'Crm',
    ),
    'SalesByMonth' => 
    array (
      'module' => 'Crm',
    ),
    'SalesPipeline' => 
    array (
      'module' => 'Crm',
    ),
    'Tasks' => 
    array (
      'module' => 'Crm',
    ),
  ),
  'entityDefs' => 
  array (
    'Attachment' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'type' => 
        array (
          'type' => 'varchar',
          'maxLength' => 36,
        ),
        'size' => 
        array (
          'type' => 'int',
          'min' => 0,
        ),
        'parent' => 
        array (
          'type' => 'linkParent',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'contents' => 
        array (
          'type' => 'text',
          'notStorable' => true,
        ),
        'global' => 
        array (
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'parent' => 
        array (
          'type' => 'belongsToParent',
          'foreign' => 'attachments',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'AuthToken' => 
    array (
      'fields' => 
      array (
        'token' => 
        array (
          'type' => 'varchar',
          'maxLength' => '36',
        ),
        'hash' => 
        array (
          'type' => 'varchar',
          'maxLength' => '36',
          'index' => true,
        ),
        'userId' => 
        array (
          'type' => 'varchar',
          'maxLength' => '36',
        ),
        'user' => 
        array (
          'type' => 'link',
        ),
        'ipAddress' => 
        array (
          'type' => 'varchar',
          'maxLength' => '36',
        ),
        'lastAccess' => 
        array (
          'type' => 'datetime',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'user' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'lastAccess',
        'asc' => false,
      ),
    ),
    'Currency' => 
    array (
      'fields' => 
      array (
        'rate' => 
        array (
          'type' => 'float',
        ),
      ),
    ),
    'Email' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'subject' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'db' => false,
        ),
        'fromName' => 
        array (
          'type' => 'varchar',
        ),
        'from' => 
        array (
          'type' => 'varchar',
          'db' => false,
          'required' => true,
        ),
        'to' => 
        array (
          'type' => 'varchar',
          'db' => false,
          'required' => true,
        ),
        'cc' => 
        array (
          'type' => 'varchar',
          'db' => false,
        ),
        'bcc' => 
        array (
          'type' => 'varchar',
          'db' => false,
        ),
        'emailAddress' => 
        array (
          'type' => 'base',
          'db' => false,
        ),
        'fromEmailAddress' => 
        array (
          'type' => 'link',
          'view' => 'Email.Fields.FromEmailAddress',
        ),
        'toEmailAddresses' => 
        array (
          'type' => 'linkMultiple',
        ),
        'ccEmailAddresses' => 
        array (
          'type' => 'linkMultiple',
        ),
        'bodyPlain' => 
        array (
          'type' => 'text',
          'readOnly' => true,
        ),
        'body' => 
        array (
          'type' => 'text',
          'view' => 'Fields.Wysiwyg',
        ),
        'isHtml' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Draft',
            1 => 'Sending',
            2 => 'Sent',
            3 => 'Archived',
          ),
          'readOnly' => true,
          'default' => 'Archived',
        ),
        'attachments' => 
        array (
          'type' => 'linkMultiple',
          'view' => 'Fields.AttachmentMultiple',
        ),
        'parent' => 
        array (
          'type' => 'linkParent',
        ),
        'dateSent' => 
        array (
          'type' => 'datetime',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
        'account' => 
        array (
          'type' => 'link',
          'disabled' => true,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'attachments' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'foreign' => 'parent',
        ),
        'parent' => 
        array (
          'type' => 'belongsToParent',
          'entityList' => 
          array (
            0 => 'Account',
            1 => 'Lead',
            2 => 'Opportunity',
            3 => 'Case',
          ),
          'foreign' => 'emails',
        ),
        'fromEmailAddress' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'EmailAddress',
        ),
        'toEmailAddresses' => 
        array (
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'EmailEmailAddress',
          'conditions' => 
          array (
            'addressType' => 'to',
          ),
          'additionalColumns' => 
          array (
            'addressType' => 
            array (
              'type' => 'varchar',
              'len' => '4',
            ),
          ),
        ),
        'ccEmailAddresses' => 
        array (
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'EmailEmailAddress',
          'conditions' => 
          array (
            'addressType' => 'cc',
          ),
          'additionalColumns' => 
          array (
            'addressType' => 
            array (
              'type' => 'varchar',
              'len' => '4',
            ),
          ),
        ),
        'bccEmailAddresses' => 
        array (
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'EmailEmailAddress',
          'conditions' => 
          array (
            'addressType' => 'bcc',
          ),
          'additionalColumns' => 
          array (
            'addressType' => 
            array (
              'type' => 'varchar',
              'len' => '4',
            ),
          ),
        ),
        'account' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'dateSent',
        'asc' => false,
      ),
    ),
    'EmailAddress' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'lower' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'invalid' => 
        array (
          'type' => 'bool',
        ),
        'optOut' => 
        array (
          'type' => 'bool',
        ),
      ),
      'links' => 
      array (
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'EmailTemplate' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'subject' => 
        array (
          'type' => 'varchar',
        ),
        'body' => 
        array (
          'type' => 'text',
          'view' => 'Fields.Wysiwyg',
        ),
        'isHtml' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
        'attachments' => 
        array (
          'type' => 'linkMultiple',
          'view' => 'Fields.AttachmentMultiple',
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'attachments' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'foreign' => 'parent',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'Job' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Pending',
            1 => 'Running',
            2 => 'Success',
            3 => 'Failed',
          ),
          'default' => 'Pending',
        ),
        'executeTime' => 
        array (
          'type' => 'datetime',
          'required' => true,
        ),
        'serviceName' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'len' => 100,
        ),
        'method' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'len' => 100,
        ),
        'data' => 
        array (
          'type' => 'text',
        ),
        'scheduledJob' => 
        array (
          'type' => 'link',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'scheduledJob' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'ScheduledJob',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'Note' => 
    array (
      'fields' => 
      array (
        'post' => 
        array (
          'type' => 'text',
        ),
        'data' => 
        array (
          'type' => 'text',
        ),
        'type' => 
        array (
          'type' => 'varchar',
        ),
        'parent' => 
        array (
          'type' => 'linkParent',
        ),
        'attachments' => 
        array (
          'type' => 'linkMultiple',
          'view' => 'Stream.Fields.AttachmentMultiple',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'attachments' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'relationName' => 'NoteAttachments',
          'foreign' => 'parent',
        ),
        'parent' => 
        array (
          'type' => 'belongsToParent',
          'foreign' => 'notes',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
      'streamRelated' => 
      array (
        'Account' => 
        array (
          0 => 'meetings',
          1 => 'calls',
          2 => 'tasks',
          3 => 'opportunities',
        ),
        'Contact' => 
        array (
          0 => 'meetings',
          1 => 'calls',
          2 => 'tasks',
        ),
        'Lead' => 
        array (
          0 => 'meetings',
          1 => 'calls',
          2 => 'tasks',
        ),
        'Opportunity' => 
        array (
          0 => 'meetings',
          1 => 'calls',
          2 => 'tasks',
        ),
        'Case' => 
        array (
          0 => 'meetings',
          1 => 'calls',
          2 => 'tasks',
        ),
      ),
    ),
    'Notification' => 
    array (
      'fields' => 
      array (
        'data' => 
        array (
          'type' => 'text',
        ),
        'type' => 
        array (
          'type' => 'varchar',
        ),
        'read' => 
        array (
          'type' => 'bool',
        ),
        'user' => 
        array (
          'type' => 'link',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'user' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'OutboundEmail' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'server' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'port' => 
        array (
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'max' => 9999,
          'default' => 25,
        ),
        'auth' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
        'security' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'SSL',
            2 => 'TLS',
          ),
        ),
        'username' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'password' => 
        array (
          'type' => 'password',
        ),
        'fromName' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'fromAddress' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'user' => 
        array (
          'type' => 'link',
        ),
      ),
      'links' => 
      array (
        'user' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
      ),
    ),
    'PhoneNumber' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 36,
        ),
        'type' => 
        array (
          'type' => 'enum',
        ),
      ),
      'links' => 
      array (
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'Preferences' => 
    array (
      'fields' => 
      array (
        'timeZone' => 
        array (
          'type' => 'enum',
          'detault' => 'UTC',
        ),
        'dateFormat' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'MM/DD/YYYY',
            1 => 'YYYY-MM-DD',
            2 => 'DD.MM.YYYY',
          ),
          'default' => 'MM/DD/YYYY',
        ),
        'timeFormat' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'HH:mm',
            1 => 'hh:mma',
            2 => 'hh:mmA',
            3 => 'hh:mm A',
            4 => 'hh:mm a',
          ),
          'default' => 'HH:mm',
        ),
        'weekStart' => 
        array (
          'type' => 'enumInt',
          'options' => 
          array (
            0 => 0,
            1 => 1,
          ),
          'default' => 0,
        ),
        'thousandSeparator' => 
        array (
          'type' => 'varchar',
          'default' => ',',
          'maxLength' => 1,
          'view' => 'Settings.Fields.ThousandSeparator',
        ),
        'decimalMark' => 
        array (
          'type' => 'varchar',
          'default' => '.',
          'required' => true,
          'maxLength' => 1,
        ),
        'defaultCurrency' => 
        array (
          'type' => 'enum',
          'default' => 'USD',
        ),
        'dashboardLayout' => 
        array (
          'type' => 'text',
        ),
        'dashletOptions' => 
        array (
          'type' => 'text',
        ),
        'presetFilters' => 
        array (
          'type' => 'text',
        ),
        'smtpEmailAddress' => 
        array (
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'Preferences.Fields.SmtpEmailAddress',
        ),
        'smtpServer' => 
        array (
          'type' => 'varchar',
        ),
        'smtpPort' => 
        array (
          'type' => 'int',
          'min' => 0,
          'max' => 9999,
          'default' => 25,
        ),
        'smtpAuth' => 
        array (
          'type' => 'bool',
          'default' => false,
        ),
        'smtpSecurity' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'SSL',
            2 => 'TLS',
          ),
        ),
        'smtpUsername' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'smtpPassword' => 
        array (
          'type' => 'password',
        ),
        'language' => 
        array (
          'type' => 'enum',
          'default' => 'en_US',
          'options' => 
          array (
            0 => 'en_US',
            1 => 'de_DE',
            2 => 'es_ES',
            3 => 'fr_FR',
            4 => 'tr_TR',
            5 => 'ro_RO',
            6 => 'pt_BR',
            7 => 'vi_VN',
          ),
        ),
        'exportDelimiter' => 
        array (
          'type' => 'varchar',
          'default' => ',',
          'required' => true,
          'maxLength' => 1,
        ),
      ),
    ),
    'Role' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'maxLength' => 150,
          'required' => true,
          'type' => 'varchar',
        ),
        'data' => 
        array (
          'type' => 'text',
        ),
      ),
      'links' => 
      array (
        'users' => 
        array (
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'roles',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'roles',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'ScheduledJob' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'job' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'view' => 'ScheduledJob.Fields.Job',
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Active',
            1 => 'Inactive',
          ),
        ),
        'scheduling' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'view' => 'ScheduledJob.Fields.Scheduling',
          'default' => '* * * * *',
        ),
        'lastRun' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'log' => 
        array (
          'type' => 'hasMany',
          'entity' => 'ScheduledJobLogRecord',
          'foreign' => 'scheduledJob',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'ScheduledJobLogRecord' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'readOnly' => true,
        ),
        'status' => 
        array (
          'type' => 'varchar',
          'readOnly' => true,
        ),
        'executionTime' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'scheduledJob' => 
        array (
          'type' => 'link',
        ),
      ),
      'links' => 
      array (
        'scheduledJob' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'ScheduledJob',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'executionTime',
        'asc' => false,
      ),
    ),
    'Settings' => 
    array (
      'fields' => 
      array (
        'useCache' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
        'recordsPerPage' => 
        array (
          'type' => 'int',
          'minValue' => 1,
          'maxValue' => 1000,
          'default' => 20,
          'required' => true,
        ),
        'recordsPerPageSmall' => 
        array (
          'type' => 'int',
          'minValue' => 1,
          'maxValue' => 100,
          'default' => 10,
          'required' => true,
        ),
        'timeZone' => 
        array (
          'type' => 'enum',
          'detault' => 'UTC',
          'options' => 
          array (
            0 => 'UTC',
            1 => 'Africa/Abidjan',
            2 => 'Africa/Accra',
            3 => 'Africa/Addis_Ababa',
            4 => 'Africa/Algiers',
            5 => 'Africa/Asmara',
            6 => 'Africa/Bamako',
            7 => 'Africa/Bangui',
            8 => 'Africa/Banjul',
            9 => 'Africa/Bissau',
            10 => 'Africa/Blantyre',
            11 => 'Africa/Brazzaville',
            12 => 'Africa/Bujumbura',
            13 => 'Africa/Cairo',
            14 => 'Africa/Casablanca',
            15 => 'Africa/Ceuta',
            16 => 'Africa/Conakry',
            17 => 'Africa/Dakar',
            18 => 'Africa/Dar_es_Salaam',
            19 => 'Africa/Djibouti',
            20 => 'Africa/Douala',
            21 => 'Africa/El_Aaiun',
            22 => 'Africa/Freetown',
            23 => 'Africa/Gaborone',
            24 => 'Africa/Harare',
            25 => 'Africa/Johannesburg',
            26 => 'Africa/Juba',
            27 => 'Africa/Kampala',
            28 => 'Africa/Khartoum',
            29 => 'Africa/Kigali',
            30 => 'Africa/Kinshasa',
            31 => 'Africa/Lagos',
            32 => 'Africa/Libreville',
            33 => 'Africa/Lome',
            34 => 'Africa/Luanda',
            35 => 'Africa/Lubumbashi',
            36 => 'Africa/Lusaka',
            37 => 'Africa/Malabo',
            38 => 'Africa/Maputo',
            39 => 'Africa/Maseru',
            40 => 'Africa/Mbabane',
            41 => 'Africa/Mogadishu',
            42 => 'Africa/Monrovia',
            43 => 'Africa/Nairobi',
            44 => 'Africa/Ndjamena',
            45 => 'Africa/Niamey',
            46 => 'Africa/Nouakchott',
            47 => 'Africa/Ouagadougou',
            48 => 'Africa/Porto-Novo',
            49 => 'Africa/Sao_Tome',
            50 => 'Africa/Tripoli',
            51 => 'Africa/Tunis',
            52 => 'Africa/Windhoek',
            53 => 'America/Adak',
            54 => 'America/Anchorage',
            55 => 'America/Anguilla',
            56 => 'America/Antigua',
            57 => 'America/Araguaina',
            58 => 'America/Argentina/Buenos_Aires',
            59 => 'America/Argentina/Catamarca',
            60 => 'America/Argentina/Cordoba',
            61 => 'America/Argentina/Jujuy',
            62 => 'America/Argentina/La_Rioja',
            63 => 'America/Argentina/Mendoza',
            64 => 'America/Argentina/Rio_Gallegos',
            65 => 'America/Argentina/Salta',
            66 => 'America/Argentina/San_Juan',
            67 => 'America/Argentina/San_Luis',
            68 => 'America/Argentina/Tucuman',
            69 => 'America/Argentina/Ushuaia',
            70 => 'America/Aruba',
            71 => 'America/Asuncion',
            72 => 'America/Atikokan',
            73 => 'America/Bahia',
            74 => 'America/Bahia_Banderas',
            75 => 'America/Barbados',
            76 => 'America/Belem',
            77 => 'America/Belize',
            78 => 'America/Blanc-Sablon',
            79 => 'America/Boa_Vista',
            80 => 'America/Bogota',
            81 => 'America/Boise',
            82 => 'America/Cambridge_Bay',
            83 => 'America/Campo_Grande',
            84 => 'America/Cancun',
            85 => 'America/Caracas',
            86 => 'America/Cayenne',
            87 => 'America/Cayman',
            88 => 'America/Chicago',
            89 => 'America/Chihuahua',
            90 => 'America/Costa_Rica',
            91 => 'America/Creston',
            92 => 'America/Cuiaba',
            93 => 'America/Curacao',
            94 => 'America/Danmarkshavn',
            95 => 'America/Dawson',
            96 => 'America/Dawson_Creek',
            97 => 'America/Denver',
            98 => 'America/Detroit',
            99 => 'America/Dominica',
            100 => 'America/Edmonton',
            101 => 'America/Eirunepe',
            102 => 'America/El_Salvador',
            103 => 'America/Fortaleza',
            104 => 'America/Glace_Bay',
            105 => 'America/Godthab',
            106 => 'America/Goose_Bay',
            107 => 'America/Grand_Turk',
            108 => 'America/Grenada',
            109 => 'America/Guadeloupe',
            110 => 'America/Guatemala',
            111 => 'America/Guayaquil',
            112 => 'America/Guyana',
            113 => 'America/Halifax',
            114 => 'America/Havana',
            115 => 'America/Hermosillo',
            116 => 'America/Indiana/Indianapolis',
            117 => 'America/Indiana/Knox',
            118 => 'America/Indiana/Marengo',
            119 => 'America/Indiana/Petersburg',
            120 => 'America/Indiana/Tell_City',
            121 => 'America/Indiana/Vevay',
            122 => 'America/Indiana/Vincennes',
            123 => 'America/Indiana/Winamac',
            124 => 'America/Inuvik',
            125 => 'America/Iqaluit',
            126 => 'America/Jamaica',
            127 => 'America/Juneau',
            128 => 'America/Kentucky/Louisville',
            129 => 'America/Kentucky/Monticello',
            130 => 'America/Kralendijk',
            131 => 'America/La_Paz',
            132 => 'America/Lima',
            133 => 'America/Los_Angeles',
            134 => 'America/Lower_Princes',
            135 => 'America/Maceio',
            136 => 'America/Managua',
            137 => 'America/Manaus',
            138 => 'America/Marigot',
            139 => 'America/Martinique',
            140 => 'America/Matamoros',
            141 => 'America/Mazatlan',
            142 => 'America/Menominee',
            143 => 'America/Merida',
            144 => 'America/Metlakatla',
            145 => 'America/Mexico_City',
            146 => 'America/Miquelon',
            147 => 'America/Moncton',
            148 => 'America/Monterrey',
            149 => 'America/Montevideo',
            150 => 'America/Montserrat',
            151 => 'America/Nassau',
            152 => 'America/New_York',
            153 => 'America/Nipigon',
            154 => 'America/Nome',
            155 => 'America/Noronha',
            156 => 'America/North_Dakota/Beulah',
            157 => 'America/North_Dakota/Center',
            158 => 'America/North_Dakota/New_Salem',
            159 => 'America/Ojinaga',
            160 => 'America/Panama',
            161 => 'America/Pangnirtung',
            162 => 'America/Paramaribo',
            163 => 'America/Phoenix',
            164 => 'America/Port-au-Prince',
            165 => 'America/Port_of_Spain',
            166 => 'America/Porto_Velho',
            167 => 'America/Puerto_Rico',
            168 => 'America/Rainy_River',
            169 => 'America/Rankin_Inlet',
            170 => 'America/Recife',
            171 => 'America/Regina',
            172 => 'America/Resolute',
            173 => 'America/Rio_Branco',
            174 => 'America/Santa_Isabel',
            175 => 'America/Santarem',
            176 => 'America/Santiago',
            177 => 'America/Santo_Domingo',
            178 => 'America/Sao_Paulo',
            179 => 'America/Scoresbysund',
            180 => 'America/Sitka',
            181 => 'America/St_Barthelemy',
            182 => 'America/St_Johns',
            183 => 'America/St_Kitts',
            184 => 'America/St_Lucia',
            185 => 'America/St_Thomas',
            186 => 'America/St_Vincent',
            187 => 'America/Swift_Current',
            188 => 'America/Tegucigalpa',
            189 => 'America/Thule',
            190 => 'America/Thunder_Bay',
            191 => 'America/Tijuana',
            192 => 'America/Toronto',
            193 => 'America/Tortola',
            194 => 'America/Vancouver',
            195 => 'America/Whitehorse',
            196 => 'America/Winnipeg',
            197 => 'America/Yakutat',
            198 => 'America/Yellowknife',
            199 => 'Antarctica/Casey',
            200 => 'Antarctica/Davis',
            201 => 'Antarctica/DumontDUrville',
            202 => 'Antarctica/Macquarie',
            203 => 'Antarctica/Mawson',
            204 => 'Antarctica/McMurdo',
            205 => 'Antarctica/Palmer',
            206 => 'Antarctica/Rothera',
            207 => 'Antarctica/Syowa',
            208 => 'Antarctica/Vostok',
            209 => 'Arctic/Longyearbyen',
            210 => 'Asia/Aden',
            211 => 'Asia/Almaty',
            212 => 'Asia/Amman',
            213 => 'Asia/Anadyr',
            214 => 'Asia/Aqtau',
            215 => 'Asia/Aqtobe',
            216 => 'Asia/Ashgabat',
            217 => 'Asia/Baghdad',
            218 => 'Asia/Bahrain',
            219 => 'Asia/Baku',
            220 => 'Asia/Bangkok',
            221 => 'Asia/Beirut',
            222 => 'Asia/Bishkek',
            223 => 'Asia/Brunei',
            224 => 'Asia/Choibalsan',
            225 => 'Asia/Chongqing',
            226 => 'Asia/Colombo',
            227 => 'Asia/Damascus',
            228 => 'Asia/Dhaka',
            229 => 'Asia/Dili',
            230 => 'Asia/Dubai',
            231 => 'Asia/Dushanbe',
            232 => 'Asia/Gaza',
            233 => 'Asia/Harbin',
            234 => 'Asia/Hebron',
            235 => 'Asia/Ho_Chi_Minh',
            236 => 'Asia/Hong_Kong',
            237 => 'Asia/Hovd',
            238 => 'Asia/Irkutsk',
            239 => 'Asia/Jakarta',
            240 => 'Asia/Jayapura',
            241 => 'Asia/Jerusalem',
            242 => 'Asia/Kabul',
            243 => 'Asia/Kamchatka',
            244 => 'Asia/Karachi',
            245 => 'Asia/Kashgar',
            246 => 'Asia/Kathmandu',
            247 => 'Asia/Khandyga',
            248 => 'Asia/Kolkata',
            249 => 'Asia/Krasnoyarsk',
            250 => 'Asia/Kuala_Lumpur',
            251 => 'Asia/Kuching',
            252 => 'Asia/Kuwait',
            253 => 'Asia/Macau',
            254 => 'Asia/Magadan',
            255 => 'Asia/Makassar',
            256 => 'Asia/Manila',
            257 => 'Asia/Muscat',
            258 => 'Asia/Nicosia',
            259 => 'Asia/Novokuznetsk',
            260 => 'Asia/Novosibirsk',
            261 => 'Asia/Omsk',
            262 => 'Asia/Oral',
            263 => 'Asia/Phnom_Penh',
            264 => 'Asia/Pontianak',
            265 => 'Asia/Pyongyang',
            266 => 'Asia/Qatar',
            267 => 'Asia/Qyzylorda',
            268 => 'Asia/Rangoon',
            269 => 'Asia/Riyadh',
            270 => 'Asia/Sakhalin',
            271 => 'Asia/Samarkand',
            272 => 'Asia/Seoul',
            273 => 'Asia/Shanghai',
            274 => 'Asia/Singapore',
            275 => 'Asia/Taipei',
            276 => 'Asia/Tashkent',
            277 => 'Asia/Tbilisi',
            278 => 'Asia/Tehran',
            279 => 'Asia/Thimphu',
            280 => 'Asia/Tokyo',
            281 => 'Asia/Ulaanbaatar',
            282 => 'Asia/Urumqi',
            283 => 'Asia/Ust-Nera',
            284 => 'Asia/Vientiane',
            285 => 'Asia/Vladivostok',
            286 => 'Asia/Yakutsk',
            287 => 'Asia/Yekaterinburg',
            288 => 'Asia/Yerevan',
            289 => 'Atlantic/Azores',
            290 => 'Atlantic/Bermuda',
            291 => 'Atlantic/Canary',
            292 => 'Atlantic/Cape_Verde',
            293 => 'Atlantic/Faroe',
            294 => 'Atlantic/Madeira',
            295 => 'Atlantic/Reykjavik',
            296 => 'Atlantic/South_Georgia',
            297 => 'Atlantic/St_Helena',
            298 => 'Atlantic/Stanley',
            299 => 'Australia/Adelaide',
            300 => 'Australia/Brisbane',
            301 => 'Australia/Broken_Hill',
            302 => 'Australia/Currie',
            303 => 'Australia/Darwin',
            304 => 'Australia/Eucla',
            305 => 'Australia/Hobart',
            306 => 'Australia/Lindeman',
            307 => 'Australia/Lord_Howe',
            308 => 'Australia/Melbourne',
            309 => 'Australia/Perth',
            310 => 'Australia/Sydney',
            311 => 'Europe/Amsterdam',
            312 => 'Europe/Andorra',
            313 => 'Europe/Athens',
            314 => 'Europe/Belgrade',
            315 => 'Europe/Berlin',
            316 => 'Europe/Bratislava',
            317 => 'Europe/Brussels',
            318 => 'Europe/Bucharest',
            319 => 'Europe/Budapest',
            320 => 'Europe/Busingen',
            321 => 'Europe/Chisinau',
            322 => 'Europe/Copenhagen',
            323 => 'Europe/Dublin',
            324 => 'Europe/Gibraltar',
            325 => 'Europe/Guernsey',
            326 => 'Europe/Helsinki',
            327 => 'Europe/Isle_of_Man',
            328 => 'Europe/Istanbul',
            329 => 'Europe/Jersey',
            330 => 'Europe/Kaliningrad',
            331 => 'Europe/Kiev',
            332 => 'Europe/Lisbon',
            333 => 'Europe/Ljubljana',
            334 => 'Europe/London',
            335 => 'Europe/Luxembourg',
            336 => 'Europe/Madrid',
            337 => 'Europe/Malta',
            338 => 'Europe/Mariehamn',
            339 => 'Europe/Minsk',
            340 => 'Europe/Monaco',
            341 => 'Europe/Moscow',
            342 => 'Europe/Oslo',
            343 => 'Europe/Paris',
            344 => 'Europe/Podgorica',
            345 => 'Europe/Prague',
            346 => 'Europe/Riga',
            347 => 'Europe/Rome',
            348 => 'Europe/Samara',
            349 => 'Europe/San_Marino',
            350 => 'Europe/Sarajevo',
            351 => 'Europe/Simferopol',
            352 => 'Europe/Skopje',
            353 => 'Europe/Sofia',
            354 => 'Europe/Stockholm',
            355 => 'Europe/Tallinn',
            356 => 'Europe/Tirane',
            357 => 'Europe/Uzhgorod',
            358 => 'Europe/Vaduz',
            359 => 'Europe/Vatican',
            360 => 'Europe/Vienna',
            361 => 'Europe/Vilnius',
            362 => 'Europe/Volgograd',
            363 => 'Europe/Warsaw',
            364 => 'Europe/Zagreb',
            365 => 'Europe/Zaporozhye',
            366 => 'Europe/Zurich',
            367 => 'Indian/Antananarivo',
            368 => 'Indian/Chagos',
            369 => 'Indian/Christmas',
            370 => 'Indian/Cocos',
            371 => 'Indian/Comoro',
            372 => 'Indian/Kerguelen',
            373 => 'Indian/Mahe',
            374 => 'Indian/Maldives',
            375 => 'Indian/Mauritius',
            376 => 'Indian/Mayotte',
            377 => 'Indian/Reunion',
            378 => 'Pacific/Apia',
            379 => 'Pacific/Auckland',
            380 => 'Pacific/Chatham',
            381 => 'Pacific/Chuuk',
            382 => 'Pacific/Easter',
            383 => 'Pacific/Efate',
            384 => 'Pacific/Enderbury',
            385 => 'Pacific/Fakaofo',
            386 => 'Pacific/Fiji',
            387 => 'Pacific/Funafuti',
            388 => 'Pacific/Galapagos',
            389 => 'Pacific/Gambier',
            390 => 'Pacific/Guadalcanal',
            391 => 'Pacific/Guam',
            392 => 'Pacific/Honolulu',
            393 => 'Pacific/Johnston',
            394 => 'Pacific/Kiritimati',
            395 => 'Pacific/Kosrae',
            396 => 'Pacific/Kwajalein',
            397 => 'Pacific/Majuro',
            398 => 'Pacific/Marquesas',
            399 => 'Pacific/Midway',
            400 => 'Pacific/Nauru',
            401 => 'Pacific/Niue',
            402 => 'Pacific/Norfolk',
            403 => 'Pacific/Noumea',
            404 => 'Pacific/Pago_Pago',
            405 => 'Pacific/Palau',
            406 => 'Pacific/Pitcairn',
            407 => 'Pacific/Pohnpei',
            408 => 'Pacific/Port_Moresby',
            409 => 'Pacific/Rarotonga',
            410 => 'Pacific/Saipan',
            411 => 'Pacific/Tahiti',
            412 => 'Pacific/Tarawa',
            413 => 'Pacific/Tongatapu',
            414 => 'Pacific/Wake',
            415 => 'Pacific/Wallis',
          ),
        ),
        'dateFormat' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'MM/DD/YYYY',
            1 => 'YYYY-MM-DD',
            2 => 'DD.MM.YYYY',
          ),
          'default' => 'MM/DD/YYYY',
        ),
        'timeFormat' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'HH:mm',
            1 => 'hh:mma',
            2 => 'hh:mmA',
            3 => 'hh:mm A',
            4 => 'hh:mm a',
          ),
          'default' => 'HH:mm',
        ),
        'weekStart' => 
        array (
          'type' => 'enumInt',
          'options' => 
          array (
            0 => 0,
            1 => 1,
          ),
          'default' => 0,
        ),
        'thousandSeparator' => 
        array (
          'type' => 'varchar',
          'default' => ',',
          'maxLength' => 1,
          'view' => 'Settings.Fields.ThousandSeparator',
        ),
        'decimalMark' => 
        array (
          'type' => 'varchar',
          'default' => '.',
          'required' => true,
          'maxLength' => 1,
        ),
        'currencyList' => 
        array (
          'type' => 'array',
          'default' => 
          array (
            0 => 'USD',
            1 => 'EUR',
          ),
          'options' => 
          array (
            0 => 'AED',
            1 => 'ANG',
            2 => 'ARS',
            3 => 'AUD',
            4 => 'BGN',
            5 => 'BHD',
            6 => 'BND',
            7 => 'BOB',
            8 => 'BRL',
            9 => 'BWP',
            10 => 'CAD',
            11 => 'CHF',
            12 => 'CLP',
            13 => 'CNY',
            14 => 'COP',
            15 => 'CRC',
            16 => 'CZK',
            17 => 'DKK',
            18 => 'DOP',
            19 => 'DZD',
            20 => 'EEK',
            21 => 'EGP',
            22 => 'EUR',
            23 => 'FJD',
            24 => 'GBP',
            25 => 'HKD',
            26 => 'HNL',
            27 => 'HRK',
            28 => 'HUF',
            29 => 'IDR',
            30 => 'ILS',
            31 => 'INR',
            32 => 'JMD',
            33 => 'JOD',
            34 => 'JPY',
            35 => 'KES',
            36 => 'KRW',
            37 => 'KWD',
            38 => 'KYD',
            39 => 'KZT',
            40 => 'LBP',
            41 => 'LKR',
            42 => 'LTL',
            43 => 'LVL',
            44 => 'MAD',
            45 => 'MDL',
            46 => 'MKD',
            47 => 'MUR',
            48 => 'MXN',
            49 => 'MYR',
            50 => 'NAD',
            51 => 'NGN',
            52 => 'NIO',
            53 => 'NOK',
            54 => 'NPR',
            55 => 'NZD',
            56 => 'OMR',
            57 => 'PEN',
            58 => 'PGK',
            59 => 'PHP',
            60 => 'PKR',
            61 => 'PLN',
            62 => 'PYG',
            63 => 'QAR',
            64 => 'RON',
            65 => 'RSD',
            66 => 'RUB',
            67 => 'SAR',
            68 => 'SCR',
            69 => 'SEK',
            70 => 'SGD',
            71 => 'SKK',
            72 => 'SLL',
            73 => 'SVC',
            74 => 'THB',
            75 => 'TND',
            76 => 'TRY',
            77 => 'TTD',
            78 => 'TWD',
            79 => 'TZS',
            80 => 'UAH',
            81 => 'UGX',
            82 => 'USD',
            83 => 'UYU',
            84 => 'UZS',
            85 => 'VND',
            86 => 'YER',
            87 => 'ZAR',
            88 => 'ZMK',
          ),
          'required' => true,
        ),
        'defaultCurrency' => 
        array (
          'type' => 'enum',
          'default' => 'USD',
          'required' => true,
        ),
        'outboundEmailIsShared' => 
        array (
          'type' => 'bool',
          'default' => false,
        ),
        'outboundEmailFromName' => 
        array (
          'type' => 'varchar',
          'default' => 'EspoCRM',
          'required' => true,
        ),
        'outboundEmailFromAddress' => 
        array (
          'type' => 'varchar',
          'default' => 'crm@example.com',
          'required' => true,
        ),
        'smtpServer' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'smtpPort' => 
        array (
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'max' => 9999,
          'default' => 25,
        ),
        'smtpAuth' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
        'smtpSecurity' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'SSL',
            2 => 'TLS',
          ),
        ),
        'smtpUsername' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'smtpPassword' => 
        array (
          'type' => 'password',
        ),
        'tabList' => 
        array (
          'type' => 'array',
          'translation' => 'Global.scopeNamesPlural',
        ),
        'quickCreateList' => 
        array (
          'type' => 'array',
          'translation' => 'Global.scopeNames',
        ),
        'language' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'en_US',
            1 => 'de_DE',
            2 => 'es_ES',
            3 => 'fr_FR',
            4 => 'tr_TR',
            5 => 'ro_RO',
            6 => 'pt_BR',
            7 => 'vi_VN',
          ),
          'default' => 'en_US',
        ),
        'exportDelimiter' => 
        array (
          'type' => 'varchar',
          'default' => ',',
          'required' => true,
          'maxLength' => 1,
        ),
        'companyLogo' => 
        array (
          'type' => 'image',
        ),
        'authenticationMethod' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Espo',
            1 => 'LDAP',
          ),
          'default' => 'Espo',
        ),
        'ldapHost' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'ldapPort' => 
        array (
          'type' => 'int',
          'max' => 9999,
          'min' => 0,
          'default' => 389,
        ),
        'ldapSecurity' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'SSL',
            2 => 'TLS',
          ),
        ),
        'ldapAuth' => 
        array (
          'type' => 'bool',
        ),
        'ldapUsername' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'ldapPassword' => 
        array (
          'type' => 'password',
        ),
        'ldapBindRequiresDn' => 
        array (
          'type' => 'bool',
        ),
        'ldapBaseDn' => 
        array (
          'type' => 'varchar',
        ),
        'ldapUserLoginFilter' => 
        array (
          'type' => 'varchar',
        ),
        'ldapAccountCanonicalForm' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Dn',
            1 => 'Username',
            2 => 'Backslash',
            3 => 'Principal',
          ),
        ),
        'ldapAccountDomainName' => 
        array (
          'type' => 'varchar',
        ),
        'ldapAccountDomainNameShort' => 
        array (
          'type' => 'varchar',
        ),
        'ldapAccountFilterFormat' => 
        array (
          'type' => 'varchar',
        ),
        'ldapTryUsernameSplit' => 
        array (
          'type' => 'bool',
        ),
        'ldapOptReferrals' => 
        array (
          'type' => 'bool',
        ),
        'ldapCreateEspoUser' => 
        array (
          'type' => 'bool',
          'default' => true,
        ),
        'disableExport' => 
        array (
          'type' => 'bool',
          'default' => false,
        ),
      ),
    ),
    'Team' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
        ),
        'roles' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'users' => 
        array (
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'teams',
        ),
        'roles' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Role',
          'foreign' => 'teams',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'UniqueId' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'data' => 
        array (
          'type' => 'text',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'User' => 
    array (
      'fields' => 
      array (
        'isAdmin' => 
        array (
          'type' => 'bool',
        ),
        'userName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 50,
          'required' => true,
          'unique' => true,
        ),
        'name' => 
        array (
          'type' => 'personName',
        ),
        'password' => 
        array (
          'type' => 'password',
          'internal' => true,
        ),
        'salutationName' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Mr.',
            2 => 'Mrs.',
            3 => 'Dr.',
            4 => 'Drs.',
          ),
        ),
        'firstName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'default' => '',
        ),
        'lastName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true,
          'default' => '',
        ),
        'title' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
        ),
        'emailAddress' => 
        array (
          'type' => 'email',
          'required' => false,
        ),
        'phoneNumber' => 
        array (
          'type' => 'phone',
          'typeList' => 
          array (
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other',
          ),
          'defaultType' => 'Mobile',
        ),
        'token' => 
        array (
          'type' => 'varchar',
          'notStorable' => true,
        ),
        'defaultTeam' => 
        array (
          'type' => 'link',
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
        'roles' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'defaultTeam' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Team',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'users',
        ),
        'roles' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Role',
          'foreign' => 'users',
        ),
        'preferences' => 
        array (
          'type' => 'hasOne',
          'entity' => 'Preferences',
        ),
        'meetings' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'users',
        ),
        'calls' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'users',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'userName',
        'asc' => true,
      ),
    ),
    'Account' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'website' => 
        array (
          'type' => 'url',
        ),
        'emailAddress' => 
        array (
          'type' => 'email',
        ),
        'phoneNumber' => 
        array (
          'type' => 'phone',
          'typeList' => 
          array (
            0 => 'Office',
            1 => 'Fax',
            2 => 'Other',
          ),
          'defaultType' => 'Office',
        ),
        'type' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Customer',
            2 => 'Investor',
            3 => 'Partner',
            4 => 'Reseller',
          ),
        ),
        'industry' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Apparel',
            2 => 'Banking',
            3 => 'Computer Software',
            4 => 'Education',
            5 => 'Electronics',
            6 => 'Finance',
            7 => 'Insurance',
          ),
        ),
        'sicCode' => 
        array (
          'type' => 'varchar',
          'maxLength' => 40,
        ),
        'contactRole' => 
        array (
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
        ),
        'billingAddress' => 
        array (
          'type' => 'address',
        ),
        'billingAddressStreet' => 
        array (
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
        ),
        'billingAddressCity' => 
        array (
          'type' => 'varchar',
        ),
        'billingAddressState' => 
        array (
          'type' => 'varchar',
        ),
        'billingAddressCountry' => 
        array (
          'type' => 'varchar',
        ),
        'billingAddressPostalCode' => 
        array (
          'type' => 'varchar',
        ),
        'shippingAddress' => 
        array (
          'type' => 'address',
        ),
        'shippingAddressStreet' => 
        array (
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
        ),
        'shippingAddressCity' => 
        array (
          'type' => 'varchar',
        ),
        'shippingAddressState' => 
        array (
          'type' => 'varchar',
        ),
        'shippingAddressCountry' => 
        array (
          'type' => 'varchar',
        ),
        'shippingAddressPostalCode' => 
        array (
          'type' => 'varchar',
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'contacts' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'accounts',
        ),
        'opportunities' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'account',
        ),
        'cases' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'account',
        ),
        'meetings' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
        ),
        'calls' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
        ),
        'tasks' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
        ),
        'emails' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'Call' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Planned',
            1 => 'Held',
            2 => 'Not Held',
          ),
          'default' => 'Planned',
          'view' => 'Fields.EnumStyled',
          'style' => 
          array (
            'Held' => 'success',
            'Not Held' => 'danger',
          ),
        ),
        'dateStart' => 
        array (
          'type' => 'datetime',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getNow(15);',
        ),
        'dateEnd' => 
        array (
          'type' => 'datetime',
          'required' => true,
          'after' => 'dateStart',
        ),
        'duration' => 
        array (
          'type' => 'duration',
          'start' => 'dateStart',
          'end' => 'dateEnd',
          'options' => 
          array (
            0 => 300,
            1 => 600,
            2 => 900,
            3 => 1800,
            4 => 2700,
            5 => 3600,
            6 => 7200,
          ),
          'default' => 300,
        ),
        'direction' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Outbound',
            1 => 'Inbound',
          ),
          'default' => 'Outbound',
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'parent' => 
        array (
          'type' => 'linkParent',
        ),
        'account' => 
        array (
          'type' => 'link',
          'disabled' => true,
        ),
        'users' => 
        array (
          'type' => 'linkMultiple',
          'disabled' => true,
        ),
        'contacts' => 
        array (
          'type' => 'linkMultiple',
          'disabled' => true,
        ),
        'leads' => 
        array (
          'type' => 'linkMultiple',
          'disabled' => true,
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'account' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
        ),
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'users' => 
        array (
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'calls',
          'additionalColumns' => 
          array (
            'status' => 
            array (
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None',
            ),
          ),
        ),
        'contacts' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'calls',
          'additionalColumns' => 
          array (
            'status' => 
            array (
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None',
            ),
          ),
        ),
        'leads' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'calls',
          'additionalColumns' => 
          array (
            'status' => 
            array (
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None',
            ),
          ),
        ),
        'parent' => 
        array (
          'type' => 'belongsToParent',
          'entityList' => 
          array (
            0 => 'Account',
            1 => 'Lead',
            2 => 'Opportunity',
            3 => 'Case',
          ),
          'foreign' => 'calls',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'dateStart',
        'asc' => false,
      ),
    ),
    'Case' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'number' => 
        array (
          'type' => 'autoincrement',
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'New',
            1 => 'Assigned',
            2 => 'Pending',
            3 => 'Closed',
            4 => 'Rejected',
            5 => 'Duplicate',
          ),
          'default' => 'New',
          'view' => 'Fields.EnumStyled',
          'style' => 
          array (
            'Closed' => 'success',
            'Duplicate' => 'danger',
            'Rejected' => 'danger',
          ),
        ),
        'priority' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Low',
            1 => 'Normal',
            2 => 'High',
            3 => 'Urgent',
          ),
          'default' => 'Normal',
          'audited' => true,
        ),
        'type' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Question',
            2 => 'Incident',
            3 => 'Problem',
          ),
          'audited' => true,
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'account' => 
        array (
          'type' => 'link',
        ),
        'contact' => 
        array (
          'type' => 'link',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'account' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'cases',
        ),
        'contact' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'cases',
        ),
        'meetings' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
        ),
        'calls' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
        ),
        'tasks' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
        ),
        'emails' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'number',
        'asc' => false,
        'boolFilters' => 
        array (
          0 => 'onlyMy',
        ),
      ),
    ),
    'Contact' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'personName',
        ),
        'salutationName' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Mr.',
            2 => 'Mrs.',
            3 => 'Dr.',
            4 => 'Drs.',
          ),
        ),
        'firstName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'default' => '',
        ),
        'lastName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true,
          'default' => '',
        ),
        'accountId' => 
        array (
          'where' => 
          array (
            '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = \'{text}\')',
          ),
        ),
        'title' => 
        array (
          'type' => 'varchar',
          'maxLength' => 50,
          'notStorable' => true,
          'select' => 'accountContact.role',
          'orderBy' => 'accountContact.role {direction}',
          'where' => 
          array (
            'LIKE' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND role LIKE \'{text}\')',
            '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND role = \'{text}\')',
          ),
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'emailAddress' => 
        array (
          'type' => 'email',
        ),
        'phoneNumber' => 
        array (
          'type' => 'phone',
          'typeList' => 
          array (
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other',
          ),
          'defaultType' => 'Mobile',
        ),
        'doNotCall' => 
        array (
          'type' => 'bool',
        ),
        'address' => 
        array (
          'type' => 'address',
        ),
        'addressStreet' => 
        array (
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
        ),
        'addressCity' => 
        array (
          'type' => 'varchar',
        ),
        'addressState' => 
        array (
          'type' => 'varchar',
        ),
        'addressCountry' => 
        array (
          'type' => 'varchar',
        ),
        'addressPostalCode' => 
        array (
          'type' => 'varchar',
        ),
        'account' => 
        array (
          'type' => 'link',
        ),
        'accounts' => 
        array (
          'type' => 'linkMultiple',
          'view' => 'Crm:Contact.Fields.Accounts',
          'columns' => 
          array (
            'role' => 'contactRole',
          ),
        ),
        'accountRole' => 
        array (
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
        ),
        'accountType' => 
        array (
          'type' => 'foreign',
          'link' => 'account',
          'field' => 'type',
        ),
        'opportunityRole' => 
        array (
          'type' => 'enum',
          'notStorable' => true,
          'disabled' => true,
          'options' => 
          array (
            0 => '',
            1 => 'Decision Maker',
            2 => 'Evaluator',
            3 => 'Influencer',
          ),
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'account' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
        ),
        'accounts' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'contacts',
          'additionalColumns' => 
          array (
            'role' => 
            array (
              'type' => 'varchar',
              'len' => 50,
            ),
          ),
        ),
        'opportunities' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'contacts',
        ),
        'cases' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'contact',
        ),
        'meetings' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'contacts',
        ),
        'calls' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'contacts',
        ),
        'tasks' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
        ),
        'activities' => 
        array (
          'type' => 'joint',
          'links' => 
          array (
            0 => 'meetings',
            1 => 'calls',
            2 => 'tasks',
          ),
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'InboundEmail' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Active',
            1 => 'Inactive',
          ),
        ),
        'host' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'port' => 
        array (
          'type' => 'varchar',
          'default' => '143',
          'required' => true,
        ),
        'ssl' => 
        array (
          'type' => 'bool',
        ),
        'username' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'password' => 
        array (
          'type' => 'password',
        ),
        'monitoredFolders' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'default' => 'INBOX',
          'view' => 'Crm:InboundEmail.Fields.Folders',
        ),
        'trashFolder' => 
        array (
          'type' => 'varchar',
          'required' => true,
          'view' => 'Crm:InboundEmail.Fields.Folder',
        ),
        'assignToUser' => 
        array (
          'type' => 'link',
        ),
        'team' => 
        array (
          'type' => 'link',
        ),
        'createCase' => 
        array (
          'type' => 'bool',
        ),
        'caseDistribution' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Direct-Assignment',
            1 => 'Round-Robin',
            2 => 'Least-Busy',
          ),
          'default' => 'Direct-Assignment',
        ),
        'reply' => 
        array (
          'type' => 'bool',
        ),
        'replyEmailTemplate' => 
        array (
          'type' => 'link',
        ),
        'replyFromAddress' => 
        array (
          'type' => 'varchar',
        ),
        'replyFromName' => 
        array (
          'type' => 'varchar',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignToUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'team' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Team',
        ),
        'replyEmailTemplate' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'name',
        'asc' => true,
      ),
    ),
    'Lead' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'personName',
        ),
        'salutationName' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Mr.',
            2 => 'Mrs.',
            3 => 'Dr.',
            4 => 'Drs.',
          ),
        ),
        'firstName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'default' => '',
        ),
        'lastName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true,
          'default' => '',
        ),
        'title' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'New',
            1 => 'Assigned',
            2 => 'In Process',
            3 => 'Converted',
            4 => 'Recycled',
            5 => 'Dead',
          ),
          'default' => 'New',
          'view' => 'Fields.EnumStyled',
          'style' => 
          array (
            'Converted' => 'success',
            'Recycled' => 'danger',
            'Dead' => 'danger',
          ),
        ),
        'source' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Call',
            2 => 'Email',
            3 => 'Existing Customer',
            4 => 'Partner',
            5 => 'Public Relations',
            6 => 'Web Site',
            7 => 'Campaign',
            8 => 'Other',
          ),
        ),
        'opportunityAmount' => 
        array (
          'type' => 'currency',
          'audited' => true,
        ),
        'website' => 
        array (
          'type' => 'url',
        ),
        'address' => 
        array (
          'type' => 'address',
        ),
        'addressStreet' => 
        array (
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
        ),
        'addressCity' => 
        array (
          'type' => 'varchar',
        ),
        'addressState' => 
        array (
          'type' => 'varchar',
        ),
        'addressCountry' => 
        array (
          'type' => 'varchar',
        ),
        'addressPostalCode' => 
        array (
          'type' => 'varchar',
        ),
        'emailAddress' => 
        array (
          'type' => 'email',
        ),
        'phoneNumber' => 
        array (
          'type' => 'phone',
          'typeList' => 
          array (
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other',
          ),
          'defaultType' => 'Mobile',
        ),
        'doNotCall' => 
        array (
          'type' => 'bool',
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'accountName' => 
        array (
          'type' => 'varchar',
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
        'createdAccount' => 
        array (
          'type' => 'link',
          'disabled' => true,
          'readOnly' => true,
        ),
        'createdContact' => 
        array (
          'type' => 'link',
          'disabled' => true,
          'readOnly' => true,
        ),
        'createdOpportunity' => 
        array (
          'type' => 'link',
          'disabled' => true,
          'readOnly' => true,
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'opportunities' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'leads',
        ),
        'meetings' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'leads',
        ),
        'calls' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'leads',
        ),
        'tasks' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
        ),
        'createdAccount' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
        ),
        'createdContact' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Contact',
        ),
        'createdOpportunity' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Opportunity',
        ),
      ),
      'convertFields' => 
      array (
        'Contact' => 
        array (
        ),
        'Account' => 
        array (
          'name' => 'accountName',
          'billingAddressStreet' => 'addressStreet',
          'billingAddressCity' => 'addressCity',
          'billingAddressState' => 'addressState',
          'billingAddressPostalCode' => 'addressPostalCode',
          'billingAddressCountry' => 'addressCountry',
        ),
        'Opportunity' => 
        array (
          'amount' => 'opportunityAmount',
          'leadSource' => 'source',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'Meeting' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Planned',
            1 => 'Held',
            2 => 'Not Held',
          ),
          'default' => 'Planned',
          'view' => 'Fields.EnumStyled',
          'style' => 
          array (
            'Held' => 'success',
            'Not Held' => 'danger',
          ),
        ),
        'dateStart' => 
        array (
          'type' => 'datetime',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getNow(15);',
        ),
        'dateEnd' => 
        array (
          'type' => 'datetime',
          'required' => true,
          'after' => 'dateStart',
        ),
        'duration' => 
        array (
          'type' => 'duration',
          'start' => 'dateStart',
          'end' => 'dateEnd',
          'options' => 
          array (
            0 => 0,
            1 => 900,
            2 => 1800,
            3 => 3600,
            4 => 7200,
            5 => 10800,
            6 => 86400,
          ),
          'default' => 3600,
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'parent' => 
        array (
          'type' => 'linkParent',
        ),
        'account' => 
        array (
          'type' => 'link',
          'disabled' => true,
        ),
        'users' => 
        array (
          'type' => 'linkMultiple',
          'disabled' => true,
        ),
        'contacts' => 
        array (
          'type' => 'linkMultiple',
          'disabled' => true,
        ),
        'leads' => 
        array (
          'type' => 'linkMultiple',
          'disabled' => true,
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'account' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
        ),
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'users' => 
        array (
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'meetings',
          'additionalColumns' => 
          array (
            'status' => 
            array (
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None',
            ),
          ),
        ),
        'contacts' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'meetings',
          'additionalColumns' => 
          array (
            'status' => 
            array (
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None',
            ),
          ),
        ),
        'leads' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'meetings',
          'additionalColumns' => 
          array (
            'status' => 
            array (
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None',
            ),
          ),
        ),
        'parent' => 
        array (
          'type' => 'belongsToParent',
          'entityList' => 
          array (
            0 => 'Account',
            1 => 'Lead',
            2 => 'Opportunity',
            3 => 'Case',
          ),
          'foreign' => 'meetings',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'dateStart',
        'asc' => false,
      ),
    ),
    'Opportunity' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'amount' => 
        array (
          'type' => 'currency',
          'required' => true,
          'audited' => true,
        ),
        'account' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'contacts' => 
        array (
          'type' => 'linkMultiple',
          'view' => 'Crm:Opportunity.Fields.Contacts',
          'columns' => 
          array (
            'role' => 'opportunityRole',
          ),
        ),
        'stage' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Prospecting',
            1 => 'Qualification',
            2 => 'Needs Analysis',
            3 => 'Value Proposition',
            4 => 'Id. Decision Makers',
            5 => 'Perception Analysis',
            6 => 'Proposal/Price Quote',
            7 => 'Negotiation/Review',
            8 => 'Closed Won',
            9 => 'Closed Lost',
          ),
          'view' => 'Crm:Opportunity.Fields.Stage',
          'default' => 'Prospecting',
        ),
        'probability' => 
        array (
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'max' => 100,
        ),
        'leadSource' => 
        array (
          'type' => 'enum',
          'view' => 'Crm:Opportunity.Fields.LeadSource',
        ),
        'closeDate' => 
        array (
          'type' => 'date',
          'required' => true,
          'audited' => true,
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'account' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'opportunities',
        ),
        'contacts' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'opportunities',
          'additionalColumns' => 
          array (
            'role' => 
            array (
              'type' => 'varchar',
              'len' => 50,
            ),
          ),
        ),
        'meetings' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
        ),
        'calls' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
        ),
        'tasks' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
        ),
        'emails' => 
        array (
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'Target' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'personName',
        ),
        'salutationName' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => '',
            1 => 'Mr.',
            2 => 'Mrs.',
            3 => 'Dr.',
            4 => 'Drs.',
          ),
        ),
        'firstName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'default' => '',
        ),
        'lastName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true,
          'default' => '',
        ),
        'title' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
        ),
        'accountName' => 
        array (
          'type' => 'varchar',
          'maxLength' => 100,
        ),
        'website' => 
        array (
          'type' => 'url',
        ),
        'address' => 
        array (
          'type' => 'address',
        ),
        'addressStreet' => 
        array (
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
        ),
        'addressCity' => 
        array (
          'type' => 'varchar',
        ),
        'addressState' => 
        array (
          'type' => 'varchar',
        ),
        'addressCountry' => 
        array (
          'type' => 'varchar',
        ),
        'addressPostalCode' => 
        array (
          'type' => 'varchar',
        ),
        'emailAddress' => 
        array (
          'type' => 'email',
        ),
        'phoneNumber' => 
        array (
          'type' => 'phone',
          'typeList' => 
          array (
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other',
          ),
          'defaultType' => 'Mobile',
        ),
        'doNotCall' => 
        array (
          'type' => 'bool',
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
    'Task' => 
    array (
      'fields' => 
      array (
        'name' => 
        array (
          'type' => 'varchar',
          'required' => true,
        ),
        'status' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Not Started',
            1 => 'Started',
            2 => 'Completed',
            3 => 'Canceled',
          ),
          'view' => 'Fields.EnumStyled',
          'style' => 
          array (
            'Completed' => 'success',
            'Canceled' => 'danger',
          ),
        ),
        'priority' => 
        array (
          'type' => 'enum',
          'options' => 
          array (
            0 => 'Low',
            1 => 'Normal',
            2 => 'High',
            3 => 'Urgent',
          ),
          'default' => 'Normal',
        ),
        'dateStart' => 
        array (
          'type' => 'datetime',
          'before' => 'dateEnd',
        ),
        'dateEnd' => 
        array (
          'type' => 'datetime',
          'after' => 'dateStart',
        ),
        'isOverdue' => 
        array (
          'type' => 'base',
          'db' => false,
          'view' => 'Crm:Task.Fields.IsOverdue',
        ),
        'description' => 
        array (
          'type' => 'text',
        ),
        'parent' => 
        array (
          'type' => 'linkParent',
        ),
        'createdAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'modifiedAt' => 
        array (
          'type' => 'datetime',
          'readOnly' => true,
        ),
        'createdBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'modifiedBy' => 
        array (
          'type' => 'link',
          'readOnly' => true,
        ),
        'assignedUser' => 
        array (
          'type' => 'link',
          'required' => true,
        ),
        'teams' => 
        array (
          'type' => 'linkMultiple',
        ),
      ),
      'links' => 
      array (
        'createdBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'modifiedBy' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'assignedUser' => 
        array (
          'type' => 'belongsTo',
          'entity' => 'User',
        ),
        'teams' => 
        array (
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'EntityTeam',
        ),
        'parent' => 
        array (
          'type' => 'belongsToParent',
          'entityList' => 
          array (
            0 => 'Account',
            1 => 'Contact',
            2 => 'Lead',
            3 => 'Opportunity',
            4 => 'Case',
          ),
          'foreign' => 'tasks',
        ),
      ),
      'collection' => 
      array (
        'sortBy' => 'createdAt',
        'asc' => false,
      ),
    ),
  ),
  'fields' => 
  array (
    'address' => 
    array (
      'actualFields' => 
      array (
        0 => 'street',
        1 => 'city',
        2 => 'state',
        3 => 'country',
        4 => 'postalCode',
      ),
      'fields' => 
      array (
        'street' => 
        array (
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
        ),
        'city' => 
        array (
          'type' => 'varchar',
        ),
        'state' => 
        array (
          'type' => 'varchar',
        ),
        'country' => 
        array (
          'type' => 'varchar',
        ),
        'postalCode' => 
        array (
          'type' => 'varchar',
        ),
      ),
      'mergable' => false,
      'notCreatable' => false,
      'filter' => true,
    ),
    'array' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'options',
          'type' => 'array',
        ),
        2 => 
        array (
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true,
        ),
      ),
      'filter' => false,
      'notCreatable' => false,
      'fieldDefs' => 
      array (
        'type' => 'jsonArray',
      ),
    ),
    'autoincrement' => 
    array (
      'params' => 
      array (
      ),
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
      ),
    ),
    'base' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
        ),
      ),
      'filter' => false,
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'notStorable' => true,
      ),
    ),
    'bool' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'default',
          'type' => 'bool',
        ),
      ),
      'filter' => true,
    ),
    'currency' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'min',
          'type' => 'float',
        ),
        2 => 
        array (
          'name' => 'max',
          'type' => 'float',
        ),
      ),
      'actualFields' => 
      array (
        0 => 'currency',
        1 => '',
      ),
      'fields' => 
      array (
        'currency' => 
        array (
          'type' => 'varchar',
          'disabled' => true,
        ),
      ),
      'filter' => true,
      'fieldDefs' => 
      array (
        'type' => 'float',
      ),
    ),
    'date' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'varchar',
        ),
        2 => 
        array (
          'name' => 'after',
          'type' => 'varchar',
        ),
        3 => 
        array (
          'name' => 'before',
          'type' => 'varchar',
        ),
      ),
      'filter' => true,
      'fieldDefs' => 
      array (
        'notNull' => false,
      ),
    ),
    'datetime' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'varchar',
        ),
        2 => 
        array (
          'name' => 'after',
          'type' => 'varchar',
        ),
        3 => 
        array (
          'name' => 'before',
          'type' => 'varchar',
        ),
      ),
      'filter' => true,
      'fieldDefs' => 
      array (
        'notNull' => false,
      ),
    ),
    'duration' => 
    array (
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'type' => 'int',
      ),
    ),
    'email' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'notActualFields' => 
      array (
        0 => 'data',
      ),
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => 
      array (
        'notStorable' => true,
      ),
    ),
    'enum' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'options',
          'type' => 'array',
        ),
        2 => 
        array (
          'name' => 'default',
          'type' => 'varchar',
        ),
      ),
      'filter' => true,
      'fieldDefs' => 
      array (
        'type' => 'varchar',
      ),
    ),
    'enumFloat' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'options',
          'type' => 'array',
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'float',
        ),
      ),
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'type' => 'float',
      ),
    ),
    'enumInt' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'options',
          'type' => 'array',
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'int',
        ),
      ),
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'type' => 'int',
      ),
    ),
    'file' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'actualFields' => 
      array (
        0 => 'id',
      ),
      'notActualFields' => 
      array (
        0 => 'name',
      ),
      'fieldDefs' => 
      array (
        'skip' => true,
      ),
      'filter' => false,
      'linkDefs' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
      ),
    ),
    'float' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'float',
        ),
        2 => 
        array (
          'name' => 'min',
          'type' => 'float',
        ),
        3 => 
        array (
          'name' => 'max',
          'type' => 'float',
        ),
      ),
      'filter' => true,
      'fieldDefs' => 
      array (
        'notNull' => false,
      ),
    ),
    'foreign' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'link',
          'type' => 'varchar',
        ),
        1 => 
        array (
          'name' => 'field',
          'type' => 'varchar',
        ),
      ),
      'filter' => false,
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'skip' => true,
      ),
    ),
    'image' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'previewSize',
          'type' => 'enum',
          'default' => 'small',
          'options' => 
          array (
            0 => 'x-small',
            1 => 'small',
            2 => 'medium',
            3 => 'large',
          ),
        ),
      ),
      'actualFields' => 
      array (
        0 => 'id',
      ),
      'notActualFields' => 
      array (
        0 => 'name',
      ),
      'fieldDefs' => 
      array (
        'skip' => true,
      ),
      'filter' => false,
      'linkDefs' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
      ),
    ),
    'int' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'int',
        ),
        2 => 
        array (
          'name' => 'min',
          'type' => 'int',
        ),
        3 => 
        array (
          'name' => 'max',
          'type' => 'int',
        ),
      ),
      'filter' => true,
    ),
    'link' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'actualFields' => 
      array (
        0 => 'id',
      ),
      'notActualFields' => 
      array (
        0 => 'name',
      ),
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'skip' => true,
      ),
    ),
    'linkMultiple' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'actualFields' => 
      array (
        0 => 'ids',
      ),
      'notActualFields' => 
      array (
        0 => 'names',
      ),
      'notCreatable' => true,
      'filter' => true,
    ),
    'linkParent' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'actualFields' => 
      array (
        0 => 'id',
        1 => 'type',
      ),
      'notActualFields' => 
      array (
        0 => 'name',
      ),
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => 
      array (
        'notStorable' => true,
      ),
    ),
    'multienum' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'options',
          'type' => 'array',
        ),
        2 => 
        array (
          'name' => 'translation',
          'type' => 'varchar',
        ),
      ),
      'notCreatable' => true,
      'filter' => false,
    ),
    'password' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
      ),
      'notCreatable' => true,
      'filter' => false,
    ),
    'personName' => 
    array (
      'actualFields' => 
      array (
        0 => 'salutation',
        1 => 'first',
        2 => 'last',
      ),
      'fields' => 
      array (
        'salutation' => 
        array (
          'type' => 'enum',
        ),
        'first' => 
        array (
          'type' => 'varchar',
        ),
        'last' => 
        array (
          'type' => 'varchar',
        ),
      ),
      'naming' => 'prefix',
      'mergable' => false,
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => 
      array (
        'default' => '',
      ),
    ),
    'phone' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'typeList',
          'type' => 'array',
          'options' => 
          array (
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other',
          ),
        ),
        2 => 
        array (
          'name' => 'defaultType',
          'type' => 'varchar',
          'default' => 'Mobile',
        ),
      ),
      'notActualFields' => 
      array (
        0 => 'data',
      ),
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => 
      array (
        'notStorable' => true,
      ),
    ),
    'text' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'text',
        ),
        2 => 
        array (
          'name' => 'maxLength',
          'type' => 'int',
        ),
      ),
      'filter' => true,
    ),
    'url' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'varchar',
        ),
        2 => 
        array (
          'name' => 'maxLength',
          'type' => 'int',
        ),
      ),
      'filter' => true,
      'fieldDefs' => 
      array (
        'type' => 'varchar',
      ),
    ),
    'varchar' => 
    array (
      'params' => 
      array (
        0 => 
        array (
          'name' => 'required',
          'type' => 'bool',
          'default' => false,
        ),
        1 => 
        array (
          'name' => 'default',
          'type' => 'varchar',
        ),
        2 => 
        array (
          'name' => 'maxLength',
          'type' => 'int',
        ),
      ),
      'filter' => true,
    ),
  ),
  'scopes' => 
  array (
    'Attachment' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'AuthToken' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Currency' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Email' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
    ),
    'EmailAddress' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'EmailTemplate' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'customizable' => false,
    ),
    'Job' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Note' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Notification' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'OutboundEmail' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'PhoneNumber' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Role' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'ScheduledJob' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'ScheduledJobLogRecord' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Stream' => 
    array (
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'Team' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'UniqueId' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false,
    ),
    'User' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => false,
      'acl' => false,
      'customizable' => true,
    ),
    'Account' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
    ),
    'Activities' => 
    array (
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
    ),
    'Calendar' => 
    array (
      'entity' => false,
      'tab' => true,
      'acl' => false,
      'module' => 'Crm',
    ),
    'Call' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
    ),
    'Case' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
    ),
    'Contact' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
    ),
    'InboundEmail' => 
    array (
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
    ),
    'Lead' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
    ),
    'Meeting' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
    ),
    'Opportunity' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
    ),
    'Target' => 
    array (
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'importable' => false,
    ),
    'Task' => 
    array (
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
    ),
  ),
);

?>