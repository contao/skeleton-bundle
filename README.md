# Contao 4 skeleton bundle

Contao is an Open Source PHP Content Management System for people who want a
professional website that is easy to maintain. Visit the [project website][1]
for more information.

You can use the skeleton bundle as basis for your own Contao bundle.

## Install

Download the skeleton bundle:

```bash
wget https://github.com/contao/skeleton-bundle/archive/master.zip
unzip master.zip
mv skeleton-bundle-master [package name]
cd [package name]
```

## Customize

First adjust the following files:

 * `ecs.yaml`
 * `composer.json`
 * `phpunit.xml.dist`
 * `README.md`

Then rename the following files and/or the references to `SkeletonBundle` in
the following files:

 * `src/ContaoManager/Plugin.php`
 * `src/DependencyInjection/ContaoSkeletonExtension.php`
 * `src/ContaoSkeletonBundle.php`
 * `tests/ContaoSkeletonBundleTest.php`

Finally add your custom classes and resources. Make sure to register your services
within `src/Resources/config/services.yml`. Also make sure to 
[adjust the Contao Manager Plugin][2] (and the dependencies within the `composer.json`) 
accordingly, if your bundle makes adjustments to other bundles (e.g. adjustments 
to a DCA of other bundles).

## Release

Run the PHP-CS-Fixer and the unit test before you release your bundle:

```bash
vendor/bin/ecs check src/ tests/ --fix
vendor/bin/phpunit
```

[1]: https://contao.org
[2]: https://docs.contao.org/dev/framework/manager-plugin/#the-bundleplugininterface
