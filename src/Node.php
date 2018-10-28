<?php

namespace Timber;

class Node {
  private $value;
  private $children = [];

  public function __construct($value) {
    $this->value = $value;
  }

  public function getValue() {
    return $this->value;
  }

  public function addChild(Node $child) {
    $this->children[] = $child;
  }

  public function searchChildren($value) {

    foreach ($this->children as $child) {
      if ($child->getValue() == $value) {
        return $child;
      }
    }
    return FALSE;
  }

  public function isLeaf() {
    return empty($this->children);
  }

  public function __toString() {
    $string_array = [];
    $string_array[] = "(";
    $string_array[] = "{$this->value}";
    foreach ($this->children as $child) {
      $string_array[] = "$child";
    }
    $string_array[] = ")";
    return implode("", $string_array);
  }

  public function getChildren() {
    return $this->children;
  }
}