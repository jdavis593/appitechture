<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Etkin',
      'Disabled' => 'Devre Dışı',
      'System' => 'Sistem',
      'Users' => 'Kullanıcılar',
      'Email' => 'Eposta',
      'Data' => 'Veri',
      'Customization' => 'Özelleştirme',
      'Available Fields' => 'Uygun Alanlar',
      'Layout' => 'Yerleşim',
      'Add Panel' => 'Pano Ekle',
      'Add Field' => 'Alan Ekle',
      'Settings' => 'Ayarlar',
      'Scheduled Jobs' => 'Planlanmış İşler',
      'Upgrade' => 'Yükselt',
      'Clear Cache' => 'Önbelleği Temizle',
      'Rebuild' => 'Onar',
      'Teams' => 'Takımlar',
      'Roles' => 'Görevler',
      'Outbound Emails' => 'Giden Epostalar',
      'Inbound Emails' => 'Gelen Epostalar',
      'Email Templates' => 'Eposta Şablonları',
      'Import' => 'İçeri Aktar',
      'Layout Manager' => 'Yerleşim Yönetimi',
      'Field Manager' => 'Alan Yönetimi',
      'User Interface' => 'Kullanıcı Arayüzü',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detay',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Arama Filtreleri',
      'massUpdate' => 'Çoklu Güncelleme',
      'relationships' => 'İlişkiler',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Sıralama',
      'foreign' => 'Yabancı',
      'duration' => 'Süre',
      'password' => 'Şifre',
      'parsonName' => 'Kişi Adı',
      'autoincrement' => 'Otomatik Arttırım',
      'bool' => 'XXXX',
      'currency' => 'Para Birimi',
      'date' => 'Tarih',
      'datetime' => 'TarihSaat',
      'email' => 'Eposta',
      'enum' => 'Sıralama',
      'enumInt' => 'Tamsayı Sıralama',
      'enumFloat' => 'XXXX Sıralama',
      'float' => 'Hizalama',
      'int' => 'Int',
      'link' => 'Bağlantı',
      'linkMultiple' => 'Çoklu Bağlantı',
      'linkParent' => 'Üst Bağlantı',
      'multienim' => 'Çoklu Sıralama',
      'phone' => 'Telefon',
      'text' => 'Metin',
      'url' => 'Url',
      'varchar' => 'Değişken Karakter',
      'file' => 'Dosya',
      'image' => 'Resim',
    ),
    'fields' => 
    array (
      'type' => 'Tür',
      'name' => 'İsim',
      'label' => 'Etiket',
      'required' => 'Gerekli',
      'default' => 'Varsayılan',
      'maxLength' => 'Maks Uzunluk',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Bağlantı',
      'field' => 'Alan',
      'min' => 'Min',
      'max' => 'Maks',
      'translation' => 'Çeviri',
      'previewSize' => 'Önizlme Boyutu',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM yazılımınız <strong>{version}</strong> sürümüne yükseltilecektir. Bu işlem birkaç dakika sürebilir.',
      'upgradeDone' => 'EspoCRM yazılımınız <strong>{version}</strong> sürümüne yükseltilmiştir. Tarayıcı pencerenizi lütfen yenileyin..',
      'upgradeBackup' => 'Yükseltmeden önce EspoCRM dosya ve verilerinizi yedeklemenizi öneririz.',
      'thousandSeparatorEqualsDecimalMark' => 'Binlik ayraç ondalık ayraç ile aynı olamaz.',
      'userHasNoEmailAddress' => 'Kullanıcı eposta adresi tanımlamamıştır.',
      'selectEntityType' => 'Soldaki menüden birim türünü seçin.',
      'selectUpgradePackage' => 'Yükseltme paketini seçin.',
      'selectLayout' => 'Gerekli yerleşim düzenini sol menüden seçin ve düzenleyin.',
    ),
    'descriptions' => 
    array (
      'settings' => 'Uygulamanın sistem ayarları.',
      'scheduledJob' => 'Cron tarafından gerçekleştirilmiş işler.',
      'upgrade' => 'EspoCRM i yükselt.',
      'clearCache' => 'Tüm sunucu önbelleğini temizle.',
      'rebuild' => 'Sunucuyu onar ve önbelleği temizle.',
      'users' => 'Kullanıcı Yönetimi.',
      'teams' => 'Takım Yönetimi.',
      'roles' => 'Görev Yönetimi.',
      'outboundEmails' => 'Giden epostalar için SMTP ayarları.',
      'inboundEmails' => 'IMAP eposta hesaplarını grupla. Eposta içe aktarımı ve dizinleme',
      'emailTemplates' => 'Giden eposta şablonları.',
      'import' => 'CSV dosyasından veri aktar.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'fieldManager' => 'Yeni alan ekle yada varolanı düzenle.',
      'userInterface' => 'Kullanıcı Arayğzünü ayarla.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
      'authentication' => 'Authentication setttings.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Çok Küçük',
        'small' => 'Küçük',
        'medium' => 'Orta',
        'large' => 'Büyük',
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
      'name' => 'Konu',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateSent' => 'Gönderilen Tariht',
      'from' => 'Kimden',
      'to' => 'Kime',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Html olarak gönder',
      'body' => 'Mesaj',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'selectTemplate' => 'Şablonu Seçin',
      'fromEmailAddress' => 'Gönderen Adresi',
      'toEmailAddresses' => 'Alıcı Adresi',
      'emailAddress' => 'Eposta Adresi',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Taslak',
      'Sending' => 'Gönderiyor',
      'Sent' => 'Gönderildi',
      'Archived' => 'Arşivlendi',
    ),
    'labels' => 
    array (
      'Create Email' => 'Epostayı Arşivle',
      'Compose' => 'Yeni Eposta',
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
      'Primary' => 'Öncelikli',
      'Opted Out' => 'SeçildiXXX',
      'Invalid' => 'Geçersiz',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum',
      'isHtml' => 'Html olarak gönder',
      'body' => 'Mesaj',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Eposta Şablonu Oluştur',
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Eposta',
      'User' => 'Kullanıcı',
      'Team' => 'Takım',
      'Role' => 'Görev',
      'EmailTemplate' => 'Eposta Şablonu',
      'OutboundEmail' => 'Giden Eposta',
      'ScheduledJob' => 'Zamanlanmış İşler',
      'Account' => 'Hesap',
      'Contact' => 'Bağlantı',
      'Lead' => 'Müşteri Adayı',
      'Target' => 'Target',
      'Opportunity' => 'Fırsat',
      'Meeting' => 'Toplantı',
      'Calendar' => 'Takvim',
      'Call' => 'Arama',
      'Task' => 'Görev',
      'Case' => 'Dosya',
      'InboundEmail' => 'Gelen Eposta',
      'Prospect' => 'Beklenti',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Epostalar',
      'User' => 'Kullanıcılar',
      'Team' => 'Takımlar',
      'Role' => 'Görevler',
      'EmailTemplate' => 'Eposta Şablonları',
      'OutboundEmail' => 'Giden Epostalar',
      'ScheduledJob' => 'Planlanmış İşler',
      'Account' => 'Hesaplar',
      'Contact' => 'Bağlantılar',
      'Lead' => 'Müşteri Adayları',
      'Target' => 'Targets',
      'Opportunity' => 'Fırsatlar',
      'Meeting' => 'Toplantılar',
      'Calendar' => 'Takvim',
      'Call' => 'Aramalar',
      'Task' => 'Görevler',
      'Case' => 'Dosyalar',
      'InboundEmail' => 'Gelen Epostalar',
      'Prospect' => 'Beklentiler',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Birleştir',
      'None' => 'Hiç',
      'by' => 'tarafından',
      'Saved' => 'Kaydedildi',
      'Error' => 'hata',
      'Select' => 'Seç',
      'Not valid' => 'Geçerli Değil',
      'Please wait...' => 'Lütfen bekleyin...',
      'Please wait' => 'Lütfen bekleyin',
      'Loading...' => 'Yükleniyor...',
      'Uploading...' => 'Yükleniyor...',
      'Sending...' => 'Gönderiliyor...',
      'Removed' => 'Removed',
      'Posted' => 'Yayınlandı',
      'Linked' => 'Bağlantı Kuruldu',
      'Unlinked' => 'Bağlantı Kesildi',
      'Access denied' => 'Erişim engellendi',
      'Access' => 'Giriş',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Kayıt silindi',
      'Wrong username/password' => 'Yanlış kullanıcı adı/şifre',
      'Post cannot be empty' => 'Yorum alanı boş bırakılamaz',
      'Removing...' => 'Kaldırılıyor...',
      'Unlinking...' => 'Bağlantı kesiliyor...',
      'Posting...' => 'Yayınlanıyor...',
      'Username can not be empty!' => 'Kullanıcı adı boş bırakılamaz!',
      'Cache is not enabled' => 'Önbelleğe erişilemiyor',
      'Cache has been cleared' => 'Önbellek temizlendi',
      'Rebuild has been done' => 'Onarım tamamlandı',
      'Saving...' => 'Kaydediliyor...',
      'Modified' => 'Değişiklik uygulandı',
      'Created' => 'Oluşturuldu',
      'Create' => 'Oluştur',
      'create' => 'oluştur',
      'Overview' => 'Genel Bakış',
      'Details' => 'Detaylar',
      'Add Filter' => 'Filtre Ekle',
      'Add Dashlet' => 'Önizleme Alanı Ekle',
      'Add' => 'Ekle',
      'Reset' => 'Sıfırla',
      'Menu' => 'Menü',
      'More' => 'Daha Fazla',
      'Search' => 'Arama',
      'Only My' => 'Sadece Ben',
      'Open' => 'Aç',
      'Admin' => 'Yönetici',
      'About' => 'Hakkında',
      'Refresh' => 'Yenile',
      'Remove' => 'Kaldır',
      'Options' => 'Seçenekler',
      'Username' => 'Kullanıcı Adı',
      'Password' => 'Şifre',
      'Login' => 'Giriş',
      'Log Out' => 'Çıkış',
      'Preferences' => 'Seçenekler',
      'State' => 'Semt',
      'Street' => 'Sokak',
      'Country' => 'Ülke',
      'City' => 'Şehir',
      'PostalCode' => 'Posta Kodu',
      'Followed' => 'Takip Ediliyor',
      'Follow' => 'Takip Et',
      'Clear Local Cache' => 'Önbelleği Temizle',
      'Actions' => 'Hareketler',
      'Delete' => 'Sil',
      'Update' => 'Güncelle',
      'Save' => 'Kaydet',
      'Edit' => 'Düzenle',
      'Cancel' => 'İptal Et',
      'Unlink' => 'Bağlantıyı Kes',
      'Mass Update' => 'Çoklu Güncelleme',
      'Export' => 'Dışa Aktar',
      'No Data' => 'Veri Yok',
      'All' => 'Tümü',
      'Active' => 'Aktif',
      'Inactive' => 'Pasif',
      'Write your comment here' => 'Yorumlarınızı buraya yazın',
      'Post' => 'Yayınla',
      'Stream' => 'Hareket',
      'Show more' => 'Daha fazla göster',
      'Dashlet Options' => 'Önizleme Alanı Seçenekleri',
      'Full Form' => 'Tam Form',
      'Insert' => 'Ekle',
      'Person' => 'Kişi',
      'First Name' => 'isim',
      'Last Name' => 'Soyisim',
      'Original' => 'Orjinal',
      'You' => 'Siz',
      'you' => 'Sen',
      'change' => 'Değiştir',
      'Primary' => 'Primary',
      'Save Filters' => 'Save Filters',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
      'Notifications' => 'Notifications',
      'Create InboundEmail' => 'Gelen Eposta Oluştur',
      'Activities' => 'Aktiviteler',
      'History' => 'Geçmiş',
      'Attendees' => 'Katılımcılar',
      'Schedule Meeting' => 'Toplantı Ayarla',
      'Schedule Call' => 'Arama Ayarla',
      'Compose Email' => 'Eposta Gönder',
      'Log Meeting' => 'Günlük Toplantı',
      'Log Call' => 'Günlük Arama',
      'Archive Email' => 'Epostayı Arşivle',
      'Create Task' => 'Görev Oluştur',
      'Tasks' => 'Görevler',
    ),
    'messages' => 
    array (
      'notModified' => 'Kayıdı değiştirmediniz',
      'duplicate' => 'Oluşturmaya çalıştığınız kaydın benzer bir kopyası var',
      'fieldIsRequired' => '{field} gerekli',
      'fieldShouldBeEmail' => '{field} geçerli bir eposta adresi olmalı',
      'fieldShouldBeFloat' => '{field} geçerli bir FLOAT olmalı',
      'fieldShouldBeInt' => '{field} geçerli bir tamsayı olmalı',
      'fieldShouldBeDate' => '{field} geçerli bir tarih olmalı',
      'fieldShouldBeDatetime' => '{field} geçerli bir tarih/saat olmalı',
      'fieldShouldAfter' => '{field} şu değerden sonra gelmeli: {otherField}',
      'fieldShouldBefore' => '{field} şu değerden önce gelmeli: {otherField}',
      'fieldShouldBeBetween' => '{field} şu iki değer arasında olmalı: {min} ve {max}',
      'fieldShouldBeLess' => '{field} şu değerden daha az olmalı: {value}',
      'fieldShouldBeGreater' => '{field} şu değerden daha büyük olmalı: {value}',
      'fieldBadPasswordConfirm' => '{field} hatalı olarak onaylandı',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Sadece Ben',
      'open' => 'Aç',
      'active' => 'Aktif',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'firstName' => 'isim',
      'lastName' => 'Soyisim',
      'salutationName' => 'Hitap',
      'assignedUser' => 'Atanan Kişi',
      'emailAddress' => 'Eposta',
      'assignedUserName' => 'Atanan Kişi Kullanıcı Adı',
      'teams' => 'Takımlar',
      'createdAt' => 'Oluşturuldu:',
      'modifiedAt' => 'Değiştirildi:',
      'createdBy' => 'Tarafından Oluşturuldu',
      'modifiedBy' => 'tarafından Değiştirildi:',
      'title' => 'Başlık',
      'dateFrom' => 'Başlangıç Tarihi',
      'dateTo' => 'Bitiş Tarihi',
      'autorefreshInterval' => 'Otomatik Yenileme Süresi',
      'displayRecords' => 'Kayıtları Göster',
      'billingAddressCity' => 'Şehir',
      'billingAddressCountry' => 'Ülke',
      'billingAddressPostalCode' => 'Posta Kodu',
      'billingAddressState' => 'Semt',
      'billingAddressStreet' => 'Sokak',
      'addressCity' => 'Şehir',
      'addressStreet' => 'Sokak',
      'addressCountry' => 'Ülke',
      'addressState' => 'Semt',
      'addressPostalCode' => 'Posta Kodu',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
    ),
    'links' => 
    array (
      'teams' => 'Takımlar',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'opportunities' => 'Fırsatlar',
      'leads' => 'Müşteri Adayları',
      'meetings' => 'Toplantılar',
      'calls' => 'Aramalar',
      'tasks' => 'Görevler',
      'emails' => 'Epostalar',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Hareket',
      'Leads' => 'Müşteri Adaylarım',
      'Opportunities' => 'Fırsatlarım',
      'Tasks' => 'Görevleri',
      'Cases' => 'Dosyalarım',
      'Calendar' => 'Takvim',
      'OpportunitiesByStage' => 'Aşamaya Göre Fırstalar',
      'OpportunitiesByLeadSource' => 'Aday Müşterilere Göre Fırsatlar',
      'SalesByMonth' => 'Aylık Satışlar',
      'SalesPipeline' => 'Satış Öngörüleri',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} oluşturdu: {entityType} {entity}',
      'createAssigned' => '{user} oluşturdu: {entityType} {entity} ve şuna atandı: {assignee}',
      'assign' => '{user} şunu: {entityType} {entity} şuna ataadı: {assignee}',
      'post' => '{user} {entityType} {entity} yayınladı.',
      'attach' => '{user} {entityType} {entity} yi ekledi.',
      'status' => '{user} {field}  {entityType} {entity} yi güncelledi',
      'update' => '{user} {entityType} {entity} güncelledi.',
      'createRelated' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType} {entity}',
      'emailReceived' => '{entity} şunun için alındı: {entityType} {entity}',
      'createThis' => '{user} oluşturdu: {entityType}',
      'createAssignedThis' => '{user} oluşturdu: {entityType} ve şuna atandı: {assignee}',
      'assignThis' => '{user} şunu: {entityType} şuna atadı: {assignee}',
      'postThis' => '{user} yayınladı',
      'attachThis' => '{user} ekledi',
      'statusThis' => '{user} güncelledi: {field}',
      'updateThis' => '{user} güncelledi: {entityType}',
      'createRelatedThis' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType}',
      'emailReceivedThis' => '{entity} alındı',
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
        'Mr.' => 'Bay.',
        'Mrs.' => 'Bayan.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaca',
        'az_AZ' => 'Azeri Türkçesi',
        'be_BY' => 'Rusça',
        'bg_BG' => 'Bulgarca',
        'bn_IN' => 'Bengalcw',
        'bs_BA' => 'Boşnakça',
        'ca_ES' => 'Katalanca',
        'cs_CZ' => 'Çekce',
        'cy_GB' => 'Galce',
        'da_DK' => 'Danca',
        'de_DE' => 'Almanca',
        'el_GR' => 'Yunanca',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonca',
        'eu_ES' => 'Baskça',
        'fa_IR' => 'Farsça',
        'fi_FI' => 'Fince',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'İrlandaca',
        'gl_ES' => 'Galce',
        'gn_PY' => 'Guarani',
        'he_IL' => 'İbranice',
        'hi_IN' => 'Hintçe',
        'hr_HR' => 'Hırvatça',
        'hu_HU' => 'Macarca',
        'hy_AM' => 'Ermenice',
        'id_ID' => 'Indonesian',
        'is_IS' => 'İzlandaca',
        'it_IT' => 'İtalyanca',
        'ja_JP' => 'Japonca',
        'ka_GE' => 'Gürcüce',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korece',
        'ku_TR' => 'Kürtçe',
        'lt_LT' => 'Litvanca',
        'lv_LV' => 'Letonca',
        'mk_MK' => 'Makedonca',
        'ml_IN' => 'Malay',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norveç Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepalce',
        'nl_NL' => 'Flemenkçe',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polca',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Rumence',
        'ru_RU' => 'Rusça',
        'sk_SK' => 'Slovakça',
        'sl_SI' => 'Slovence',
        'sq_AL' => 'Arnavutça',
        'sr_RS' => 'Sırpça',
        'sv_SE' => 'İsveççe',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Taicei',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Türkçe',
        'uk_UA' => 'Ukraynaca',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamca',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Da',
        'notOn' => 'NOT ON',
        'after' => 'Sonra',
        'before' => 'Önce',
        'between' => 'Arasında',
        'today' => 'Today',
        'past' => 'Past',
        'future' => 'Future',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Eşit',
        'notEquals' => 'Eşit Değil',
        'greaterThan' => 'den Büyük',
        'lessThan' => 'den Küçük',
        'greaterThanOrEquals' => 'den Büyük ya da Eşit',
        'lessThanOrEquals' => 'den Küçük ya da Eşit',
        'between' => 'Arasında',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'None',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes',
        11 => 'Hiç',
        12 => '30 saniye',
        13 => '1 dakika',
        14 => '2 dakika',
        15 => '5 dakika',
        16 => '10 dakika',
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
        'NOTICE' => 'Çeviriyi bu adreste bulabilirsiniz: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Kalın',
          'italic' => 'İtalik',
          'underline' => 'Altı Çizili',
          'strike' => 'Üstü Çizili',
          'clear' => 'Yazı Karakterini Kaldır',
          'height' => 'Satır Yüksekliği',
          'name' => 'Yazı Karakteri',
          'size' => 'YazıKarakteri Boyutu',
        ),
        'image' => 
        array (
          'image' => 'Resim',
          'insert' => 'Resim Ekle',
          'resizeFull' => 'Orjinal Boyut',
          'resizeHalf' => '1/2 Boyut',
          'resizeQuarter' => '1/4 Boyut',
          'floatLeft' => 'Sola Hizala',
          'floatRight' => 'Sağa Hizala',
          'floatNone' => 'Hizalamayı Kaldır',
          'dragImageHere' => 'Resmi buraya sürükle',
          'selectFromFiles' => 'Dosya seç',
          'url' => 'Resim URL',
          'remove' => 'Resmi Kaldır',
        ),
        'link' => 
        array (
          'link' => 'Bağlantı',
          'insert' => 'Bağlantı Ekle',
          'unlink' => 'Bağlantıyı Kes',
          'edit' => 'Düzenle',
          'textToDisplay' => 'Gösterilecek Metin',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Yeni Pencerede Aç',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Bağlantısı',
          'insert' => 'Video Ekle',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tablo',
        ),
        'hr' => 
        array (
          'insert' => 'Yatay Cetvel Ekle',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'QUOTE',
          'pre' => 'Kod',
          'h1' => 'Başlık 1',
          'h2' => 'Başlık 2',
          'h3' => 'Başlık 3',
          'h4' => 'Başlık 4',
          'h5' => 'Başlık 5',
          'h6' => 'Başlık 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Düzenlenmemiş Liste',
          'ordered' => 'Düzenlenmiş Liste',
        ),
        'options' => 
        array (
          'help' => 'Yardım',
          'fullscreen' => 'Tam Ekran',
          'codeview' => 'Kod Görünümü',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Girintiyi arttır',
          'indent' => 'Girintiyi azalt',
          'left' => 'Sola hizala',
          'center' => 'Ortaya hizala',
          'right' => 'Sağa hizala',
          'justify' => 'Tam Yasla',
        ),
        'color' => 
        array (
          'recent' => 'Son Kullanılan Renk',
          'more' => 'Daha Fazla Renk',
          'background' => 'Arkaplan Rengi',
          'foreground' => 'Yazı Karakteri Rengi',
          'transparent' => 'Şeffaflık',
          'setTransparent' => 'Şeffaflığı Ayarla',
          'reset' => 'Sıfırla',
          'resetToDefault' => 'Varsayılana Sıfırla',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klavye Kısayolları',
          'close' => 'Kapat',
          'textFormatting' => 'Metin Biçimlendirme',
          'action' => 'Eylem',
          'paragraphFormatting' => 'Paragraf Biçimlendirme',
          'documentStyle' => 'Döküman Stili',
        ),
        'history' => 
        array (
          'undo' => 'Geri Al',
          'redo' => 'Tekrrar Yap',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Yayınla',
      'attachments' => 'Dosya Ekle',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Binlik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'smtpServer' => 'Sunucu',
      'smtpPort' => 'Bağlantı Noktası',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'emailAddress' => 'Eposta',
      'smtpPassword' => 'Şifre',
      'smtpEmailAddress' => 'Eposta Adresi',
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
        2 => 'Pazar',
        3 => 'Pazartesi',
      ),
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'roles' => 'Görevler',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
      'teams' => 'Takımlar',
    ),
    'labels' => 
    array (
      'Access' => 'Giriş',
      'Create Role' => 'Görev Oluştur',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'ayarlanmadı',
        'enabled' => 'etkinleştirildi',
        'disabled' => 'devre dışı bırakıldı',
      ),
      'levelList' => 
      array (
        'all' => 'tümü',
        'team' => 'takım',
        'own' => 'kendi',
        'no' => 'NO',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Oku',
      'edit' => 'Düzenle',
      'delete' => 'Sil',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum',
      'job' => 'İş',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Kayıt',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Create Scheduled Job',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'CheckInboundEmails' => 'Gelen Epostaları Kontrol T',
        'Cleanup' => 'Temizle',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Not: Espo Planlanmış İşleri çalıştırabilmek için şu kodları crontab dosyasına ekleyin:',
        'mac' => 'Not: Espo Planlanmış İşleri çalıştırabilmek için şu kodları crontab dosyasına ekleyin:',
        'windows' => 'Not: Espo Planlanmış İşleri Windows Scheduled Task ile kullanabilmek için şu kodlarla bir BATCH dosyası oluşturun: ',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'Pasif',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Durum',
      'executionTime' => 'Çalışma Süresi',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Önbelleği Kullan',
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Binlik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'companyLogo' => 'Company Logo',
      'smtpServer' => 'Sunucu',
      'smtpPort' => 'Bağlantı Noktası',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'emailAddress' => 'Eposta',
      'smtpPassword' => 'Şifre',
      'outboundEmailFromName' => 'Kimden',
      'outboundEmailFromAddress' => 'Gönderen Adresi',
      'outboundEmailIsShared' => 'Paylaşıldı',
      'recordsPerPage' => 'Sayfa Başına Kayıtlar',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Sekme Listesi',
      'quickCreateList' => 'Çabuk Oluşturma Listesi',
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
        2 => 'Pazar',
        3 => 'Pazartesi',
      ),
    ),
    'labels' => 
    array (
      'System' => 'Sistem',
      'Locale' => 'Yerel',
      'SMTP' => 'SMTP',
      'Configuration' => 'Yapılandırma',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'roles' => 'Görevler',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
    ),
    'labels' => 
    array (
      'Create Team' => 'Takım Oluştur',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'userName' => 'Kullanıcı Adı',
      'title' => 'Başlık',
      'isAdmin' => 'Yönetici',
      'defaultTeam' => 'Varsayılan Takım',
      'emailAddress' => 'Eposta',
      'phoneNumber' => 'Phone',
      'roles' => 'Görevler',
      'password' => 'Şifre',
      'passwordConfirm' => 'Şifreyi Doğrulayın',
      'newPassword' => 'New Password',
      'phone' => 'Telefon',
    ),
    'links' => 
    array (
      'teams' => 'Takımlar',
      'roles' => 'Görevler',
    ),
    'labels' => 
    array (
      'Create User' => 'Kullanıcı Oluştur',
      'Generate' => 'Generate',
      'Access' => 'Giriş',
      'Preferences' => 'Seçenekler',
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
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Fatura Adresi',
      'shippingAddress' => 'Teslimat Adresi',
      'description' => 'açıklama',
      'sicCode' => 'Firma Kodu',
      'industry' => 'Sektör',
      'type' => 'Tür',
      'contactRole' => 'Role',
      'phone' => 'Telefon',
      'fax' => 'Faks',
    ),
    'links' => 
    array (
      'contacts' => 'Bağlantılar',
      'opportunities' => 'Fırsatlar',
      'cases' => 'Dosyalar',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Müşteri',
        'Investor' => 'Yatırımcı',
        'Partner' => 'Ortak',
        'Reseller' => 'Satıcı',
      ),
      'industry' => 
      array (
        'Apparel' => 'Konfeksiyon',
        'Banking' => 'Bankacılık',
        'Computer Software' => 'Bilgisayar Yazılımı',
        'Education' => 'Eğitim',
        'Electronics' => 'Elektronik',
        'Finance' => 'Finans',
        'Insurance' => 'Sigortacılık',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Hesap Oluştur',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'Ay',
      'week' => 'hafta',
      'day' => 'Gün',
      'agendaWeek' => 'hafta',
      'agendaDay' => 'Gün',
    ),
    'labels' => 
    array (
      'Today' => 'Bugün',
      'Create' => 'Oluştur',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'direction' => 'Yönlendirme',
      'duration' => 'Süre',
      'description' => 'açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'leads' => 'Müşteri Adayları',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar',
      ),
      'direction' => 
      array (
        'Outbound' => 'Giden',
        'Inbound' => 'Gelen',
      ),
    ),
    'labels' => 
    array (
      'Create Call' => 'Arama Oluştur',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
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
      'name' => 'İsim',
      'number' => 'Numara',
      'status' => 'Durum',
      'account' => 'Hesap',
      'contact' => 'Bağlantı',
      'priority' => 'Öncelik',
      'type' => 'Tür',
      'description' => 'açıklama',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'Pending' => 'Beklemede',
        'Closed' => 'Kapandı',
        'Rejected' => 'Reddedildi',
        'Duplicate' => 'Kopyala',
      ),
      'priority' => 
      array (
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil',
      ),
      'type' => 
      array (
        'Question' => 'Soru',
        'Incident' => 'Olay',
        'Problem' => 'sorun',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Dosya Oluştur',
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
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'account' => 'Hesap',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Hesap Türü',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Role',
      'description' => 'açıklama',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
    ),
    'links' => 
    array (
      'opportunities' => 'Fırsatlar',
      'cases' => 'Dosyalar',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Bağlantı Oluştur',
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
      'name' => 'İsim',
      'team' => 'Takım',
      'status' => 'Durum',
      'assignToUser' => 'Kullanıcıya Ata',
      'host' => 'Sunucu',
      'username' => 'Kullanıcı Adı',
      'password' => 'Şifre',
      'port' => 'Bağlantı Noktası',
      'monitoredFolders' => 'İzlenen Klasörler',
      'trashFolder' => 'Çöp Kutusu',
      'ssl' => 'SSL',
      'createCase' => 'Dosya Oluştur',
      'reply' => 'Cevapla',
      'caseDistribution' => 'Dosya Dağılımı',
      'replyEmailTemplate' => 'Cevaplama Eposta Şablonu',
      'replyFromAddress' => 'Adresten Cevapla',
      'replyFromName' => 'İsimden Cevapla',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'Pasif',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'DIRECT-ASSIGNMENTXXXX',
        'Round-Robin' => 'ROUND-ROBINXXXX',
        'Least-Busy' => 'LEAST-BUSYXXXX',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Gelen Eposta Oluştur',
      'IMAP' => 'IMAP',
      'Actions' => 'Hareketler',
      'Main' => 'Ana',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'IMAP sunucusuna bağlanamadı',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Çevrildi',
      'Create Lead' => 'Müşteri Adayı Oluştur',
      'Convert' => 'Çevir',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'accountName' => 'Hesap Adı',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'status' => 'Durum',
      'source' => 'Kaynak',
      'opportunityAmount' => 'Fırsat Tutarı',
      'description' => 'açıklama',
      'createdAccount' => 'Hesap',
      'createdContact' => 'Bağlantı',
      'createdOpportunity' => 'Fırsat',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'In Process' => 'İşlemde',
        'Converted' => 'Çevrildi',
        'Recycled' => 'Geri Dönüştürüldü',
        'Dead' => 'Ölü',
      ),
      'source' => 
      array (
        'Call' => 'Arama',
        'Email' => 'Eposta',
        'Existing Customer' => 'Varolan Müşteri',
        'Partner' => 'Ortak',
        'Public Relations' => 'Halkla İlişkiler',
        'Web Site' => 'Web Site',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer',
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
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'duration' => 'Süre',
      'description' => 'açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'leads' => 'Müşteri Adayları',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar',
      ),
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Toplantı Oluştur ',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
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
      'name' => 'İsim',
      'account' => 'Hesap',
      'stage' => 'Aşama',
      'amount' => 'Tutar',
      'probability' => 'Olasılık, %',
      'leadSource' => 'Aday Müşteri Kaynağı',
      'doNotCall' => 'Arama Yapma',
      'closeDate' => 'Kapanış Tarii',
      'contacts' => 'Contacts',
      'description' => 'açıklama',
    ),
    'links' => 
    array (
      'contacts' => 'Bağlantılar',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Araştırma',
        'Qualification' => 'Yeterlilik',
        'Needs Analysis' => 'Analiz Yapılmalı',
        'Value Proposition' => 'Değer Önerisi',
        'Id. Decision Makers' => 'Id. Karar Vericiler',
        'Perception Analysis' => 'Algı Analizi',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Görüşme/İnceleme',
        'Closed Won' => 'Kapalı Kazanç',
        'Closed Lost' => 'Kapalı Kayıp',
      ),
      'leadSource' => 
      array (
        'Call' => 'Arama',
        'Email' => 'Eposta',
        'Existing Customer' => 'Varolan Müşteri',
        'Partner' => 'Ortak',
        'Public Relations' => 'Halkla İlişkiler',
        'Web Site' => 'Web Site',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Fırsat Oluştur',
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
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Vade Tarihi',
      'priority' => 'Öncelik',
      'description' => 'açıklama',
      'isOverdue' => 'Vadesi Geçmiş',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'başlamadı',
        'Started' => 'Başladı',
        'Completed' => 'Tamamlandı',
        'Canceled' => 'İptal edildi',
      ),
      'priority' => 
      array (
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Görev Oluştur',
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
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'accountName' => 'Hesap Adı',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'description' => 'açıklama',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Prospect' => 'Beklenti Oluştur',
      'Convert to Lead' => 'Müşteri Adayına Dönüştür',
    ),
  ),
);

?>