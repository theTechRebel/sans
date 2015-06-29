SANS
======
Online store CMS built using CI

Environments.
=

Development Environment: 
http://localhost/sans/

Production Environment:
https://sans.co.zw/

*When pushing up to production change: 
1. application/config/config.php : $config['base_url'] to production values
2. application/controllers/catalogue.php : define('url','localhost/sans/'); to production values
the production values are already commented out so its just a matter of uncommenting them and commenting the development values.
3. Email delivery service SendGrid requires an API Key and Username. These two have been removed from ./application/libraries/Email_Assistant.php. They should be provided before pushing up to production.
4. PayNow payment recieval service requires an Integration ID & Integration KEY. These two have been removed from ./application/controllers/paynow.php. They should be provided before pushing to production.