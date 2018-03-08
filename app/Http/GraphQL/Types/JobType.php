<?php

// app/Http/GraphQL/Types/JobType.php

namespace App\Http\GraphQL\Types;

use GraphQL;
use GraphQL\Type\Definition\Type;
use App\Http\GraphQL\Connection\JobTasksConnection;
use Nuwave\Lighthouse\Support\Definition\GraphQLType;
use Nuwave\Lighthouse\Support\Interfaces\RelayType;

class JobType extends GraphQLType implements RelayType
{
    /**
     * Attributes of type.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'Job',
        'description' => 'A job created by an employee.',
    ];

    /**
     * Get model by id.
     *
     * Note: When the root 'node' query is called, this method
     * will be used to resolve the type by providing the id.
     *
     * @param  mixed $id
     * @return mixed
     */
    public function resolveById($id)
    {
        return \App\Job::find($id);
    }

    /**
     * Type fields.
     *
     * @return array
     */
    public function fields()
    {
        return [
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of the job.',
            ],
            'tasks' => GraphQL::connection(new JobTasksConnection)->field(),
        ];
    }
}
