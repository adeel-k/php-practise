<?php



echo "Starting the process.";
        try {

            $random = rand(0, 1);
                if($random == 1) {
                throw new Exception("Exception");
    }
}           finally {
                echo "Process complete";
}