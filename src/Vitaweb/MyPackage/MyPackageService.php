<?php namespace Vitaweb\MyPackage;

use Illuminate\Support\Facades\Config;

class MyPackageService {

    public static function getName() {

        // get name from config
        $package_name = Config::get('my-package::name');

        return $package_name;
    }
}
