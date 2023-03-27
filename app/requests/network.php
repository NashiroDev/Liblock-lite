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

function getArticleByName(string $textTitle): array|bool
{
    global $db;

    $query = 'SELECT * FROM blockArticle WHERE textTitle = :textTitle';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute([
        'textTitle' => $textTitle,
    ]);

    return $sqlStatement->fetch();
}

function getAllArticlesName(): array|bool
{
    global $db;

    $query = 'SELECT textTitle FROM blockArticle';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute();

    return $sqlStatement->fetchAll();
}

function getSurvey(): array|bool 
{
    global $db;

    $query = 'SELECT question, validReply, reply1, reply2, reply3, reply4 FROM blockSurvey';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute();

    return $sqlStatement->fetchAll();
}

function getMaxSurvey(): array|bool
{
    global $db;

    $query = 'SELECT COUNT(id) FROM blockSurvey';
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute();

    return $sqlStatement->fetch();
}
