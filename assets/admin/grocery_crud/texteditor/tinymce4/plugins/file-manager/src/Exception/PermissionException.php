<?php
/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package   CMS\Core\Admin\FileManager
 * @author    Aram Nap <aram@bitman.nl>
 * @copyright 2015 Bitman
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

namespace Bitman\Cms\FileManager\Exception;

/**
 * Exception thrown when an action tries to occur with insufficient permission.
 */
class PermissionException extends FileManagerException
{
}