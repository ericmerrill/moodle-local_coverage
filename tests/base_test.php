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
 * A plugin to test travis-ci testing coverage.
 *
 * @package    local_coverage
 * @author     Eric Merrill <merrill@oakland.edu>
 * @copyright  2016 Oakland University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/local/coverage/lib.php');

class local_coverage_base_testcase extends advanced_testcase {
    public function test_everything() {
        $this->assertEquals(local_coverage_tested(), 300000);
        $this->assertEquals(local_coverage_tested(false), 30000);
        $this->assertEquals(local_coverage_letter(), 'A');
        $this->assertEquals(local_coverage_user(), -10);
    }
}
