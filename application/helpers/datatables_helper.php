<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_buttons($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    //$html .='<a href="'.  base_url().'main_controller/edit/'.$id.'"><img src="'.  base_url().'assets/img/edit.png"/></a>';
    $html .='<a href="#usuarioModal" class="portfolio-link" data-toggle="modal" onclick="$(\'#accion\').val(\'editar\');"><img src="'.  base_url().'assets/img/edit.png"/></a>';
    $html .='<a href="'.  base_url().'main_controller/eliminar_usuario/'.$id.'"><img src="'.  base_url().'assets/img/delete.png"/></a>';
    $html.='</span>';
    
    return $html;
}