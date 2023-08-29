<?php
/*
Plugin Name: Confirmation Menu Delete
Description: Ajoute un message de confirmation avant la suppression d'un menu.
Version: 1.0
Author: Votre Nom
Author URI: https://www.linkedin.com/in/massamba-mbaye/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

// Fonction pour ajouter le message de confirmation
function add_menu_delete_confirmation() {
    global $pagenow;
    if ($pagenow === 'nav-menus.php') {
        ?>
        <script>
            jQuery(document).ready(function($) {
                $('#delete-menu').on('click', function(e) {
                    if (!confirm('Êtes-vous sûr de vouloir supprimer ce menu ?')) {
                        e.preventDefault();
                    }
                });
            });
        </script>
        <?php
    }
}

// Action pour ajouter le message de confirmation dans l'admin
add_action('admin_footer', 'add_menu_delete_confirmation');
