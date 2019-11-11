<?php

namespace App\Imports;

use App\Model\Author;
use DateTime;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AuthorImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row) {
            Author::create([
                'firebase_id' => $row['firebase_id'],
                'email' => $row['email'],
                'email_verified' => $row['email_verified']  == 'TRUE' ? true : false,
                'name' => $row['name'] != '' ? $row['name'] : 'default',
                'username' => $row['username'] != '' ? $row['username'] : 'default',
                'provider' => $row['provider'] != '' ? $row['provider'] : 'email',
            ]);
        }
    }
}
