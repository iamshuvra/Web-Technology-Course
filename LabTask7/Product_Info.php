<?php
class Product {
  // Properties
  public $name;
  public static $id;
  public $des;
  public $quantity;

  // Methods
  function __construct() {
    $this->id++;
  }

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_des($des) {
    $this->des = $des;
  }
  function get_des() {
    return $this->name;
  }
  function set_quantity($quantity) {
    $this->quantity = $quantity;
  }
  function get_quantity() {
    return $this->quantity;
  }
}
?>