<?php
    function buatWeb($types = array("e-gov"), $webFramework = NULL)
    {
        $framework = is_null($webFramework)? "laravel" : $webFramework;
        return "Membuat web ".join(", ",$types)." dengan $framework.\n";
    }
    echo buatWeb() . "<br/>";
    echo buatWeb(array("company profile", "e-commerce"), "CodeIgniter");
    ?>
