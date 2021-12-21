<?php
class SaleController extends BaseController
{   public function __construct()
	{
        require('./Model/Database.php');
       
	}
    public function index(){
       require("./Views/dstour.php");
    } 
    public function show(){
        echo __METHOD__;
    }
}