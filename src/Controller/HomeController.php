<?php

namespace App\Controller;

use App\Repository\DepartmentRepository;
use App\Repository\EmployeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EmployeeRepository $employeeRepository, DepartmentRepository $departmentRepository): Response
    {
        $totalEmployees = count($employeeRepository->findAll());
        $totalDepartments = count($departmentRepository->findAll());
        $recentEmployees = $employeeRepository->findBy([], ['id' => 'DESC'], 5);

        return $this->render('home/index.html.twig', [
            'total_employees' => $totalEmployees,
            'total_departments' => $totalDepartments,
            'recent_employees' => $recentEmployees,
        ]);
    }
}