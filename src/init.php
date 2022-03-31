<?php

namespace Agusn\AutoloadClass;

spl_autoload_register(function ($className) {
    $className = explode('\\', $className);
    $className = end($className);
    $extension = '.php';

    include __DIR__ . '/TestClass/' . $className . $extension;
});
