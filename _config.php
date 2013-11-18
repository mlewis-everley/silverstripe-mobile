<?php
define('MOBILE_DIR', 'mobile');

Object::add_extension('SiteConfig', 'MobileSiteConfigExtension');
Object::add_extension('Controller', 'MobileSiteControllerExtension');
Object::add_extension('SiteTree', 'MobileSiteTreeExtension');
