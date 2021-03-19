
<h1>Hospital Is Islamabad</h1>
<?php
class Hospital{
    public $admin;
    public $Doctor;
    public $Suiper;
    public $Mdstore;


    function __construct($admin, $Doctor, $Suiper){
        $this->admin = $admin;
        $this->Doctor = $Doctor;
        $this->Suiper = $Suiper;
    }
    function __destruct(){
        echo "The is Admin {$this->admin} 
        and the Doctor is {$this->Doctor} and Suiper is
        {$this->Suiper}";
    }
}

$Adnan = new Hospital("Adnan", "Rizwan", "Alex");

