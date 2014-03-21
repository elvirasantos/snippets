// Locale (gettext/poedit settings)

$lang = "es_ES";
if (isset($_GET['lang'])) $lang = $_GET['lang'];
putenv("LC_ALL=$lang");
setlocale(LC_ALL, $lang);
bindtextdomain("messages", "locale");
bind_textdomain_codeset('messages', 'UTF-8');
textdomain("messages");