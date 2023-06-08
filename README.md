"# ajax-in-wp-plugin" 

Ajax in wp plugin

download and keep into wp-content/plugin and activate

we need 2 files
1. java script to post data to php file
2.php file to accept data and process it 

plugin mae we need
add action wp_print_scripts
and include 2 files
url name is the_ajax_script.ajaxurl

we will create a page and call a function with ajax 

in read_ajax_data we set ajax call
we are passing 2 data to add
and result we pass from php

on ajax call back
we parse json data and showing result


Youtube: https://youtu.be/iXI2eRYTKao
