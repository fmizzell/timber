<?php

class NodeTest extends \PHPUnit\Framework\TestCase {
  public function test() {
    $tree = new \Timber\Node("0");

    $child1 = new \Timber\Node("1");
    $child2 = new \Timber\Node("2");

    $grandchild11 = new \Timber\Node("11");
    $grandchild12 = new \Timber\Node("12");

    $tree->addChild($child1);
    $tree->addChild($child2);

    $child1->addChild($grandchild11);
    $child1->addChild($grandchild12);

    $string = "{$tree}";

    $this->assertEquals("(0(1(11)(12))(2))", $string);


  }
}