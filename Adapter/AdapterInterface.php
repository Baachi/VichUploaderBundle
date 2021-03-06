<?php

namespace Vich\UploaderBundle\Adapter;

use Doctrine\Common\EventArgs;

/**
 * AdapterInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface AdapterInterface
{
    /**
     * Gets the mapped object from the event arguments.
     *
     * @param  EventArgs $e The event arguments.
     * @return object    The mapped object.
     */
    public function getObjectFromArgs(EventArgs $e);

    /**
     * Recomputes the change set for the object.
     *
     * @param EventArgs $e The event arguments.
     */
    public function recomputeChangeSet(EventArgs $e);

    /**
     * Gets class name for the object, taking proxies into account.
     *
     * @param object $obj The object.
     *
     * @return string The FQCN of the given object.
     */
    public function getClassName($object);
}
