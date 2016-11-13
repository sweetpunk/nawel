<?php
/* Smarty version 3.1.29, created on 2016-11-13 12:07:05
  from "C:\wamp64\www\nawel\tpl\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582857693367d5_54651981',
  'file_dependency' => 
  array (
    'f12b4548b81441456ab88ba39954c0d409e13b3d' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\header.tpl',
      1 => 1479038823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582857693367d5_54651981 ($_smarty_tpl) {
?>
<div class='banner'>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <ul class="nav navbar-nav">
        <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == 'home.php') {?> class="active" <?php }?>><a href="home.php">Accueil</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == 'mylist.php') {?> class="active" <?php }?>><a href="mylist.php">Ma liste</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
  </div>
</nav><?php }
}
