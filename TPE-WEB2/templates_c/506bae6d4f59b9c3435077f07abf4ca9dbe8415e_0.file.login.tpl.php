<?php
/* Smarty version 4.3.4, created on 2023-10-16 21:54:18
  from 'C:\xampp\htdocs\Projects\trabajotp1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d94ea413369_18440876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506bae6d4f59b9c3435077f07abf4ca9dbe8415e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\trabajotp1\\templates\\login.tpl',
      1 => 1697484278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d94ea413369_18440876 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor-login">
    <div class="formulario-login">
        <form action="verify" method="post">
        
            <input type="text" name="user" id="" class="form-control" placeholder="Usuario" />       
      
       
            <input type="password" placeholder="Contraseña" name="password" id="" class="form-control" />       
        
            <button type="submit" class="">Sign in</button> 
            <h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>


        </form>
    </div>
</div><?php }
}
