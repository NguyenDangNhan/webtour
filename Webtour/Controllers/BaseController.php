<?php
class BaseController
{   const Views_Folder_Name = 'Views';
    public function index(){
        echo __METHOD__;
    } 
    public function show(){
        echo __METHOD__;
    }
    public function getPath($path,array $data=[],$check, $level )
    {   foreach($data as $key => $Values)
        {
            $$key = $Values;
        }
        $$check=$check;
        $$level= $level;
        require('./'.self::Views_Folder_Name.'/'.str_replace('.','/',$path).'.php');
    }
}