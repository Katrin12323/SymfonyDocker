<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    /**
     * @Route("/books", name="books.list.page")
     */
    public function indexAction(Request $request)
    {
        $data = [];
        $data['base_dir'] = realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR;
        $data['books'] = $this->getDoctrine()
            ->getRepository(Book::class)
            ->findAll();

        return $this->render('book/book_list.html.twig', $data);
    }
}