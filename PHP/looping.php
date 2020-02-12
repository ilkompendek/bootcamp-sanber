<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini

        $loop = 0;
        $jawaban = [];
        //looping untuk me-loop dua jenis loop
        while ($loop < 2) {
            if ($loop%2 == 0) {
                $i = 0;
                $n = 21;
                while ($i <= $n) {
                    if ($i == 0) {
                        array_push($jawaban, "LOOPING PERTAMA");
                    }elseif ($i%2 == 0) {
                        array_push($jawaban, $i."- I Love PHP");
                    }
                    $i++;
                }
            } else {
                $i = 0;
                $n = 21;
                while ($n > $i) {
                    if ($n == 21) {
                        array_push($jawaban, "LOOPING KEDUA");
                    }elseif ($n%2 == 0) {
                        array_push($jawaban, $n."- I Love PHP");
                    }
                    $n--;
                }
            }
            $loop++;
        }

        foreach ($jawaban as $value) {
            echo $value."<br/>";
        }


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini

        $rest = [];
        foreach ($numbers as $number) {
            array_push($rest, $number%5);
        }

        echo "<br>"; 
        echo "Array sisa baginya adalah:  ";
        print_r($rest); 
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        // Output: 
        foreach( $items as &$item ) {
            $item["id"] = $item[0];
            unset( $item[0] );
            $item['name'] = $item[1];
            unset( $item[1] );
            $item["price"] = $item[2];
            unset( $item[2] );
            $item['description'] = $item[3];
            unset( $item[3] );
            $item['source'] = $item[4];
            unset( $item[4] );
        }
        unset($item);
        
        foreach ($items as  $value) {
            print_r($value);
            echo "<br/>";
        }
        
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";
        $node = "*  ";
        $size = 5;
        for ($i=0; $i < $size+1 ; $i++) {
            for ($j = 0; $j < $i; $j++) { 
                echo $node;
            } 
            echo "<br/>";
        }
    ?>

</body>
</html>