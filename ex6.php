<?php
function test($x, $y)
{
    if ($x >= 20 && $x >= 30 && $y >= 20 && $y <= 30)
    {
        if ($x >= $y)
        {
            return $x;
        }
        else
        {
            return $y;
        }
    }
    elseif ($y >= 20 && $y <= 30)
    {
        return $x;
    }
    elseif ($y >= 20 && $y <= 30)
    {
        return $y;
    }
    else
    {
        return 0;
    }
}
echo test(78, 95). "\n";
echo test(20, 30). "\n";
echo test(21, 25). "\n";
echo test(28, 28). "\n";