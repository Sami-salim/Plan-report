<?php 

include('connection.php');
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
require_once ('vendor/autoload.php');

if(isset($_POST['import']))
{
	
	$allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];
	

    if (in_array($_FILES["exceldata"]["type"], $allowedFileType)) {
	$filename=$_FILES['exceldata']['name'];
	$tempname=$_FILES['exceldata']['tmp_name'];
	 $date    = make_date();
	move_uploaded_file($tempname,'uploads/'.$filename);
	
	
 $Reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
 $spreadSheet = $Reader->load('uploads/'.$filename);
 $excelSheet = $spreadSheet->getActiveSheet();
 $spreadSheetAry = $excelSheet->toArray();
 $sheetCount = count($spreadSheetAry);
 
 for($i=1;$i<$sheetCount;$i++)
 {
	 $sql="insert into yearly_pland (indicator,unit,baseline,yeariyplan,quarterone,quartertwo,quarterthree,quarterfour,rank,code,year) values ('".$spreadSheetAry[$i][0]."','".$spreadSheetAry[$i][1]."','".$spreadSheetAry[$i][2]."','".$spreadSheetAry[$i][3]."','".$spreadSheetAry[$i][4]."','".$spreadSheetAry[$i][5]."','".$spreadSheetAry[$i][6]."','".$spreadSheetAry[$i][7]."','".$spreadSheetAry[$i][8]."','".$spreadSheetAry[$i][9]."','".$date."')";
	 
	 mysqli_query($conn,$sql);
 }
	}
	
	else 
	{
		echo 'Please Upload Excel File; Check File Extenstion';
	}
}


?>
	   
						<?php function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}?>
<?php function read_date($str){
     if($str)
      return date('F j, Y, g:i:s a', strtotime($str));
     else
      return null;
  }?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<div class="row justify-content-center">
<div class="col-xl-6">
  <h2>Import Excel Data into mysql</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="email">Upload Excel:</label>
      <input type="file" class="form-control" name="exceldata">
	  
    </div>
   
    <button type="submit" name="import" class="btn btn-primary">Upload</button>
	
	<a href="samplefile.xlsx" class="float-right" download>Download Sample File</a>
  </form>

</div>
</div>
</div>


</body>
</html>
