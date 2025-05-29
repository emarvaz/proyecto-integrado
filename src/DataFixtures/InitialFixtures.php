<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class InitialFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $administrator = new User();

        $administrator->setUsername('administrador');
        $administrator->setEmail('administrador@example.com');
        $administrator->setName('Administrador');
        $administrator->setLastname('de la aplicación');
        $administrator->setRegisterDate(new DateTime('now'));

        $hashedPassword = $this->passwordHasher->hashPassword($administrator, 'Administrador1234.');
        $administrator->setPassword($hashedPassword);

        $administrator->setRoles(['ROLE_ADMIN']);

        $manager->persist($administrator);
        $manager->flush();
    }
}
