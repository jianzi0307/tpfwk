<?php
namespace Admin\Controller;

interface IRegistry {
 	public function get( $key );  
 	public function set( $key,$vlaue );
}