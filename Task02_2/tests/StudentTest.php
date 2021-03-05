<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Student;

class StudentTest extends TestCase
{

    public function testTextRepresentation()
    {
        $s1 = new Student();
        $s1 -> setName("Влад") -> setLastName("Балашов") -> setFaculty("ФМиИТ") -> setCourse(4) -> setGroup(402);
        $this -> assertSame(
            "Id: 1" . "\n" .
            "Фамилия: Балашов" . "\n" .
            "Имя: Влад" . "\n" .
            "Факультет: ФМиИТ" . "\n" .
            "Курс: 4" . "\n" .
            "Группа: 402",
            $s1 -> __toString()
        );
    }

    public function testGetFuntions()
    {
        $s1 = new Student();
        $s1 -> setName("Влад") -> setLastName("Балашов") -> setFaculty("ФМиИТ") -> setCourse(4) -> setGroup(402);
        $this ->  assertSame("Влад", $s1 -> getName());
        $this ->  assertSame("Балашов", $s1 -> getLastName());
        $this ->  assertSame("ФМиИТ", $s1 -> getFaculty());
        $this ->  assertSame(4, $s1 -> getCourse());
        $this ->  assertSame(402, $s1 -> getGroup());
    }
}
