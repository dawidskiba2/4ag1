<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ocena=rand(1,6);
    echo $ocena.'<br>';
    switch ($ocena)
    {
    case 1:
        echo "niedostateczny";
    break;
    case 2:
        echo "dopuszczjący";
    break;
    case 3:
        echo "dosateczny";
    break;
    case 4:
        echo "dobry";
    break;
    case 5:
        echo "bardzo dobry";
    break;
    case 6:
        echo "celujący";
    break;
    default:
    echo "Podano błędną wartość";
}
?>

</body>
</html>