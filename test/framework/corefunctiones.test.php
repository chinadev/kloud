<?php

include_once(  dirname(__FILE__) . '/../test.init.php' );


class coreTest extends PHPUnit_Framework_TestCase
{
    public function testCoreFunctiones()
    {
        // test c 
        $rand = md5(time()).rand(1,9999);
        $GLOBALS['konfig']['krand'] = $rand;
        $this->assertEquals( $rand , c('krand'));
        // test u 
        $this->assertEquals( 'http%3A%2F%2Fftqq.com%2F%3Fa%3Dnew%26c%3Dbook%26m%3Ddownload' , u('http://ftqq.com/?a=new&c=book&m=download') );
        // test wintval
        $this->assertEquals( '125564454342345' , wintval('1255g6445e434d234f5'));
        $this->assertEquals( 1  , 2 );
    }
}