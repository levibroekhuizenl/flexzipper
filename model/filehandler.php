<?php

class FileHandler {


    // propperties
    public $fileName;

    //construct
    function __construct($fileName="") {
        $this->fileName = $fileName;
    }

    /**
    * Create file
    *  @param string $fileName
    *  @return file pointer or false
    */

    //methods
    function createDoc(){
        $handle = fopen($this->fileName, "x");
        fclose($handle);
        return $handle;
    }

    /**
    * Read file
    *  @param string $fileName
    *  @return read string or false on failure.
    */

    function readDoc(){
        $handle = fopen($this->fileName, "r+");
        $readFile = file_get_contents($this->fileName);
        return $readFile;
    }

    /**
    * Delete file
    *  @param string $fileName
    *  @return true/false
    */
    function deleteDoc(){
        $deleteMessage = unlink($this->fileName);
        return $deleteMessage;
    }

    /**
    * Update file
    *  @param string $fileName
    *  @return number of bytes written, or false on error
    */
    function updateDoc(){
        $afile = new FileHandler($_REQUEST['filename']);
        $afile->readDoc();
        $handle = fopen($this->fileName, "w");
        $updateFile = fwrite($handle, $_REQUEST['content']);
        fclose($handle);
        return $updateFile;
    }

    //destruct
        //close in destruct?
        //filename?

        function __destruct() {
            echo $this->fileName;
         }
}

// $afile = new FileHandler($_REQUEST['filename']);
// var_dump($afile->createDoc());
?>
