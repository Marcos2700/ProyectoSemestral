<?php
/** 
 * Este archivo no corresponde a las pruebas unitarias del proyecto
 * y se hizo con el motivo de emular las pruebas unitarias en caso de que el sistema se
 * hubiese hecho con programacion orientada a objetos.
 */
require_once(__DIR__.'/UsersModel.php');
use \PHPUnit\Framework\TestCase;
class SistemaTest extends TestCase{

    public function testLogin(){

        $mock = $this->getMockBuilder('ControlUsers')
            ->onlyMethods(array('login'))
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('login')
            ->will($this->onConsecutiveCalls("true");

            $this->assertSame("true", $mock->userLogin("nombre","cedula","passwd"));
    }

    public function testRegistrar(){

        $mock = $this->getMockBuilder('ControlUsers')
            ->onlyMethods(array('registro'))
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('registro')
            ->will($this->onConsecutiveCalls("true");

            $this->assertSame("true", $mock->userRegistro("nombre","cedula","edad","genero","edad","email","passwd");
    }

    public function testProgramarCita(){

        $mock = $this->getMockBuilder('ControlUsers')
            ->onlyMethods(array('progCita'))
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('progCita')
            ->will($this->onConsecutiveCalls("true");

            $this->assertSame("true", $mock->userProgCita("fecha","hora","especialidad","motivo");
    }

    public function testReprogCita(){

        $mock = $this->getMockBuilder('ControlUsers')
            ->onlyMethods(array('reprogCita'))
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('reprogCita')
            ->will($this->onConsecutiveCalls("true");

            $this->assertSame("true", $mock->userReprogCita("fecha","hora","especialidad","motivo");
    }

    public function testCancelarCita(){

        $mock = $this->getMockBuilder('ControlUsers')
            ->onlyMethods(array('cancelar'))
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('cancelar')
            ->will($this->onConsecutiveCalls("true");

            $this->assertSame("true", $mock->userCancelar();
    }
}
?>