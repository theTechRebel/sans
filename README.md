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
