<?php

return [

    /*
    |--------------------------------------------------------------------------
    | prismic.io API Endpoint URL
    |--------------------------------------------------------------------------
    |
    | Here you must specify the URL of your prismic.io repository. This is
    | required to be able to load the content.
    |
    */

    'url' => env('PRISMIC_URL', 'https://your-repo-name.prismic.io/api/v2'),

    /*
    |--------------------------------------------------------------------------
    | prismic.io API Access Token
    |--------------------------------------------------------------------------
    |
    | Here you can specify your API Access Token if you are using a private API.
    | If you are not using a private API, then leave this configuration set to
    | the default value of null.
    |
    */

    'token' => env('PRISMIC_TOKEN', null),

   /*
    |--------------------------------------------------------------------------
    | prismic.io Content Types
    |--------------------------------------------------------------------------
    |
    | Here you can specify your API Access Token if you are using a private API.
    | If you are not using a private API, then leave this configuration set to
    | the default value of null.
    |
    */
    'content_types' => [
        // 'blog_page' => [
        //     "uid" => "blog_page", 
        //     "name" => "Blog Page",
        //     "type" => "single"
        // ],   
        // 'blog_post' =>[
        //     "uid" => "blog_post", 
        //     "name" => "Blog Post",
        //     "type" => "repeatable"
        // ],      
        // "homepage" => [
        //     "uid" => "homepage", 
        //     "name" => "Homepage",
        //     "type" => "repeatable"
        // ],      
        // "terms_of_service_page" => [
        //     "uid" => "terms_of_service_page", 
        //     "name" => "Terms Of Service Page",
        //     "type" => "single"
        // ],  
        // "privacy_policy_page" => [
        //     "uid" => "privacy_policy_page", 
        //     "name" => "Privacy Policy Page",
        //     "type" => "single"
        // ],    
        //  "homepage" => [
        //     "uid" => "homepage", 
        //     "name" => "Homepage",
        //     "type" => "single"
        // ]    
    ]

];
