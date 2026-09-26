<?php

namespace App\Command;

use App\Entity\User;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(name: 'app:create-author',description: 'Creation compte Auteur')]
class CreateAuthorCommand extends Command
{

    public function __construct(private readonly UserPasswordHasherInterface $userPasswordHasher,private  readonly EntityManagerInterface $em)
    {
        parent::__construct('app:create-administrator');
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email',InputArgument::OPTIONAL,'Email - obligatoire')
            ->addArgument('password',InputArgument::OPTIONAL,'Mot de passe obligatoire');
    }
    protected function execute(InputInterface $input,OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $io = new SymfonyStyle($input,$output);
        $email = $input->getArgument('email');
        if(!$email){
            $question = new Question('Quelle est votre adresse courriel ? ');
            $email = $helper->ask($input,$output,$question);
        }
        $plainPassword = $input->getArgument('password');
        if(!$plainPassword){
            $question = new Question('Quel est votre de passe ? ');
            $plainPassword = $helper->ask($input,$output,$question);
        }

        $user = new User();
        $user->setPassword($this->userPasswordHasher->hashPassword($user, $plainPassword))
            ->setEmail($email)
            ->setIsAgree(true)
            ->setRoles(['ROLE_AUTHOR'])
            ->setCreatedAt(new DateTimeImmutable());

        $this->em->persist($user);
        $this->em->flush();
        $io->success('le compte author a été créé !');
        return Command::SUCCESS;
    }
}
