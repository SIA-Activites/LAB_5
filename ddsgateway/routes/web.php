<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['middleware' => 'client.credentials'],function() use ($router) {

    // SITE 1 COMMANDS
    $router->get('/users1',['uses' => 'User1Controller@index']);                  
    $router->post('/users1',['uses' => 'User1Controller@add']);                    
    $router->get('/users1/{id}',['uses' => 'User1Controller@show']);                
    $router->put('/users1/{id}',['uses' => 'User1Controller@updateUser']);   
    $router->delete('/users1/{id}',['uses' => 'User1Controller@deleteUser']);  

    $router->get('/userjob1',['uses' => 'UserJob1Controller@index']);            
    $router->get('/userjob1/{id}',['uses' => 'UserJob1Controller@show']);     

   
    // SITE 2 COMMANDS
    $router->get('/users2',['uses' => 'User2Controller@index']);               
    $router->post('/users2',['uses' => 'User2Controller@add']);                  
    $router->get('/users2/{id}',['uses' => 'User2Controller@show']);              
    $router->put('/users2/{id}',['uses' => 'User2Controller@updateUser']);   
    $router->delete('/users2/{id}',['uses' => 'User2Controller@deleteUser']);  
    
    $router->get('/userjob2',['uses' => 'UserJob2Controller@index']);            
    $router->get('/userjob2/{id}',['uses' => 'UserJob2Controller@show']);         

});


// USERJOB ROUTES

         

