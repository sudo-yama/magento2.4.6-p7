php bin/magento maintenance:enable
php bin/magento module:enable --all
php bin/magento module:disable Magento_AdminAdobeImsTwoFactorAuth
php bin/magento deploy:mode:set production -s
php -d memory_limit=8G bin/magento setup:upgrade
php -d memory_limit=8G bin/magento setup:di:compile
php -d memory_limit=8G bin/magento setup:static-content:deploy -f en_US th_TH
php bin/magento maintenance:disable
