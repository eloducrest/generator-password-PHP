<?php
$allChar = [
    'lowerCases' => range('a', 'z'),
    'upperCases' => range('A', 'Z'),
    'specChar' => array_merge(range('!', '/'), range(':', '@'), range('[', '`'), range('{', '~')),
    'digit' => range(0,9)
];
$optionsUser = [];
$passLength = 0;
foreach ($_POST as $userChoices) {
    if (is_numeric($userChoices)) {
        $passLength = (int)$userChoices;
    }
    if (is_string($userChoices) && !is_numeric($userChoices)) {
        $optionsUser[] = $userChoices;
    }
}


/*function getUserChoices(array $options): array
{
    $userChoices = [];
    foreach ($options as $option => $value) {
        if ($value) {
            $userChoices[] = $option;
        }
    }
    return $userChoices;
}*/

function generatePassword(int $passLength, array $options): string
{
    global $allChar;
    $password   = [];

    //$userChoices = getUserChoices($options);

    $numberOfOptions = count($options);

    foreach ($options as $choice) {
        foreach ($allChar as $arrayChar => $value) {
            if ($arrayChar === $choice) {
                while ($passLength % $numberOfOptions !== 0) {
                    $password[] = $value[rand(0, count($value) - 1)];
                    $passLength--;
                }
                $repartition = floor($passLength / $numberOfOptions);
                for ($i = 0; $i < $repartition; $i++) {
                    $password[] = $value[rand(0, count($value) - 1)];
                }
            }
        }
    }
    shuffle($password);
    return implode('', $password);
}
echo(generatePassword($passLength, $optionsUser));

