<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $hasher)
    {}

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $user = new User();
        $user->setRoles(['ROLE_ADMIN'])->setCreatedAt(new DateTimeImmutable())->setEmail('toto@gmx.fr')->setIsAgree(true)->setStatus(User::INSCRIT);
        $user->setPassword($this->hasher->hashPassword($user,'ArethiA75!'));
        $manager->persist($user);

        $user = new User();
        $user->setRoles(['ROLE_AUTHOR'])->setCreatedAt(new DateTimeImmutable())->setEmail($faker->email())->setIsAgree(true)->setStatus(User::INSCRIT);
        $user->setPassword($this->hasher->hashPassword($user,'ArethiA75!'));
        $manager->persist($user);

        $user = new User();
        $user->setRoles(['ROLE_USER'])->setCreatedAt(new DateTimeImmutable())->setEmail($faker->email())->setIsAgree(true)->setStatus(User::INSCRIT);
        $user->setPassword($this->hasher->hashPassword($user,'ArethiA75!'));
        $manager->persist($user);


        $manager->flush();
    }
}
