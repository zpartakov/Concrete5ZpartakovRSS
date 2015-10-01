Chesspgn, a block for Concrete5
===================================================================

French:

Concrete5ZpartakovRSS, un block concrete5 pour afficher des flux rss 
qui ne passent pas sur le bloc standard rss c5

Crédits: Concrete5ZpartakovRSS est basé sur la librairie http://www.scriptol.com/rss/rsslib.zip

# Instructions pour l'installation

1. Décompresser ce fichier sous votre répertoire blocks/.
2. Enregistrez-vous sur votre site comme administrateur.
3. Chercher dans votre interface d'administration "Type de blocs"
4. Chercher le bloc "ZpartakovRSS".
5. Activer le bloc

Vous pouvez maintenant inclure ce bloc sur votre site; une fois ajouté sur une page, 
il faudra renseigner les paramètres du flux rss (url, nombre de posts, nombre de caractères etc.)

note: si vous avez le message d'erreur:

   DOMDocument::load() [domdocument.load]: URL file-access is disabled in the server configuration

il faudra mettre dans le .htaccess de la racine de votre concrete5 la directive:
php_value allow_url_fopen On

===================================================================

English:

Concrete5ZpartakovRSS, a block to display rss feeds that won't works with standard c5 rss block displayer

Credits: Concrete5ZpartakovRSS is based on library ttp://www.scriptol.com/rss/rsslib.zip

# Installation Instructions

1. Unzip this file in your site's blocks/ directory.
2. Login to your site as an administrator.
3. Find the "Block Types" page in your dashboard.
4. Find block "Chesspgn" in the list of available blocks waiting for an installation.
5. Activate the block.

You may now include the clock anywhere on your concrete5 website

Note: 

1) in english, change rsslib.php on line 183 (comment) and 
uncomment line 184 to display an english date format

2) if you have error message:

   DOMDocument::load() [domdocument.load]: URL file-access is disabled in the server configuration

you'll have to put in the .htaccess of your concrete5's document root:
php_value allow_url_fopen On
===================================================================

Concrete5ZpartakovRSS is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

/**
*
* @package Concrete5ZpartakovRSS 1.0
* @author Zpartakov <zpartakov@akademia.ch>
* @copyright (c) 2015 Zpartakov, radeff.red
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
* @required:
* concrete5 Version 5.6.3.4
*
*/
