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


/* add swf object embed javascript to head */
Jojo::addHook('customhead', 'customhead', 'jojo_youtube');


/* add an icon onto the editors for inserting Youtube videos */
$vars = array('url'=>array('name'=>'url','description'=>'Youtube video URL'));
$youtube = array(
                'name'=>'Youtube Video',
                'format'=>'[[youtube: [url]]]',
                'description'=>'',
                'vars'=>$vars,
                'icon'=>'images/youtube.gif'
                );
Jojo::addContentVar($youtube);

$_options[] = array(
    'id'          => 'youtube_filter',
    'category'    => 'YouTube',
    'label'       => 'Filter for YouTube videos in',
    'description' => 'The plugin can check for the filter text in templates or body content, or run twice to check both. (force refresh to update the api.txt after changing this option)',
    'type'        => 'radio',
    'default'     => 'both',
    'options'     => 'content,template,both',
    'plugin'      => 'jojo_youtube'
);

$_options[] = array(
    'id'          => 'youtube_width',
    'category'    => 'YouTube',
    'label'       => 'video Width',
    'description' => 'Pixel width for the video',
    'type'        => 'text',
    'options'     => '',
    'default'     => '425',
    'plugin'      => 'jojo_youtube'
);

$_options[] = array(
    'id'          => 'youtube_height',
    'category'    => 'YouTube',
    'label'       => 'video Height',
    'description' => 'Pixel height for the video',
    'type'        => 'text',
    'options'     => '',
    'default'     => '350',
    'plugin'      => 'jojo_youtube'
);
/* Video Embed filter */

$youtube_filter = Jojo::getOption('youtube_filter');
if (!$youtube_filter || $youtube_filter=='content' || $youtube_filter=='both') Jojo::addFilter('content', 'youtube', 'jojo_youtube');
if (!$youtube_filter || $youtube_filter=='template' || $youtube_filter=='both') Jojo::addFilter('output', 'youtube', 'jojo_youtube');
