##Installation and configuration

The database configuration is as follows:
DB Name: demo_app
username: root
password: 

This setup was used just for simplicity during development, I understand there is need for more secure credentials in production code

I did a attach a .sql file named demo_app.sql which can be imported into mysql to see records i have already added

The table structure can be created using laravel migration command (php artisan migrate)

I provided a login and the login details are:
email: jsingizi7@gmail.com
password: password

Again the password isn't secure for easy access

Once tables are inported from the demo_app.sql file, the account with the above credentials will be ready otherwise another account could be created using tinker

####Hope this makes sense#####