<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: "TablaSAH")]
class TablaSAH
{
 #[ORM\Id]
 #[ORM\GeneratedValue]
 #[ORM\Column(type: "integer")]
 private int $id;
 #[ORM\Column(type: "string", length: 255)]
 private string $fraseSAH;
 public function getId(): int
 {
 return $this->id;
 }
 public function getFraseSAH(): string
 {
 return $this->fraseSAH;
 }
 public function setContent(string $fraseSAH): self
 {
 $this->fraseSAH = $fraseSAH;
 return $this;
 }
}