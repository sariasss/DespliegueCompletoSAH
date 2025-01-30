<?php
namespace App\Controller;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
class SAH_Controller extends AbstractController
{
 private Connection $connection;
 public function __construct(Connection $connection)
 {
 $this->connection = $connection;
 }
 #[Route('/api/db', name: 'get_db')]
 public function index(): JsonResponse
 {
 // Consulta para recuperar el primer mensaje de la tabla "messages"
 $sql = 'SELECT content FROM secretosSAH LIMIT 1';
 $result = $this->connection->fetchOne($sql);
 // Si no hay mensaje en la BD, devolver un mensaje de error
 if (!$result) {
 return $this->json(['secretosSAH' => 'No messages found in the database!']);
 }
 else{
$result = 'Backend Operativo, respuesta de la BD: ' . $result;
return $this->json(['secretosSAH' => $result]);
}
 }
}
