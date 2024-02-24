<?php 

namespace Madebyriki\TestCaseAlgoritma;

class MatrixNxn {
    public function getSelisihMatrix()
    {
        return $this->getDiagonalPertama() - $this->getDiagonalKedua();
    }

    public function getDiagonalPertama()
    {
        $matrix = [
            [1, 2, 0], 
            [4, 5, 6], 
            [7, 8, 9]
        ];

        $diagonalPertama = 0;
        $diagonalKedua = 0;
        $size = count($matrix);
        for($i = 0; $i < $size; $i++)
        {
            $diagonalPertama += $matrix[$i][$i];
            $diagonalKedua += $matrix[$i][$size - $i - 1];
        }

        return $diagonalPertama;
    }

    public function getDiagonalKedua()
    {
        $matrix = [
            [1, 2, 0], 
            [4, 5, 6], 
            [7, 8, 9]
        ];

        $diagonalPertama = 0;
        $diagonalKedua = 0;
        $size = count($matrix);
        for($i = 0; $i < $size; $i++)
        {
            $diagonalPertama += $matrix[$i][$i];
            $diagonalKedua += $matrix[$i][$size - $i - 1];
        }

        return $diagonalKedua;
    }
}