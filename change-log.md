17-02-2015

SANS V 2.1.1
=

Release NOTE:
=
Stable Release with fix for 

CHANGES
=

1. “Headers already sent” error in PHP
solution - http://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php 
location - application/core/Exceptions.php : Line 185
fix - echo $buffer; must appear before ob_end_clean();
end result - application/core/Exceptions.php
											Line 184: echo $buffer;
											Line 185:	ob_end_clean();
											-
comments - this is a CI error that i discovered when not in development but during production.
											to replicate it switch Line 184 with Line 185 such that ob_end_clean(); appears before
											echo $buffer; then procede to host the site in an environment where  [output_buffering](http://php.net/manual/en/outcontrol.configuration.php) is disbaled and try navigating the site and adding an item to cart.
											The errors should populate the page and you should also recieve an Array to String Conversion failed error.
TODO's
=
11. Site Layout gets screwed up on wiered screen sizes i.e monitors at College needs to be fixed somehow @ 0%
12. .htaccess must redirect to https://sans.co.zw/ if user types sans.co.zw in browser @ 0%

THOUGHTS
=
Scared me for a second there because this error didnt show up on localhost but when the site went live.
Thanks StackOverflow. :)

@theTechRebel
=


17-02-2015

SANS V 2.1.0
=

RELEASE NOTE:
=
Stable Release

CHANGES
=
1. Cash On Delivery
-
added cash on delivery controller to process cash on delivery process can be found in application/controllers/cod.php

2. Sparks
-
discovered codeigniter sparks which are basically dependencies for codeigniter for additional functionality / packages developed by the CI community. Installed Spaks and can be found it sparks/ at the root of the application directory. Sparks are really cool though, didnt know CI had a sort of Ruby On Rails - Ruby Gems setup or Node.js NPM package manager. this is great for CI and the CI community at large (if it works) take that Laravel! HA!.

3. SendGrid
using sendgrid for email infrastructure, not yet fully configured but it is a realy great and robust service to build email upon. Added the spark for sendgrid can be found in sparks/sendgrid-mail/0.1.2. Not yet really sure how it works but will explore it deeper and use it for newsletter as well as transactional email. Thanks to my GitHub Education pack i have 15 000 free email sends per month hooray!!!! knew it would come in handy.

4. client_side
migrated old code into this project because well even though semantic packs a punch for my front end it takes time to work with and develop a robust backend using Semantic-UI. So Backend/Admin is running on Foundation 5 and will continue to do so. the backend css and js is in application/client_side/foundation/**.

TODO's
=
8. Sales Reps login and admin menu needs to be added @ 0%
9. Blogg needs to be added @ 0%
10. Full SendGrid API Integration with this project for Email Infrastructure @ 30%

THOUGHTS
=
Backend code stays on Foundation, Front end code stays on Semantic-UI, thats legal right?

@theTechRebel
=



12-02-2015

SANS V 2.0.0
=

RELEASE NOTE: 
=
Major Upgrade. 
Migrated Front end from Foundation 5 to Semantic-UI


CHANGES
=

1. Cart Controller
-
the cart controller to handle complex checkout procedure
this cart controller is the most up-to date between the one on the server and the local one

2. Views
-
All views have been removed from folder hierachy set up where account views where in
views/account/index.php | view.php etc they are now all in views/
to be streamlined later to follow the convention: <controller-name>-<view-name>.php as shown
with auth-signup.php, auth-signup-form.php and check-out-options.php and check-out-options-2.php etc
Moved old views to views2/ folder because of the backend  Admin code still using Foundation Front End
Framework code didnt have time to hook up semantic ui to the admin end so for now it can run on foundation

3. Gulp
-
Started using Gulp to minify and comple css, js and images 
All css is compliled and minified from the source file in uiux/src/sass
Started using SASS because its awesome.
All Js is compiled and minified from source file in uiux/src/js
A few images are minified from source folder in uiux/src/img

4. Naming Conventions
-
Got a tip ive always wanted to test out from Adonis and changed the front end dependency folder
for css, js and img from client_side to uiux. I think its cooler and follows the CI convention of application,
system and uiux.


TO-DOS
=

1. Newsletter sign up box does not work in side-menu @ 100%
2. Designers View needs to be added @ 100%
3. Fix all dead links on the site, they need to link to content @ 100%
4. Search site functionality does not work @ 100%
5. Cash on delivery needs to be completely developed @ 100%
6.	Fix additional information sent to PayNow its just too messy and confusing @ 100%
7. Fix redirect from PayNow after cancelling or completing transaction @ 100%



THOUGHTS
=

Maybe i will migrate the admin end as well to semantic-ui, but is there need?
There are a lot of differences between the hosted code and this repo for instance the hosted code has
a lot of legacy code that is needed to keep the site up especially the admin (running on foundation)
so i may or may not migrate everything right now. Will do so when the @ 0% TO-DOS are completed i guess


@theTechRebel
=
