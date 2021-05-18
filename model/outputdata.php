    <?php

class OutputData {

    function __construct() {
    }

    function createForm() {
        //todo
    }

    function createSelectBox() {
        //todo
        
    }

    function createTable($rows) {
        $html = '<table border="1">';
            $html .= '<tr>';
            	foreach($rows[0] as $key => $value){
            		$html .= "<th>" . $key . "</th>";
            	}
            $html .= "</tr>";
            	foreach($rows as $row){
            		$html .= '<tr>';
            			foreach($row as $columns) {
            				$html .= "<td>" . $columns . "</td>";
            			}
                        $html .= "<td>" . '<button><a href="controller/productsController.php?todo=delete&id=' .$row['service_id'] . '">' . 'Delete' . '</button' . "</td>";
                        $html .= "<td>" . '<button><a id="button-td" href="view/update.php?service_id=' . $row['service_id'] . '&service_name='. $row['service_name'] .'&service_genre='. $row['service_genre'] .'&service_status='. $row['service_status'] .'&service_details='. $row['service_details'] . '">' . 'Update' . '</a></button>' . "</td>";
            		$html .= '</tr>';
            	}
        $html .= '</table>';

        return $html;
    }

    function createTable2($rows) {
        $html = '<table border="1">';
            $html .= '<tr>';
                foreach($rows[0] as $key => $value){
                    $html .= "<th>" . $key . "</th>";
                }
            $html .= "</tr>";
                foreach($rows as $row){
                    $html .= '<tr>';
                        foreach($row as $columns) {
                            $html .= "<td>" . $columns . "</td>";
                        }
                        $html .= "<td>" . '<button><a href="controller/productsController.php?todo=delete&id=' .$row['id'] . '">' . 'Delete' . '</button' . "</td>";
                        $html .= "<td>" . '<button><a href="controller/productsController.php?todo=updateform&id=' .$row['id'] . '">' . 'Update' . '</a></button' . "</td>";
                    $html .= '</tr>';
                }
        $html .= '</table>';

        return $html;
    }


    function __destruct() {
        //todo
    }
}

?>

<html>
            <div id='content'>
            </div>
</html>