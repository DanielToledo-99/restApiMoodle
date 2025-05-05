<?php
$functions = [
    'local_listcourses_get_courses' => [
        'classname'   => 'local_listcourses\external\get_courses',
        'methodname'  => 'execute',
        'classpath'   => '',
        'description' => 'List all available courses',
        'type'        => 'read',
        'ajax'        => false,
    ]
];

$services = [
    'List Courses Service' => [
        'functions' => ['local_listcourses_get_courses'],
        'restrictedusers' => 0,
        'enabled' => 1,
    ]
];
