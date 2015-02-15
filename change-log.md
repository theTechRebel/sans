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

1. Newsletter sign up box does not work in side-menu @ 50%
2. Designers View needs to be added @ 0%
3. Blogg needs to be added @ 0%
4. Sales Reps login and admin menu needs to be added @ 0%
5. Cash on delivery needs to be completely developed @ 70%
6. Hook site up to Google Analytics @ 0%
7. Search site functionality does not work @ 0%
8. Fix all dead links on the site, they need to link to content @ 0%
9. Fix redirect from PayNow after cancelling transaction @ 0%
10.Fix additional information sent to PayNow its just too messy and confusing @ 0%


THOUGHTS
=

Maybe i will migrate the admin end as well to semantic-ui, but is there need?
There are a lot of differences between the hosted code and this repo for instance the hosted code has
a lot of legacy code that is needed to keep the site up especially the admin (running on foundation)
so i may or may not migrate everything right now. Will do so when the @ 0% TO-DOS are completed i guess


@theTechRebel
=