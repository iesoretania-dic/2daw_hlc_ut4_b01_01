<?php

namespace App\Controller;

use App\Entity\Autor;
use App\Form\AutorType;
use App\Repository\AutorRepository;
use Doctrine\DBAL\Driver\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutorController extends AbstractController
{
    /**
     * @Route("/autor/listar", name="autor_listar")
     */
    public function listar(AutorRepository $autorRepository): Response
    {
        $autores = $autorRepository->findAll();

        return $this->render('autor/listar.html.twig', [
            'autores' => $autores
        ]);
    }

    /**
     * @Route("/autor/nuevo", name="autor_nuevo")
     */
    public function nuevo(Request $request, AutorRepository $autorRepository): Response
    {
        $autor = $autorRepository->create();

        return $this->modificar($request, $autorRepository, $autor);
    }

    /**
     * @Route("/autor/{id}", name="autor_modificar")
     */
    public function modificar(Request $request, AutorRepository $autorRepository, Autor $autor): Response
    {
        $form = $this->createForm(AutorType::class, $autor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $autorRepository->save();
                $this->addFlash('exito', 'Cambios guardados con éxito');
                return $this->redirectToRoute('autor_listar');
            } catch (\Exception $exception) {
                $this->addFlash('error', 'Error al guardar los cambios...');
            }
        }
        return $this->render('autor/form.html.twig', [
            'autor' => $autor,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/autor/eliminar/{id}", name="autor_eliminar")
     */
    public function eliminar(Request $request, AutorRepository $autorRepository, Autor $autor): Response
    {
        if ($request->get('confirmar', false)) {
            try {
                $autorRepository->delete($autor);
                $this->addFlash('exito', 'Autor eliminado con éxito');
                return $this->redirectToRoute('autor_listar');
            } catch (Exception $e) {
                $this->addFlash('error', 'No se pudo eliminar el autor');
            }
        }
        return $this->render('autor/eliminar.html.twig', [
            'autor' => $autor
        ]);
    }
}
