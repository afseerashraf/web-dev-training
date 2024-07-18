<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiDimension</title>
</head>
<body>
    <?php
    $multiDimension = array(
        //0->position//  
        array(
            'name' => 'jhone',
            'age' => 26,
            "Address" => array(
                'place' => "USA",
                "house_name" => 'abcb',
                "SecondAddress" => array(
                    'secondHouse' => 'india',

                )
                
            ),
            "School" => array(
                'school_name' => 'highyschool',
                
            )
        ),
        // 1->position
        array(
            'name' => 'surya',
            'age' => 26,
            'height' => 179.0,
        ),
        // 2->position
        array(
            'name' => "karthik",
            'age' => 26,
        ),
    )
    ?>

<ul>
    <li><h1><?php var_dump($multiDimension) ?></h1></li>
    <hr>
    <li><h2><?php var_dump($multiDimension[0]) ?></h2></li>
    <hr>
    <li><h3><?php var_dump($multiDimension[0]['Address']) ?></h3></li>
    <hr>
    <li><h4><?php var_dump($multiDimension[0]["Address"]["SecondAddress"]) ?></h4></li>
    <hr>
    <li><h5><?php var_dump($multiDimension[0]['School']) ?></h5></li>
</ul>
</body>
</html>