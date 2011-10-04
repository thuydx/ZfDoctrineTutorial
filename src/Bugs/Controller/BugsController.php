<?php

namespace Bugs\Controller;

use Zend\Mvc\Controller\ActionController,
    Bugs\Entity\Bug;

class BugsController extends ActionController
{
    protected $entityManager;

    public function indexAction()
    {
        $bug = new Bug();
        //$dql = "SELECT b, e, r FROM Bug b JOIN b.engineer e JOIN b.reporter r ORDER BY b.created DESC";
        //$query = $this->getEntityManager()->createQuery($dql);
        //$query->setMaxResults(30);
        //$bugs = $query->getResult();
        return array('bug' => $bug);
    }

    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }
}
