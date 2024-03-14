<?
    # a program to find the sum of five numbers

    function sum() {
        $numbers = [];
        $total = 0;

        for ($i = 0; $i < 5; $i++) {
            $numbers[$i] = readline("Enter number : ");
        }

        foreach($numbers as $number) {
            $total += $number;
        }
        return $total;
    }

    $total =  sum();

    echo "Sum = " . $total . "\n";