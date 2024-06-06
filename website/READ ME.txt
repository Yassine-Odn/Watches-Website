INTRODUCTION : ------------------------
a local website for watches using XAMPP for hosting , and its in the very early stages as
many modifications can be added to it in the future whenever possible 

FEATURES and other DETAILS : -----------------------------
-currently you can add products from admin side in xampp gate 
-adding the product details (image , title , brand ...etc) will be automatically added to the website
-filtering products using categories and brands 
-newly added categories and brands , will be automatically added to the other ones on the website 
-the code is not as clean , there are some unnecessary lines and files , and some comments are random or misplaced
but the performance is the same   
IMPORTANT : --------------------
-if you want to add a custom product/watch make sure the image is : 
1-a PNG with transparent background 
2-edit the resolution to: 364x500
3-add it to products file in the website file directory 

---------------------------------------SET UP  ----------------------------

1-install xampp app 
2-launch xampp control panel , and start theses two modules : Apache , MySQL 
(make sure you do this step before launching the website)
3-copy the "website" folder inside htdocs, ex: C:\xampp\htdocs
4-now go to the browser and enter : http://127.0.0.1/
5-go to phpmyadmin
6-create 2 databases : 
*1-name it "login" and add "users" sql file to it (you'll find the sql file in "sql files" folder)
*2-name it "website" and add "products" sql file  to it (you'll find the sql file in "sql files" folder)

7-once the setp is done ,  launch the website : 
*go to your browser and enter : http://localhost/website/Homepage.php
(now everything should work)

----------------------------------------IN CASE OF AN ERROR--------------------------
 1-if you get "FATAL ERROR " when launching the site , go to xampp control panel , next to apache module 
click on "config" and then click on "php.ini" , remove everything , and replace it with text provided 
in "FATAL-ERROR.txt" , save and close , now re-launch the site 

2-in case MYSQL module wont start from xampp control panel , go to "config" next to mysql module ,
and click "my.ini" remove all the text from there , and replace it with the text from "mysql-my-ini.text"

