<?php

namespace App\Controller\Admin;

use App\Entity\Vivienda;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;

use Symfony\Component\Form\Extension\Core\Type\FileType;

class ViviendaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vivienda::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            NumberField::new('antiguedad')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            NumberField::new('banyos')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            TextField::new('carpinteria_exterior'),
            TextField::new('carpinteria_interior'),
            TextField::new('conservacion'),
            NumberField::new('consumo_energia')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            TextField::new('descripcion'),
            NumberField::new('emisiones_co2')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),

            BooleanField::new('garaje'),
            NumberField::new('habitaciones')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            TextField::new('localidad'),
            TextField::new('nombre'),
            NumberField::new('num_plantas')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            TextField::new('orientacion'),
            NumberField::new('planta')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            NumberField::new('precio')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            TextField::new('referencia'),
            NumberField::new('superficie_construida')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            NumberField::new('superficie_parcela')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            NumberField::new('superficie_util')->setFormTypeOptions([
                'html5' => true,
                'attr' => [
                    'inputmode' => 'numeric',
                    'pattern' => '[0-9]*'
                ]
            ]),
            TextField::new('tipo_cocina'),
            TextField::new('tipo_propiedad'),
            TextField::new('tipo_exterior'),
            TextField::new('tipo_operacion'),
            TextField::new('tipo_suelo'),
            TextField::new('vistas'),
            TextField::new('zona'),
            CollectionField::new('imagenes')->setLabel('Imagenes')
                ->setEntryType(FileType::class)
                ->setTemplatePath('easy_admin/field/multiple_images.html.twig')
        ];
    } 
}
