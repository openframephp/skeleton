<?php

/**
 * Configurações da aplicação
 * 
 * @author Leandro de Amorim <androrim@gmail.com>
 */

return array(
    
    'App' => array(
        
        'base' => dirname(__DIR__),
        
        'dir' => 'site',
        
        'webroot' => 'webroot',
        
        'assets' => array(
            
            'images' => 'img',
                
            'styles' => 'css',

            'javascript' => 'js',
        ),
        
        'site' => array (
            
            'theme' => 'default',
            
            'pages' => 'pages',
            
            'home' => 'home',
            
            'error' => 'error'
            
        ),
        
        'debug' => true
    ),
        
    'Email' => array(
        
        'default' => array(
            
            'port' => 5087,
            
            'host' => '',
            
            'username' => '',
            
            'password' => '',
            
        )
        
    )
    
);

