<?php

namespace HEI\ContactBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * ContactRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContactRepository extends EntityRepository
{
    /**
     * Search a contact by his name, surname, town, CP and commercial
     *
     * @param $contact
     * @return array
     */
    public function findContacts($contact)
    {
        $qb = $this->createQueryBuilder('a');

        if ($contact->getNom() != null) {
            $qb->andWhere('a.nom = :nom')->setParameter('nom', $contact->getNom());
        }
        if ($contact->getCodePostal() != null) {
            $qb->andWhere('a.codePostal = :codePostal')->setParameter('codePostal', $contact->getCodePostal());
        }
        if ($contact->getVille() != null) {
            $qb->andWhere('a.ville = :ville')->setParameter('ville', $contact->getVille());
        }
        if ($contact->getAdresse() != null) {
            $qb->andWhere('a.adresse = :adresse')->setParameter('adresse', $contact->getAdresse());
        }
        if ($contact->getCommercial() != null) {
            $qb->andWhere('a.commercial = :commercial')->setParameter('commercial', $contact->getCommercial());
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Get a contacts with all the files attached
     *
     * @param $id
     * @return array
     */
    public function getContactWithFiles($id)
    {
        $qb = $this
            ->createQueryBuilder('c')
            ->leftJoin('c.files', 'file')
            ->addSelect('file')
            ->andWhere('c.id = :id')
            ->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }
}
