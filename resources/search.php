<?php
use App\NhaXe;

$xe=NhaXe::all();
$loTrinh=$xe->NhaXe;
echo json_encode($loTrinh);