<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5894f4fc0d1d71a559cdaf94010d520
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wfm\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wfm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/wfm',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RedBeanPHP\\Adapter' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Adapter.php',
        'RedBeanPHP\\Adapter\\DBAdapter' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Adapter/DBAdapter.php',
        'RedBeanPHP\\AssociationManager' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/AssociationManager.php',
        'RedBeanPHP\\BeanCollection' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/BeanCollection.php',
        'RedBeanPHP\\BeanHelper' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/BeanHelper.php',
        'RedBeanPHP\\BeanHelper\\DynamicBeanHelper' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/BeanHelper/DynamicBeanHelper.php',
        'RedBeanPHP\\BeanHelper\\SimpleFacadeBeanHelper' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/BeanHelper/SimpleFacadeBeanHelper.php',
        'RedBeanPHP\\Cursor' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Cursor.php',
        'RedBeanPHP\\Cursor\\NullCursor' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Cursor/NullCursor.php',
        'RedBeanPHP\\Cursor\\PDOCursor' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Cursor/PDOCursor.php',
        'RedBeanPHP\\Driver' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Driver.php',
        'RedBeanPHP\\Driver\\RPDO' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Driver/RPDO.php',
        'RedBeanPHP\\DuplicationManager' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/DuplicationManager.php',
        'RedBeanPHP\\Facade' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Facade.php',
        'RedBeanPHP\\Finder' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Finder.php',
        'RedBeanPHP\\LabelMaker' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/LabelMaker.php',
        'RedBeanPHP\\Logger' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Logger.php',
        'RedBeanPHP\\Logger\\RDefault' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Logger/RDefault.php',
        'RedBeanPHP\\Logger\\RDefault\\Debug' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Logger/RDefault/Debug.php',
        'RedBeanPHP\\OODB' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/OODB.php',
        'RedBeanPHP\\OODBBean' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/OODBBean.php',
        'RedBeanPHP\\Observable' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Observable.php',
        'RedBeanPHP\\Observer' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Observer.php',
        'RedBeanPHP\\Plugin' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Plugin.php',
        'RedBeanPHP\\QueryWriter' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter.php',
        'RedBeanPHP\\QueryWriter\\AQueryWriter' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter/AQueryWriter.php',
        'RedBeanPHP\\QueryWriter\\CUBRID' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter/CUBRID.php',
        'RedBeanPHP\\QueryWriter\\Firebird' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter/Firebird.php',
        'RedBeanPHP\\QueryWriter\\MySQL' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter/MySQL.php',
        'RedBeanPHP\\QueryWriter\\PostgreSQL' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter/PostgreSQL.php',
        'RedBeanPHP\\QueryWriter\\SQLiteT' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/QueryWriter/SQLiteT.php',
        'RedBeanPHP\\R' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/R.php',
        'RedBeanPHP\\RedException' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/RedException.php',
        'RedBeanPHP\\RedException\\SQL' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/RedException/SQL.php',
        'RedBeanPHP\\Repository' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Repository.php',
        'RedBeanPHP\\Repository\\Fluid' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Repository/Fluid.php',
        'RedBeanPHP\\Repository\\Frozen' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Repository/Frozen.php',
        'RedBeanPHP\\SimpleModel' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/SimpleModel.php',
        'RedBeanPHP\\SimpleModelHelper' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/SimpleModelHelper.php',
        'RedBeanPHP\\SimpleModelInterface' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/SimpleModelInterface.php',
        'RedBeanPHP\\TagManager' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/TagManager.php',
        'RedBeanPHP\\ToolBox' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/ToolBox.php',
        'RedBeanPHP\\TypedModel' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/TypedModel.php',
        'RedBeanPHP\\Util\\ArrayTool' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/ArrayTool.php',
        'RedBeanPHP\\Util\\Diff' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Diff.php',
        'RedBeanPHP\\Util\\DispenseHelper' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/DispenseHelper.php',
        'RedBeanPHP\\Util\\Dump' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Dump.php',
        'RedBeanPHP\\Util\\Either' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Either.php',
        'RedBeanPHP\\Util\\Feature' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Feature.php',
        'RedBeanPHP\\Util\\Look' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Look.php',
        'RedBeanPHP\\Util\\MatchUp' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/MatchUp.php',
        'RedBeanPHP\\Util\\MultiLoader' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/MultiLoader.php',
        'RedBeanPHP\\Util\\QuickExport' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/QuickExport.php',
        'RedBeanPHP\\Util\\Transaction' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Transaction.php',
        'RedBeanPHP\\Util\\Tree' => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP/Util/Tree.php',
        'Wfm\\App' => __DIR__ . '/../..' . '/src/wfm/App.php',
        'Wfm\\Controller' => __DIR__ . '/../..' . '/src/wfm/Controller.php',
        'Wfm\\ErrorHandler' => __DIR__ . '/../..' . '/src/wfm/ErrorHandler.php',
        'Wfm\\Registry' => __DIR__ . '/../..' . '/src/wfm/Registry.php',
        'Wfm\\Router' => __DIR__ . '/../..' . '/src/wfm/Router.php',
        'Wfm\\TSingleton' => __DIR__ . '/../..' . '/src/wfm/TSingleton.php',
        'Wfm\\View' => __DIR__ . '/../..' . '/src/wfm/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5894f4fc0d1d71a559cdaf94010d520::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5894f4fc0d1d71a559cdaf94010d520::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5894f4fc0d1d71a559cdaf94010d520::$classMap;

        }, null, ClassLoader::class);
    }
}
