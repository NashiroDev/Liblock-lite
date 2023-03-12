<?php
include_once('/app/conf/mysql.php');


/**
 * Function to get page info from database depending of the given id
 *
 * @param integer $id
 * @return array|boolean
 */
function getDescById(int $id): array|bool
{
    global $db;

    $query = 'SELECT * FROM blockDesc WHERE id = :id';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute([
        'id' => $id,
    ]);

    return $sqlStatement->fetch();
}

function getStatById(int $id): array|bool
{
    global $db;

    $query = 'SELECT * FROM blockStat WHERE id = :id';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute([
        'id' => $id,
    ]);

    return $sqlStatement->fetch();
}