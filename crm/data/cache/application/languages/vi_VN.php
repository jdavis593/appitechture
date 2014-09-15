<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Bật',
      'Disabled' => 'Tắt',
      'System' => 'Hệ thống',
      'Users' => 'Người dùng',
      'Email' => 'Email',
      'Data' => 'Dữ liệu',
      'Customization' => 'Tùy chỉnh',
      'Available Fields' => 'Trường hiện có',
      'Layout' => 'Giao diện',
      'Add Panel' => 'Thêm bảng điều khiển',
      'Add Field' => 'Thêm trường',
      'Settings' => 'Cái đặt',
      'Scheduled Jobs' => 'Công việc đã lên lịch',
      'Upgrade' => 'Nâng cấp',
      'Clear Cache' => 'Xóa Cache',
      'Rebuild' => 'Dựng lại',
      'Teams' => 'Nhóm',
      'Roles' => 'Vai trò',
      'Outbound Emails' => 'Email đã gửi',
      'Inbound Emails' => 'Email đã nhận',
      'Email Templates' => 'Mẫu email',
      'Import' => 'Nhập',
      'Layout Manager' => 'Quản lý giao diện',
      'Field Manager' => 'Quản lý trường',
      'User Interface' => 'Giao diện người dùng',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Xác thực',
    ),
    'layouts' => 
    array (
      'list' => 'Đanh sách',
      'detail' => 'Chi tiết',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Bộ lọc tìm kiếm',
      'massUpdate' => 'Cập nhật',
      'relationships' => 'Quan hệ',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Địa chỉ',
      'array' => 'Mảng',
      'foreign' => 'Nước ngoài',
      'duration' => 'Thời gian',
      'password' => 'Mật khẩu',
      'parsonName' => 'Tên',
      'autoincrement' => 'Tự động tăng',
      'bool' => 'Bool',
      'currency' => 'Tiền tệ',
      'date' => 'Thời gian',
      'datetime' => 'Thời gian',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Đường dẫn',
      'linkMultiple' => 'Đa đường dẫn',
      'linkParent' => 'Đường dẫn gốc',
      'multienim' => 'Multienum',
      'phone' => 'Điện thoại',
      'text' => 'Text',
      'url' => 'Đường dẫn',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Ảnh',
    ),
    'fields' => 
    array (
      'type' => 'Loại',
      'name' => 'Tên',
      'label' => 'Thẻ',
      'required' => 'Yêu cầu',
      'default' => 'Mặc định',
      'maxLength' => 'Chiều dài tối đa',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Đường dẫn',
      'field' => 'Trường',
      'min' => 'Tối thiểu',
      'max' => 'Tối đa',
      'translation' => 'Dịch',
      'previewSize' => 'Kích thước cũ',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Your EspoCRM will be upgraded to version <strong>{version}</strong>. This can take some time.',
      'upgradeDone' => 'Your EspoCRM has been upgraded to version <strong>{version}</strong>. Refresh your browser window.',
      'upgradeBackup' => 'We recommend you to make backup of your EspoCRM files and data before upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Dấu phân cách không thể giống nhau',
      'userHasNoEmailAddress' => 'Người dùng chưa có địa chỉ email',
      'selectEntityType' => 'Chọn loại ở menu bên trái',
      'selectUpgradePackage' => 'Chọn gói nâng cấp',
      'selectLayout' => 'Chọn giao diện cần sửa bên trái',
    ),
    'descriptions' => 
    array (
      'settings' => 'System settings of application.',
      'scheduledJob' => 'Công việc tự động tiến hành',
      'upgrade' => 'Nâng cấp hệ thống EspoCRM',
      'clearCache' => 'Xóa dữ liệu cache.',
      'rebuild' => 'Xóa dữ liệu và tải lại hệ thống',
      'users' => 'Quản lý người dùng.',
      'teams' => 'Quản lý nhóm.',
      'roles' => 'Quản lý vai trò.',
      'outboundEmails' => 'Tùy chỉnh SMTP để gửi email.',
      'inboundEmails' => 'Nhóm tài khoản email IMAP. Nhập email và Email-to-Case.',
      'emailTemplates' => 'Mẫu email gửi đi',
      'import' => 'Nhập dữ liệu từ tệp CSV',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Tạo trường mới hoặc sửa trường đã tồn tại',
      'userInterface' => 'Chỉnh sửa giao diện.',
      'authTokens' => 'Kích hoạt quản lý phiên làm việc. Địa chỉ IP và ngày truy cập.',
      'authentication' => 'Cài đặt xác thực truy cập',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Cực nhỏ',
        'small' => 'Nhỏ',
        'medium' => 'Trung bình',
        'large' => 'Lớn',
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Người dùng',
      'ipAddress' => 'Địa chỉ IP',
      'lastAccess' => 'Thời gian truy cập cuối',
      'createdAt' => 'Thời gian đăng nhập',
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Chủ đề',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateSent' => 'Ngày gửi',
      'from' => 'Từ',
      'to' => 'Tới',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'selectTemplate' => 'Chọn mẫu',
      'fromEmailAddress' => 'Địa chỉ gửi',
      'toEmailAddresses' => 'Địa chỉ nhận',
      'emailAddress' => 'Địa chỉ email',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Nháp',
      'Sending' => 'Đang gửi',
      'Sent' => 'Đã gửi',
      'Archived' => 'Lưu trữ',
    ),
    'labels' => 
    array (
      'Create Email' => 'Email lưu trữ',
      'Compose' => 'Soạn',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Đã gửi',
      'archived' => 'Lưu trữ',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Chính',
      'Opted Out' => 'Chọn ra',
      'Invalid' => 'Không hợp lệ',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Tạo mẫu email',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'OutboundEmail' => 'Email đã gửi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'Account' => 'Tài khoản',
      'Contact' => 'Liên hệ',
      'Lead' => 'Chỉ dẫn',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Buổi gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
      'InboundEmail' => 'Email tới',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Địa chỉ email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'OutboundEmail' => 'Email đã gửi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'Account' => 'Tài khoản',
      'Contact' => 'Sổ liên lạc',
      'Lead' => 'Trưởng nhóm',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Hẹn gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Cuộc gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
      'InboundEmail' => 'Email đã nhận',
    ),
    'labels' => 
    array (
      'Misc' => 'Khác',
      'Merge' => 'Gộp',
      'None' => 'Trống',
      'by' => 'bởi',
      'Saved' => 'Đã lưu',
      'Error' => 'Lỗi',
      'Select' => 'Chọn',
      'Not valid' => 'Không phù hợp',
      'Please wait...' => 'Vui lòng đợi...',
      'Please wait' => 'Vui lòng đợi',
      'Loading...' => 'Đang tải...',
      'Uploading...' => 'Đang tải lên...',
      'Sending...' => 'Đang gửi...',
      'Removed' => 'Đã xóa',
      'Posted' => 'Đã đăng',
      'Linked' => 'Đã liên kết',
      'Unlinked' => 'Đã bỏ liên kết',
      'Access denied' => 'Từ chối truy cập',
      'Access' => 'Truy cập',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'bản ghi đã được xóa',
      'Wrong username/password' => 'Sai tên truy cập và mật khẩu',
      'Post cannot be empty' => 'Nội dung không được để trống',
      'Removing...' => 'Đang xóa...',
      'Unlinking...' => 'Đang bỏ liên kết...',
      'Posting...' => 'Đang gửi...',
      'Username can not be empty!' => 'Tên đăng nhập không được để trống!',
      'Cache is not enabled' => 'Cache không được bật',
      'Cache has been cleared' => 'Cache đã được xóa',
      'Rebuild has been done' => 'Tải lại thành công',
      'Saving...' => 'Đang lưu...',
      'Modified' => 'Đã sửa',
      'Created' => 'Đã tạo',
      'Create' => 'Tạo',
      'create' => 'tạo',
      'Overview' => 'Sơ lược',
      'Details' => 'Chi tiết',
      'Add Filter' => 'Thêm bộ lọc',
      'Add Dashlet' => 'Thêm module',
      'Add' => 'Thêm',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Thêm nữa',
      'Search' => 'Tìm kiếm',
      'Only My' => 'Chỉ',
      'Open' => 'Mở',
      'Admin' => 'Admin',
      'About' => 'Thông tin',
      'Refresh' => 'Tải lại',
      'Remove' => 'Xóa',
      'Options' => 'Tùy chọn',
      'Username' => 'Tên đăng nhập',
      'Password' => 'Mật khẩu',
      'Login' => 'Đăng nhập',
      'Log Out' => 'Đăng xuất',
      'Preferences' => 'Tùy chỉnh',
      'State' => 'Thành phố',
      'Street' => 'Đường',
      'Country' => 'Quốc gia',
      'City' => 'Quận - huyện',
      'PostalCode' => 'Mã bưu điện',
      'Followed' => 'Đã theo dõi',
      'Follow' => 'Theo dõi',
      'Clear Local Cache' => 'Clear Local Cache',
      'Actions' => 'Hoạt động',
      'Delete' => 'Xóa',
      'Update' => 'Cập nhật',
      'Save' => 'Lưu',
      'Edit' => 'Sửa',
      'Cancel' => 'Bỏ qua',
      'Unlink' => 'Xóa liên kết',
      'Mass Update' => 'Cập nhật',
      'Export' => 'Xuất',
      'No Data' => 'Không có dữ liệu',
      'All' => 'Tất cả',
      'Active' => 'Đang hoạt động',
      'Inactive' => 'Chưa hoạt động',
      'Write your comment here' => 'Viết lời nhắn tại đây',
      'Post' => 'Gửi',
      'Stream' => 'Luồng',
      'Show more' => 'Xem thêm',
      'Dashlet Options' => 'Tùy chọn module',
      'Full Form' => 'Đầy đủ',
      'Insert' => 'Chèn',
      'Person' => 'Cá nhân',
      'First Name' => 'Tên',
      'Last Name' => 'Họ',
      'Original' => 'Gốc',
      'You' => 'Bạn',
      'you' => 'bạn',
      'change' => 'thay đổi',
      'Primary' => 'Chính',
      'Save Filters' => 'Lưu bộ lọc',
      'Administration' => 'Administration',
      'Run Import' => 'Bắt đầu nhập',
      'Duplicate' => 'Trùng',
      'Notifications' => 'Thông báo',
      'Create InboundEmail' => 'Tạo email đến',
      'Activities' => 'Hành động',
      'History' => 'Lịch sử',
      'Attendees' => 'Người dự',
      'Schedule Meeting' => 'Lên lịch hẹn',
      'Schedule Call' => 'Lên lịch gọi',
      'Compose Email' => 'Tạo email',
      'Log Meeting' => 'Log cuộc hẹn',
      'Log Call' => 'Log cuộc gọi',
      'Archive Email' => 'Email lưu trữ',
      'Create Task' => 'Tạo nhiệm vụ',
      'Tasks' => 'Nhiệm vụ',
    ),
    'messages' => 
    array (
      'notModified' => 'Bạn chưa sửa bản ghi',
      'duplicate' => 'Bản ghi được tạo bị trùng',
      'fieldIsRequired' => '{field} là bắt buộc',
      'fieldShouldBeEmail' => 'Kiểm tra lại {field}',
      'fieldShouldBeFloat' => 'Kiểm tra lại {field}',
      'fieldShouldBeInt' => 'Kiểm tra lại {field}',
      'fieldShouldBeDate' => 'Kiểm tra lại {field}',
      'fieldShouldBeDatetime' => 'Kiểm tra lại {field}',
      'fieldShouldAfter' => '{field} cần đặt sau {otherField}',
      'fieldShouldBefore' => '{field} cần đặt trước {otherField}',
      'fieldShouldBeBetween' => '{field} cần đặt giữa {min} và {max}',
      'fieldShouldBeLess' => '{field} cần nhỏ hơn {value}',
      'fieldShouldBeGreater' => '{field} cần lớn hơn {value}',
      'fieldBadPasswordConfirm' => '{field} không hợp lệ',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Chỉ',
      'open' => 'Mở',
      'active' => 'Đang hoạt động',
    ),
    'fields' => 
    array (
      'name' => 'Tên',
      'firstName' => 'Tên',
      'lastName' => 'Họ',
      'salutationName' => 'Chào đón',
      'assignedUser' => 'Phân công',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Thành viên được phân công',
      'teams' => 'Nhóm',
      'createdAt' => 'Tạo lúc',
      'modifiedAt' => 'Sửa lúc',
      'createdBy' => 'Tạo bởi',
      'modifiedBy' => 'Sửa bởi',
      'title' => 'Tiêu đề',
      'dateFrom' => 'Từ ngày',
      'dateTo' => 'Tới ngày',
      'autorefreshInterval' => 'Tự động tải lại sau',
      'displayRecords' => 'Xem bản ghi',
      'billingAddressCity' => 'Quận - huyện',
      'billingAddressCountry' => 'Quốc gia',
      'billingAddressPostalCode' => 'Mã bưu điện',
      'billingAddressState' => 'Thành phố',
      'billingAddressStreet' => 'Đường',
      'addressCity' => 'Quận - huyện',
      'addressStreet' => 'Đường',
      'addressCountry' => 'Quốc gia',
      'addressState' => 'Thành phố',
      'addressPostalCode' => 'Mã bưu điện',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Nhóm',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'leads' => 'Trưởng nhóm',
      'meetings' => 'Hẹn gặp',
      'calls' => 'Cuộc gọi',
      'tasks' => 'Nhiệm vụ',
      'emails' => 'Địa chỉ email',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Luồng',
      'Leads' => 'Chỉ dẫn của tôi',
      'Opportunities' => 'Cơ hội của tôi',
      'Tasks' => 'Nhiệm vụ của tôi',
      'Cases' => 'Công việc của tôi',
      'Calendar' => 'Lịch',
      'OpportunitiesByStage' => 'Chia mức cơ hội',
      'OpportunitiesByLeadSource' => 'Phân chia cơ hội theo người chỉ dẫn',
      'SalesByMonth' => 'Doanh thu hàng tháng',
      'SalesPipeline' => 'Doanh thu đường ống',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} tạo {entityType} {entity}',
      'createAssigned' => '{user} tạo {entityType} {entity} phân công cho {assignee}',
      'assign' => '{user} phân công {entityType} {entity} cho {assignee}',
      'post' => '{user} đăng {entityType} {entity}',
      'attach' => '{user} đính kèm ở {entityType} {entity}',
      'status' => '{user} cập nhật {field} ở {entityType} {entity}',
      'update' => '{user} cập nhật {entityType} {entity}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'emailReceived' => '{entity} đã được nhận bởi {entityType} {entity}',
      'createThis' => '{user} tạo {entityType}',
      'createAssignedThis' => '{user} tạo {entityType} phân công cho {assignee}',
      'assignThis' => '{user} phân công {entityType} cho {assignee}',
      'postThis' => '{user} đã đăng',
      'attachThis' => '{user} đã đính kèm',
      'statusThis' => '{user} đã cập nhật {field}',
      'updateThis' => '{user} cập nhật {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'emailReceivedThis' => '{entity} đã được nhận',
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
        'Mr.' => 'Ông.',
        'Mrs.' => 'Bà.',
        'Dr.' => 'Ông.',
        'Drs.' => 'Bà.',
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
        11 => 'Trống',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Khác',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Đậm',
          'italic' => 'Nghiêng',
          'underline' => 'Gạch chân',
          'strike' => 'Gạch giữa',
          'clear' => 'Xóa định dạng',
          'height' => 'Kích thước dòng',
          'name' => 'Font chữ',
          'size' => 'Kích thước',
        ),
        'image' => 
        array (
          'image' => 'Ảnh',
          'insert' => 'Chèn ảnh',
          'resizeFull' => 'Ảnh đầy đủ',
          'resizeHalf' => 'Giảm nửa kích thước',
          'resizeQuarter' => 'Giảm 1/4 kích thước',
          'floatLeft' => 'Căn trái',
          'floatRight' => 'Căn phải',
          'floatNone' => 'Không căn lề',
          'dragImageHere' => 'Thả ảnh vào đây',
          'selectFromFiles' => 'Chọn từ thư mục',
          'url' => 'Đường dẫn ảnh',
          'remove' => 'Xóa ảnh',
        ),
        'link' => 
        array (
          'link' => 'Đường dẫn',
          'insert' => 'Chèn đường dẫn',
          'unlink' => 'Xóa liên kết',
          'edit' => 'Sửa',
          'textToDisplay' => 'Chữ hiển thị',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Mở trong cửa sổ mới',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Đường dẫn video',
          'insert' => 'Chèn Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Bảng',
        ),
        'hr' => 
        array (
          'insert' => 'Thêm dòng ngang',
        ),
        'style' => 
        array (
          'style' => 'Kiểu',
          'normal' => 'Bình thường',
          'blockquote' => 'Trích dẫn',
          'pre' => 'Code',
          'h1' => 'Tiêu đề 1',
          'h2' => 'Tiêu đề 2',
          'h3' => 'Tiêu đềTiêu đề 3',
          'h4' => 'Tiêu đề 4',
          'h5' => 'Tiêu đề 5',
          'h6' => 'Tiêu đề 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Liệt kê',
          'ordered' => 'Danh sách',
        ),
        'options' => 
        array (
          'help' => 'Trợ giúp',
          'fullscreen' => 'Đầy màn hình',
          'codeview' => 'Hiển thị dạng code',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Đoạn văn bản',
          'outdent' => 'Bỏ lùi đầu dòng',
          'indent' => 'Lùi đầu dòng',
          'left' => 'Căn lề trái',
          'center' => 'Căn lề giữa',
          'right' => 'Căn lề phải',
          'justify' => 'Căn lề 2 bên',
        ),
        'color' => 
        array (
          'recent' => 'Màu đã dùng',
          'more' => 'Thêm màu',
          'background' => 'Màu nền',
          'foreground' => 'Màu chữ',
          'transparent' => 'Trong suốt',
          'setTransparent' => 'Chỉnh độ trong suốt',
          'reset' => 'Reset',
          'resetToDefault' => 'Đặt lại mặc định',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Phím tắt',
          'close' => 'Đóng',
          'textFormatting' => 'Định dạng chữ',
          'action' => 'Hành động',
          'paragraphFormatting' => 'Định dạng đoạn văn bản',
          'documentStyle' => 'Kiểu văn bản',
        ),
        'history' => 
        array (
          'undo' => 'Quay lui',
          'redo' => 'Tiến lên',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Gửi',
      'attachments' => 'Đính kèm',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'smtpEmailAddress' => 'Địa chỉ email',
      'exportDelimiter' => 'Xuất dấu phân cách',
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
        2 => 'Chủ nhật',
        3 => 'Thứ 2',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'roles' => 'Vai trò',
    ),
    'links' => 
    array (
      'users' => 'Người dùng',
      'teams' => 'Nhóm',
    ),
    'labels' => 
    array (
      'Access' => 'Truy cập',
      'Create Role' => 'Tạo vai trò',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'chưa đặt',
        'enabled' => 'kích hoạt',
        'disabled' => 'tắt',
      ),
      'levelList' => 
      array (
        'all' => 'tất cả',
        'team' => 'nhóm',
        'own' => 'sở hữu',
        'no' => 'không',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Đọc',
      'edit' => 'Sửa',
      'delete' => 'Xóa',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'job' => 'Công việc',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Nhật ký',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Lên lịch công việc',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Kiểm tra hộp thư đến',
        'Cleanup' => 'Dọn dẹp',
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
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Trạng thái',
      'executionTime' => 'Thời gian hoạt động',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Dùng Cache',
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'companyLogo' => 'Logo công ty',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'outboundEmailFromName' => 'tên người gửi',
      'outboundEmailFromAddress' => 'Địa chỉ gửi',
      'outboundEmailIsShared' => 'Được chia sẻ',
      'recordsPerPage' => 'Số bản ghi trên mỗi trang',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Danh sách Tab',
      'quickCreateList' => 'Tạo nhanh danh sách',
      'exportDelimiter' => 'Xuất dấu phân cách',
      'authenticationMethod' => 'Phương thức xác thực',
      'ldapHost' => 'Máy chủ',
      'ldapPort' => 'Cổng',
      'ldapAuth' => 'Truy cập',
      'ldapUsername' => 'Tên đăng nhập',
      'ldapPassword' => 'Mật khẩu',
      'ldapBindRequiresDn' => 'Yêu cầu Dn',
      'ldapBaseDn' => 'Dn gốc',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Tên miền tài khoản',
      'ldapTryUsernameSplit' => 'Thử lại',
      'ldapCreateEspoUser' => 'Tạo người dùng',
      'ldapSecurity' => 'Bảo mật',
      'ldapUserLoginFilter' => 'Bộ lọc đăng nhập',
      'ldapAccountDomainNameShort' => 'Tên miền tài khoản',
      'ldapOptReferrals' => 'Được giới thiệu',
      'disableExport' => 'Disable Export (only admin is allowed)',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Chủ nhật',
        3 => 'Thứ 2',
      ),
    ),
    'labels' => 
    array (
      'System' => 'Hệ thống',
      'Locale' => 'Bản địa hóa',
      'SMTP' => 'SMTP',
      'Configuration' => 'Tùy chỉnh',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'roles' => 'Vai trò',
    ),
    'links' => 
    array (
      'users' => 'Người dùng',
    ),
    'labels' => 
    array (
      'Create Team' => 'Tạo nhóm',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'userName' => 'Tên người dùng',
      'title' => 'Tiêu đề',
      'isAdmin' => 'Tài khoản Admin',
      'defaultTeam' => 'Nhóm mặc định',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Điện thoại',
      'roles' => 'Vai trò',
      'password' => 'Mật khẩu',
      'passwordConfirm' => 'Xác thực mật khẩu',
      'newPassword' => 'Mật khẩu mới',
    ),
    'links' => 
    array (
      'teams' => 'Nhóm',
      'roles' => 'Vai trò',
    ),
    'labels' => 
    array (
      'Create User' => 'Tạo người dùng',
      'Generate' => 'Tạo',
      'Access' => 'Truy cập',
      'Preferences' => 'Tùy chỉnh',
      'Change Password' => 'Đổi mật khẩu',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Mật khẩu sẽ được gửi tới email tài khoản',
      'accountInfoEmailSubject' => 'Thông tin tài khoản',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChanged' => 'Mật khẩu đã được đổi',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'billingAddress' => 'Địa chủ thanh toán',
      'shippingAddress' => 'Địa chỉ vận chuyển',
      'description' => 'Mô tả',
      'sicCode' => 'Mã Sic',
      'industry' => 'Industry',
      'type' => 'Loại',
      'contactRole' => 'Vai trò',
    ),
    'links' => 
    array (
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Khách hàng',
        'Investor' => 'Nhà đầu tư',
        'Partner' => 'Đối tác',
        'Reseller' => 'Đại lý',
      ),
      'industry' => 
      array (
        'Apparel' => 'May mặc',
        'Banking' => 'Ngân hàng',
        'Computer Software' => 'Phần mềm',
        'Education' => 'Giáo dục',
        'Electronics' => 'Điện máy',
        'Finance' => 'Tín dụng',
        'Insurance' => 'Bảo hiểm',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Tạo tài khoản',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Tháng',
      'week' => 'Tuần',
      'day' => 'Ngày',
      'agendaWeek' => 'Tuần',
      'agendaDay' => 'Ngày',
    ),
    'labels' => 
    array (
      'Today' => 'Today',
      'Create' => 'Tạo',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'direction' => 'Hướng',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ra ngoài',
        'Inbound' => 'Vào trong',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Tạo cuộc gọi',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'number' => 'Số',
      'status' => 'Trạng thái',
      'account' => 'Tài khoản',
      'contact' => 'Liên hệ',
      'priority' => 'Ưu tiên',
      'type' => 'Loại',
      'description' => 'Mô tả',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'Pending' => 'Đang chờ',
        'Closed' => 'Đã đóng',
        'Rejected' => 'Đã từ chối',
        'Duplicate' => 'Trùng',
      ),
      'priority' => 
      array (
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp',
      ),
      'type' => 
      array (
        'Question' => 'Câu hỏi',
        'Incident' => 'Sự cố',
        'Problem' => 'Có vấn đề',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Tạo trường hợp',
    ),
    'presetFilters' => 
    array (
      'open' => 'Mở',
      'closed' => 'Đã đóng',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'account' => 'Tài khoản',
      'accounts' => 'Tài khoản',
      'phoneNumber' => 'Điện thoại',
      'accountType' => 'Loại tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'opportunityRole' => 'Vai trò cơ hội',
      'accountRole' => 'Vai trò',
      'description' => 'Mô tả',
    ),
    'links' => 
    array (
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Tạo liên hệ',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Trống--',
        'Decision Maker' => 'Tạo quyết định',
        'Evaluator' => 'Đánh giá',
        'Influencer' => 'Phụ thuộc',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'team' => 'Nhóm',
      'status' => 'Trạng thái',
      'assignToUser' => 'Chỉ định',
      'host' => 'Máy chủ',
      'username' => 'Tên đăng nhập',
      'password' => 'Mật khẩu',
      'port' => 'Cổng',
      'monitoredFolders' => 'Thư mục được theo dõi',
      'trashFolder' => 'Thùng rác',
      'ssl' => 'SSL',
      'createCase' => 'Tạo trường hợp',
      'reply' => 'Trả lời',
      'caseDistribution' => 'Trường hợp phân phối',
      'replyEmailTemplate' => 'Mẫu email trả lời',
      'replyFromAddress' => 'Địa chỉ email trả lời',
      'replyFromName' => 'Tên người gửi',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động',
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
      'Create InboundEmail' => 'Tạo email đến',
      'IMAP' => 'IMAP',
      'Actions' => 'Hoạt động',
      'Main' => 'Chính',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Không thể kết nối với máy chủ IMAP',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Đã chuyển đổi sang',
      'Create Lead' => 'Tạo chỉ dẫn',
      'Convert' => 'Chuyển đổi',
    ),
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'accountName' => 'Tên tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'status' => 'Trạng thái',
      'source' => 'Nguồn',
      'opportunityAmount' => 'Trị giá',
      'description' => 'Mô tả',
      'createdAccount' => 'Tài khoản',
      'createdContact' => 'Liên hệ',
      'createdOpportunity' => 'Cơ hội',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'In Process' => 'Đang tiến hành',
        'Converted' => 'Đã chuyển đổi',
        'Recycled' => 'Thùng rác',
        'Dead' => 'Chết',
      ),
      'source' => 
      array (
        'Call' => 'Gọi',
        'Email' => 'Email',
        'Existing Customer' => 'Khách hàng hiện có',
        'Partner' => 'Đối tác',
        'Public Relations' => 'Khách hàng công khai',
        'Web Site' => 'Web Site',
        'Campaign' => 'Chiến dịch',
        'Other' => 'Khác',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Đang hoạt động',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Tạo buổi hẹn',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
      'Saved as Held' => 'Lưu là đã tổ chức',
      'Saved as Not Held' => 'Lưu là chưa tổ chức',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'account' => 'Tài khoản',
      'stage' => 'Mức',
      'amount' => 'Tổng',
      'probability' => 'Xác suất, %',
      'leadSource' => 'Nguồn dẫn',
      'doNotCall' => 'Không gọi',
      'closeDate' => 'Ngày kết thúc',
      'contacts' => 'Sổ liên lạc',
      'description' => 'Mô tả',
    ),
    'links' => 
    array (
      'contacts' => 'Sổ liên lạc',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Khảo sát',
        'Qualification' => 'Trình độ chuyên môn',
        'Needs Analysis' => 'Phân tích nhu cầu',
        'Value Proposition' => 'Đề xuất giá trị',
        'Id. Decision Makers' => 'Id. Người tạo quyết định',
        'Perception Analysis' => 'Phân tích khả năng',
        'Proposal/Price Quote' => 'Giá đặt ra',
        'Negotiation/Review' => 'Đàm phán / đánh giá',
        'Closed Won' => 'Thắng thầu',
        'Closed Lost' => 'Thua thầu',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Tạo cơ hội',
    ),
    'presetFilters' => 
    array (
      'open' => 'Mở',
      'won' => 'Thắng',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'website' => 'Website',
      'accountName' => 'Tên tài khoản',
      'phoneNumber' => 'Điện thoại',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'description' => 'Mô tả',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Tạo mục tiêu',
      'Convert to Lead' => 'Chuyển đổi thành chỉ dẫn',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Hạn',
      'priority' => 'Ưu tiên',
      'description' => 'Mô tả',
      'isOverdue' => 'Đã quá hạn',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Chưa bắt đầu',
        'Started' => 'Đã bắt đầu',
        'Completed' => 'Hoàn thành',
        'Canceled' => 'Hủy',
      ),
      'priority' => 
      array (
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Tạo nhiệm vụ',
    ),
    'presetFilters' => 
    array (
      'active' => 'Đang hoạt động',
      'completed' => 'Hoàn thành',
      'todays' => 'Hôm nay',
      'overdue' => 'Quá hạn',
    ),
  ),
);

?>