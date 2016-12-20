<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Controller
    |--------------------------------------------------------------------------
    |
    | This controller will be used as a base controller of all controllers
    |
     */

    'base_controller' => 'CtrlServer\Base\Controller',
    'base_name'       => 'CtrlServer\Base',

    /*
    |--------------------------------------------------------------------------
    | Path for classes
    |--------------------------------------------------------------------------
    |
    | All Classes will be created on these relevant path
    |
     */

    'path_migration'  => base_path('database/migrations/'),
    
    'path_model'      => app_path('Models/'),
    
    'path_repository' => app_path('Repositories/'),
    
    'path_service'    => app_path('Services/'),
    
    'path_controller' => app_path('Controllers/'),
    
    'path_view'       => base_path('resources/views/'),
    
    'path_request'    => app_path('Requests/'),
    
    'path_route'      => base_path('routes/web.php'),
    
    'path_factory'    => base_path('database/factories/ModelFactory.php'),

    /*
    |--------------------------------------------------------------------------
    | Namespace for classes
    |--------------------------------------------------------------------------
    |
    | All Classes will be created with these namespaces
    |
     */

    'namespace_model'      => 'CtrlServer\Models',
    
    'namespace_repository' => 'CtrlServer\Repositories',
    
    'namespace_service'    => 'CtrlServer\Services',
    
    'namespace_controller' => 'CtrlServer\Controllers',
    
    'namespace_request'    => 'CtrlServer\Requests',

    /*
    |--------------------------------------------------------------------------
    | Model extend
    |--------------------------------------------------------------------------
    |
    | Model extend Configuration.
    | By default Eloquent model will be used.
    | If you want to extend your own custom model
    | then you can specify "model_extend" => true and "model_extend_namespace" & "model_extend_class".
    |
    | e.g.
    | 'model_extend' => true,
    | 'model_extend_namespace' => 'App\Models\AppBaseModel as AppBaseModel',
    | 'model_extend_class' => 'AppBaseModel',
    |
     */

    'model_extend_class' => 'Illuminate\Database\Eloquent\Model',

    /*
    |--------------------------------------------------------------------------
    | View extend
    |--------------------------------------------------------------------------
     */
    'main_layout' => 'layouts.app',

    /*
    |--------------------------------------------------------------------------
    | Routes prefix
    |--------------------------------------------------------------------------
     */

    'route_prefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Scaffold setting
    |--------------------------------------------------------------------------
    |
    | Application layers consist of :
    |
    | Controllers - contains application logic and passing user input data to service
    | Services - The middleware between controller and repository,
    | gather data from controller, performs validation and business logic, calling repositories for data manipulation.
    | Repositories - layer for interaction with models and performing DB operations
    | Eloquents - common laravel model files with relationships defined
    |
    | By default scaffold will automatically service and repository layer.
    | You also can setting to only create repository
    | Or if you want to only use Eloquent, you can set 2 below options is false.
     */
    'use_repository_layer' => false,
    
    'use_service_layer'    => false,

    /*
    |--------------------------------------------------------------------------
    | Message
    |--------------------------------------------------------------------------
     */
    'message' => [
        'en'  => [
            'store'     => ':model saved successfully.',
            'update'    => ':model updated successfully.',
            'delete'    => ':model deleted successfully.',
            'not_found' => ':model not found',
        ],
    ],
];
