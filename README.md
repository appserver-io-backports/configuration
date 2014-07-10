# TechDivision_Configuration

[![Latest Stable Version](https://poser.pugx.org/techdivision/configuration/v/stable.png)](https://packagist.org/packages/techdivision/configuration) [![Total Downloads](https://poser.pugx.org/techdivision/configuration/downloads.png)](https://packagist.org/packages/techdivision/configuration) [![Latest Unstable Version](https://poser.pugx.org/techdivision/configuration/v/unstable.png)](https://packagist.org/packages/techdivision/configuration) [![License](https://poser.pugx.org/techdivision/configuration/license.png)](https://packagist.org/packages/techdivision/configuration) [![Build Status](https://travis-ci.org/techdivision/configuration.png)](https://travis-ci.org/techdivision/configuration)

## Introduction

This package provides generic XML configuration implementation designed to work in an 
application server like appserver.io. The configuration contains the XML structure in
a simple object structure that makes it synchronziable between threads.

## Installation

You don't have to install this package, as it'll be delivered with the latest appserver.io 
release. If you want to install it with your application only, you do this by add

```sh
{
    "require": {
        "techdivision/configuration": "dev-master"
    },
}
```

to your ```composer.json``` and invoke ```composer update``` in your project.

## Usage

As described in the introdcution the configuration is originally designed to work in a
runtime environment like appserver.io provides it. The big advantage is, that it does
not contain any not synchronizable instances which allows you to share it between
threads.

The configuration needs a XML file, the structure is not important, and converts it
into an object structure:

```php

    // initialize the SimpleXMLElement with the content XML configuration file
    $configuration = new Configuration();
    $configuration->initFromFile('/your/file.xml');
    
    // add a new node XML to the root node 
    $configuration->addChildWithNameAndValue('baseDirectory', '/application/base/directory');

```