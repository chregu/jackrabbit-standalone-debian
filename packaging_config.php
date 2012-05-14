$configure = array(
    'packagename' => 'jackrabbit-standalone',
    'version' => '2.4.1-1',
    'maintainer' => 'me myself <me@myself.com>',
    'description' => 'jackrabbit standalone',
    'url' => 'http://jackrabbit.apache.org',
    'packagetype' => 'deb',
    'depends' => array(
        'sun-java6-jdk'
    ),

    'tmpdir' => '/tmp',
    'templatedir' => 'packaging_files/templates',
    'postinst' => 'packaging_files/templates/postinst_deb',
    'preinst' => '',
    'postrm' => '',
    'prerm' => '',
);

/* here you can define which files or directories should go where in the target system.
 * You can use placeholders defined in your $configure array
 * The syntax is dest => src so you don't have to repeat dest if you have lots
 * of stuff to put in the same directory
 * To prevent some files or directories from ending up in the package you can exclude
 * them by prepending them with '- ' (see also example).
 *
 * Example:
 *
 * $filemapping = array(
 *   'var/www/@PACKAGENAME@' => array(
 *      'app/',
 *   )
 * )
 */
$filemapping = array(
    'var/lib/@PACKAGENAME@' => array(
        'bin',
    ),
    'etc' => array(
        'etc/*'
        ),
    'var' => array(
        'var/*'
        )
);
