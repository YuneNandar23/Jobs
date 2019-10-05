<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Map;
use App\Bank;
use App\Account;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("Bank.xlsx");

        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();

        $get_bank1 = array();

        for($row = 1; $row<=$highestRow;$row++){
            $get_bank1[$row] = $worksheet->getCell('A'.$row)->getValue();
        }

        $get_banks = array(
            $get_bank1,
        );

        foreach ($get_banks as $key => $get_bank){
            $Bank = new Bank();
            $Bank->number = $get_bank[1];
            $Bank->balance = 0;
            $Bank->cvv = $get_bank[3];
            $Bank->expired = $get_bank[4];           
            $Bank->save();
        }
    }
}
