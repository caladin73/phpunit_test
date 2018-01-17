<?php
namespace Tests\Feature;
use Tests\TestCase;
use App\Box;
class BasicTest extends TestCase
{
    /** In our Box class, we have a method called has($item),
     * which returns true or false when the specified item is in the box or not. */
    public function testHasItemInBox()
    {
        $box = new Box(['cat', 'toy', 'torch']);
        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('ball'));
        /** if we swap the  */
        //$this->assertFalse($box->has('toy'));
        //$this->assertTrue($box->has('ball'));
    }
    /** assertEquals() is used to compare the actual value
     * of the variable to the expected value. We want to use
     * it to check if the value of the takeOne() function is
     * an item that is current in the box. As the takeOne() method returns
     * a null value when the box is empty, we can use assertNull() to check for that too. */
    public function testTakeOneFromTheBox()
    {
        $box = new Box(['torch']); // try change to fisk ect..
        $this->assertEquals('torch', $box->takeOne());
        // Null, now the box is empty
        $this->assertNull($box->takeOne());
    }
    /** three assertions that work with arrays, which we can use to check the
     * startsWith($item) method in our Box class. assertContains() asserts that
     * an expected value exists within the provided array, assertCount() asserts
     * the number of items in the array matches the specified amount, and assertEmpty()
     * asserts that the provided array is empty. */
    public function testStartsWithALetter()
    {
        $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);
        $results = $box->startsWith('t');
        $this->assertCount(3, $results);
        $this->assertContains('toy', $results);
        $this->assertContains('torch', $results);
        $this->assertContains('tissue', $results);
    }
}