<?php

/**
* 	@file
*	@brief La classe Inc permet d'inclure du contenu dans une variable appelée dans une fichier.
*   @author   Pierre BONNAMY <p.bonnamy@intech-so.fr>.
*/
class Inc
{
    /**
    *  @brief Fonction pour inclure un fichier css.
    *
    *  @param  string  $filename   Chemin vers le fichier.
    *  @return string Le html complet avec le lien vers le fichier css.
    */
    public static function css($filename) {
        return "<link rel='stylesheet' href='".$filename."'/>";
    }

    /**
    *  @brief  Fonction pour inclure un fichier JavaScript.
    *
    *  @param  string  $filename   Chemin vers le fichier.
    *  @return string Le html complet avec le lien vers le fichier JavaScript.
    */
    public static function js($filename) {
        return "<script type='text/javascript' src='".$filename."'></script>";
    }

    /**
    *  @brief Fonction pour inclure un fichier html/php.
    *
    *  @param  string  $filename   Chemin ver le fichier.
    *  @param  array   $p          Optionnel Tableau des paramètres à remplacer dans le fichier.
    *  @return string  Le fichier avec les paramètres remplacés ou null.
    */
    public static function html($filename, $p = []) {
        if (is_file($filename)) {
            ob_start();
            extract($p);
            include $filename;
            return ob_get_clean();
        }
        return null;
    }
}


?>