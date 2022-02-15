<?php

namespace App\Form;

use App\Entity\Autor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class AutorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('apellidos', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 3, 'minMessage' => 'Al menos 3 caracteres'])
                ]
            ])
            ->add('fechaNacimiento', DateType::class, [
                'widget' => 'single_text',
                'required' => false
            ])
            /*->add('esNacional', CheckboxType::class, [
                'required' => false
            ]);*/
            ->add('esNacional', ChoiceType::class, [
                'choices' => [
                    'Sí, es de aquí' => true,
                    'No, es de fuera' => false
                ],
                'expanded' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Autor::class
        ]);
    }
}