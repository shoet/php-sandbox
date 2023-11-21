<?php
class Student
{
    private int $id;
    private string $name;
    private int $grade;

    public function __construct(int $id, string $name, int $grade)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
    }

    public function get_id(): int
    {
        return $this->id;
    }

    public function get_name(): string
    {
        return $this->name;
    }

    public function get_grade(): int
    {
        return $this->grade;
    }
}
