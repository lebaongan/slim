<?php

if (! function_exists('config')) {
    function config($configString)
    {
        $configs = explode('.', $configString);
        $config = require __DIR__ . '/../../config/' . $configs[0] . '.php';
        $result = null;

        if (count($configs) == 1) {
            return $config;
        }

        foreach ($configs as $key) {
            if (!isset($config[$key])) {
                break;
            }

            $result = $config[$key];
        }

        return $result;
    }
}
