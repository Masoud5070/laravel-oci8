#Laravel-OCI8 Change Log

#v4.0.3
- Scrutinizer code refactoring.

#v4.0.2
- Add config_path for Lumen. Fix #123

#v4.0.1
- Fix PDO Type detection when binding values. Fix #122

#v4.0.0
- Change vendor namespace from yajra to Yajra.
- Remove own pluck implementation. Frameworks implementation works out of the box.
- Publishing of config file is now optional.
- Improve query when expecting first row as result.
- Removes unwanted "rn" column being returned when executing first() queries.
- Improve exists query. #107
- Add support for date based queries.
- Implement quoting of Oracle reserved words. #93
- Enhance auto-increment trigger and remove unnecessary updating sql. #112
- Add more tests.
- Fix compatibility issues with PHP 7.

#v3.0.0
- Drop support for Laravel 4.2 & 5.0.
- Drop Support for PHP 5.4.
- Use PSR-4 auto loading.
- Add oracle config file.
- Update CS style using Laravel 5.1 php cs config.

#v2.4.4
- Add timestampTz support #101.

#v2.4.3
- Add checker if pdo is in transaction. Fix #83
- Use ~0.14 as default pdo-via-oci8 version.

#v2.4.2
- Add support for model using DB Link.
- Fix #79. Credits to @jbaron30.

#v2.4.1
- Reverted. Fix UnexpectedValueException when returning response using first().
- Minor code clean-up and updated doc blocks.

#v2.4.0
- Converted source code to PSR1/2 coding standard.
- Fix ORA-01002 when usng lockForUpdate.
- Fix ORA-00907 issue #76.
- Fix UnexpectedValueException when returning response using first().
- Throws Oci8Exception when using sharedLock. Not supported atm.
- Will now use git flow process when releasing changes.

#v2.3.1
- Fix OracleEloquent Blob insert/update function when updating only the blob field
- Fix Issue #70

#v2.3.0
- added support for Oracle Cursor to be returned via Query Builder
- requires `yajra/laravel-pdo-via-oci8:~0.12`

#v2.2.0
- added support for Laravel Lumen

#v2.1.4
- refactor alter session functions
- enable query log when app.debug = true
	- temporary solution for https://github.com/laravel/framework/issues/7085

#v2.1.3
- fix set schema alter session query
- enhance oracle alter session variables query

#v2.1.2
- improve oracle alter session query

#v2.1.1
- remove boot/package function on Oci8ServiceProvider to fix compatibly with Laravel5

#v2.1.0
- Added support for CHAR column data type. Fix #51
- Fix failing/todo unit tests

#v2.0.8
- Enhance support for TNSNAMES.ORA connection via config[tns]
- Fix set schema function

#v2.0.7
- Rollback auto create constraint name
- As per Laravel Docs, constraint full name should be passed (my bad >.<)

#v2.0.6
- Refactor drop constraints grammar
- Fix drop constraint name exceeding 30 chars

#v2.0.5
- Fix drop primary grammar
- Fix drop foreign grammar
- Fix drop unique grammar
- Fix drop index grammar

#v2.0.4
- Fix undefined charset

#v2.0.3
- Code clean up and refactoring

#v2.0.2
- Refactor OracleAutoIncrementHelper
- Added Sequence Class
- Added Trigger Class

#v2.0.1
- Bug fixes and refactoring
- Added OracleAutoIncrementHelper

#v2.0.0
- Added support for Laravel 5
- Drop support for Laravel 4.0 and 4.1

#v1.15.0
- Stable version for Laravel 4.0, 4.1 and 4.2