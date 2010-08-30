<?php

namespace Bundle\ForumBundle\Entity;

use Bundle\ForumBundle\DAO\TopicRepositoryInterface;

class TopicRepository extends ObjectRepository implements TopicRepositoryInterface
{
    /**
     * @see TopicRepositoryInterface::findOneById
     */
    public function findOneById($id)
    {
        return $this->findOneBy(array('id' => $id));
    }
}