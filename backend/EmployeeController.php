<?php

include __DIR__ . "/EmployeeService.php";

class EmployeeController
{
    public function getAll($table)
    {
        $emp_ser = new EmployeeService();
        return $emp_ser->getAll($table);
    }

    public function create($emp,$table)
    {
        $emp_ser = new EmployeeService();
        return $emp_ser->create($emp,$table);
    }

    public function update($id,$pun)
    {
        $emp_ser = new EmployeeService();
        return $emp_ser->update($id,$pun);
    }

    public function delete($emp)
    {
        $emp_ser = new EmployeeService();
        return $emp_ser->delete($emp);
    }
    public function Access($name,$pass,$table){
        $emp_ser = new EmployeeService();
        return $emp_ser->Access($name,$pass,$table);    
    }
}
