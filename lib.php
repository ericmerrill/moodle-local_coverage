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

function local_coverage_tested($yes = true) {
    $a = 10;
    $b = 3000;

    $c = $a * $b;

    if ($yes) {
        $c = $c * 10;
    }

    if (false) {
        echo "Never run";
    }

    return $c;
}

function local_coverage_not_tested() {
    $a = 10;
    $b = 3000;

    $c = $a * $b;

    return $c;
}
