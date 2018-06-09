<?php
/**
 * Syx Config Ini
 */

namespace Syx\Config;

class Ini extends Simple
{
    /**
     * Loads the section $section from the config file $filename for
     * access facilitated by nested object properties.
     *
     * If the section name contains a ":" then the section name to the right
     * is loaded and included into the properties. Note that the keys in
     * this $section will override any keys of the same
     * name in the sections that have been included via ":".
     *
     * If the $section is null, then all sections in the ini file are loaded.
     *
     * If any key includes a ".", then this will act as a separator to
     * create a sub-property.
     *
     * example ini file:
     *      [all]
     *      db.connection = database
     *      hostname = live
     *
     *      [staging : all]
     *      hostname = staging
     *
     * after calling $data = new \Syx\Config_Ini($file, 'staging'); then
     *      $data->hostname === "staging"
     *      $data->db->connection === "database"
     *
     * @param  string|array $filename
     * @param  string|null $section
     * @throws Exception
     * @return void
     */
    public function __construct($filename, $section = NULL)
    {

    }

    /**
     * get
     * @description Retrieve a value and return null if there is no element set
     * @param string $name
     * @return bool|null|Ini
     */
    public function get($name)
    {

    }
}
