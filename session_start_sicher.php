<?php
// ============================================================================
// SICHERHEITSHINWEIS: Diese Datei ist ein Backup der ORIGINAL-Datei.
// Sie wurde am 01.01.2026 erstellt, bevor Sicherheitsupdates angewendet wurden.
// ============================================================================
<?php
// ============================================================================
// Gemeinsame, sichere Session-Start (Sicherheitsbericht, Punkt 6).
// Anstelle von session_start() in jeder Datei:
//     require __DIR__ . '/session_start_sicher.php';
//
// WICHTIG: Bewusst NICHT in der php.ini setzen – auf demselben Server laufen
// weitere Seiten (u. a. Port 6363 per HTTP), bei denen das Secure-Flag die
// Anmeldung kaputt machen würde.
// ============================================================================
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.use_strict_mode', '1');
    session_set_cookie_params([
        'path'     => '/',
        'secure'   => true,   // Cookie nur über HTTPS
        'httponly' => true,   // nicht per JS lesbar (XSS-Schutz)
        'samesite' => 'Lax',  // Schutz vor Cross-Site-Anfragen (CSRF-Entlastung)
    ]);
    session_start();
}