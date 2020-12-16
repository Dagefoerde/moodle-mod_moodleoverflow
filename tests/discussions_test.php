<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * PHPUnit Tests for testing discussion retrieval
 *
 * @package   mod_moodleoverflow
 * @copyright 2020 Jan Dageförde <jan@dagefor.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace mod_moodleoverflow;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/moodleoverflow/locallib.php');

/**
 * PHPUnit Tests for testing discussion retrieval
 *
 * @package   mod_moodleoverflow
 * @copyright 2020 Jan Dageförde <jan@dagefor.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_moodleoverflow_discussions_testcase extends \advanced_testcase {

    public function test_a_fresh_forum_has_an_empty_discussion_list() {

        $this->assertEquals(count($discussions), 0);
    }

    public function test_a_discussion_can_be_retrieved() {

        $this->assertEquals(count($discussions), 1);
    }

}