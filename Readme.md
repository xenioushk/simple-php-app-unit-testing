## Composer install.

composer require phpunit/phpunit ^9

## Check the version

./vendor/bin/phpunit --version

## Write config file.

<strong>phpunit.xml</strong> in root of the directory.

<?xml version="1.0" encoding="UTF-8" ?>

<phpunit bootstrap="vendor/autoload.php"
colors="true"
stopOnFailure="false">

<testsuites>
  <testsuite name="Calculator Unit Testing">
      <directory>tests</directory>
  </testsuite>
</testsuites>

</phpunit>

## Run A Test.

./vendor/bin/phpunit

## Details result of th test.

./vendor/bin/phpunit --testdox
