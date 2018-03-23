<?php

namespace WorkshopBundle\Repository;

/**
 * WorkshopRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WorkshopRepository extends \Doctrine\ORM\EntityRepository
{
    public function RechercheAv($valeur)
    {
        $query=$this->getEntityManager()->createQuery("SELECT w FROM WorkshopBundle:Workshop w WHERE w.nomWorkshop like :no")->setParameter('no','%'.$valeur.'%');
        return $query->getResult();
    }

  public function getByDate(\Datetime $date)
    {
        $from = new \DateTime($date->format("Y-m-d")." 00:00:00");
        $to   = new \DateTime($date->format("Y-m-d")." 23:59:59");

        $qb = $this->createQueryBuilder("d");
        $qb
            ->andWhere('d.dateDebut BETWEEN :from AND :to')
            ->andWhere('d.dateFin BETWEEN :from AND :to')
            ->setParameter('from', $from )
            ->setParameter('to', $to);

        $result = $qb->getQuery()->getResult();

        return $result;
    }
   /* public function getDays(\DateTime $DateDebut, \DateTime $DateFin)
    {
        $qb = $this->getEntityManager()->createQueryBuilder()
            ->select('c')
            ->from('WorkshopBundle:Workshop', 'd')
            ->where('d.date BETWEEN :DateDebut AND :DateFin')
            ->setParameter('DateDebut', $DateDebut)
            ->setParameter('DateFin', $DateFin)
        ;

        $result = $qb->getQuery()->getResult();

        return $result;
    }
   public function calendarAction()
    {
        $currentMonthDateTime = new \DateTime();
        $DateDebut = $currentMonthDateTime->modify('first day of this month');
        $currentMonthDateTime = new \DateTime();
        $DateFin = $currentMonthDateTime->modify('last day of this month');

        $days = $this->getDoctrine()
            ->getRepository('ProjectBundle:Calendar')
            ->getDays($DateDebut,  $DateFin);

        return ['days' => $days];
    }*/
   public  function  FiltreDQL(){
       $query=$this->getEntityManager()->createQuery("SELECT w FROM WorkshopBundle:Workshop w
ORDER by w.dateDebut DESC ");

       return $query->getResult();
   }
   /* public  function  FiltrePrix(){

        $query=$this->getEntityManager()->createQuery("SELECT * FROM WorkshopBundle:Workshop w
ORDER by w.prix ASC ");

        return $query->getResult();
    }*/
}
