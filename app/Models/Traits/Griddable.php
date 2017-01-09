<?php

/**
 * app/Models/Traits/Griddable.php
 *
 * Trait for providing additional methods to models.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models\Traits;

trait Griddable
{
	/**
     * Return the grid data for building jsGrids.
     *
     * @param  array $forget
     * @return array|json
     */
    public static function grid(array $forget = [])
    {
        if (! empty($forget)) {
            foreach(self::$grids as $key => $value) {
                if (array_key_exists($key, $forget)) {
                    unset(self::$grids[$key]);
                }
            }

            $grids = array_merge(self::$grids);

            if (self::detectSelects()) {
                return dec_enc($grids);
            }

            return encode($grids);
        }

        if (self::detectSelects()) {
            return dec_enc(self::$grids);
        }
        
        return encode(self::$grids);
    }

    /**
     * Detect whether we should send JSON encoded results.
     * 
     * @return bool
     */
    private static function detectSelects()
    {
        $count = 0;

        foreach (self::$grids as $grid) {
            if ($grid['type'] == 'select') {
                $count++;
            }
        }

        if ($count) {
            return true;
        }

        return false;
    }
}
