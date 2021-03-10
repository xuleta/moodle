<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'moodle-postgres';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'm@0dl3ing';
$CFG->prefix    = 'm_';
$CFG->dboptions = ['dbcollation' => 'utf8mb4_unicode_ci'];

$CFG->wwwroot   = "https://example.com";
$CFG->sslproxy  = true;

$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;
$CFG->smtphosts = 'mailhog:1025';
$CFG->noreplyaddress = 'noreply@example.com';

// Debug options - possible to be controlled by flag in future..
ini_set ('display_errors', 'off');
$CFG->pathtophp = '/usr/local/bin/php';

$CFG->preventexecpath = true;

$CFG->phpunit_dataroot  = '/var/www/phpunitdata';
$CFG->phpunit_prefix = 't_';
define('TEST_EXTERNAL_FILES_HTTP_URL', 'http://exttests');

$CFG->behat_wwwroot   = 'http://webserver';
$CFG->behat_dataroot  = '/var/www/behatdata';
$CFG->behat_prefix = 'b_';
$CFG->behat_profiles = array(
    'default' => array(
        'browser' => 'chrome',
        'wd_host' => 'http://selenium:4444/wd/hub',
    ),
);
$CFG->behat_faildump_path = '/var/www/behatfaildumps';

define('PHPUNIT_LONGTEST', true);

$CFG->behat_ionic_wwwroot = 'http://moodleapp:8100';

define('TEST_SEARCH_SOLR_HOSTNAME', 'solr');
define('TEST_SEARCH_SOLR_INDEXNAME', 'test');
define('TEST_SEARCH_SOLR_PORT', 8983);

define('TEST_SESSION_REDIS_HOST', 'redis');
define('TEST_CACHESTORE_REDIS_TESTSERVERS', 'redis');

define('TEST_CACHESTORE_MONGODB_TESTSERVER', 'mongodb://mongo:27017');

define('TEST_CACHESTORE_MEMCACHED_TESTSERVERS', "memcached0:11211\nmemcached1:11211");
define('TEST_CACHESTORE_MEMCACHE_TESTSERVERS', "memcached0:11211\nmemcached1:11211");

define('TEST_LDAPLIB_HOST_URL', 'ldap://ldap');
define('TEST_LDAPLIB_BIND_DN', 'cn=admin,dc=openstack,dc=org');
define('TEST_LDAPLIB_BIND_PW', 'password');
define('TEST_LDAPLIB_DOMAIN', 'ou=Users,dc=openstack,dc=org');

define('TEST_AUTH_LDAP_HOST_URL', 'ldap://ldap');
define('TEST_AUTH_LDAP_BIND_DN', 'cn=admin,dc=openstack,dc=org');
define('TEST_AUTH_LDAP_BIND_PW', 'password');
define('TEST_AUTH_LDAP_DOMAIN', 'ou=Users,dc=openstack,dc=org');

define('TEST_ENROL_LDAP_HOST_URL', 'ldap://ldap');
define('TEST_ENROL_LDAP_BIND_DN', 'cn=admin,dc=openstack,dc=org');
define('TEST_ENROL_LDAP_BIND_PW', 'password');
define('TEST_ENROL_LDAP_DOMAIN', 'ou=Users,dc=openstack,dc=org');

require_once(__DIR__ . '/lib/setup.php');