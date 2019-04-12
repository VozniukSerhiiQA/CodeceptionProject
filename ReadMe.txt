To run tests on Work PC:
1) Run ConEmu
2) Run WebDriver
* cd C:\autotest\selenium_server
* java -jar selenium-server-standalone-3.14.0.jar
3) Run Test (Open new window in ConEmu)
* cd C:\autotest\projects\CodeceptionProject
select specifiyed test:
php codecept.phar run acceptance HomePageCept.php --debug --html
php codecept.phar run acceptance HomePageLinksCept.php --debug --html
