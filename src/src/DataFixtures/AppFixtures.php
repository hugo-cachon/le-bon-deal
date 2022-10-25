<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Tag;
use App\Factory\CommentFactory;
use App\Factory\OfferFactory;
use App\Factory\TagFactory;
use App\Factory\UsersFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    private array $Tag = ["Voiture", "Beauté", "Jouet", "Jeux", "Electronique"];

    public function load(ObjectManager $manager): void
    {

        // $product = new Product();
        // $manager->persist($product);
        UsersFactory::createMany(10);
        //TagFactory::createMany(2);
        CommentFactory::createMany(10);
        OfferFactory::createMany(4,[
           'tag' => TagFactory::createMany(5, function() {
               $tag = $this->Tag[array_key_first($this->Tag)];
               unset($this->Tag[array_key_first($this->Tag)]);
               return ['name' => $tag];
           })
        ]);


        
    }
}
