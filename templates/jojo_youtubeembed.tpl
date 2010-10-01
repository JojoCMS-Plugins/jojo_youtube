<div class="youtube-video">
<div id="youtubevideo-{$youtubeid}"></div>
<script type="text/javascript">
/*<![CDATA[*/
$(document).ready(function () {ldelim}
    /* Embed youtube player */
    swfobject.embedSWF(
 "{$youtubeurl}",
        'youtubevideo-{$youtubeid}',
        '{$youtubew}',
        '{$youtubeh}',
        '9.0.0',
        '',
        '',
        {ldelim}
            allowFullScreen: 'true',
            allowscriptaccess: 'always',
            wmode: 'transparent'
        {rdelim},
        {ldelim}
            allowscriptaccess: 'always',
            wmode: 'transparent',
            allowfullscreen: 'true',
            width: '{$youtubew}',
            height: '{$youtubeh}'
        {rdelim}
    );
{rdelim});
/*]]>*/
</script>
</div>