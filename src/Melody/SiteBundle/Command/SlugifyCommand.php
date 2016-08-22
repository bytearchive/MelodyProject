<?php

namespace Melody\SiteBundle\Command;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SlugifyCommand extends ContainerAwareCommand
{
    /** @var  $em EntityManager */
    private $em;

    protected function configure()
    {
        $this
            ->setName('app:slugify')
            ->setDescription('Gnerate all slug');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return bool
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->em = $this->getContainer()->get('doctrine')->getManager();
        $this->generateSlug();
        $this->em->flush();
        $output->writeln('Slugs Generated');

        return true;
    }

    /**
     * @return bool
     */
    public function generateSlug()
    {
        $articles = $this->em->getRepository('Melody\SiteBundle:Article')->findAll();
        $this->persistLoop($articles);
        $pages = $this->em->getRepository('Melody\SiteBundle:Page')->findAll();
        $this->persistLoop($pages);

        return true;
    }

    /**
     * @param $objects
     */
    public function persistLoop($objects)
    {
        $object = null;
        foreach ($objects as $object) {
            $object->setSlug($object->getTitle());
            $this->em->persist($object);
        }

        if ($object === null) {
            throw new Exception('Entity not found');
        }

        return $object;
    }
}
