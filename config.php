<?php
// ============================================================================
// SV Niederroth – lokale Konfiguration (Fallback, steht in .gitignore).
// Auf dem Server legt einrichten.sh die echte Konfiguration unter
// /etc/tennis-niederroth/config.php an (außerhalb des Web-Ordners) – diese hat
// Vorrang. Hier stehen bewusst KEINE echten Zugangsdaten.
// ============================================================================
return [
    'club_code'          => 'HIER-VEREINSCODE-ERST-DURCH-EINRICHTEN-SETZEN',
    'smtp_host'          => 'smtp.mail.me.com',
    'smtp_port'          => 587,
    'smtp_user'          => 'marc10henke@icloud.com',
    'smtp_pass'          => 'HIER-APP-PASSWORT-ERST-DURCH-EINRICHTEN-SETZEN',
    'mail_from_address'  => 'marc10henke@icloud.com',
    'mail_from_name'     => 'SV Niederroth',
    'base_url'           => 'https://tennis-niederroth.ddns.net',
    'max_reset_per_hour' => 3,
];