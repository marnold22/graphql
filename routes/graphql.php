<?php

// // // // // Schema File // // // // //
// routes/graphql.php

GraphQL::schema()->group(['namespace' => 'App\\Http\\GraphQL'], function () {

    // This creates a Type of user and points to our UserType
    GraphQL::schema()->type('user', 'Types\\UserType');

    // This creates a Query and points to our ViewerQuery
    GraphQL::schema()->query('viewer', 'Queries\\ViewerQuery');
});
