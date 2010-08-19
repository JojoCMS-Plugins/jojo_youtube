<div class="youtube-video">
<div id="youtubevideo-{$youtubeid}"></div>
<script type="text/javascript">
/*<![CDATA[*/
{literal}$(document).ready(function () {
    /* Embed youtube player */
    swfobject.embedSWF(
{/literal} "{$youtubeurl}",
        'youtubevideo-{$youtubeid}',
        '{$youtubew}',
        '{$youtubeh}',
        '9.0.0',
        '',
        '',{literal}
        {
            allowFullScreen: 'true',
            allowscriptaccess: 'always'
        },
        {
            allowscriptaccess: 'always',
            allowfullscreen: 'true',
            width: '{$youtubew}',
            height: '{$youtubeh}'
        }
    );
});{/literal}
/*]]>*/
</script>
</div>