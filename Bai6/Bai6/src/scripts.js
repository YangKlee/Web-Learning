let a = 0;
let b = 0;
let a_am = false;
let b_am = false;
let operatorChar = '';
let isInputB = false;
function calc()
{
    if (operatorChar == '√')
    {
        let res = Math.sqrt(b);
        document.getElementById("calc_srceen").value = `= ${res}`

    }
    else
    {
        let res = 0;
        if (operatorChar == '+')
            res = a+b;
        else if (operatorChar == '-')
            res = a-b;
        else if (operatorChar == '*')
            res = a*b;
        else if (operatorChar == '/')
            res = a/b;
        else if (operatorChar == '^')
            res = Math.pow(a, b);
        else if (operatorChar == '')
            res = a;
        else
        {
            document.getElementById("calc_srceen").value = "SYSTAX ERROR";

        }
        document.getElementById("calc_srceen").value = `= ${res}`;
    

    }
    reset();
}
function getData(){

}
function display(){
    if (!isInputB && operatorChar != '√')
        document.getElementById("calc_srceen").value = `${a}${operatorChar}`;
    else if (operatorChar == '√' && !isInputB)
    {
        document.getElementById("calc_srceen").value = `${operatorChar}`;
    }
    else if (operatorChar == '√' && isInputB)
        {
            document.getElementById("calc_srceen").value = `${operatorChar}${b}`;
        }
    else
    {
        document.getElementById("calc_srceen").value = `${a}${operatorChar}${b}`;
    }

}
function reset()
{
    a = 0;
    b = 0;
    operatorChar = ''
    isInputB = false;
    a_am = false;
    b_am = false;
}
function clearData()
{
    reset();
    document.getElementById("calc_srceen").value = '';
    
}
function getOperator(op)
{
    if (op == '-' && a == 0)
    {
        a_am = true;
    }
    else if (op == '-' && !isInputB && operatorChar != '')
    {
        b_am = true;
    }
    else
    {
        operatorChar = op;
        display();
    }

}
function getNum(num)
{
    if (operatorChar == '')
    {
        a = a * 10 + num;
        if (a_am)
            a *= -1;
    }
    else
    {
        isInputB = true;
        b = b *10 + num;
        if (b_am)
            b *= -1;
    }
    console.log(`${a}${operatorChar}${b}`);
    display();
}
