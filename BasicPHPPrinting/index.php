<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table, tr, td, th {
    border: 1px solid;
    color: black
}
</style>

<table>
    <th>Key</th>
    <th>Value</th>
    <?php
        $words = array("Mortify"=>"mortify", "Janitor"=>"janitor", "Vendetta"=>"vendetta", "Incendiary"=>"incendiary", "Recount"=>"recount");
        
        foreach ($words as $value => $key) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        };
    ?>
    
</table> 
</body>
</html>