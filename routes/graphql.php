<?php

// // // // // Schema File // // // // //
// routes/graphql.php

GraphQL::schema()->group(['namespace' => 'App\\Http\\GraphQL'], function () {

    // This creates a Type of user and points to our UserType
    GraphQL::schema()->type('user', 'Types\\UserType');

    // This creates a Type of Job and points to our JobType
    GraphQL::schema()->type('job', 'Types\\JobType');

    // This creates a Type of task and points to our TaskType
    GraphQL::schema()->type('task', 'Types\\TaskType');

    // This creates a Query and points to our ViewerQuery
    GraphQL::schema()->query('viewer', 'Queries\\ViewerQuery');
});
