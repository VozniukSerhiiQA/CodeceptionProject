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

Environment variable:
1) add path to folder with Web-driver
2) add path to folder /php

In follow link exist 2 tables with mapping to files. When new test is adding or extened you should olso map it on this file too.
The file allow us to see usages of objects and extended steps to tests.
https://docs.google.com/spreadsheets/d/1cgXncCBLMcX8YSrhvFDbf-DiHIC8tv0OYPgctxEMpQ0/edit?usp=sharing