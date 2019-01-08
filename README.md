# FiindME
## YII based PHP backend for FiindME

##Requirements
- Database: MySQL

- Yii Framwork: Model-View-Controller

- REST APIs for
  - Deal Creation
  - Deal Update
  - Deal Deletion
  
- REST APIs are routed by:
  - Router in the config files
  - **protected/config/main.php** : Update this file with the proper REST patterns
  - **protected/controllers/FindController.php** : Update the APIs corresponding the to config file patterns.
  
 - Geonames.org for Geolocation Data


## Scripts to Generate/Test the Deals in MySQL
- scripts/address.py
- scripts/phone.py
- scripts/merchant.py
- scripts/deal_gen.py
