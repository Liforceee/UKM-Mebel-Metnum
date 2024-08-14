<?php

namespace App\Controllers;

class Estimasi extends BaseController
{
    public function index(): string
    {
        return view('Estimasi');
    }
    public function hasil()
    {
        function gaussJordan($matrix)
        {
            $rows = count($matrix);
            $cols = count($matrix[0]);

            for ($i = 0; $i < $rows; $i++) {
                // Mencari pivot untuk setiap baris
                $pivot = $matrix[$i][$i];

                // Mengubah baris saat ini sehingga elemen pivot menjadi 1
                for ($j = $i; $j < $cols; $j++) {
                    $matrix[$i][$j] /= $pivot;
                }

                // Mengurangkan baris saat ini dari baris lain sehingga elemen di kolom pivot menjadi 0
                for ($k = 0; $k < $rows; $k++) {
                    if ($k !== $i) {
                        $factor = $matrix[$k][$i];
                        for ($j = $i; $j < $cols; $j++) {
                            $matrix[$k][$j] -= $factor * $matrix[$i][$j];
                        }
                    }
                }
            }

            return $matrix;
        }

        $matrix = [];
        $matrix[] = [20, 4, 3, $_POST["k"]];
        $matrix[] = [2, 1, 1, $_POST["b"]];
        $matrix[] = [50, 23, 25, $_POST["p"]];

        $result = gaussJordan($matrix);

        return view('hasil', [
            'lemari' => round($result[0][3]),
            'meja'   => round($result[1][3]),
            'kursi'  => round($result[2][3])
        ]);
    }
}
