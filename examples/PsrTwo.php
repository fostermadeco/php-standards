<?php

namespace VisualChefs/Awesome/Forum;

use Other/Awesome/OtherAwesomeForum;

/**
 * Another awesome forum we can use for our l4 projects!
 *
 * @author      Visual Chefs <code@visualchefs.com>
 * @copyright   (C) 2013. All rights reserved.
 * @version     1.0
 */

/**
 * Another awesome forum we can use for our l4 projects!
 *
 * @category    Visual Chefs
 * @package     Awesome
 * @subpackage  Forum
 * @since       1.0
 */
class Forum extends OtherAwesomeForum implements BasicForum
{

    /**
     * Constructor
     *
     * @return  void
     */
    public function __construct()
    {
    }

    /**
     * Get all the forums.
     *
     * @param   boolean   $and_private    Get private forums as well.
     * @return  array
     */
    public function all($and_private = false)
    {
    }

    /**
     * Protected method that does special stuff we want on its own.
     *
     * @return  void
     */
    protected function specialCaseFunc()
    {
    }

}
