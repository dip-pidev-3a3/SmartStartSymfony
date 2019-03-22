<?php
/**
 * Created by PhpStorm.
 * User: diabl
 * Date: 22/03/2019
 * Time: 13:58
 */

namespace ContractBundle\Repository;


use Doctrine\ORM\EntityRepository;


class ContractRepository extends EntityRepository
{
    public function getMyContracts($id){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT * FROM AppBundle:contract c,AppBundle:application a,AppBundle:opportunity o WHERE ((c.id_application = a.id_application) AND (a.id_opportunity = o.id_opp) AND (o.id_entreprise = :val))'
            )
            ->setParameter('val', $id)
            ->getResult();

    }



}