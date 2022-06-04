<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
    public function search(){

        $viewPath = VIEWS_PATH . 'pages/search.php';
        require_once $viewPath;
        $searchView = new search($this->getModel(), $this);
        $searchView->output();

    }
    public function fetch(){

        $viewPath = VIEWS_PATH . 'pages/fetch.php';
        require_once $viewPath;
        $fetchView = new fetch($this->getModel(), $this);
        $fetchView->output();

    }
    public function admin(){

        $viewPath = VIEWS_PATH . 'pages/admin.php';
        require_once $viewPath;
        $adminView = new admin($this->getModel(), $this);
        $adminView->output();

    }
    public function appointments()
    {
        $viewPath = VIEWS_PATH . 'pages/appointments.php';
        require_once $viewPath;
        $appointmentsView = new appointments($this->getModel(), $this);
        $appointmentsView ->output();
    }
    public function admin_view_admin(){

        $viewPath = VIEWS_PATH . 'pages/admin_view_admin.php';
        require_once $viewPath;
        $admin_view_adminView = new admin_view_admin($this->getModel(), $this);
        $admin_view_adminView->output();

    }
    public function admin_delete_admin(){

        $viewPath = VIEWS_PATH . 'pages/admin_delete_admin.php';
        require_once $viewPath;
        $admin_delete_adminView = new admin_delete_admin($this->getModel(), $this);
        $admin_delete_adminView->output();

    }
    public function admin_delete_doctor(){

        $viewPath = VIEWS_PATH . 'pages/admin_delete_doctor.php';
        require_once $viewPath;
        $admin_delete_doctorView = new admin_delete_doctor($this->getModel(), $this);
        $admin_delete_doctorView->output();

    }
    public function contact(){

        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new contact($this->getModel(), $this);
        $contactView->output();

    }
    public function admin_view_messages(){

        $viewPath = VIEWS_PATH . 'pages/admin_view_messages.php';
        require_once $viewPath;
        $admin_view_messagesView = new admin_view_messages($this->getModel(), $this);
        $admin_view_messagesView->output();

    }

    public function admin_view_doctor(){

        $viewPath = VIEWS_PATH . 'pages/admin_view_doctor.php';
        require_once $viewPath;
        $admin_view_doctorView = new admin_view_doctor($this->getModel(), $this);
        $admin_view_doctorView->output();

    }
    
    public function Treatments(){

        $viewPath = VIEWS_PATH . 'pages/Treatments.php';
        require_once $viewPath;
        $TreatmentsView = new Treatments($this->getModel(), $this);
        $TreatmentsView->output();
    }
    public function delete_user(){

        $viewPath = VIEWS_PATH . 'pages/delete_user.php';
        require_once $viewPath;
        $delete_userView = new delete_user($this->getModel(), $this);
        $delete_userView->output();

    }




}
