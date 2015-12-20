<?php
require_once('../src/Mrk/DepartementsFrance/DepartementsFrance.php');

use Mrk\DepartementsFrance\DepartementsFrance;

/**
 * Suite de test unitaires PHPUnit
 * 
 * @author Marc Teinturier <m@m-te.fr>
 * @see DepFrance
 */
class DepartementsFranceTest extends PHPUnit_Framework_TestCase
{
    public function testGetByCpTrue()
    {
        $this->assertEquals("Bas-Rhin", DepartementsFrance::get('67500'));
    }
    
    public function testGetByCpFalse()
    {
        $this->assertFalse(DepartementsFrance::get('908786'));
    }
    
    public function testGetByDepTrue()
    {
        $this->assertEquals("Bas-Rhin", DepartementsFrance::get('67'));
    }

    public function testGetByDepFalse()
    {
        $this->assertFalse(DepartementsFrance::get('99'));
    }

    public function testCorse()
    {
        $this->assertEquals("Corse", DepartementsFrance::get('20'));
        $this->assertEquals("Corse-du-Sud", DepartementsFrance::get('20010'));
        $this->assertEquals("Corse-du-Sud", DepartementsFrance::get('20110'));
        $this->assertEquals("Haute-Corse", DepartementsFrance::get('20210'));
        $this->assertEquals("Haute-Corse", DepartementsFrance::get('20410'));
        $this->assertEquals("Haute-Corse", DepartementsFrance::get('20600'));
        $this->assertEquals("Corse-du-Sud", DepartementsFrance::get('20710'));
        $this->assertEquals("Corse-du-Sud", DepartementsFrance::get('20910'));
        $this->assertEquals("Corse", DepartementsFrance::get('20810'));
    }
}
