<?php
namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DashboardController extends AbstractDashboardController
{
    

    // ... you'll also need to load some CSS/JavaScript assets to render
    // the charts; this is explained later in the chapter about Design
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin')]
    public function admin(): Response
    {
        return $this->render('admin/index.html.twig');
    }
}