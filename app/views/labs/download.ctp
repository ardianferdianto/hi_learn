<?php
header("Content-disposition: attachment; filename=".$ebook['Lab']['pdffile']."");
header("Content-type: application/pdf");
readfile($ebook['Lab']['pdffile']);
?>