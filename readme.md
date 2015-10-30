## Google App Engine Laravel 4.2 Sample Application VERSION 1

<br/>

The default Laravel 4.2 installed from the composer does not support Google App Engine. This version of laravel 4.2 project is tuned up specially for google app engine. Tuning up process can be quite hectic to do before the development or after, hence, without manually tuning your application you can download this repository and get a head start with your development. 
 
## SetUp

First and foremostly change the following files as mentioned below.

#### php.ini
- Replace “your_bucket_name” with the name of the Google Cloud Storage (GCS) bucket that you set up.

#### app.yaml
- Replace: <br>
in <b>application: appengine-laravel-sample</b> with <b>"your_appengine_project_id"</b> <br>
in <b>DEVELOPMENT_DB_NAME: 'ftechdash_db'</b> with <b>"your_db_name"</b> <br>
in <b>DEVELOPMENT_DB_PASSWORD: ""</b> with <b>"your_mysql_password"</b> <br>
in <b>DEVELOPMENT_DB_USERNAME: 'root'</b> with <b>"your_mysql_username"</b> <br><br>

in <b>PRODUCTION_CLOUD_SQL_INSTANCE: "/cloudsql/sample-portal:db</b>" with <b>"/cloudsql/'your-sql-instance"</b> <br>
in <b>PRODUCTION_DB_NAME: 'ftechdash_db'</b> with <b>"your_db_name"</b> <br><br>

In <b><your_proejct>/bootstrap/paths.php,</b> replace <your-bucket-name> with the name of your bucket. <br><br/>

Once done, you can add your local copy of the project into the <b>Google App Enigne Launcher</b>, and conviniently deply your application form your staging version to the production version in the cloud.
### Bonus 

The folder contains the following plugins, so you can start devleoping immediately.
( a vote of thanks to all the developers workign in the following plugins. )
- bootstrap
- adminLTE Theme
- bootstrap-slider
- bootstrap-wysihtml5
- ChartJS
- ckeditor
- colorpicker
- datatables
- datepicker
- daterangepicker
- fastchick
- flot
- fullcalendar
- iCheck
- input-mask
- ionslider
- jQuery
- jQueryUI
- kvectormap
- knob
- morris
- pace
- select2
- slimscroll
- sparkline
- timepicker

### Notes
This version does not support the  Laravel Mail Driver.
Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).<br><br>
### License

The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
