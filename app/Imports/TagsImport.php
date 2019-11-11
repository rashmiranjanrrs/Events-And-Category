<?php

namespace App\Imports;

use App\Model\Tag;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class TagsImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row) {
            Tag::create([
                'label' => $row['label'],
                'value' => $row['value'],
                'tagtype_id' => $row['tagtype_id'],
                'count' => $row['count'],
            ]);
        }
    }
}
