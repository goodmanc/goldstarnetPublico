<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('goldstar', dirname(__FILE__) . "/../../yii/goldstar");
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'GoldStarNet',
    'theme' => 'classic',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.AweCrud.components.*', // AweCrud components    
        'ext.EExcelView', // EExcelView 
        // User Module
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        // Rights Module - Profiles (Privilegios)
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'goldstar.test.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'generatorPaths' => array(
                'ext.AweCrud.generators', // AweCrud generators
                'bootstrap.gii', // Bootstrap Gii
            ),
            'password' => 'es1s3cr3t0?,.-',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        // users
        'user' => array(
            'tableUsers' => 'users',
            'tableProfiles' => 'profiles',
            'tableProfileFields' => 'profiles_fields',
            # encrypting method (php hash function)
            'hash' => 'md5',
            # send activation email
            'sendActivationMail' => true,
            # allow access for non-activated users
            'loginNotActiv' => false,
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
            # automatically login from registration
            'autoLogin' => true,
            # registration path
            'registrationUrl' => array('/user/registration'),
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
            # login form path
            'loginUrl' => array('/site/login'),
            # page after login
            'returnUrl' => array('/user/profile'),
            # page after logout
            'returnLogoutUrl' => array('/site/login'),
        ),
        // rights
        'rights' => array(
            'superuserName' => 'admin', // Name of the role with super user privileges. 
            'authenticatedName' => 'Authenticated', // Name of the authenticated user role. 
            'userIdColumn' => 'id', // Name of the user id column in the database. 
            'userNameColumn' => 'username', // Name of the user name column in the database. 
            'userClass'=>'Users',  //tabla de la cual se sacan los valores anteriores(id_cuenta,login)
            'enableBizRule' => true, // Whether to enable authorization item business rules. 
            'enableBizRuleData' => false, // Whether to enable data for business rules. 
            'displayDescription' => true, // Whether to use item description instead of name. 
            'flashSuccessKey' => 'RightsSuccess', // Key to use for setting success flash messages. 
            'flashErrorKey' => 'RightsError', // Key to use for setting error flash messages. 
            'baseUrl' => '/rights', // Base URL for Rights. Change if module is nested. 
            'layout' => 'rights.views.layouts.main', // Layout to use for displaying Rights. 
            'appLayout' => '//layouts/main_rights', // Application layout. 
            'cssFile' => '/css/rights.css', // Style sheet file to use for Rights. 
            'install' => false, // Whether to enable installer. 
            'debug' => false,
        ),
    ),
    // application components
    'components' => array(
        'messages' => array(
            'extensionPaths' => array(
                'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
            ),
        ),
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'urlSuffix' => '',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/?id=<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/database.php'),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => YII_DEBUG ? null : 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'user' => array(
            'class' => 'RWebUser',
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('/site/login'),
        ),
        'authManager' => array(
//            'class' => 'RDbAuthManager',
//            'connectionID' => 'db',
//            'defaultRoles' => array('Authenticated', 'Guest'),
            'class'=>'RDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'authitem',
            'itemChildTable'=>'authitemchild',
            'assignmentTable'=>'authassignment',
            'rightsTable'=>'rights',            
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
