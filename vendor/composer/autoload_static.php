<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ab96b506ba39f30232be5392a2b7732
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Validator\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/validator',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Propel' => 
            array (
                0 => __DIR__ . '/..' . '/propel/propel/src',
            ),
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'ActionController' => __DIR__ . '/../..' . '/controllers/handlers/ActionController.php',
        'Base\\Cart' => __DIR__ . '/../..' . '/generated-classes/Base/Cart.php',
        'Base\\CartQuery' => __DIR__ . '/../..' . '/generated-classes/Base/CartQuery.php',
        'Base\\Contact' => __DIR__ . '/../..' . '/generated-classes/Base/Contact.php',
        'Base\\ContactQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ContactQuery.php',
        'Base\\CreditCard' => __DIR__ . '/../..' . '/generated-classes/Base/CreditCard.php',
        'Base\\CreditCardQuery' => __DIR__ . '/../..' . '/generated-classes/Base/CreditCardQuery.php',
        'Base\\Item' => __DIR__ . '/../..' . '/generated-classes/Base/Item.php',
        'Base\\ItemInCart' => __DIR__ . '/../..' . '/generated-classes/Base/ItemInCart.php',
        'Base\\ItemInCartQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ItemInCartQuery.php',
        'Base\\ItemInOrder' => __DIR__ . '/../..' . '/generated-classes/Base/ItemInOrder.php',
        'Base\\ItemInOrderQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ItemInOrderQuery.php',
        'Base\\ItemInPackage' => __DIR__ . '/../..' . '/generated-classes/Base/ItemInPackage.php',
        'Base\\ItemInPackageQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ItemInPackageQuery.php',
        'Base\\ItemQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ItemQuery.php',
        'Base\\ItemType' => __DIR__ . '/../..' . '/generated-classes/Base/ItemType.php',
        'Base\\ItemTypeQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ItemTypeQuery.php',
        'Base\\Package' => __DIR__ . '/../..' . '/generated-classes/Base/Package.php',
        'Base\\PackageQuery' => __DIR__ . '/../..' . '/generated-classes/Base/PackageQuery.php',
        'Base\\Review' => __DIR__ . '/../..' . '/generated-classes/Base/Review.php',
        'Base\\ReviewQuery' => __DIR__ . '/../..' . '/generated-classes/Base/ReviewQuery.php',
        'Base\\Type' => __DIR__ . '/../..' . '/generated-classes/Base/Type.php',
        'Base\\TypeQuery' => __DIR__ . '/../..' . '/generated-classes/Base/TypeQuery.php',
        'Base\\User' => __DIR__ . '/../..' . '/generated-classes/Base/User.php',
        'Base\\UserQuery' => __DIR__ . '/../..' . '/generated-classes/Base/UserQuery.php',
        'Cart' => __DIR__ . '/../..' . '/generated-classes/Cart.php',
        'CartController' => __DIR__ . '/../..' . '/controllers/domain/CartController.php',
        'CartQuery' => __DIR__ . '/../..' . '/generated-classes/CartQuery.php',
        'ConfirmationController' => __DIR__ . '/../..' . '/controllers/domain/ConfirmationController.php',
        'Contact' => __DIR__ . '/../..' . '/generated-classes/Contact.php',
        'ContactController' => __DIR__ . '/../..' . '/controllers/domain/ContactController.php',
        'ContactQuery' => __DIR__ . '/../..' . '/generated-classes/ContactQuery.php',
        'ControllerNotFoundException' => __DIR__ . '/../..' . '/exceptions/ControllerNotFoundException.php',
        'CreditCard' => __DIR__ . '/../..' . '/generated-classes/CreditCard.php',
        'CreditCardQuery' => __DIR__ . '/../..' . '/generated-classes/CreditCardQuery.php',
        'DomainController' => __DIR__ . '/../..' . '/controllers/domain/DomainController.php',
        'FrontController' => __DIR__ . '/../..' . '/controllers/handlers/FrontController.php',
        'HelpController' => __DIR__ . '/../..' . '/controllers/domain/HelpController.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/domain/HomeController.php',
        'Item' => __DIR__ . '/../..' . '/generated-classes/Item.php',
        'ItemController' => __DIR__ . '/../..' . '/controllers/domain/ItemController.php',
        'ItemInCart' => __DIR__ . '/../..' . '/generated-classes/ItemInCart.php',
        'ItemInCartQuery' => __DIR__ . '/../..' . '/generated-classes/ItemInCartQuery.php',
        'ItemInOrder' => __DIR__ . '/../..' . '/generated-classes/ItemInOrder.php',
        'ItemInOrderQuery' => __DIR__ . '/../..' . '/generated-classes/ItemInOrderQuery.php',
        'ItemInPackage' => __DIR__ . '/../..' . '/generated-classes/ItemInPackage.php',
        'ItemInPackageQuery' => __DIR__ . '/../..' . '/generated-classes/ItemInPackageQuery.php',
        'ItemQuery' => __DIR__ . '/../..' . '/generated-classes/ItemQuery.php',
        'ItemType' => __DIR__ . '/../..' . '/generated-classes/ItemType.php',
        'ItemTypeQuery' => __DIR__ . '/../..' . '/generated-classes/ItemTypeQuery.php',
        'JSONHandler' => __DIR__ . '/../..' . '/libs/JSONHandler.php',
        'MainItemController' => __DIR__ . '/../..' . '/controllers/domain/MainItemController.php',
        'ManageAccountController' => __DIR__ . '/../..' . '/controllers/domain/ManageAccountController.php',
        'ManageOrdersController' => __DIR__ . '/../..' . '/controllers/domain/ManageOrdersController.php',
        'Map\\CartTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/CartTableMap.php',
        'Map\\ContactTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ContactTableMap.php',
        'Map\\CreditCardTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/CreditCardTableMap.php',
        'Map\\ItemInCartTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ItemInCartTableMap.php',
        'Map\\ItemInOrderTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ItemInOrderTableMap.php',
        'Map\\ItemInPackageTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ItemInPackageTableMap.php',
        'Map\\ItemTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ItemTableMap.php',
        'Map\\ItemTypeTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ItemTypeTableMap.php',
        'Map\\PackageTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/PackageTableMap.php',
        'Map\\ReviewTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/ReviewTableMap.php',
        'Map\\TypeTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/TypeTableMap.php',
        'Map\\UserTableMap' => __DIR__ . '/../..' . '/generated-classes/Map/UserTableMap.php',
        'OrderController' => __DIR__ . '/../..' . '/controllers/domain/OrderController.php',
        'Package' => __DIR__ . '/../..' . '/generated-classes/Package.php',
        'PackageQuery' => __DIR__ . '/../..' . '/generated-classes/PackageQuery.php',
        'PayController' => __DIR__ . '/../..' . '/controllers/domain/PayController.php',
        'PaymentInformationController' => __DIR__ . '/../..' . '/controllers/domain/PaymentInformationController.php',
        'RecoverPasswordController' => __DIR__ . '/../..' . '/controllers/domain/RecoverPasswordController.php',
        'Request' => __DIR__ . '/../..' . '/controllers/handlers/Request.php',
        'Response' => __DIR__ . '/../..' . '/controllers/handlers/Response.php',
        'Review' => __DIR__ . '/../..' . '/generated-classes/Review.php',
        'ReviewQuery' => __DIR__ . '/../..' . '/generated-classes/ReviewQuery.php',
        'SignInController' => __DIR__ . '/../..' . '/controllers/domain/SignInController.php',
        'SignUpController' => __DIR__ . '/../..' . '/controllers/domain/SignUpController.php',
        'Type' => __DIR__ . '/../..' . '/generated-classes/Type.php',
        'TypeQuery' => __DIR__ . '/../..' . '/generated-classes/TypeQuery.php',
        'User' => __DIR__ . '/../..' . '/generated-classes/User.php',
        'UserQuery' => __DIR__ . '/../..' . '/generated-classes/UserQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ab96b506ba39f30232be5392a2b7732::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ab96b506ba39f30232be5392a2b7732::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9ab96b506ba39f30232be5392a2b7732::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9ab96b506ba39f30232be5392a2b7732::$classMap;

        }, null, ClassLoader::class);
    }
}
