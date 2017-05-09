INF-124
Internet Applications Engineering
Group Account: inf124grp01
Anthony Serrano - 53934109
Francisco Arca - 95184171

website link: http://andromeda-40.ics.uci.edu:5540/assignment2/index.php

Our website is an ecommerce site for hats and caps.
The navigation of the website is generally easy. There are only
5 different tabs a user can click on to view our products. These
links/tabs are available at the top of our webpage in our menu next
to our company logo. Each tab name represents what you will find
once you follow the link. There is a zoom in effect when you hover over an image of a hat in order to let the user know you are selecting it.

Requirements Met:
1) You can see that we used PHP and MYSQL database to generate product information dynamically in all the pages that contain hats. Each page has php in the top of the page that queries our database and stores information in corresponding variables. For example, in the index.php file each of the hat images and their corresponding
descriptions are dynamically generated using our database, the only static things are the slideshow and menu

2) When the user submits a form, the details.php file calls validate.php which checks whether the information inputted is valid or not. If it is and passes our checks, it saves the order information into our databse table called "orders" instead of sending a confirmation email.

3) Once the form is validated and order details are stored in the database, we present the user with our confirmation.html page that uses ajax and json to generate a dynamic version of the page corresponding to the recent order placed.

4) We used Ajax to generate tax rates for the user which can be seen in the details.php page when you start filling in your address information. We also used Ajax to load orders into the database. Ajax was also used to dynamically generate the confirmation page.
>>>>>>> origin/master
