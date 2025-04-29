<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use Doctrine\ORM\Mapping\Entity;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nom'),
            ImageField::new('image')->setUploadDir('uploads/produits/'),
            TextEditorField::new('description'),
            AssociationField::new('sousCategorie')
                // ->setFormTypeOption('choice_label', 'nom')
                // ->setFormTypeOption('class', 'App\Entity\SousCategorie')
                ->autocomplete(),
        ];
    }
    
}
