<?PHP

	define('LOCAL', TRUE);

	//to convert default date to Dubai Time Zone
	date_default_timezone_set('Asia/Kolkata');

	


	//IF LOCAL SET TO TRUE USE THE FOLLOWING TEST DB SETTINGS

	if (LOCAL) {

		define('DB_HOST', 'localhost');

		define('DB_USER', 'root');

		define('DB_PWD', '');

		define('DB_NAME', 'api');

	} else {
		
		//IF LOCAL SET TO FALSE USE THE FOLLOWING LIVE DB SETTINGS
		define('DB_HOST', 'localhost');

		define('DB_USER', 'root');

		define('DB_PWD', '');

		define('DB_NAME', 'api');

	}
 	
 	define('BASE_URL', LOCAL ? 'http://localhost/test-api/' : ''); 
 	
 	define('WEBSERVICE_URL', LOCAL ? 'http://localhost/fileupload/webservice/' : ''); 
 	
	define('ADMIN_EMAIL', 'shobhachoudhary94@gmail.com');
	


?>
