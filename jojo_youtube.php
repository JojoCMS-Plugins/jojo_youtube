<?php
/**
 *
 * Copyright 2007 Michael Cochrane <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Plugin_jojo_youtube extends JOJO_Plugin
{
    public static function youtube($content)
    {
        global $smarty;

        /* Find all [[youtube: url]] tags */
        preg_match_all('/\[\[youtube: ?([^\]]*)\]\]/', $content, $matches);

        foreach($matches[1] as $id => $url) {
            /* Get the url */
            $url = str_replace('watch?v=', 'v/', $url);
/*            if (strpos($url, '&')) {
                $url = substr($url, 0, strpos($url, '&'));
            }
*/
            $smarty->assign('youtubeurl', $url);
            $smarty->assign('youtubeid', $id);
            $smarty->assign('youtubew', Jojo::getOption('youtube_width', 425));
            $smarty->assign('youtubeh', Jojo::getOption('youtube_height', 350));

            /* Get the embed html */
            $html = $smarty->fetch('jojo_youtubeembed.tpl');
            $content = str_replace($matches[0][$id], $html, $content);
        }
        return $content;
    }

     public static function customhead()
    {
        global $issecure;
        $s = ($issecure) ? 's' : '';
        return '<script src="http'.$s.'://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript"></script>'."\n";
    }

}