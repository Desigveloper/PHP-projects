<?php
    $product = [
        'paper' => [
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"
        ],
        'pens' => [
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"
        ],
        'misc' => [
            'tape' => "StickyTape",
            'glue' => "Adhesives",
            'clips' => "Paperclips"
        ]
        ];


        echo "\n";
        $i = 1;
        foreach($product as $section=>$item)
        {
            foreach($item as $key=> $value)
            {
                echo "$i:\t$section\t$key\t($value)\n";
                $i++;
            }
        }

        echo $product['pens']['ball'] . "\n";