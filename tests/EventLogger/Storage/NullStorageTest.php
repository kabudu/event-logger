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

namespace tests\EventLogger\Storage;

use EventLogger\Storage\NullStorage;
use EventLogger\Storage\StorageInterface;

/**
 * Test class for the NullStorage persistence strategy
 *
 * Class NullStorageTest
 * @package tests\EventLogger\Storage
 */
class NullStorageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StorageInterface
     */
    protected $storage;

    /**
     * Setup method
     */
    protected function setUp()
    {
        $this->storage = new NullStorage();
    }

    /**
     * Test that the storage strategy implements the storage interface
     */
    public function testIsInstanceOfStorageInterface()
    {
        $this->assertTrue($this->storage instanceof StorageInterface);
    }

    /**
     * Test that a null event is fetched
     */
    public function testNullEventIsFetched()
    {
        $this->assertTrue(NULL === $this->storage->fetch(array()));
    }
}