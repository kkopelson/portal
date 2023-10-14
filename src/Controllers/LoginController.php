<?php
namespace App\Controllers;

use App\Models\CompanyModel;
use App\Views\LoginView;

class LoginController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new CompanyModel();
        $this->view = new LoginView();
    }

    public function showLoginForm() {
        $hwcompany = $this->model->determineCompany($_GET['Company'] ?? null);
        $mcdata = $this->model->getMCarray($link, $hwcompany); // Note: You'll need to adjust how $link is provided
        $this->view->renderLogin($mcdata, $hwcompany);
    }

}