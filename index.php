<?php
if (isset($_GET['detail']) && $_GET['detail'] != '') {
  $page_title = 'Detail Portofolio Page';
  $page_description = 'This is the Detail Portofolio page.';
  $page_keywords = 'Detail Portofolio, page, template';
  $body_class = 'detail-portofolio-page';
  $content = 'pages/portofolio_detail.php';
}else{
  $page_title = 'TechNova';
  $page_description = 'This is the dashboard page.';
  $page_keywords = 'dashboard, page, template';
  $body_class = 'dashboard-page-page';
  $content = 'pages/dashboard.php';
}
include 'template/master.php';

?>