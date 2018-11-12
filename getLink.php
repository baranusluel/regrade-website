<?php

/*
 * Function to generate the url to a particular student's submission.
 *
 * COURSE ID: 26266
 *
 * inputs: an assignment name and a student's GT username
 * outputs: the url that would lead to that student's submission of that
 * assignment.
 *
 * First gets all students and all assignments in the course. Then searches
 * through all students for the input student. Then searches through all
 * assignments for the input assignment. Generates link in format:
 *
 * https://gatech.instructure.com/courses/26266/assignments/:assignmentID/submissions/:studentID
 */

function getURL($student, $assignment) {

// STEP 1: EXPORT INFORMATION FROM CANVAS

//  Initiate curl
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Get Users
    $url_users = "https://gatech.instructure.com/api/v1/courses/26266/users?access_token=2096~9RXlwVUP3OIkybSXxvCMEiPAoGymux2IxRd3hifZEuREmJEa8x1MjmvNXeCLaCHB";
    curl_setopt($ch, CURLOPT_URL, $url_users);
    $users = json_decode(curl_exec($ch), true);

// Get assignments
    $url_assignments = "https://gatech.instructure.com/api/v1/courses/26266/assignments?access_token=2096~9RXlwVUP3OIkybSXxvCMEiPAoGymux2IxRd3hifZEuREmJEa8x1MjmvNXeCLaCHB";
    curl_setopt($ch, CURLOPT_URL, $url_assignments);
    $assignments = json_decode(curl_exec($ch), true);

// Close
    curl_close($ch);

// STEP 2: ITERATRE THROUGH STUDENTS LOOKING FOR $STUDENT

    // get student's first initial and last name from gt username

    foreach($users as $val) {
        /* if first initial and last name match, get student's login id and see
         * if it matches gt username. If it matches get students id number and break.
         *
         * /api/v1/users/:user_id/profile
         */
    }

    foreach($assignments as $val) {
        /* Match assignment number and either original or resubmission, get
         * assignment id
         *
         * /api/v1/users/:user_id/profile
         */
    }

    // construct link
    // https://gatech.instructure.com/courses/26266/assignments/:assignmentID/submissions/:studentID

    // return link
}


 ?>