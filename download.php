<?php
if(isset($_POST['download_resume'])) {
  // Define the path to the resume
  $file = 'Resume/Adeyneous_Kpoto_Updated_Resume.docx';

  // Implement any necessary security checks here (like user authentication)

  // Serve the file as a download
  if(file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    flush(); // Flush system output buffer
    readfile($file);
    exit;
  }
}

