<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Heading = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $publicationTime = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeading(): ?string
    {
        return $this->Heading;
    }

    public function setHeading(string $Heading): self
    {
        $this->Heading = $Heading;

        return $this;
    }

    public function getPublicationTime(): ?\DateTimeImmutable
    {
        return $this->publicationTime;
    }

    public function setPublicationTime(\DateTimeImmutable $publicationTime): self
    {
        $this->publicationTime = $publicationTime;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
