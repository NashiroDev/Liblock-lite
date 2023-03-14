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

/**
 * Function to get all sections of the given id row in the database 
 *
 * @param integer $id
 * @return array|boolean
 */
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

function getArticleById(int $id): array|bool
{
    global $db;

    $query = 'SELECT * FROM blockArticle WHERE id = :id';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute([
        'id' => $id,
    ]);

    return $sqlStatement->fetch();
}