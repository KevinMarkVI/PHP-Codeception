## PHP-Codeception

This code is provided on an "AS-IS” basis without warranty of any kind, either express or implied, including without limitation any implied warranties of condition, uninterrupted use, merchantability, fitness for a particular purpose, or non-infringement. Your tests and testing environments may require you to modify this framework. Issues regarding this framework should be submitted through GitHub. For questions regarding Sauce Labs integration, please see the Sauce Labs documentation at https://wiki.saucelabs.com/. This framework is not maintained by Sauce Labs Support.

### Environment Setup

Project Dependencies
  * Install packages
  ```
  $ curl http://getcomposer.org/installer | php
    $ php composer.phar install
  ```

####Add your Sauce Username and Access key to the codeception.yml file and the acceptance.suite.yml files

### Running Tests

* Tests in Parallel:
  ```
  $ vendor/bin/robo parallel:all
  ```
[Sauce Labs Dashboard](https://saucelabs.com/beta/dashboard/)

### Advice/Troubleshooting

1. There may be additional latency when using a remote webdriver to run tests on Sauce Labs. Timeouts or Waits may need to be increased.
    * [Selenium tips regarding explicit waits](https://wiki.saucelabs.com/display/DOCS/Best+Practice%3A+Use+Explicit+Waits)

### Resources
##### [Sauce Labs Documentation](https://wiki.saucelabs.com/)

##### [SeleniumHQ Documentation](http://www.seleniumhq.org/docs/)

##### [PHPWebdriver Documentation](https://github.com/facebook/php-webdriver)

##### [Behat 3 Documentation](http://docs.behat.org/en/v3.0/)

##### [Composer Documentation](https://getcomposer.org/doc/)

##### [Stack Overflow](http://stackoverflow.com/)
* A great resource to search for issues not explicitly covered by documentation

