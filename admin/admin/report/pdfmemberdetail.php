<?php 
   include("../../connection.php");
    $obj=new connection();
    $obj->connect();

    require_once('../tcpdf/tcpdf.php');
       class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        // $image_file = K_PATH_IMAGES.'tcpdf_logo.jpg';
        // $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, 'Jain Census', 1, false, 'C', 0, '', 0, false, 'T', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
    ob_start();
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }

    $pdf->SetTitle('Report');
$pdf->SetSubject('');
$pdf->SetKeywords('');
 
 $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0,64,255), array(0,64,100));
//$pdf->SetHeaderData('img/logo.png', '150', '','');

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 4, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER + 15);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setFontSubsetting(true);
$pdf->SetFont('helvetica', '', 9);
    $pdf->AddPage();
     $content = '';  
          $content .= ' <h2 align="center">Member List Of Jain Census</h2>
          <table border="1" cellspacing="0" align="center" cellpadding="5" width="100%">  
               <tr>  
                   <th>No</th>
                   <th>RegisterNo</th>
                   <th>Name</th>
                   <th>MobileNO</th>
                   <th>Area</th>
                   <th>Country</th>
                   <th>State</th>
                   <th>city</th>
                </tr>';
      
    $obj->sql="select * from register_members inner join country on country.country_id=register_members.country_id inner join state on state.state_id=register_members.state_id";
    //echo "$obj->sql";die();
    $obj->select($obj->sql);
    $i=1;
    while($row=mysqli_fetch_assoc($obj->res))
    {
        $content .=  "<tr>
                        <td>".$i++."</td>
                        <td>".sprintf("%08d",$row['reg_id'])."</td>
                        <td>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</td>
                        <td>".$row['mobilecode']." ".$row['mobilenumber']."</td>
                        <td>".$row['area']."</td>
                        <td>".$row['country_name']."</td>
                        <td>".$row['state_name']."</td>
                        <td>".$row['city_name']."</td>
                        
                    </tr>";
    }
        
            
    //        $content .= fetch_data();  
          $content .= '</table>';  
    $pdf->writeHTML($content, true, 0, true, 0);
    $pdf->lastPage();
    $pdf->Output('userreport.pdf', 'I');
?>