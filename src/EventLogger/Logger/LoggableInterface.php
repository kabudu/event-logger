<?php
/**
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace EventLogger\Logger;

use EventLogger\Event\Collection\EventCollectionInterface;
use EventLogger\Event\EventInterface;

/**
 * A loggable interface for event loggers
 *
 * Interface LoggableInterface
 * @package EventLogger\Logger
 */
interface LoggableInterface
{
    /**
     * Log an event
     *
     * @param EventInterface $event
     * @return mixed
     */
    public function log(EventInterface $event);

    /**
     * Log a collection of events
     *
     * @param EventCollectionInterface $eventCollection
     * @return mixed
     */
    public function logMultiple(EventCollectionInterface $eventCollection);
}