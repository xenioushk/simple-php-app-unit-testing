## Composer install.

<pre><code>composer require phpunit/phpunit ^9.5</code></pre>

## Check the version

<pre><code>./vendor/bin/phpunit --version</code></pre>

## Write config file.

<strong>phpunit.xml</strong> in root of the directory.

<pre><code><?xml version="1.0" encoding="UTF-8" ?>

<phpunit bootstrap="vendor/autoload.php"
colors="true"
stopOnFailure="false">

<testsuites>
  <testsuite name="Calculator Unit Testing">
      <directory>tests</directory>
  </testsuite>
</testsuites>

</phpunit></code></pre>

## Run A Test.

<pre><code>./vendor/bin/phpunit</code></pre>

## Details result of th test.

<pre><code>./vendor/bin/phpunit --testdox</code></pre>
