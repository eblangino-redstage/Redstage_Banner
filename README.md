# Redstage Banner

This module displays a promotional banner on the store homepage.

## Configuration

Store / Configuration / Redstage / Banner
* Promo Options
    * Enabled: Display promotional banner.
    * Content: Customize all banner content (variables, images, videos, etc...).

## Screenshots

![Alt text](docs/promo-banner.png "Promo Banner")
![Alt text](docs/promo-settings.png "Promo Settings")

## Magento Compatible Versions

* *Magento Community Edition* **2.2.0** >

## System Requirements

* PHP 5.6 >

## Developer Installation

In the Magento 2 root folder start a modman repository:

```bash
modman init
```

Clone the module directly from github repository:

```bash
modman clone https://github.com/acarvalho-redstage/Redstage_Banner.git
```

## Enable Module

```bash
php bin/magento module:status enable Redstage_Banner
```
