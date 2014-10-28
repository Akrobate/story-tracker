<?

	define ("ADMIN_LOGIN", "987" );	
	define ("ADMIN_PASSWORD", "987" );

	define ("PATH_CURRENT", "./" );
	define ("PATH_CONFIGS", PATH_CURRENT. "config/");
	define ("PATH_CACHE", PATH_CURRENT. "cache/");	
	define ("PATH_LIBS", PATH_CURRENT . "libs/" );
	define ("LIBS_PATH", PATH_CURRENT . "libs/" );
	define ("PATH_SCRIPTS", PATH_CURRENT . "controllers/" );
	define ("PATH_TEMPLATES", PATH_CURRENT."templates/");

	define ("SITE_URL", "http://192.168.0.14/story-tracker/index.php");

	include(PATH_CONFIGS . "db.php");
	include(PATH_CONFIGS . "mail.php");
	
	include(PATH_LIBS . "sql.class.php");
	include(PATH_LIBS . "orm.status.class.php");
	include(PATH_LIBS . "request.class.php");
	include(PATH_LIBS . "html.render.class.php");
	include(PATH_LIBS . "users.class.php");	

	include(PATH_LIBS . "helper.class.php");	
	include(PATH_LIBS . "phpqrcode/qrlib.php");

	
	
