<?php namespace Ginger\Gin\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Gin extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'Gin'; }
 
}