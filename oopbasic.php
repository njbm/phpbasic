<?php

class Calculator{
    public $number1 =0;     //properties/variable.
    public $number2 =0;     //properties/variable.

    public function Sum()   //method/function
    {
        return 'Result = '.$this->number1+ $this->number2;
    }
}

$object =new Calculator;    //Instance of Calculator Class
$object->number1=5;
$object->number2=20;        //object
echo $object->sum();

echo "<br><br><br>";


//Example 2

class Calculator2
{
    public $number1 = 0;     //properties/variable.
    public $number2 = 0;     //properties/variable.

    public function setNumber1($number)   //method/function
    {
        $this->number1 =$number;       
    }
    public function setNumber2($number)   //method/function
    { 
        $this->number2 =$number;
    }
    
    public function sum()
    {
        return $this->number1+ $this->number2;
    }
    public function sub()
    {
        return $this->number1 - $this->number2;
    }
    public function result()
    {
        return 'Sum =' . $this->sum() . '&nbsp &nbsp &nbsp;'  .  'Sub= '.$this->sub();
    }
}

$calculator =new Calculator2;

$calculator->setNumber1(10);
$calculator->setNumber2(5);

echo 'Calculate Result :  ' . $calculator->result();

?>



<html>
<head>
    <title>Basic oop</title>
</head>
<body>
    <form method="post">
        <table height="200" width="600" bgcolor="#00FF99" align="center">
            <tr>
                <td>
                    Enter The 1st Input Number:<input type="text" name="x" value="<?php print $_POST["x"]?>"/><br>

                </td>
            </tr>
            <tr>
                <td>
                    Enter The 2nd Input Number:<input type="text" name="y" value="<?php print $_POST["y"]?>"/><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="add" value="Add">

                    <input type="submit" name="sub" value="SUB">

                    <input type="submit" name="mul" value="MUL">

                    <input type="submit" name="div" value="DIV">

                    <input type="submit" name="large" value="LARGE">

                    <input type="submit" name="print" value="Print123...n">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


